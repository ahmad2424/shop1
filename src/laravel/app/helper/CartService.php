<?php


namespace App\helper;


use App\Models\Product;
use Facades\App\helper\Swal as SwalAlias;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Collection;
use phpDocumentor\Reflection\Types\Integer;

class CartService
{

    protected mixed $cart;

    protected string $name = 'cart1';

    public static array $errors = [] ;

    public function __construct()
    {
        $this->cart = session()->get($this->name) ?? collect([]);

    }

//add update remove
    public function update(Product $product, array $option = [] , bool $delete = false ) : void
    {
        $amount = $option['amount'] ;

        if( $amount > $product->stock && $delete == false) {
             self::$errors['amount'] = 'Stock more than your request' ;
             SwalAlias::error()->title(self::$errors['amount'])->initial();
             return;
        }


        if( $amount < 1 ){
            self::$errors['amount'] = 'your cart for this cart remove' ;
            $this->cart->forget(   $product->id ) ;
        }

        else
            $this->cart->put(   $product->id ,  ['amount'=>$amount]   ) ;

        session()->put( $this->name , $this->cart );

    }





    public function count() : int
    {
        return $this->cart->count() ;
    }




    public function has( $product_id = 1  , $option = [] ) :bool
    {
        return  !! $this->cart->firstWhere(  $product_id ) ;

    }





    public function get( int $product_id , $option = [] ):Collection|string|array|null
    {
        try {
          return  $this->cart-> get($product_id) ;
        } catch (\Exception $exception){

            return '' ;
        }
    }




    public function all() :Collection|array
    {
        return $this->cart->all() ;
    }

    public function delete(Product $product , $option = []  ):void
    {
        $amount = $option['amount'] ?? 0 ;
        $this->update(  $product , ['amount'=> $amount] , true ) ;
    }

    public function all_with_product(): array|Collection
    {

      $collect = collect([]) ;

       $this->cart->each(function ($item, $key)  use($collect){

           $item1 = array_merge($item , ['product' => Product::find($key)]) ;

           $collect->put( $key   , $item1)  ;
       });
       return $collect->all() ;
    }

    public function forget_cart():void
    {

        $this->cart = [] ;
        session( )->forget($this->name) ;

    }

    public function has_cart():bool
    {
        if(  empty( $this->cart->all() )  )
            return false ;

        return true ;

    }


    public function sum()
    {

        $count = 0;
        if ($this->cart == collect([]))
            return 0;

        return $this->cart->sum('amount');
    }





}
