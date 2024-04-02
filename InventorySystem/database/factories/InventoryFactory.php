<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\InventoryType;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        if (InventoryType::count() === 0) {
            InventoryType::factory()->create();
        }
        
        return [
            'client_id' => Client::factory(),
            'name' => $this->faker->word,
            'inventory_type_id' => InventoryType::all()->random()->id,
            'description' => $this->faker->sentence,
            'unit' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'total' => $this->faker->randomFloat(2, 1, 1000),
            'image' => $this->faker->imageUrl(),
            'date_purchase' => $this->faker->date(),
        ];
    }
}