<?php


namespace App\Payment;


use App\Models\Order;
use Illuminate\Http\RedirectResponse;

interface PaymentInterface
{
    public function getProvider():string;

    public function redirect(Order $order ):array|string;


    public function callback( array $data ) :array ;

}
