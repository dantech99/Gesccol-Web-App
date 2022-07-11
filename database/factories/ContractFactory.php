<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numeroprocesos' => $this->faker->unique()->randomNumber(5, true),
            'tipo' => $this->faker->text(100),
            'estado' => $this->faker->text(20),
            'entidad' => $this->faker->text(50),
            'objetivo' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1, 2, 3]),
            'valor' => $this->faker->randomFloat(3),
            'user_id' => User::all()->random()->id
        ];
    }
}
