<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'  => 'Dev',
            'email' => 'dev@empathy-building.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name'  => 'QA',
            'email' => 'qa@empathy-building.com',
            'password' => Hash::make('password'),
        ]);
    }
}
