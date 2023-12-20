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
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id('id_sewa');
            $table->string('no_plat');
            $table->foreign('no_plat')->references('id')->on('mobils')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_user')->constrained(table: 'users', column: 'id_user')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->date('tanggal_pengembalian')->nullable();
            $table->string('titik_antar');
            $table->string('titik_jemput');
            $table->string('status');
            $table->double('total_harga');
            $table->string('jaminan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaans');
    }
};
