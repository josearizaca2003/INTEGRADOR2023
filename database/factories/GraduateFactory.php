<?php

namespace Database\Factories;

use App\Models\Institution;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Graduate>
 */
class GraduateFactory extends Factory
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
            'person_id' => Person::all()->random()->id,
            'institution_id' => Institution::all()->random()->id,
            'AnioGraduacion' => $this->faker->year,
            'Carrera' => $this->faker->jobTitle,
        ];
    }
}
