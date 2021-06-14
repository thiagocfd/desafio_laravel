<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'cpf' => $this->faker->randomDigitNotNull,
            'rg' => $this->faker->randomDigitNotNull,
            'user_register' => $this->faker->userName,
            'user_update' => $this->faker->userName,
            'birth_date' => $this->faker->date,
            'phone_number' => $this->faker->phoneNumber,
            'state_birth' => $this->faker->state

        ];
    }
}
