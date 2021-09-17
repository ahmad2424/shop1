<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory , Notifiable;

    protected $casts = [
        'custom_permission'=>AsCollection::class ,
    ] ;

    protected $guarded = [] ;



    public function user(): MorphMany
    {
        return $this->morphMany( Request::class , 'requestable') ;
    }
}
