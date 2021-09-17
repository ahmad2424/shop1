<?php


use App\Actions\Auth\User\Public\GetUserWithKeyAndValue;
use App\Actions\Auth\User\Verification\EmailVerification;
use App\Actions\Home\ProductView;
use App\Actions\Mail\User\UserLogin;
use App\Actions\Order\AddOrder;
use App\Actions\Public\GetSessionBackPage;
use App\Actions\Public\GetSetTokenUser;
use App\Actions\Public\SetSessionBackPage;
use App\Http\Controllers\TestController;
use App\Mail\LoginUserMail;
use App\Models\Admin;
use App\Models\Group;
use App\Models\Order;
use App\Models\Order_Product;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Payment\Zarinpal\zarinpal2;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis as RedisAlias;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\ServiceProvider;


use App\helper\Cart;
use const App\Actions\Home\ProductView;


Route::get('request' , [TestController::class , 'request'])->name('test.request') ;
Route::get('request2' , [TestController::class , 'request2'])->name('test.request2') ;
Route::post('response' , [TestController::class , 'response'])->name('test.response') ;
Route::post('response2' , [TestController::class , 'response2'])->name('test.response2') ;



Route::get('/test1', function () {





//return view( 'test.atest' ) ;

$user = \App\Models\User_Address::find(1) ;
$user->update([
    "city" => "raf",
  "town" => "center",
  "address" => "sssdjf fjs fsjfs ksj",
  "house_number" => "2342342",
  "phone" => "2344234",
]) ;
return 23;

/*    $mitso = new test() ;

    $mitso->car('yellow' , 'iron');

    $fo = fopen( 'text.txt' , 'w') ;
 //   fwrite( $fo , Crypt::encryptString( serialize( $mitso) )  );
    fwrite( $fo , serialize( $mitso)   );
    fclose($fo ) ;

    $fo = fopen( 'text.txt' , 'r') ;
    $read = fread( $fo  ,filesize('text.txt') );
    fclose(  $fo ) ;


    //$encry = Crypt::decryptString( $read )  ;
    $encry = $read   ;
    $encry = unserialize( $encry ) ;
  //  return $encry['color'] ;
return(  $encry->color) ;*/
















return view( 'test.test1' ) ;

    $admin = Admin::find(1) ;
    $user = User::find(1) ;
        \App\Actions\Auth\Admin\StoreAdminActivity::run( $admin , 'sfsdfsf'  ,  false ) ;
      \App\Actions\Auth\User\Login\StoreUserActivity::run( $user , 'sfsdfsf'  ,  false ) ;

    return 12 ;


    return  view('test.test1') ;






    $order= Order::find(7) ;
    $pro = Order_Product::find(16) ;
    $product = $order->products();



    $product->each( fn( $value , $key ) =>
        $value->update( [ 'stock' => ( $value->stock - json_decode($value->pivot->options)->amount )   ])
    ) ;

    return  ;






    return 12 ;
    $querey  = Order::query() -> where( 'expire_at' ,'<' , now() )
        ->where( function( $query ) {
            $query -> where( 'payment_state' , '=' ,  Order::PAYMENT_STATE_UNPAID )
                   ->orWhere('payment_state', '=' , Order::PAYMENT_STATE_FAILED )  ->get() ;
        })->get() ;

return $querey ;







    $user = auth()->user()->id ;
    $address = \App\Models\User_Address::find(2)->user()->first() ;
    dd($address->id);
    return 12 ;
    $agent = new \Jenssegers\Agent\Agent() ;
    $product = Product::find(2) ;
    $agentInfo = [ 'product_id'=>$product->id , 'ip' => request()->ip() , 'browser'=> $agent->browser()  ] ;

    $view =  \App\Models\ProductView::where( $agentInfo )->first() ;
    return $view ;


return view('test.test') ;

    $post = Product::find(1);
    $post->vzt()->increment();
    $post->vzt()->count();

    return 12 ;

 ProductView::run(Product::find(1) , ProductView::VIEW , 1   ) ;
 ProductView::run(Product::find(1) , ProductView::SOLD, 1 ) ;
 ProductView::run(Product::find(1) , ProductView::FAVORITE , 10 ) ;


    return 12 ;











 $test = \App\Models\Product::find(1)->product_view()->create([
     'view'=> 0
 ]) ;
 $test = \App\Models\Product_View::find(1)->product()->get() ;
    return  $test   ;


auth()->logout();
return 12  ;
    return Product::all() ;

    return Order::query() -> where( 'expire_at' ,'<' , now() )
        ->where('payment_state' , '!=', Order::PAYMENT_STATE_UNPAID )
        ->delete() ;

$user = auth()->loginUsingId(1) ;
   // $user -> notify( new LoginUserNotification() )  ;

    //dd( \Illuminate\Support\Facades\Redis::keys('*') );

    return ;
    //session
          // $url =  SetSessionBackPage::run() ;
             $url =  GetSessionBackPage::run() ;

             return $url ;



//groups

    $groups = Group::all()->all() ;
    $groupProduct = [] ;
    foreach ($groups as  $group ){

        $array = [$group->name => $group->products()->orderBy('updated_at', 'desc')->limit(1)->get()];

        array_push( $groupProduct  , $array) ;
    }


    return $groupProduct ;

$pay = auth()->user()->payments_and_order()->get()->last() ;
return $pay ;


return 12 ;

$order = Order::find(1) ;

if( url()->previous() ==url()->current() ){
    return redirect() ->route('payment.create', ['order'=>'1']) ;
    dd(1);
}
else{
    dd(\request()->all());
    foreach ($errors as $error)
        echo $error ;

    dd(2);
}

    $user = $order->user()->get()->first() ;
    return new \App\Http\Resources\UserResource($user) ;

    $order->user_orders()->syncWithoutDetaching([
        auth()->user()->id => ['provider'=> 'Zarinpal' , 'state' => Payment::UNPAID  ]
    ]);














   $detail =  Order_Product::find(24) ;
   dd($detail);

    return 12 ;

$order  = Order::find(147);

    $products = collect([
        ['id'=>1 , 'price'=>12 , 'final_price' =>10 ] ,
        ['id'=>2 , 'price'=>13 , 'final_price' =>11 ] ,
        ['id'=>3 , 'price'=>14 , 'final_price' =>12 ] ,
    ]);
    $pro = $products[0] ;

    $product['amount'] = 12 ;
    //$order->product()->syncWithoutDetaching([ 2 => ['price'=>2, 'final_price' => 3] ]) ;
    $order->product()->syncWithoutDetaching([ $pro['id'] => ['price'=>$pro['price'] , 'final_price' => $pro['price'] , 'options'=>['amount' => 12 ]   ]  ]) ;



return 12;

    $order = Order::find(29) ;
    $order->delete() ;


    return  ;
    //

auth()->logout();












    //attach

    $order = Order::find(1) ;
    $products = collect([
        ['id'=>4 , 'price'=>12 , 'final_price' =>10 ] ,
        ['id'=>2 , 'price'=>13 , 'final_price' =>11 ] ,
        ['id'=>3 , 'price'=>14 , 'final_price' =>12 ] ,
    ]);
   // $order->product()->sync( [ 1=> [ 'price'=>1 , 'final_price' => 1  ] , 2 => [ 'price'=>2 , 'final_price' => 2  ] , 3 =>  [ 'price'=>3 , 'final_price' => 3 ] ] );
  //  $order->product()->sync(  [3 =>[ 'price'=>3 , 'final_price' => 3 ]]   );
   // return 12 ;

foreach ($products as $pro){
    $order->product()->syncWithoutDetaching(  [ $pro['id'] =>[ 'price'=>$pro['price'] , 'final_price' => $pro['price']]]   );

}
    return 12 ;
    $order->product()->detach(   3 , [ 'price'=>1500 , 'final_price' => $pro['price'] ]   );
    $order->product()->attach(   3 , [ 'price'=>1500 , 'final_price' => $pro['price'] ]   );
    //$order->product()->att(   3 , [ 'price'=>1500 , 'final_price' => $pro['price'] ]   );


      //  auth()->loginUsingId(1) ;
    //auth()->logout();
    // login


     $products = Cart::all_with_product() ;

     return $products ;




//return \App\helper\Cart::all_with_product() ;
$data = ['expire_at'=>now()->addHours(2)->toDateTimeString() , 'payment_state' => Order::PAYMENT_STATE_UNPAID , 'delivery_state'=>Order::PAYMENT_DELIVERY_WEB ] ;
   $info =  AddOrder::run($data);
    dd( $info ) ;













    //return redirect()->route('cart.destroy' , [2, 'amount'=> 0 ] );
    return redirect()->route('add.cart' , [4 , 'amount'=>9 , 'color' => 'black' , 'guaranty'=>'w1'  ] );
    return 12 ;

    $rand = (int)$rand1 = rand( 1,3) ;
    $product = Product::find( $rand ) ;
    $group = Group::find($rand) ;
    return $product->medias()->get() ;

    $product = App\Models\Group::find(2) ;
    $product->
    $product->medias() ->create([
        'name'=>'12' ,
        'type'  => 'img',
        'size' => 12 ,
        'src'=>'ttsd'
    ]) ;
    return 12 ;

















auth()->loginUsingId(2) ;
    $address =[
        'city' =>'vxcvx2222vxv' ,
        'town'=>'vxxvcxv2xvxc22vxvxcvcxv',
        'address'=>'fgfdgfdg2df22gdfgd' ,
        'phone'=>'4353453453242253453453' ,
        'house_number'=>'44444444242244534534534' ,
    ] ;
    auth()->user()->user_addresses()->create( $address ) ;


    return   $user = GetUserWithKeyAndValue::run( 222 , 'id'  );
    return route('forget.password.check' , ['user'=>1 , 'token'=>'sdfksjf']) ;
    $user = User::query() -> where( ['email'=> 'giovanny07@hotmail.com'] )->first() ;

    dd($user) ;

//return Http::post('https://oauth2.googleapis.com/EjOl5z7FCaOea3d485ze32CM8JXNqW95tQ8hiUAP'  ) ;


    //payload session
    $info = \App\Models\SessionModel::first()->payload ;
    $info = base64_decode($info)  ;
    $info = unserialize( $info ) ;

dd( $info );
    return Socialite::driver('google')->redirect();

    return 12 ;











    $user = \App\Models\User::find(3) ;

    $error = EmailVerification::run($user , EmailVerification::TYPE_EMAIL_VERIFY) ;

return  12 ;










  //  GetSetTokenUser::run( User::findOrFail(1) , GetSetTokenUser::GET_TOKEN_USER  , Request::TOKEN_VERIFIED_EMAIL_USER ,  true ) ;
    //return 12 ;
   /* $text = "SAMPLE_TEXT" ;
    $encrypted = \Crypt::encryptString($text) ;
    $text = \Crypt::decryptString($encrypted) ;
    return $text ;*/
$token = 'kjk' ;
$user_id = 1  ;
  // return route('verify.email' , ['user'=>$user_id , 'token'=>$token]) ;
    $user = \App\Models\User::all() -> first() ;
    //$token =  GetSetTokenUser::run($user , GETSetTokenUser::SET_TOKEN_USER , \App\Models\Request::TOKEN_VERIFIED_EMAIL_USER )  ;

    UserLogin::run($user , UserLogin::TYPE_LOGIN) ;

   //dd(3);














$user = User::findOrFail(1) ;
  $token =  GetSetTokenUser::run($user , GETSetTokenUser::SET_TOKEN_USER , \App\Models\Request::TOKEN_VERIFIED_EMAIL_USER )  ;
  if ($token instanceof  \App\Object\ErrorObject){
      return $token ->message ;
  }else{
      return $token->message . " => " . $token->payload['token'] ;
  }

   // return \Illuminate\Support\Str::random('32' ) ;


   // $user-> notify( new ActivationNotification() ) ;


    // Mail::to('ahmad@gmail.com' )->send( new \App\Mail\LoginUserMail()  );
return 12 ;

    /*$Register = \App\Actions\Auth\User\Register\StoreRegisterActivity::run( [
        'first_name'=>'ahmad' ,
        'last_name' => null ,
        'email' => null ,
        'password' => null ,
    ]) ;*/
  //  return \App\Models\Log\StoreRegisterActivity::all() ;

   // dd(back());
    //return StoreErrorLog::run(new \Exception ( 'this is errors message' ) , 'string' ) ;
   // return  \App\Models\Log\StoreErrorLog::all()   ;
    //return view('welcome');
});



Route::get('resource' , function (){
    return new \App\Http\Resources\UserResource(User::query()->where('email' , '=' , "damian77@schinner.org")->first()  )    ;

    // return    User::query()->where('email' , '=' , "damian77@schinner.org")->first()  ;

}) ;
