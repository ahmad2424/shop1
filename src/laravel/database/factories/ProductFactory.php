<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->monthName ,
            'description' => $this->faker->text ,
            'information' => ['info1'=>$this->faker->name , 'info2'=>$this->faker->lastName  ]  ,
            'price' => $this->faker->numberBetween(1000 ,10000) ,
            'stock' => rand(0,15) ,
            'tags' => ['sold'=>$this->faker->numberBetween(1,4) , 'wonderful'=>$this->faker->numberBetween(1,4)  ]  ,
            'group_id' => 1|2 ,

        ];
    }
}
