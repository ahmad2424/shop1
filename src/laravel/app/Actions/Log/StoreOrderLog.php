<?php

namespace App\Actions\Log;

use App\Models\Log\StoreOrderLog as StoreOrderLogModel;
use App\Models\Order;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreOrderLog
{
    use AsAction;

    public function handle( Order $order  ):bool
    {
        if( !auth()->user() || !$order )
            return false  ;

        StoreOrderLogModel::create( $order->toArray() ) ;
        return true ;

    }
}
