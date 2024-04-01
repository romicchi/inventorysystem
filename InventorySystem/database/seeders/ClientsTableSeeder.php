<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\ReportStatus;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get a report status to associate with the clients
        $reportStatus = ReportStatus::first();

        // Create 10 clients with the same report status
        Client::factory()
            ->count(10)
            ->create(['report_status_id' => $reportStatus->id]);
    }
}