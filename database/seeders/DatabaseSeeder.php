<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    Storage::deleteDirectory('property_images'); 
         Storage::makeDirectory('property_images'); 
         \App\Models\User::factory(10)->create();
         \App\Models\Category::factory(2)->create();
         $this->call(PropertySeeder::class);
    }
}
