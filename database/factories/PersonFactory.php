<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Nombre' => $this->faker->firstName,
            'Apellido' => $this->faker->lastName,
            'FechaNacimiento' => $this->faker->date,
            'DNI' => $this->faker->unique()->randomNumber(8),
            'EstadoCivil' => $this->faker->randomElement(['Soltero/a', 'Casado/a', 'Divorciado/a']),
            'Correo' => $this->faker->unique()->safeEmail,
            'Password' => bcrypt('password'), // Cambiar 'password' por la contraseña deseada o utilizar una lógica para generar contraseñas seguras
            'Rol' => $this->faker->randomElement(['admin', 'user']),
            'Celular' => $this->faker->phoneNumber,
        ];
    }
}
