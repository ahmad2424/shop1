<?php

namespace App\Actions\Payment;

use App\Models\Order;
use App\Models\Payment;
use App\Payment\PaymentInterface;
use Facades\App\helper\Swal;
use Lorisleiva\Actions\Concerns\AsAction;

class CheckVerifyPayment
{
    use AsAction;

    public function handle( PaymentInterface $payment , Order $order  )
    {
    //Todo correct $data array with merchantId , amount , .. .=
        $data = [ 'Amount' => $order->price ] ;

        $response = $payment->callback( $data ) ;

        //success
        if( $response['state'] ){
            $state = Payment::PAYED ;
            $order->update(['payment_state' => Order::PAYMENT_STATE_SUCCESS ]) ;
            Swal::success() -> text( $response['message'] ) -> initial() ;

        //error
        }else{
            $state = Payment::FAILED;
            $order->update(['payment_state' => Order::PAYMENT_STATE_FAILED]) ;
            Swal::error()->title( $response['message'] )->text( $response['reason'])->initial();

        }

        //sync info payment
        $order->user_orders()->syncWithoutDetaching([
            auth()->user()->id => ['provider'=> $payment->getProvider() , 'state' => $state , 'transaction_payload' => json_encode( $response ) ]

        ]);

        //log
        StorePaymentActivity::run( auth()->user()->id , $payment->getProvider() , $order->payment_state , $response) ;




    }
}
