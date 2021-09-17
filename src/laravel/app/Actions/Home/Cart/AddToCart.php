<?php

namespace App\Actions\Home\Cart;

use App\helper\Cart;
use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class AddToCart
{
    use AsAction;

    //amount >0 => and amount<product->stock add
    //amount <=0 => product => remove

    //save to cart in session
    public function handle(Product $product , $option = ['amount' => 1 ] ):void
    {
        $cart = Cart::update( $product , $option ) ;
    }
}
