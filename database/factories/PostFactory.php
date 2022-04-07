<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'         => $this->faker->sentence,
            'content'       => $this->faker->sentence,
            'category_id' => Category::get('id')->random(),
            'user_id' => User::get('id')->random(),

        ];
    }
}
