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
        Schema::table('tb_pengeluaran', function (Blueprint $table) {
            $table->integer('jumlah')->change();
            $table->date('waktu')->change();
        });
        Schema::table('tb_layanan', function (Blueprint $table) {
            $table->integer('satuan')->change();
            $table->integer('harga')->change();
        });
        Schema::table('tb_pelanggan', function (Blueprint $table) {
            $table->decimal('kontak')->change();
            $table->dropColumn('total_cuci');
        });
        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
