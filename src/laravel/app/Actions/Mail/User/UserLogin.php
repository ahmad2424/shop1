<?php

namespace App\Actions\Mail\User;

use App\Mail\LoginUserMail;
use App\Models\User;
use App\Notifications\Test;
use App\Notifications\User\Auth\ActivationNotification;
use App\Notifications\User\Auth\LoginUserNotification;
use Lorisleiva\Actions\Concerns\AsAction;

class UserLogin
{
    use AsAction;

    const TYPE_LOGIN = 'login' ;

    public function handle(User $user , string $type = self::TYPE_LOGIN ):void
    {
       $user -> notify( new LoginUserNotification() )  ;

    }
}
