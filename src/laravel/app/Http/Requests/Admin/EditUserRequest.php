<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditUserRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' =>'required|string' ,
            'last_name' =>'required|string' ,
            'email' => [
                'required',
                'email',
                 Rule::unique('users')->ignore( $this->user()->id, 'id' )
            ],
            'email_verified_at' =>'nullable' ,
            'phone' =>'required|string|exists:users,phone' ,
        ];
    }
}
