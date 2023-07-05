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
        // Schema::create('tb_pengeluaran', function (Blueprint $table) {
        //     $table->id('id_pengeluaran');
        //     $table->string('kd_pengeluaran');
        //     $table->string('pengeluaran');
        //     $table->string('desk');
        //     $table->string('jumlah');
        //     $table->string('operator');
        //     $table->string('waktu');
        //     $table->timestamps();
        // });
        Schema::table('tb_pengeluaran', function (Blueprint $table) {
            $table->integer('jumlah')->change();
            $table->date('waktu')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengeluaran');
    }
};
