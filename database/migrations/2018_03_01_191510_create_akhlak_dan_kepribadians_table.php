<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkhlakDanKepribadiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akhlak_dan_kepribadians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->string('jenis_tugas')->nullable();
            $table->integer('keterlambatan');
            $table->integer('nilai_akhlak_dan_kepribadian');
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
        Schema::dropIfExists('akhlak_dan_kepribadians');
    }
}
