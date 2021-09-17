<?php

namespace App\Actions\Profile\User;

use Lorisleiva\Actions\Concerns\AsAction;

class EmailUpdate
{
    use AsAction;

    public function handle(array $email):bool
    {
        $email = array_merge( $email , [ 'email_verified_at'=>now() ]) ;
        return auth()->user()->update( $email ) ;
    }
}
