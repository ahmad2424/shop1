<?php

namespace App\Actions\Auth\User\Register;

use App\Actions\Auth\User\Login\StoreUserActivity;
use App\Models\User;
use Jenssegers\Mongodb\Eloquent\Model;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreInfoUserRegister
{
    use AsAction;

    public function handle(array $userInfo ): User
    {
        return User::create( $userInfo )  ;

    }
}
