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
        // Schema::create('tb_order', function (Blueprint $table) {
        //     $table->id('id_order');
        //     $table->string('kd_order');
        //     $table->string('id_pelanggan');
        //     $table->string('id_layanan');
        //     $table->string('total');
        //     $table->string('status');
        //     $table->timestamps();
        // });
        Schema::table('tb_order', function (Blueprint $table) {
            $table->integer('total')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order');
    }
};
