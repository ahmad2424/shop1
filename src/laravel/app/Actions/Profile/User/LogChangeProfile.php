<?php

namespace App\Actions\Profile\User;

use App\Models\Log\User\StoreUserChangeInfo;
use Lorisleiva\Actions\Concerns\AsAction;
use phpDocumentor\Reflection\Utils;

class LogChangeProfile
{
    use AsAction;
    const EMAIL ='email' ;
    const PROFILE ='profile' ;
    const PHONE ='phone' ;
    const ADDRESS = 'address' ;


    public function handle( string $type = self::EMAIL ,bool $confirm = true , array $moreInfo = []  ): bool
    {
         StoreUserChangeInfo::create(['type'=> $type , 'confirm'=>$confirm , 'info'=>$moreInfo])  ;
         return  true ;
    }
}
