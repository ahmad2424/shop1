<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $type =['img' , 'video' , 'mp3' ] ;

        return [
            'name' => 'media'.$this->faker->numberBetween(1,3),
            'type' => array_rand( $type ,1),
            'size' =>  $this->faker->numberBetween(1000 ,10000) ,
            'src' => $this->faker->numberBetween(1000 ,10000) ,
        ];
    }
}
