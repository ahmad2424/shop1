<?php

namespace App\Actions\Auth\User\Google;

use Lorisleiva\Actions\Concerns\AsAction;

class FilterOAuthInfo
{
    use AsAction;

    public function handle( array $userGoogle): array
    {
        return  [
            'first_name' => $userGoogle['given_name'],
            'last_name' => $userGoogle['family_name'],
            'email' => $userGoogle['email'],
            'password' => bcrypt(\Str::random(16)),
            'phone' => $userGoogle['name'] ?: null,
            'email_verified_at' => now()->toDayDateTimeString(),
        ];
    }

}
