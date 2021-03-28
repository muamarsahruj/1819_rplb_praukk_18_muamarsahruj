<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')->constrained('tagihan');
            $table->foreignId('pelanggan_id')->constrained('pelanggan');
            $table->foreignId('metode_id')->constrained('metode_pembayaran');
            $table->date('tgl_pembayaran');
            $table->string('bulan_bayar', 10);
            $table->year('tahun_bayar');
            $table->decimal('biaya_admin');
            $table->decimal('total_bayar');
            $table->enum('status', ['lunas', 'belum lunas', 'sedang diproses']);
            $table->string('bukti_transaksi', 225);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
