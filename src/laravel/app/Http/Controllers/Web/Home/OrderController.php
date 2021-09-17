<?php

namespace App\Http\Controllers\Web\Home;

use App\Actions\Log\StoreOrderLog as StoreOrderLogAction;
use App\Actions\Order\AddOrder;
use App\helper\Cart;
use App\Models\Log\StoreOrderLog;
use Facades\App\helper\Swal;
use App\Http\Controllers\Web\User\AuthUserController;
use App\Http\Requests\Order\OrderRequest;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Payment;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class OrderController extends AuthUserController
{

    public function view_order() :string
    {
        return $this->handle(function (){

            $orders = auth()->user()->orders()->latest()->get() ;

            $title = 'Orders' ;

            return view('Home.orders.orders' , ['orders' => $orders , 'title'=>$title]) ;
        }) ;

    }

    public function view_carts():string
    {

        return $this->handle(function (){

            $carts = Cart::all_with_product();

            $title = 'Carts' ;

            return view('Home.orders.carts' , ['carts' => $carts , 'title'=>$title]) ;
        }) ;

    }
    public function view_order_detail(Order $order  ):string|RedirectResponse
    {

       return $this->handle(function () use($order) {

            $products = $order->order_products()->get()->toArray() ;

            if( empty( $products ) ){
                StoreOrderLogAction::run( $order  ) ;
                Swal::error()->text('In yours order havent any product. We delete your order! plz open new order.')->initial();

                $order->delete() ;

                return redirect()->route('products.view');


            }

            $products = $order->order_products()->with(['product'])->get() ;


            $title = 'Detail order id ' . $order->id;


            return view('Home.orders.order_detail' , ['products'=>$products , 'title'=>$title]) ;

        }) ;

    }






    public function add_order(OrderRequest $request)
    {

        return $this->handle(function () use($request){


            $data = $request->validated() ;

            //add order by session cart
            //add new price to product
            $response = AddOrder::run($data) ;

            //for login user
            if($response instanceof RedirectResponse)
                return $response ;

            return redirect()->route('view.order') ;

        }) ;

    }


    public function delete_order( Order $order ) :RedirectResponse|\Response|\Redirect
    {

        return $this->handle(function () use ($order){

            if($order->payment_state==Payment::PAYED || $order->payment_state == Payment::PENDING){
                Swal::error()->text('This order has been payed. You dont remove it.')->initial() ;
                return back() ;
            }

            $order ->delete() ;

            return back() ;

        }) ;

    }

    public function delete_order_detail(Order_Product $order_product):RedirectResponse|Redirector
    {
        return  $this->handle(function () use($order_product){


            if(  $order_product->order()->first()->payment_state==Payment::PAYED || $order_product->order()->first()->payment_state == Payment::PENDING ){
                Swal::error()->text('This order has been payed. You dont remove it.')->initial() ;
                return back() ;
            }

             $order_product->delete() ;


             return back() ;

        }) ;

    }


}
