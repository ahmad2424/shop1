<?php

namespace App\Actions\Home;

use App\Models\Product;
use App\Models\Product_View;
use Jenssegers\Agent\Facades\Agent;
use Lorisleiva\Actions\Concerns\AsAction;

class ProductView
{
    use AsAction;

    const VIEW = 'view' ;
    const SOLD = 'sold' ;
    const FAVORITE = 'favorite' ;

    public function handle( Product $product , string $key = ProductView::VIEW  , string|int $value = 1   ): void
    {
//check view with ip
        $agent = new \Jenssegers\Agent\Agent() ;
        $agentInfo = [ 'product_id'=>$product->id , 'ip' => request()->ip() , 'browser'=> $agent->browser()  ] ;

        $view =  \App\Models\ProductView::where( $agentInfo )->first() ;

        if( $view  && $key == ProductView::VIEW )
            return  ;

        //save view on mongo and mysql
        \App\Models\ProductView::create([ 'product_id'=>$product->id , 'ip' => request()->ip() , 'browser'=> $agent->browser()  ]) ;

        $product_view = $product->product_view()->first() ;

        if( ! $product_view  )
            $product->product_view() ->create( [ $key => $value ]  ) ;
        else
            $product_view ->update( [ $key => $value + $product_view[ $key ] ] ) ;

    }
}
