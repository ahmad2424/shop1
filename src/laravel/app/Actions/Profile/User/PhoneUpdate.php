<?php

namespace App\Actions\Profile\User;

use Lorisleiva\Actions\Concerns\AsAction;

class PhoneUpdate
{
    use AsAction;

    public function handle(array $phone) :bool
    {
        return auth()->user()->update( $phone ) ;
    }
}
