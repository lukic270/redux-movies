<?php

namespace Database\Factories;
use Faker\Generator as fake;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $genres = ['drama', 'akcija', 'horor'];
        $genre = $this->faker->randomElement($genres);

        return [
            'title' => $this->faker->sentence(3),
            'director' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
            'duration' => $this->faker->numberBetween(0, 60),
            'releaseDate' => $this->faker->date(),
            'genre' => $genre
        ];
    }
}