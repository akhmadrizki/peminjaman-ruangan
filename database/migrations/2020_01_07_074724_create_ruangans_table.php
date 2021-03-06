<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_ruangan');
            $table->string('fasilitas');
            $table->bigInteger('jumlah_kursi');
            $table->bigInteger('jumlah_meja');
            $table->string('status_ruangan');
            $table->string('tanggal_pinjam')->nullable()->default(null);
            $table->string('tanggal_kembali')->nullable()->default(null);
            $table->unsignedInteger('id_mahasiswa')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruangans');
    }
}
