<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero_contacto' => $this->faker->numberBetween(8, 10),
            'nombre' => $this->faker->name(),
            'mensaje' => $this->faker->name(),
            'email' => $this->faker->email(),
        ];
    }
}
