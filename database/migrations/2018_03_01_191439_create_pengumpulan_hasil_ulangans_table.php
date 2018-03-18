<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengumpulanHasilUlangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumpulan_hasil_ulangans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->string('jenis_tugas')->nullable();
            $table->integer('keterlambatan');
            $table->integer('nilai_ulangan');
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
        Schema::dropIfExists('pengumpulan_hasil_ulangans');
    }
}
