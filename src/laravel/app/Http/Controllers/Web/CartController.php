<?php

namespace App\Http\Controllers\Web;

use App\Actions\Home\Cart\AddToCart;
use App\Actions\Home\Cart\QuantityCartChange;
use App\Actions\Home\Cart\RemoveCart;
use App\helper\Cart;
use App\Http\Controllers\Web\User\AuthUserController;
use App\Http\Requests\Home\CartRequest;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CartController extends AuthUserController
{

    public function __construct()
    {

    }

    public function cart()
    {
        return view('Home.Cart1');
    }

    public function cart_view()
    {
        return view('Home.quantity_cart') ;
    }






    //add to cart
    public function addToCart( Product $product , int $amount = 1 , string $color = 'default' , string $gauranay = 'w1'): RedirectResponse
    {

        return  $this->handle(function ()use( $product  , $amount  ){

            AddToCart::run( $product  , ['amount'=>$amount] ) ;

            return back();

        }) ;

    }

    public function deleteFromCart( Product $product  , Request $request): RedirectResponse
    {
        RemoveCart::run( $product , $request ) ;

        return back();
    }

    public function all_cart()
    {

        return $this->handle(function (){
            return Cart::all() ;

        }) ;

    }



}
