<?php

namespace App\Http\Requests\Payment;

use App\Payment\Zarinpal\ZarinPal;
use App\Payment\Zarinpal\zarinpal2;
use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
{

    protected $provider  ;


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if( is_null( $this->provider) )
            return [
                'provider' =>'required|string|image' ,
            ];

        return [
            'provider' =>'required|string' ,
            'providerClass'=>'required'
        ];
    }


    public function messages()
    {
        return [
            'provider.image'=>'Your provider set is false!' ,

        ] ;
    }


    protected function prepareForValidation()
    {

        $provider = $this->request->all()["provider"] ;

        $provider = strtolower($provider) ;

        $this->provider = match ($provider) {
            'zarinpal' => new ZarinPal() ,
            'bmi'  => null,
            default => null,
        };
        $this->merge(['providerClass' => $this->provider  ]);

    }
}
