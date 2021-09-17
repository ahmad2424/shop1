<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Product;
use Faker\Generator;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type =['img' , 'video' , 'mp3' ] ;
        $faker = new Generator() ;


        $counter = 0 ;


        do {
            $rand = (int)$rand1 = rand( 1,3) ;
            $product = Product::find( $rand ) ;
            $group = Group::find($rand) ;


            $product->medias()->create([
                'name' => 'media' . $faker->numberBetween(1, 3),
                'type' => array_rand($type, 1),
                'size' => $faker->numberBetween(1000, 10000),
                'src' => $faker->numberBetween(1000, 10000),
            ]);
            $group->medias()->create([
                'name' => 'media' . $faker->numberBetween(1, 3),
                'type' => array_rand($type, 1),
                'size' => $faker->numberBetween(1000, 10000),
                'src' => $faker->numberBetween(1000, 10000),
            ]);
        }while($counter++ <4) ;
    }
}
