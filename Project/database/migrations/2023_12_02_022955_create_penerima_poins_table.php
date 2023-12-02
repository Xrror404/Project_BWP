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
        Schema::create('penerima_poin', function (Blueprint $table) {
            $table->string('id_pp', 5)->primary();
            $table->string('id_penerima', 10);
            $table->char('id_acara', 6);
            $table->foreign('id_penerima')->references('id_user')->on('users');
            $table->foreign('id_acara')->references('id_acara')->on('poin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_poins');
    }
};
