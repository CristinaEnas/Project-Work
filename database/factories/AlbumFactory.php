<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageId = fake()->numberBetween(1, 800);

        $posterUrl = "https://picsum.photos/id/{$imageId}/400/600";

        return [
            'name'=>fake()->name(), 
            'year'=>fake()->year(), 
            'poster'=>$posterUrl
        ];
    }
}
