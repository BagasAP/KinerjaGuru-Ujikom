<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('observasi_1')->nullable();
            $table->integer('observasi_2')->nullable();
            $table->integer('observasi_3')->nullable();
            $table->integer('observasi_4')->nullable();
            $table->integer('observasi_5')->nullable();
            $table->integer('nilai_observasi');
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
        Schema::dropIfExists('observasis');
    }
}
