<?php

namespace App\Actions\Auth\Admin;

use App\Models\Admin\Log\StoreAdminErrorLogs;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminStoreErrorLog
{
    use AsAction;

    public function handle(\Exception $exception  , $type = 'admin' )
    {
        StoreAdminErrorLogs::create([
            'errors'=> ['error' => $exception->getMessage()  , 'type'=> $type ,'user_id' => auth()->guard('admin')->user()  ? auth()->guard('admin')->user()->id : '' , 'url'=> url()->previous() ?  : '' ]  ,
            'url'=>url()->current() ,
        ]);
    }



}
