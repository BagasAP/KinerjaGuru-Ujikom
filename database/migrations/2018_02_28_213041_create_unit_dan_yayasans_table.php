<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitDanYayasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_dan_yayasans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->date('tgl_tidak_diikuti')->nullable();
            $table->string('jenis_kegiatan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('nilai_unit_dan_yayasan');
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
        Schema::dropIfExists('unit_dan_yayasans');
    }
}
