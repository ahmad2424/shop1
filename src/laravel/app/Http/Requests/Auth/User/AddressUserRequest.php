<?php

namespace App\Http\Requests\Auth\User;

use Illuminate\Foundation\Http\FormRequest;

class AddressUserRequest extends FormRequest
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
            'city'=>'required' ,
            'town' =>'required' ,
            'address' =>'required' ,
            'house_number' =>'required' ,
            'phone' =>'required|unique:user_address,phone' ,
            'user_id' => 'required|exists:users,id' ,
        ];
    }
}
