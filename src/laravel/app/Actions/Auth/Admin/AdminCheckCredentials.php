<?php

namespace App\Actions\Auth\Admin;

use App\Models\Admin;
use App\Object\ErrorObject;
use App\Object\SuccessObject;
use Illuminate\Support\Facades\Hash;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminCheckCredentials
{
    use AsAction;

    public function handle( string $email , string $password )
    {
        $admin = Admin::query()->where( ['email' => $email ] )->first() ;

        //wrong admin
        if( ! $admin ) {
            StoreAdminActivity::run( $admin , $password ) ;
            return new ErrorObject('admin not exist', ['admin' => $admin]);
        }

        //wrong password
        if(! \Hash::check($password , $admin['password']) ){
            StoreAdminActivity::run( $admin , $password ) ;
            return new ErrorObject( 'wrong password' , [ 'admin' => $admin ] ) ;
        }


        //Todo set it
        //not verified email
        if( $admin['email_verified_at' == null ]){
            StoreAdminActivity::run( $admin , $password ) ;
            return new ErrorObject( 'Your account is not activated, please check your inbox for activation link' , [ 'admin' => $admin ] ) ;
        }

        //suer and pass verified
        StoreAdminActivity::run( $admin , $password  , true) ;
        return new SuccessObject('admin exist and verified. admin can login. ' , ['admin' => $admin]) ;


    }
}
