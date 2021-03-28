<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'level_id' => 1,
                'nama_user' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'no_telepon' => '081297195343'
            ],
            [
                'level_id'          => 2,
                'nama_user'         => 'bca',
                'username'          => 'bca',
                'password'          => Hash::make('bca123'),
                'no_telepon'        => '0815999823432',
            ],
            [
                'level_id'          => 2,
                'nama_user'         => 'bri',
                'username'          => 'bri',
                'password'          => Hash::make('bri123'),
                'no_telepon'        => '081588832030',
            ],
            [
                'level_id'          => 2,
                'nama_user'         => 'mandiri',
                'username'          => 'mandiri',
                'password'          => Hash::make('mandiri123'),
                'no_telepon'        => '081890299239',
            ],

            [
                'level_id' => 3,
                'nama_user' => 'pelanggan',
                'username' => 'pelanggan',
                'password' => Hash::make('pelanggan'),
                'no_telepon' => '081297195343'
            ]
        ]);
    }
}
