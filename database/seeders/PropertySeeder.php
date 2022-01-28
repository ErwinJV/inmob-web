<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\Image;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inmuebles = Property::factory(40)->create();

        foreach($inmuebles as $inmueble){

           Image::factory(26)->create([

            'imageable_id' => $inmueble->id,
            'imageable_type' => Property::class,


           ]);
        }
    }
}
