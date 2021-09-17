<?php

namespace App\Http\Controllers\Web\Home;

use App\Actions\Home\ProductView;
use App\helper\Cart;
use App\Http\Controllers\Controller;
use App\Http\Requests\Public\SearchRequest;
use App\Models\Group;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Web\User\AuthUserController;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;

class ProductController extends AuthUserController
{





    public function products(SearchRequest $request)
    {

        return  $this->handle(function ( ) use($request) {

            $request->validated() ;

            $products = Product::query();

            if ($keyword = $request->search)
                $products->where('name', 'LIKE', "%{$keyword}%")->orWhere('description', 'LIKE', "%{$keyword}%");

            if ($keyword = $request->group )
                $products->where('group_id', '=', "$keyword");

            if ( $request->orderBy== 4)
                $products->orderBy('price' , 'desc' );

            if ( $request->orderBy== 5)
                $products->orderBy('price' , 'asc' );



           $groups = Group::all('id' , 'name');



           $amount = Cart::all();

           $title = 'Products';


           return view('Home.product.products', [

               'products' => $products->latest()->paginate(),

               'amount' => $amount, 'title' => $title ,

               'groups' => $groups ,

           ]) ;

        }) ;


    }








    public function product(Product $product ):string
    {
       return $this->handle(function () use ($product)
       {


            $amount = Cart::get( $product->id )['amount'] ?? 0 ;

            //for view sort
            ProductView::run($product , ProductView::VIEW , 1   ) ;
           $productRelated = Product::query() ;
           $productRelated->where('name', 'LIKE', "%{$product->name}%")
               ->orWhere('description', 'LIKE', "%{$product->name}%")
               ->orWhere('group_id', '=', "$product->group_id");

            return view( 'Home.product.product' , ['product' => $product , 'amount'=>$amount , 'productRelated'=> $productRelated->limit(6)->get()] ) ;
        }) ;

    }
}
