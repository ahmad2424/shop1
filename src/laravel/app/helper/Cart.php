<?php


namespace App\helper;


use App\Models\Product;
use http\Env\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use phpDocumentor\Reflection\Types\Collection as Collection1;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Scalar\String_;


/**
 * Class Cart
 * @package App\Helpers\Cart
 * @method static bool has(Model $product) ;
 * @method static bool delete( Product $product , array $option = [] ) ;
 * @method static Application update( string $id , array  $quantity) ;
 * @method static bool count($id) ;
 * @method static int sum() ;
 * @method static void forget_cart() ;
 * @method static bool has_cart() ;
 * @method static Collection all();
 * @method static array get($id);
 * @method static \App\Helpers\Cart put(array $value , Model $obj = null)
 * @method static  array|Collection1 all_with_product()
 * @method static Cart instance(string $name)
 * @const static  MOUNT
 */
class Cart extends Facade
{


    public static function getFacadeAccessor(): string
    {
        return  'Cart';
    }

}
