<?php

namespace App\Models;

use App\Models\Public\Token;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [] ;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function orders(): HasMany
    {
        return $this->hasMany(Order::class) ;
    }


    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class) ;
    }

    public function payments_and_order(): HasMany
    {
        return $this->hasMany(Payment::class)->with('order') ;
    }

    public function user_addresses(): HasMany
    {
        return $this->hasMany(User_Address::class) ;
    }

     public function requests(): MorphMany
     {
        return $this->morphMany(Request::class , 'requestable'  ) ;
    }
    public function token(){
        return $this -> hasOne( Token::class , 'user_id') ;
    }


}
