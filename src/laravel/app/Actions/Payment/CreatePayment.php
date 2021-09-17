<?php

namespace App\Actions\Payment;

use App\helper\Cart;
use App\Models\Order_Product;
use Facades\App\helper\Swal;
use App\Models\Order;
use App\Models\Payment;
use App\Payment\PaymentInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class CreatePayment
{
    use AsAction;

    public function handle(PaymentInterface $payment , Order $order   ):string|RedirectResponse|null
    {
        //return alert swal for success and pending request
        if( $order->payment_state == Order::PAYMENT_STATE_PENDING || $order->payment_state == Order::PAYMENT_STATE_SUCCESS ){
            Swal::error()->text('Your order has been successfully completed! Please dont try again.')->title('payed')->initial();
            return null ;
        }


        //check and  low-off stock =>attention : if this function has error or not success to pay DB:rollback to back stock on product and if this function is success DB:commit and low-off stock
        try {
            DB::beginTransaction();
            $order->products()->each( function( $value , $key )  {

                $value->update(['stock' => ($value->stock - json_decode($value->pivot->options)->amount)]) ;


                if( $value->stock < 0 ){

                    Swal::error()->text('There arent stock. Plz create new order and check products stock.</br> Your order delete automatic.')->initial() ;

                    throw new \Exception('there arent stock') ;

                }

            }) ;
        }catch (\Exception $exception){
            DB::rollBack();
            $order->delete() ;
            return back()  ;
        }

        $provider = $payment->getProvider() ;

        $state = Payment::UNPAID ;

        //success or failed payed by provider => array return
        $status = $payment->redirect($order) ;


        //error
        if( !isset($status) || is_string( $status ) ) {

            $state = Payment::FAILED;
            $order->update(['payment_state' => Order::PAYMENT_STATE_FAILED]);
            Swal::error()->text($status)->initial();
            DB::rollBack() ;

        }elseif( ! $status['state'] ){
            $state = Payment::FAILED;
            $order->update(['payment_state' => Order::PAYMENT_STATE_FAILED]) ;
            Swal::error()->text($status['message'])->initial();
            DB::rollBack();

            //success
        } else{
            $state = Payment::PENDING ;

            //after paying cart be removed
            Cart::forget_cart() ;

            $order->update(['payment_state' => Order::PAYMENT_STATE_PENDING ]) ;
            Swal::success() -> text( $status['message'] ) -> initial() ;
            DB::commit();
        }

        //sync info payment
       $order->user_orders()->syncWithoutDetaching([
           auth()->user()->id => ['provider'=> $provider , 'state' => $state , 'transaction_payload' => json_encode( $status ) ]

       ]);

        //store logs payment
       StorePaymentActivity::run(  auth()->user()->id , $provider  ,$state , $status ) ;

       return $state ;

    }

}
