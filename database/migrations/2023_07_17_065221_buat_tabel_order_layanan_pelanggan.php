<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelOrderLayananPelanggan extends Migration
{
    public function up()
    {
        // Membuat tabel tb_pelanggan
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('namapel');
            $table->string('kontak');
            $table->string('sedang_cuci');
            $table->string('alamat');
            $table->integer('total_order')->default(0);
            $table->timestamps();
        });

        // Membuat tabel tb_layanan
        Schema::create('tb_layanan', function (Blueprint $table) {
            $table->id('id_layanan');
            $table->string('durasi');
            $table->string('nama_layanan');
            $table->text('desk');
            $table->text('desk2');
            $table->text('desk3');
            $table->string('satuan');
            $table->decimal('harga', 8, 2);
            $table->timestamps();
        });

        // Membuat tabel tb_order
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id('id_order');
            $table->string('kd_order');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_layanan');
            $table->decimal('total', 8, 2);
            $table->string('status');
            $table->string('durasi');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('tb_pelanggan');
            $table->foreign('id_layanan')->references('id_layanan')->on('tb_layanan');
        });
    }

    public function down()
    {
        // Menghapus tabel baru jika perlu
        Schema::dropIfExists('tb_order');
        Schema::dropIfExists('tb_pelanggan');
        Schema::dropIfExists('tb_layanan');
    }


    }

    ;
