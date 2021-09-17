<?php

namespace App\Http\Requests\Payment;

use App\Payment\Zarinpal\ZarinPal as ZarinPal1;
use Illuminate\Foundation\Http\FormRequest;

class VerifyPaymentRequest extends FormRequest
{
    /**
     * @var ZarinPal1|mixed|null
     */
    private mixed $provider;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }


    public function messages()
    {
        return [
            'provider.image'=>'Your provider set is false!' ,

        ] ;
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



    protected function prepareForValidation()
    {

        $provider = $this->request->all()["provider"] ;

        $provider = strtolower($provider) ;

        $this->provider = match ($provider) {
            'zarinpal' => new ZarinPal1() ,
            'bmi'  => null,
            default => null,
        };
        $this->merge(['providerClass' => $this->provider  ]);

    }
}
