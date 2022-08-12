<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Glosary>
 */
class GlosaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->text(50),
            'description' => $this->faker->text(300),
            'abecedario' => $this->faker->randomElement(['a', 'bcde', 'fgh', 'ijkl', 'mnop', 'qrstuv']),
            'user_id' => User::all()->random()->id
        ];
    }
}
