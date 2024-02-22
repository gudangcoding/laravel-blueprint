<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->date('tanggal');
            $table->string('status');
            $table->string('kode');
            $table->string('jumlah_harga');
            $table->string('jumlah_barang')->nullable();
            $table->string('token_midtrans')->nullable();
            $table->string('url_bayar')->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->string('catatan')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
