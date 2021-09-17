<?php

namespace App\Actions\Auth\User\Logout;

use Lorisleiva\Actions\Concerns\AsAction;

class Logout
{
    use AsAction;

    public function handle()
    {
        auth()->logout();
        return redirect(route('login') ) ;

    }
}
