<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class AddressUpdateRequest extends FormRequest
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
            'city' =>'required|string' ,
            'town'=>'string',
            'address'=>'required|string' ,
            'phone'=>'required|min:8|string' ,
            'house_number'=>'string|min:8' ,
        ];
    }

}
