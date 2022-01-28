<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $name = $this->faker->unique()->text(10);
        return [
            
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
