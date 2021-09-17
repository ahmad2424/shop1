<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Setting;
use App\Models\UserActivity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         Setting::factory()->create() ;
         $this->call([
             GroupSeeder::class ,
             ProductSeeder::class ,
             MediaSeeder::class ,
             AdminSeeder::class
         ]) ;
    }
}
