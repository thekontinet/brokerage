<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kyc>
 */
class KycFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::class,
            'data' => [
                'form.type' => $this->faker->randomElement(['passport', 'id']),
                'form.name' => $this->faker->name(),
                'form.phone' => $this->faker->phoneNumber(),
                'form.address' => $this->faker->address(),
                'form.date_of_birth' => $this->faker->date(),
                'photo' => $this->faker->image(),
            ],
        ];
    }
}
