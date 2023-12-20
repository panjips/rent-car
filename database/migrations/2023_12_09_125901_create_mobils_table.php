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
        Schema::create('mobils', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->string("keterangan");
            $table->string("gambar");
            $table->string("merek");
            $table->string("nama");
            $table->string("transmisi");
            $table->string("bahan_bakar");
            $table->double("harga_sewa");
            $table->string("warna");
            $table->string("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
