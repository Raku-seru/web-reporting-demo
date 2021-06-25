<?php

use Illuminate\Database\Seeder;

class ReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'status' => 1,
            'remarks' => 'Trial Report 1. This report is for demonstration only.',
            'imageurl_1' => '1624382122 - Demo.jpg',
            'user_id' => 2,
            'created_at' => '2021-06-06 07:31:21',
        ]);
    }
}
