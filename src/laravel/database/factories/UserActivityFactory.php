<?php

namespace Database\Factories;

use App\Models\UserActivity;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserActivity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id'=> 1 ,
            'authorized'=> false ,
            'ip'=> $this->faker->ipv4 ,
            'os'=> array_rand([ 'windows' , 'linux' , 'android' , 'mac' ] ),
            'browser' => array_rand([ 'chrome' , 'linux' , 'android' , 'mac' ] ) ,
            'payload' => [ 'email' =>$this->faker->email , 'user' =>$this->faker->userAgent ]

        ];
    }
}
