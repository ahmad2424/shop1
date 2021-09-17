<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{

    protected $guarded = [ 'user_id' ] ;

    const PAYMENT_STATE_SUCCESS = 'success' ;
    const PAYMENT_STATE_FAILED = 'failed' ;
    const PAYMENT_STATE_PENDING = 'pending' ;
    const PAYMENT_STATE_UNPAID = 'unpaid' ;

    const PAYMENT_DELIVERY_WEB = 'shop' ;
    const PAYMENT_DELIVERY_SEND = 'sent' ;
    const PAYMENT_DELIVERY_POST = 'post' ;
    const PAYMENT_DELIVERY_RECEIVED = 'received' ;
    const PAYMENT_DELIVERY_RETURNED = 'returned' ;




    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id' ,'id' ) ;
    }

    //save payment with order->user ...
    public function user_orders(): BelongsToMany
    {
        return $this->belongsToMany(User::class , 'payments' , 'order_id' , 'user_id')->withTimestamps() ;
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class , 'order_id' ,'id' ) ;
    }

    public function order_product(): hasMany
    {
        return $this->hasMany( Order_Product::class) ;
    }


    public function product(): BelongsToMany
    {
        return $this->belongsToMany( Product::class , 'order__products' , 'order_id' , 'product_id');
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany( Product::class , 'order__products' , 'order_id' , 'product_id')->withPivot(['options' , 'price' , 'final_price']);
    }

    public function order_products(): HasMany
    {
        return $this->hasMany( Order_Product::class , 'order_id' , 'id' ) ;
    }


}
