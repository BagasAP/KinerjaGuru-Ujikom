<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeterlambatanKeKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterlambatan_ke_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->date('tgl_terlambat')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('nilai_terlambat_ke_kelas');
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
        Schema::dropIfExists('keterlambatan_ke_kelas');
    }
}
