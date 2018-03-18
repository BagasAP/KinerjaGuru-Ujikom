<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanDoaPagisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_doa_pagis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->date('tgl_terlambat')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('nilai_doa_pagi');
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
        Schema::dropIfExists('kegiatan_doa_pagis');
    }
}
