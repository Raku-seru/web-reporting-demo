<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin Demo',
            'email' => 'admin@mail.com',
            'password' => Hash::make('demo1234'),
            'adminstatus' => true,
        ]);
    }
}
