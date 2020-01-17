<?php

use Illuminate\Database\Seeder;

class RegionAndStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('region_and_states')->delete();
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Magway Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Mandalay Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Tanintharyi Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Ayeyarwady Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Bago Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Yangon Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Sagaing Region',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Chin State',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Kachin State',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Kayah State',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Kayin State',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Mon State',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Rakhine State',
        ]);
        DB::table('region_and_states')->insert([
            'region_and_state'  => 'Shan State',
        ]);
    }
}
