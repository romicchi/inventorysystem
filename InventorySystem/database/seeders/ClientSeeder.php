<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'company' => 'Client Company',
            'contact_name' => 'Client Name',
            'phone' => '1234567890',
            'email' => 'client@gmail.com',
            'password' => Hash::make('password123'),
            'address' => 'Client Address',
            'tin' => '123456789',
            'vn' => '123456789',
            'rdo_code' => '123456',
            'report_status_id' => 1,
            'duration' => '1 year',
        ]);
    }
}