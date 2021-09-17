<?php

namespace App\Actions\Auth\User\Public;

use App\Models\User;
use Lorisleiva\Actions\Concerns\AsAction;
use phpDocumentor\Reflection\Types\Integer;

class GetUserWithKeyAndValue
{
    use AsAction;

    public function handle(  $value = '' , string                                                         $key = 'email'): User|null
    {
        return User::query()->where([$key => $value])->first() ;

    }
}
