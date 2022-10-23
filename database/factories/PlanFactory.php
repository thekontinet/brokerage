<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'type' => $this->faker->randomElement(Plan::DURATIONS),
            'price' => $this->faker->numberBetween(500, 5000),
            'percentage' => $this->faker->numberBetween(10, 90),
            'extra' => ['extral 1', 'extral 2'],
        ];
    }
}
