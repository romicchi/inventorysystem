<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryType;

class InventoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

        foreach ($types as $type) {
            InventoryType::create(['type' => $type]);
        }
    }
}