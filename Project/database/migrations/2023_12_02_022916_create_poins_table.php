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
        Schema::create('poin', function (Blueprint $table) {
            $table->char('id_acara', 6)->primary();
            $table->string('nama_acara');
            $table->smallInteger('tipe_acara');
            $table->integer('jml_poin');
            $table->date('poin_added_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poins');
    }
};
