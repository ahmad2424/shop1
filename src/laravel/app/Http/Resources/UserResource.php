<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public $resource = User::class ;

    public static $wrap = 'user' ;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id ,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name ,
            'email' => $this->email ,
            'phone' => $this->phone ,
            'verified_email_at' => $this ->verified_email_at,

        ] ;
    }
}
