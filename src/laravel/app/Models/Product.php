<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany as BelongsToMany1;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
    ] ;

    protected $casts = [
        'tags' => AsCollection::class ,
        'information' => AsCollection::class ,
    ] ;





    public function vzt()
    {
        return visits($this);
    }

    public function order(): BelongsToMany1
    {
        return $this->belongsToMany( Order::class , 'order__products' , 'product_id', 'order_id') ;
    }

    public function order_products(): hasMany
    {
        return $this->hasMany( Order_Product::class , 'order_id' , 'id'  );
    }

    public function group(): HasOne
    {
        return $this->hasOne(Group::class) ;
    }

    public function tags():HasMany
    {
        return $this->hasMany(Tag::class) ;
    }

    public function product_view():HasOne
    {
        return $this->hasOne(  Product_View::class ) ;
    }

    public function medias(): MorphMany
    {
        return $this->morphMany(Media::class , 'mediaable') ;
    }

}
