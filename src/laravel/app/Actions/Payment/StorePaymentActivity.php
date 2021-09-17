<?php

namespace App\Actions\Payment;

use App\Models\Log\Payment\StorePaymentActivity as StorePaymentActivity1;
use Lorisleiva\Actions\Concerns\AsAction;
use phpDocumentor\Reflection\Types\Integer;

class StorePaymentActivity
{
    use AsAction;

    public function handle( int $user_id , string $provider , string $state , array|string $status   ):void
    {

        StorePaymentActivity1::create([

                'user_id' => $user_id ,
                'provider' => $provider ,
                'state' => $state ,
                'status' => $status ,

            ]) ;

    }
}
