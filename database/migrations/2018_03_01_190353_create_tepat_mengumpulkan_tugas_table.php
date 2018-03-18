<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTepatMengumpulkanTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tepat_mengumpulkan_tugas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->string('jenis_tugas')->nullable();
            $table->integer('keterlambatan')->nullable();
            $table->integer('jumlah')->nullable();
            $table->integer('nilai_tugas');
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
        Schema::dropIfExists('tepat_mengumpulkan_tugas');
    }
}
