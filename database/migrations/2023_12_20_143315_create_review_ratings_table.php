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
        Schema::create('review_ratings', function (Blueprint $table) {
            $table->id('id_review');
            $table->string('no_plat');
            $table->foreign('no_plat')->references('id')->on('mobils')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_user')->constrained(table: 'users', column: 'id_user')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_sewa')->constrained(table: 'penyewaans', column: 'id_sewa')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('rating');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_ratings');
    }
};
