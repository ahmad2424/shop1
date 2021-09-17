<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class StoreRegisterActivity extends Authenticatable
{
    use HasFactory;

    protected $guarded = [] ;

    protected $casts = [

        'payload' => AsCollection::class ,
    ] ;

    protected $connection = 'mongo' ;


}
