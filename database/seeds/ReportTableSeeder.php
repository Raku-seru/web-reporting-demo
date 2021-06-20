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
            'imageurl_1' => 'null',
            'user_id' => 2,
        ]);
    }
}
