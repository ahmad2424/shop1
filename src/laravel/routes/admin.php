<?php

/*$$$$ ADMIN ROUTES  $$$$$$$$$*/


use App\Http\Controllers\Web\Admin\AdminAuthController;
use App\Http\Controllers\Web\Admin\AdminController;
use App\Http\Controllers\Web\Admin\UserController;

require 'test.php' ;


/*== ADMIN CONTROLLER ==*/

    //Index admin
    Route::get('admins' , [ AdminController:: class , 'admins_view'] )->name('admins.view') ;
    //ajax requst
    Route::get('admins/search/{pageCount}' , [ AdminController:: class , 'search_ajax'] )->name('admins.search') ;




/*== USER CONTROLLER ==*/

    //SEARCH IN UERS
    Route::match( ['get'] ,  'user/search/{pageCount?}' , [ UserController::class , 'user_search'])->name('user.search.get') ;
    Route::match( ['post'] ,  'user/search/{pageCount?}' , [ UserController::class , 'user_search'])->name('user.search') ;

    //CREATE EASY USER
    Route::match( ['post'] ,  'user/create' , [ UserController::class , 'create_user'])->name('admin.create.user') ;

    //EDIT USER
    Route::get('edit/{user}' , [ UserController::class , 'edit_view'] )->name('admin.user.edit') ;
    Route::post('edit/{user}' , [ UserController::class , 'edit'] ) ;
    //edit user address
    Route::post('edit/user/{user}/address/{user_address}' , [ UserController::class , 'edit_address'] )->name('admin.user.address.edit') ;


    //DELETE USER
    Route::match(['post' , 'get'] , 'delete/{user}' , [ UserController::class , 'delete'] )->name( 'admin.user.delete' ) ;


//* DASHBOARD ********************
//dashboard
Route::get( 'dashboard' , [ \App\Http\Controllers\Web\Admin\DashboardController::class , 'dashboard'] ) -> name('admin.dashboard');







//* LOGIN *************
    //login
Route::get( 'login' , [ AdminAuthController::class , 'login'] ) ->middleware('noAdmin')->name('admin.login');
Route::post( 'login' , [ AdminAuthController::class , 'login_verify'] );


    //change password
Route::get('change-password' ,function (){
    return view('auth.admin.admin_change_password.change_password' )  ;
})->name('admin.change.password') ;
Route::post('change-password' , [ AdminAuthController::class , 'change_password'] );



    //logout
Route::get('logout' , [ AdminAuthController::class , 'logout'] )->name('admin.logout')->middleware('auth:admin') ;

Route::get('testa' , function (){
    return view('test.atest') ;
} )->name('testa') ;



//Todo  remove
Route::get('/{any}', function($any){
    redirect()->route('login') ;
});
