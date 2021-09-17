<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permission extends Model
{
    use HasFactory;

    protected $casts = [
        'payload'=>AsCollection::class ,
    ] ;

    public function admins():HasMany
    {
        return $this->hasMany( Admin::class) ;
    }
}
