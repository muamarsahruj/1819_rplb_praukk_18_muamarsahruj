<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelanggan_id')->constrained('pelanggan');
            $table->foreignId('penggunaan_id')->constrained('penggunaan');
            $table->string('bulan', 10);
            $table->year('tahun');
            $table->bigInteger('jumlah_meter');
            $table->decimal('jumlah_bayar', 8, 2);
            $table->enum('status', ['belum bayar', 'sudah bayar']);
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
        Schema::dropIfExists('tagihan');
    }
}
