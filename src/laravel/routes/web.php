<?php

use \App\Actions\Actions\Auth\User\Login\StoreUserActivity;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\Home\OrderController;
use App\Http\Controllers\Web\Home\ProductController;
use App\Http\Controllers\Web\User\AuthUserController;
use App\Http\Controllers\Web\User\PaymentController;
use App\Http\Controllers\Web\User\ProfileController;
use App\Http\Controllers\Web\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require 'test.php' ;


/*=== test ===*/
Route::get('test' , function (){
    return view( 'metronomic.metronic') ;
}) ;


/*==== home====*/
Route::get( '/' , [ HomeController::class , 'home' ]  )->name('home') ;

Route::get('about' , [ HomeController::class , 'about'] )->name('home.about') ;
Route::get('contact' , [ HomeController::class , 'contact'] )->name('home.contact.us') ;





/*=== payment ===*/

Route::prefix('payment')->middleware('auth')->group(function (){

    Route::get( 'list' , [ PaymentController::class , 'view_payment' ] )->name('payment.list') ;

    //TODO this route may remove
    Route::get( 'verify' , [ PaymentController::class , 'view_verify' ] )->name('payment.verify') ;

    Route::post( 'create/{order}/{provider?}' , [ PaymentController::class , 'create' ] )->name('payment.create') ;
    Route::post( 'verify/{order}/{provider?}' , [ PaymentController::class , 'verify' ] )->name('payment.verify') ;

    //Route::post( 'change/{payment}' , [ PaymentController::class , 'change_state_payment' ] )->name('change.state.payment') ;

});




/*== Order ==*/

Route::prefix('orders')->group(function (){

    Route::get('/' , [ OrderController::class , 'view_order' ] )->name('view.order')->middleware('auth:user') ;
    Route::get('carts' , [ OrderController::class , 'view_carts' ] )->name('view.carts') ;
    Route::get('order/{order}' , [ OrderController::class , 'view_order_detail' ] )->name('view.order.detail')->middleware('auth:user') ;

    Route::get('order' , [ OrderController::class , 'add_order' ] )->name('save.order') ;
    Route::get('delete/{order}' , [ OrderController::class , 'delete_order' ] )->name('delete.order') ->middleware('auth');
    Route::get('order/detail/{order_product}' , [ OrderController::class , 'delete_order_detail' ] )->name('delete.order.detail') ->middleware('auth');

});


/*===== products*/

//all
Route::get('products' , [ProductController::class , 'products'])->name('products.view') ;
//single
Route::get('products/{product}' , [ProductController::class , 'product'])->name('product.view') ;



/*===========  shopping cart ===========*/
//not important
Route::prefix('cart')->group(function (){
//view
    Route::get('' , [ CartController::class  , 'cart'] ) -> name('cart') ;
    Route::get('cart/quantity/change' , [ CartController::class  , 'cart_view'] ) -> name('list.cart') ;

    Route::get('/addToCart/{product}/{amount?}/{color?}/{guaranty?}' , [ CartController::class  , 'addToCart'] ) -> name('add.cart') ;
    Route::get('delete/{product}/{amount?}', [ CartController::class  , 'deleteFromCart'] ) -> name('cart.destroy') ;
    Route::get('all', [ CartController::class  , 'all_cart'] ) -> name('cart.all') ;

});


/*=========== ** User Profile **  ==========*/

//change profile info
Route::prefix('user')->middleware('auth:user')->group(function (){

    Route::get( 'profile' , [ProfileController::class , 'profile_view'] ) ->name('profile') ;

    //change formal profile information
    Route::post( 'profile' , [ProfileController::class , 'change_profile'] )->name('profile.change') ;
    //change email
    Route::post( 'profile/email' , [ProfileController::class , 'change_email'] )->name('email.change') ;
    //change phone
    Route::post( 'profile/phone' , [ProfileController::class , 'change_phone'] )->name('phone.change') ;
    //change or add address
    Route::post( 'profile/address/{id}' , [ ProfileController::class , 'change_address'] )->name('address.change') ;
    Route::post( 'profile/address/delete/{user_Address}' , [ ProfileController::class , 'delete_address'] )->name('address.delete') ;

});
















/*=============== Auth User Route =============*/
//Login url=previous url for redirect user
Route::get('/login' , function (){
    return view('auth.user.login.login' ) ;
} )->middleware('guest') ;
Route::post('/login' , [ AuthUserController::class , 'login'] )->name('login')->middleware('guest') ;

//Register
Route::get('/register' , function (){
    return view('auth.user.register.register') ;
} )->middleware('guest') ;
Route::post('/register' , [ AuthUserController::class , 'register'] )->name('register') ;




//Verified_Email
Route::get( 'users/{user}/verified/{token}' , [ AuthUserController::class , 'verify_email' ] )->name('verify.email') ;


//google Oauth
Route::get('/auth/{google}' , [ AuthUserController::class , 'Oauth_redirect'])->name('auth.google') ;
Route::get('/auth/oauth/callback' , [ AuthUserController::class  , 'Oauth_callback'])->name('auth.google.redirect') ;


//forget password
Route::get('forget_password' , [ App\Http\Controllers\Web\User\AuthUserController::class ,  'forget_password_view' ] )->middleware('guest')->name('forget_password') ;
Route::post('forget_password' , [ App\Http\Controllers\Web\User\AuthUserController::class ,  'forget_password_send' ] )->middleware('guest');
Route::get( 'users/{user}/change_password/{token}' , [ AuthUserController::class , 'forget_password_check' ] )->name('forget.password.check') ;

//change password
Route::get( 'user/change_password' , [ AuthUserController::class , 'change_password_view' ] )->name('user.change.password') ->middleware('auth');
Route::post( 'user/change_password' , [ AuthUserController::class , 'change_password' ] )->middleware(['auth']) ;




//Dashboard
Route::get( 'user/dashboard' , [ UserDashboardController::class , 'dashboard' ]  )->name('user.dashboard')->middleware('auth:user') ;





//Logout
Route::get( 'logout' , [ AuthUserController::class , 'logout' ]  )->middleware('auth')->name('logout') ;

