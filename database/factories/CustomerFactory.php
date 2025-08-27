<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {//generador automatico de datos con el uso del metodo Faker de php
        //permite crear grandes bases de datos con el fin de realizar pruebas
        return [
            'nombre' => $this->faker->name(),
            'ciudad' => $this->faker->city(),
            'direccion' => $this->faker->streetAddress(),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
