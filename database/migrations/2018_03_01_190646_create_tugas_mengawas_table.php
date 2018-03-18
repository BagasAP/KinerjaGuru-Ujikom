<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasMengawasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_mengawas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('poin1')->nullable();
            $table->integer('poin2')->nullable();
            $table->integer('sesuai');
            $table->integer('nilai_mengawas');
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
        Schema::dropIfExists('tugas_mengawas');
    }
}
