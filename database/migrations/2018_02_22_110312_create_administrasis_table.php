<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('nilai1')->nullable();
            $table->integer('nilai2')->nullable();
            $table->integer('nilai3')->nullable();
            $table->integer('nilai4')->nullable();
            $table->integer('nilai5')->nullable();
            $table->integer('nilai6')->nullable();
            $table->integer('nilai7')->nullable();
            $table->integer('nilai8')->nullable();
            $table->integer('nilai9')->nullable();
            $table->integer('nilai10')->nullable();
            $table->integer('nilai11')->nullable();
            $table->integer('nilai12')->nullable();
            $table->integer('nilai13')->nullable();
            $table->integer('nilai14')->nullable();
            $table->integer('nilai15')->nullable();
            $table->integer('nilai16')->nullable();
            $table->integer('nilai17')->nullable();
            $table->integer('nilai18')->nullable();
            $table->integer('total_kelengkapan');
            $table->integer('nilai_administrasi');
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
        Schema::dropIfExists('administrasis');
    }
}
