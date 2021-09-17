<?php

namespace App\Models\Log\Payment;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;

class StorePaymentActivity extends Authenticatable
{
    use HasFactory;

    protected $casts = [
        'transaction_payload' => AsCollection::class
    ] ;

    protected $guarded = [] ;

    protected $connection = 'mongo' ;


}
