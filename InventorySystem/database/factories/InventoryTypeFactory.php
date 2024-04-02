<?php

namespace Database\Factories;

use App\Models\InventoryType;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InventoryType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = [
            'Finished Goods',
            'Raw Materials',
            'Components',
            'Work In Progress',
            'Maintenance, Repair, and Operation (MRO) Supplies',
            'Decoupling',
            'Excess',
            'Safety Stock',
            'Transit',
            'Packing Materials',
            'Service Inventory',
            'Anticipation',
            'Dead Stock',
            'On The Shelf',
            'In Storage',
        ];
    
        return [
            'type' => $this->faker->randomElement($types),
        ];
    }
}