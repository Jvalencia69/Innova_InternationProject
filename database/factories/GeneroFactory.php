<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genero>
 */
class GeneroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Tipo_Genero' => $this->faker->randomElement((['Hombre', 'Mujer', 'Prefiero no decir'])),
            'user_id' => $this->faker->unique()->randomElement((['1', '2', '3', '4', '5']))
        ];
    }
}
