<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User As ModelMongo ;

class StoreOrderLog extends ModelMongo
{
    use HasFactory;

    protected $connection = 'mongo' ;

    protected $casts = [
        'order'=>AsCollection::class
    ] ;

    protected $guarded = [] ;


}
