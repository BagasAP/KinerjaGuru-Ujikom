<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('poin1')->nullable();
            $table->integer('poin2')->nullable();
            $table->integer('poin3')->nullable();
            $table->integer('jumlah');
            $table->integer('nilai_agenda_guru');
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
        Schema::dropIfExists('agenda_gurus');
    }
}
