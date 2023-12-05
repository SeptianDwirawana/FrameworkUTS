<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('barangs', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('kode_barang');
        $table->string('nama_barang');
        $table->string('jenis_varian');
        $table->string('qty');
        $table->string('harga_jual');
        $table->string('total_harga');
        $table->string('potongan_harga');
        $table->string('harga_bayar');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
