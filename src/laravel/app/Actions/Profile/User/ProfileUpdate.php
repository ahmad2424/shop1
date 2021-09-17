<?php

namespace App\Actions\Profile\User;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;

class ProfileUpdate
{
    use AsAction;

    public function handle(array $userNewInfo )
    {
       return auth()->user()->update( $userNewInfo ) ;
    }
}
