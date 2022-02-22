<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PortafolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name(),
            'imagen' => $this->faker->name(),
            'categoria' => $this->faker->name(),
        ];
    }
}
