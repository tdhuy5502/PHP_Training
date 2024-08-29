<?php

namespace Database\Factories;

use App\Models\Images;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Images::class;

    public function definition(): array
    {
        return [
            'url' => $this->faker->imageUrl(),
            'imageable_id' => null,
            'imageable_type' => null
        ];
    }
}
