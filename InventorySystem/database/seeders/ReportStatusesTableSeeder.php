<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('report_statuses')->insert([
            ['status' => 'Testing'],
            ['status' => 'Confirmation'],
            ['status' => 'BIR'],
        ]);
    }
}
