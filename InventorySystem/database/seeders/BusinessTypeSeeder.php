<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusinessType;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Sole Proprietorship',
            'Partnership',
            'Corporation',
        ];

        foreach ($types as $type) {
            BusinessType::create(['type' => $type]);
        }
    }
}
