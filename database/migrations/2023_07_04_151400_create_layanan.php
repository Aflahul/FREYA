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
        Schema::create('tb_layanan', function (Blueprint $table) {
            $table->id('id_layanan');
            $table->string('kd_layanan');
            $table->string('layanan');
            $table->string('nama_layanan');
            $table->string('desk');
            $table->string('satuan');
            $table->string('harga');
            $table->string('aktif');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_layanan');
    }
};
