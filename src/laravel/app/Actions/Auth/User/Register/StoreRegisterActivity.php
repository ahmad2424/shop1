<?php

namespace App\Actions\Auth\User\Register;

use Jenssegers\Agent\Agent;
use Lorisleiva\Actions\Concerns\AsAction;
use \App\Models\Log\StoreRegisterActivity as  StoreRegisterActivity1;
use phpDocumentor\Reflection\Types\Void_;

class   StoreRegisterActivity
{
    use AsAction;

    public function handle( array $dataRegister , bool $authorized = false ):void
    {
        $agent = new Agent() ;

        $InfoRegisterUser = [
            'os' => $agent->platform(),
            'ip' => request()->ip(),
            'browser' => $agent->browser(),
            'payload' => [
                'authorized' => $authorized
            ]
        ];
        $fullInfoUser = array_merge( $dataRegister , $InfoRegisterUser) ;

        StoreRegisterActivity1::create(
            $fullInfoUser
        ) ;
    }
}
