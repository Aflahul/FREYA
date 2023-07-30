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
        //
        // Schema::create(
        //     'tb_pengaturan',
        //     function (Blueprint $table) {
        //         $table->id('id_pengaturan');
        //         $table->id('id_profil');
        //         $table->string('nama_pengaturan');
        //         $table->text('desk1')->nullable();
        //         $table->decimal('desk2', 10, 7)->nullable();
        //         $table->timestamps();
        //         $table->foreign('id_profil')->references('id_profil')->on('tb_profil');
        //     }
        // );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
