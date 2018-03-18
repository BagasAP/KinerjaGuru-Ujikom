<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alfas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->date('tgl_alfa')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('nilai_alfa');
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
        Schema::dropIfExists('alfas');
    }
}
