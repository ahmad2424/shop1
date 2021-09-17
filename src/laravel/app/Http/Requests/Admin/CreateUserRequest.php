<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'first_name' =>'required|string' ,
            'last_name' =>'required|string' ,
            'email' =>'required|email|unique:users,email' ,
            'email_verified_at' =>'nullable' ,
            'phone' =>'required|numeric|unique:users,phone' ,
            'password' =>'required' ,
        ];
    }
}
