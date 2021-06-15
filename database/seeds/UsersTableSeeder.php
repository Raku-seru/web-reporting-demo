<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'is_admin' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Testing User',
            'email' => 'test@mail.com',
            'password' => Hash::make('demo1234'),
            'is_admin' => 0,
        ]);
    }
}
