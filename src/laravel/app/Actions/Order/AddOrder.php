<?php

namespace App\Actions\Order;

use App\Actions\Public\AddSessionBackPage;
use App\Actions\Public\SetSessionBackPage;
use App\helper\Cart;
use Facades\App\helper\Swal;
use App\Models\Order;
use App\Models\Order_Product;
use Illuminate\Http\RedirectResponse;
use Lorisleiva\Actions\Concerns\AsAction;

class AddOrder
{
    use AsAction;

    public function handle( array $data = [] ):string|RedirectResponse
    {

        if( !auth()->user() ) {
            Swal::error()->text("Please first login to our website")->title('cart')->initial();
            SetSessionBackPage::run() ;
            return redirect()->route('login' ) ;
        }

        if (!Cart::has_cart()) {
            Swal::error()->text("you Haven't any product in your cart")->title('cart')->initial();
            return false;
        }

        $products = Cart::all_with_product();

        $order = auth()->user()->orders()->where( 'expire_at' , '>' , now()  )->latest()->first() ;


        if( ! $order )
            $order = auth()->user()->orders()->create($data);


        foreach ($products as $product) {

            $pro = $product['product'];

            //TODO change add final_price in $data input

            $order->product()->syncWithoutDetaching([$pro['id'] => [  'price' => $pro['price'], 'final_price' => $pro['price'] , 'options' => collect(['amount' => $product['amount'] ])   ]]);

        }

        Swal::success()->text('Your orders confirmed')->title('cart')->initial();
       // Cart::forget_cart();
        return false;



    }
}
