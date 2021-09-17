<?php

namespace App\Actions\Auth\User\Verification;

use App\Actions\Public\GetSetTokenUser;
use App\Models\Request;
use App\Models\User;
use App\Notifications\User\Auth\EmailVerifiedNotification;
use App\Notifications\User\Auth\EmailVerifiedNotificatoin;
use App\Object\ErrorObject;
use App\Object\SuccessObject;
use Illuminate\Http\RedirectResponse;
use Lorisleiva\Actions\Concerns\AsAction;

class EmailVerification
{
    use AsAction;

    const TYPE_EMAIL_VERIFY = 'email_verify' ;

    public function handle(User $user , string $type = self::TYPE_EMAIL_VERIFY ) : void

    {
        $token = GetSetTokenUser::run( $user  , GetSetTokenUser::SET_TOKEN_USER , Request::TOKEN_VERIFIED_EMAIL_USER  ) ? :[] ;

        if($token instanceof SuccessObject)
            $user -> notify ( new EmailVerifiedNotification( $token->payload ) )  ;
    }
}
