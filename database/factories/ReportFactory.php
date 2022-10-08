<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'n_radicado' => $this->faker->unique()->randomNumber(5, true),
            'tipo_mutacion' => $this->faker->text(10),
            'status' => $this->faker->randomElement(['completo', 'incompleto']),
            'notificacion' => $this->faker->text(30),
            'observaciones' => $this->faker->text(100)
        ];
    }
}
