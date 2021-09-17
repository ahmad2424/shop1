<?php

namespace App\Actions\Auth\User\Logs;

use App\Models\Log\StoreErrorLog as StoreErrorLogModel;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreErrorLog
{
    use AsAction;

    public function handle(\Exception $exception , string $type ) :void
    {

        StoreErrorLogModel::create([
            'errors'=> ['error' => $exception->getMessage()  , 'type'=> $type ,'user_id' => auth()->user()  ? auth()->user()->id : '' , 'url'=> url()->previous() ?  : '' ]  ,
            'url'=>url()->current() ,
        ]);

    }
}
