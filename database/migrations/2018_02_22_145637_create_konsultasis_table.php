<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonsultasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('konsultasi_1')->nullable();
            $table->integer('konsultasi_2')->nullable();
            $table->integer('konsultasi_3')->nullable();
            $table->integer('konsultasi_4')->nullable();
            $table->integer('konsultasi_5')->nullable();
            $table->integer('nilai_konsultasi');
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
        Schema::dropIfExists('konsultasis');
    }
}
