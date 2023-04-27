<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['bitcoin', 'ethereum', 'compound-coin', 'conceal', 'concave', 'concentrator']),
            'address' => $this->faker->macAddress(),
            'qr_image_url' => $this->faker->imageUrl(),
        ];
    }
}
