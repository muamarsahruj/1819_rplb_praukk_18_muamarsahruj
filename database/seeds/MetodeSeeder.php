<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('metode_pembayaran')->insert([
            [
                'user_id'           => 2,
                'nama_metode'       => 'bca',
                'rekening'          => 1234567891,
                'logo_bank'         => 'struk.png',
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s"),
            ],
            [
                'user_id'           => 3,
                'nama_metode'       => 'bri',
                'rekening'          => 1234567891,
                'logo_bank'         => 'struk.png',
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s"),
            ],
            [
                'user_id'           => 4,
                'nama_metode'       => 'mandiri',
                'rekening'          => 1234567891,
                'logo_bank'         => 'struk.png',
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
