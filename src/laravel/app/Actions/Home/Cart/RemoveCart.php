<?php

namespace App\Actions\Home\Cart;

use App\helper\Cart;
use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;

class RemoveCart
{
    use AsAction;

    public function  handle(Product $product , $option = ['amount'=>0 ]  ):void
    {
        Cart::delete(  $product ,  ['amount' => $option['amount'] ] ) ;
    }
}
