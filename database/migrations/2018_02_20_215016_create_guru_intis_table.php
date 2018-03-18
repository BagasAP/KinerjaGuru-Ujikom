<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuruIntisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru_intis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_guru');
            $table->string('status');
            $table->string('nip')->unique()->nullable();
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('pangkat');
            $table->date('tgl_mulai_kerja');
            $table->string('pendidikan_terakhir');
            $table->string('jenis_kelamin');
            $table->string('jabatan_fungisional');
            $table->string('nuptk');
            $table->text('mapel');
            $table->text('kelas');
            $table->integer('jumlah_kd');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('agama');
            $table->string('foto')->nullable();
            $table->integer('gurupengajar_id')->unique()->nullable();
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
        Schema::dropIfExists('guru_intis');
    }
}
