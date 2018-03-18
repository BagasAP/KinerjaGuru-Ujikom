<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomunikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komunikasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('wakasek');
            $table->integer('guru_inti');
            $table->integer('guru_adaptif');
            $table->integer('guru_normatif');
            $table->integer('guru_otomotif');
            $table->integer('guru_rpl');
            $table->integer('tu');
            $table->decimal('rata_rata_komunikasi');
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
        Schema::dropIfExists('komunikasis');
    }
}
