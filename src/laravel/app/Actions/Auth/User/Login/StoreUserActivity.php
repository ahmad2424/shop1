<?php

namespace App\Actions\Auth\User\Login;

use App\Models\User;
use App\Models\UserActivity;
use Lorisleiva\Actions\Concerns\AsAction;
use Jenssegers\Agent\Agent;

class StoreUserActivity
{
    use AsAction;

    public function handle( User $user , string $password , bool $authorized = false )
    {
        $agent_user = new Agent() ;

        UserActivity::create([
            'user_id'=> $user['id'] ,
            'authorized'=> $authorized ,
            'ip'=> request()->ip() ,
            'os'=> $agent_user -> platform(),
            'browser' => $agent_user -> browser() ,
            'payload' => [
                'email' =>$user['email'] ,
                'password' =>$password ,
            ]
        ]) ;



    }
}
