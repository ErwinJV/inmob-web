<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Property;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->text(30);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'price' => $this->faker->randomElement([15000, 40000, 20000, 50000,35000]),
            'desc' => $this->faker->text(250),
            'status' => $this->faker->randomElement(['For rent', 'On sale']),
            'locality' => $this->faker->word(25),
            'bath' => $this->faker->randomElement([1,2,3,4,5]),
            'hab' => $this->faker->randomElement([1,2,3,4,5]),
            'est' => $this->faker->randomElement([1,2,3,4,5]),
            'pool' => $this->faker->randomElement([1,2,3,4,5]),
            'area' => $this->faker->randomElement([60,120, 230, 400, 300]),
            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
            'publish' => $this->faker->randomElement(['published', 'unpublished'])
        ];
    }
}
