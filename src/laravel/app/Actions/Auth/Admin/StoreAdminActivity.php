<?php

namespace App\Actions\Auth\Admin;

use App\Models\Admin;
use App\Models\Admin\Log\StoreAdminActivity as StoreAdminActivityAlias;
use Jenssegers\Agent\Agent;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreAdminActivity
{
    use AsAction;

    public function handle(Admin $admin ,string $password  , bool $authorized = false , array $payload = [] )
    {
        $agent_admin = new Agent() ;

        StoreAdminActivityAlias::create([
            'admin_id'=> $admin['id'] ,
            'authorized'=> $authorized ,
            'ip'=> request()->ip() ,
            'os'=> $agent_admin -> platform(),
            'browser' => $agent_admin -> browser() ,
            'payload' => [
                'email' =>$admin['email'] ,
                'password' =>$password ,
            ] ,
            'info_activity'=>$payload,
        ]) ;
    }
}
