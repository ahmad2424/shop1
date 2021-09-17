<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticate;

class ProductView extends Authenticate
{
    use HasFactory;

    public $timestamps = false ;

    protected $table = 'product_view_sold_favorites' ;

    protected $guarded = [] ;

    protected $connection = 'mongo' ;

}
