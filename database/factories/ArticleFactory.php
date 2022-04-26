<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'title' => $this->faker->unique()->realText(15, 2),
            'text'=> $this->faker->realText(),
            'user_id'=>$this->faker->randomElement([1,3,4,5,6])
        ];
    }
}
