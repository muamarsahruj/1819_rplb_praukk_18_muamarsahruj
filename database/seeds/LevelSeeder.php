<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level')->insert([
            ['nama_level' => 'admin'],
            ['nama_level' => 'bank'],
            ['nama_level' => 'pelanggan']
        ]);
    }
}
