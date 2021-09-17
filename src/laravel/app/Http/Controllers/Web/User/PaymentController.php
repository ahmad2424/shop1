<?php

namespace App\Http\Controllers\Web\User;

use App\Actions\Payment\CheckVerifyPayment;
use App\Actions\Payment\CreatePayment;
use App\Http\Requests\Payment\ProviderRequest;
use App\Http\Requests\Payment\VerifyPaymentRequest;
use App\Models\Order;
use App\Models\Payment;
use App\Payment\PaymentInterface;
use Illuminate\Http\RedirectResponse;
use Facades\App\helper\Swal;

class PaymentController extends AuthUserController
{

    public function view_payment(): RedirectResponse|string
    {
        return $this->handle(function (){

            $title = 'Provider list' ;

            $order = auth()->user()->orders()->latest()->first() ;


            return view( 'User.Payment.payment_list' , ['title'=>$title ,'order'=>$order] ) ;

        }) ;
    }









    //view verify
    public function view_verify(): RedirectResponse|string
    {
        return $this->handle(function (){

            $title = 'Provider list' ;

            $orders = auth()->user()->payments_and_order()->orderBy('order_id' , 'desc')->get();

            return view( 'User.Payment.verify_view' , ['title'=>$title ,'orders'=>$orders] ) ;

        }) ;
    }










    public function create(ProviderRequest $request ,   Order $order  ) : RedirectResponse|string|PaymentInterface|array|null
    {

        return $this->handle(function ()use( $request , $order ){

            $provider = $request->validated() ;

            if ( $order )
               $state =  CreatePayment::run( $provider['providerClass']  , $order ) ;

            else {
                Swal::error()->text('Does not exist order! Plz create new order.')->initial;
                return back();
            }

            //for success or pending already order
            if( $state == null ) return back() ;

            //if already order payed and waiting to confirm pending
            if( $state == Payment::PENDING ){
                return redirect() ->route('view.order' ) ;
            }

            return back() ;

        } );
    }


    public function verify(VerifyPaymentRequest $request , Order $order , $provider ) : RedirectResponse|string|PaymentInterface|array
    {

        return $this->handle( function() use( $request , $order  ){

            if($order)
                CheckVerifyPayment::run(   $request->providerClass , $order  ) ;

            return back() ;
      });

    }














//admin
 /*   public function change_state_payment( ChangeValueRequest $request , Payment $payment ) : bool
    {
        return $this->handle(function ()use( $request , $payment ){

            $provider = $request->validated() ;

            if ( $order )
                ChangeValuePayment::run() ;

        } );
    }*/
}
