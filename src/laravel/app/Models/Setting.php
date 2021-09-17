<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;


    protected $casts = [
        'payload' => AsCollection::class ,
    ] ;

    protected $guarded = [  'description' , 'payload' ] ;
}
