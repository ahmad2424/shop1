<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Request extends Model
{
    use HasFactory;

    protected $guarded = [ 'requestable_type' , 'requestable_id' ] ;

    protected $casts = [
        'payload' => AsCollection::class ,
    ] ;

    //type
    const TOKEN_VERIFIED_EMAIL_USER = 'verify_email_token' ;
    const TOKEN_FORGET_PASSWORD_USER = 'forget_password_token' ;
    const TOKEN_VERIFIED_PASSWORD_USER = 'verified_password_token' ;



    public function user(): MorphOne
    {
        return $this->morphOne( User::class , 'requestable') ;
    }



}
