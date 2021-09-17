<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'payment_state' => \App\Models\Order::PAYMENT_STATE_FAILED ,
            'delivery_state' => \App\Models\Order::PAYMENT_DELIVERY_POST ,
            'user_id' => '1'  ,
            'expire_at' => now() ,
        ];
    }
}
