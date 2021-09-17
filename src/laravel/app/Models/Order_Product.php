<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order_Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'order_id' ,
        'product_id',
    ] ;

    protected $casts = [
        'options'=>AsCollection::class
    ] ;


    public function product(): HasOne
    {
        return $this->hasOne(Product::class , 'id' , 'product_id') ;
    }

    public function order(): hasOne
    {
        return $this->hasOne(Order::class , 'id' , 'order_id' ) ;
    }

}
