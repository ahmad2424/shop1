<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditAddressUserRequest extends FormRequest
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
            'city'=>'required' ,
            'town' =>'required' ,
            'address' =>'required' ,
            'house_number' =>'required' ,
            'phone' =>[
                'required',
                Rule::unique('user__addresses')->ignore( $this->user()->id, 'id' )
            ],
        ];
    }
}
