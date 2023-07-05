<?php

namespace Database\Factories;

use App\Models\Graduate;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
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
            'graduate_id' => Graduate::all()->random()->id,
            'job_id' => Job::all()->random()->id,
            'FechaPostulacion' => $this->faker->date,
            'Estado' => $this->faker->randomElement(['Pendiente', 'Aprobada', 'Rechazada']),
        ];
    }
}
