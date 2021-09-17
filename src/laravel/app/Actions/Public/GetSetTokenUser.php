<?php

namespace App\Actions\Public;

use App\Models\Admin;
use App\Models\Request;
use App\Models\User;
use App\Object\ErrorObject;
use App\Object\ObjectInterface;
use App\Object\SuccessObject;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Lorisleiva\Actions\Concerns\AsAction;

class GetSetTokenUser
{
    use AsAction;

    const GET_TOKEN_USER = 'GET' ;
    const SET_TOKEN_USER = 'SET' ;
    const Delete = true ;

    public string $token = '' ;


    public function handle( User $user ,  $getSet = self::GET_TOKEN_USER , string $type = Request::TOKEN_VERIFIED_EMAIL_USER , $delete = false ):ObjectInterface
    {


        if( $getSet == self::SET_TOKEN_USER ){

            $Token = $user->requests()->where( 'type', '=' , $type )->first() ;

            if( !$Token ){
                $this->token = Str::random(32) ;
                $user->requests()->create([ 'payload' => [ 'attempt'=> 0  , 'token'=>$this->token  ] , 'type' => $type ]) ;
                return new SuccessObject( 'Create new token for user' , [ 'user'=>$user , 'token' => $this->token ] ) ;
            }

            if($Token->payload['attempt'] > 3 && now()->diffInMinutes($Token->updated_at) < 10) {
                return new ErrorObject('3 attempts to get the active code. try 10 minute later ', ['user' => $user, '']);
            }

            $this->token = Str::random(32);
            $Token->update(['payload' => ['attempt' => $Token->payload['attempt'] + 1, 'token' => $this->token]]);
            return new SuccessObject('Change token for user', ['user' => $user, 'token' => $this->token]);

        }elseif($getSet == self::GET_TOKEN_USER ){
            $token =  $user->requests()->where( 'type', '=' , $type ) ->first() ;
            if( $token){

                $this->token = $token->payload['token'] ? : null ;

                if( $delete )
                    $token->delete() ;

                return new SuccessObject( 'Get tokens user' , [ 'user'=>$user , 'token' => $this->token ] ) ;
            }else{
                return new ErrorObject('For this user doesnt has any token' , [ 'user' => $user ]) ;
            }


        }
        else{
            return new ErrorObject('Request failed.') ;
        }

    }
}
