<?php

namespace App\Models\Admin\Log;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class StoreAdminActivity extends Authenticatable
{
    use HasFactory;

    protected $casts = [] ;

    protected $guarded = [] ;

    protected $connection = 'mongo' ;




}
