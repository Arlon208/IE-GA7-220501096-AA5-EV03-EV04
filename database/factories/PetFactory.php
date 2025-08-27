<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   //generador automatico de datos con el uso del metodo Faker de php
        //permite crear grandes bases de datos con el fin de realizar pruebas
        $genero = $this->faker->randomElement(['M','H']);
        $especie = $this->faker->randomElement(['Felino','Canino','Equino']); 
        return [
            'customer_id' => Customer::factory(),
            'nombre' => $this->faker->name(),
            'especie' => $especie,
            'edad' => $this->faker->numberBetween(0,30),
            'genero' => $genero,
        ];
    }
}
