<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'contact_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // password
            'address' => $this->faker->address,
            'tin' => $this->faker->randomNumber(9),
            'vn' => $this->faker->randomNumber(9),
            'rdo_code' => $this->faker->randomNumber(3),
            'report_status_id' => 1, // Default to 1, you may want to change this
            'duration' => $this->faker->randomNumber(2),
        ];
    }
}