<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;

    //STATE PAYMENT
    const  PENDING = 'pending' ;
    const  PAYED= 'payed' ;
    const  FAILED = 'failed' ;
    const  UNPAID = 'unpaid' ;

    protected $casts = [
       'transaction_payload' => AsCollection::class ,
    ] ;


    protected $guarded = ['user_id' , 'order_id'] ;


    public function order(): BelongsTo
    {
        return $this->belongsTo(  Order::class ) ;
    }

    public function user():HasOne
    {
        return $this->hasOne(User::class) ;
    }


     public function product_views(): HasMany
     {
        return $this->hasMany(Product_View::class , 'product_id' , 'id') ;
    }




}
