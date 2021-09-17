<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [
        'mediaable_type' ,
        'mediaable_id'
    ] ;

    protected $table = 'medias';



    public function group(): HasOne
    {
        return $this->hasOne( Group::class) ;
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class) ;
    }

}
