<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserSearchRequest extends FormRequest
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
            'first_name' =>'nullable' ,
            'last_name' => 'nullable' ,
            'email' => 'nullable' ,
            'phone' => 'nullable' ,
            'email_verified_at' => 'nullable',
            'page'=>'nullable'

        ];
    }
}
