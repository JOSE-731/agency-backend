<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'imagen' => $this->faker->name(),
            'profesion_perfil' => $this->faker->name(),
            'facebook' => $this->faker->name(),
            'twitter' => $this->faker->name(),
            'linkedin' => $this->faker->name(),
        ];
    }
}
