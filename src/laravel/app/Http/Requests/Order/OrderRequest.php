<?php

namespace App\Http\Requests\Order;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Foundation\Http\FormRequest;

//default
class OrderRequest extends FormRequest
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
            'expire_at' => 'required|date' ,
            'payment_state' => 'required|string' ,
            "delivery_state" => 'required|string' ,
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'expire_at'=> now()->addHours(2)->toDateTimeString() ,
            'payment_state' => Order::PAYMENT_STATE_UNPAID ,
            'delivery_state' => Order::PAYMENT_DELIVERY_WEB
        ]) ;
    }
}
