<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKetuntasanNilaiSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketuntasan_nilai_siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->string('bidang_studi')->nullable();
            $table->string('kelas')->nullable();
            $table->integer('jumlah_siswa');
            $table->integer('tuntas');
            $table->integer('belum');
            $table->integer('kkm')->nullable();
            $table->integer('nilai_siswa');
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
        Schema::dropIfExists('ketuntasan_nilai_siswas');
    }
}
