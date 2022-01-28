<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'property_images/' . $this->faker->image('public/storage/property_images', 1080, 566, null, false),
            'user_id' => User::all()->random()->id
        ];
    }
}
