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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('layanan');
            $table->date('tanggal_reservasi');
            $table->string('plat');
            $table->string('keluhan');

            $table->string('status')->default('Menunggu');
            $table->string('item')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
