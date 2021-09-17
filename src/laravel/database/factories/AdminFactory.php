<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email() ,
            'password' => \Hash::make( '1234' ) ,
            'custom_permission' =>"{'tt' : 1}"  ,
            'permission_label' =>"{'tt' : 1}" ,
        ];
    }
}
