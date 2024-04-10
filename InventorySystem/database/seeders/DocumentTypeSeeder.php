<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Official Receipt', 'Purchase Request', 'Past Inventory Report', 'Other'];

        foreach ($types as $type) {
            DocumentType::create(['type' => $type]);
        }
    }
}