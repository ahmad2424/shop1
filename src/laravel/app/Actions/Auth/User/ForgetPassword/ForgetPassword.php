<?php

namespace App\Actions\Auth\User\ForgetPassword;

use App\Actions\Public\GetSetTokenUser;
use App\helper\Swal;
use App\Models\Request;
use App\Models\User;
use App\Object\ErrorObject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Lorisleiva\Actions\Concerns\AsAction;

class ForgetPassword
{
    use AsAction;

    public function handle(User $user, string $token):Application|RedirectResponse|Redirector
    {
        {
            $swal = new Swal();
            if ($user && $token) {
                $tokenUser = GetSetTokenUser::run($user, GetSetTokenUser::GET_TOKEN_USER, Request::TOKEN_FORGET_PASSWORD_USER);

                if ($tokenUser instanceof ErrorObject)
                    return redirect(route('forget_password'));

                if ($tokenUser->payload['token'] == $token) {
                    auth()->login($user);
                    GetSetTokenUser::run($user, GetSetTokenUser::GET_TOKEN_USER, Request::TOKEN_FORGET_PASSWORD_USER, false);

                    return redirect(route('user.change.password'));
                }

            }

            $swal->text('Your token is wrong')->error()->title('Verified')->initial();
            return redirect(route('login'));
        }
    }
}
