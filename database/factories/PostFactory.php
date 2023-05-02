<?php

namespace Database\Factories;

use Faker\Provider\Image;
use Illuminate\Support\Facades\File;
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

        $imagePath = 'storage/fake_images';

        // Create the directory if it doesn't exist
        if (!File::exists($imagePath)) {
            File::makeDirectory($imagePath);
        }

        return [
            'title' => fake()->city(),
            'description' => fake()->sentence(30),
            'image' => Image::image($imagePath, 150, 150, 'post', false),
        ];
    }
}