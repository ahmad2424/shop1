<?php

namespace App\Models\Admin\Log;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as authMongo ;

class StoreAdminErrorLogs extends authMongo
{
    use HasFactory;

    protected $connection = 'mongo' ;

    protected $guarded = [] ;

    protected $casts = [] ;
}
