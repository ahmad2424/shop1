<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class StoreErrorLog extends Authenticatable
{
    use HasFactory;

    protected $guarded = [ ] ;

    protected $casts = [

        'errors' => AsCollection::class ,
    ] ;

    protected $connection = 'mongo'  ;
}
