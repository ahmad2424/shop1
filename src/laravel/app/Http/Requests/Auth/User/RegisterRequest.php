<?php

namespace App\Http\Requests\Auth\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {

        return [
            'first_name'=>'required|min:3|' ,
            'last_name' =>'required' ,
            'email' =>'required|unique:users,email|email' ,
            'password'=>'required|min:4' ,
            'phone' => 'unique:users,phone' ,
            'email_verified_at' =>'date'
        ];
    }
}
