<?php

namespace App\Models\Log\User;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class StoreUserChangeInfo extends Authenticatable
{
    use HasFactory;


    protected $guarded = [ ] ;

    protected $casts = [

        'info'=>AsCollection::class ,
        'errors' => AsCollection::class ,
        'success'=>AsCollection::class ,
    ] ;

    protected $connection = 'mongo'  ;
}
