<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
    public function rules(): array
    {

        return [
            'email' => 'required|email|exists:admins,email|min:5' ,
            'password' =>'required|string|min:4|' ,
        ];
    }

    public function messages():array
    {


        $error =  [
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.exists' => 'Client not found',
            'password.required' => 'Password is required',
            'password.min' => 'Password can not be less than 8 letters',
        ];

        return $error ;
    }
}
