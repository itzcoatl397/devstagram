<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo'=>$this->faker->sentence(5),
             'description'=>$this->faker->sentence(30),
             'imagen'=>$this->faker->uuid().'.jpg',
             'user_id' =>$this->faker->randomElement([1,2])

        ];
    }
}
