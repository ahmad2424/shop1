<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'last_name' =>'required|string'
        ];
    }

    public function messages():array
    {
        return [
           'first_name.required' => 'First name is required' ,
            'last_name.required' => 'Last name is required'
        ] ;
    }
}
