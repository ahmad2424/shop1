<?php

namespace App\Actions\Mail\Admin;

use App\Models\Admin;
use App\Notifications\Admin\AdminLoginNotification;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminLogin
{
    use AsAction;

    const TYPE_LOGIN = 'login' ;

    public function handle(Admin $admin , string $type = self::TYPE_LOGIN ):void
    {
        $admin -> notify( new AdminLoginNotification() )  ;

    }
}
