<?php

namespace App\Actions\Auth\User\Register;

use App\Actions\Auth\User\Verification\EmailVerification;

use App\Models\User;
use Facades\App\helper\Swal;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Lorisleiva\Actions\Concerns\AsAction;

class LoginAuth
{
    use AsAction;

    public function handle(array $data, User $user, $Oauth = false): Application|RedirectResponse|Redirector
    {
        if (!$user) {
            StoreRegisterActivity::run($user);
            if(  $Oauth )
                return redirect()->route('register')->withErrors(['User error' => 'User detail doesnt save.'])->withInput($data);
            else
                return redirect(route('register')) ;

        } else {
            if( !$Oauth ){
                Swal::success()->text('Send email verification to you email. please check it.')->title('Email verify')->initial();
                EmailVerification::run( $user ) ;
            }else
                Swal::success()->text('you are login success')->title('Email verify')->initial();


            StoreRegisterActivity::run($user->toArray(), true);

            auth()->login($user);

            return redirect(route('user.dashboard'));
        }
    }

}
