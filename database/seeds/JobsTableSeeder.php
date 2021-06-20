<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => 'Trial Job 1',
            'description' => 'This job is for demonstration only.',
            'user_id' => 1,
        ]);
        DB::table('jobs')->insert([
            'name' => 'Trial Job 1',
            'description' => 'This job is for demonstration only.',
            'user_id' => 2,
        ]);
    }
}
