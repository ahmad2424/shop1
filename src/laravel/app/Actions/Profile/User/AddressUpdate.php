<?php

namespace App\Actions\Profile\User;

use App\Models\User_Address;
use Illuminate\Database\Eloquent\Model;
use Lorisleiva\Actions\Concerns\AsAction;
use phpDocumentor\Reflection\Types\Integer;

class AddressUpdate
{
    use AsAction;

    public function handle( array $address  , int $add_t_Update_f = null ) : User_Address|Model|bool
    {

        if( is_null( $add_t_Update_f ) || $add_t_Update_f == 0  ){
             return auth()->user()->user_addresses()->create( $address ) ;
        }


        return auth()->user()->user_addresses()->where(['id' => $add_t_Update_f])->update( $address ) ;


    }
}
