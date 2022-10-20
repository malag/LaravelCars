<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => $this->faker->sentence(3),
            'year' => $this->faker->numberBetween(1910, 2022),
            'model' => $this->faker->name(),
            'price' => $this->faker->name(),
        ];
    }
}
