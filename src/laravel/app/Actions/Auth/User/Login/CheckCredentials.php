<?php

namespace App\Actions\Auth\User\Login;

use App\Models\User;
use App\Object\ErrorObject;
use App\Object\ObjectInterface;
use App\Object\SuccessObject;
use Lorisleiva\Actions\Concerns\AsAction;

class CheckCredentials
{
    use AsAction;

    public function handle(string $email , string $password): ObjectInterface
    {
        $user = User::query()->where( ['email' => $email ] )->first() ;

        //wrong user
        if( ! $user ) {
            StoreUserActivity::run( $user , $password ) ;
            return new ErrorObject('user not exist', ['user' => $user]);
        }

        //wrong password
        if(! \Hash::check($password , $user['password']) ){
            StoreUserActivity::run( $user , $password ) ;
            return new ErrorObject( 'wrong password' , [ 'user' => $user ] ) ;
        }


        //Todo set it
        //not verified email
        if( $user['email_verified_at' == null ]){
            StoreUserActivity::run( $user , $password ) ;
            return new ErrorObject( 'Your account is not activated, please check your inbox for activation link' , [ 'user' => $user ] ) ;
        }

        //suer and pass verified
        StoreUserActivity::run( $user , $password  , true) ;
        return new SuccessObject('user exist and verified. user can login. ' , ['user' => $user]) ;


    }
}
