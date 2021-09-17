<?php

namespace App\Http\Requests\Auth\User;

use Facades\App\helper\Swal;
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


    public function rules(): array
    {

        return [
            'email' => 'required|email|exists:users,email|min:5' ,
            'password' =>'required|string|min:4' ,
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
