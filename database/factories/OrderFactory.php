<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numerorden' => $this->faker->unique()->randomNumber(5, true),
            'valor' => $this->faker->randomFloat(3),
            'objeto' => $this->faker->text(500),
            'descripcion' => $this->faker->text(2000),
            'user_id' => User::all()->random()->id
        ];
    }
}
