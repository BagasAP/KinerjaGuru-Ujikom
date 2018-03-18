<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekapNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id');
            $table->integer('nilai_administrasi');
            $table->integer('nilai_konsultasi');
            $table->integer('nilai_observasi');
            $table->integer('nilai_izin');
            $table->integer('nilai_alfa');
            $table->integer('nilai_terlambat_ke_kelas');
            $table->integer('nilai_kegiatan_unit_dan_yayasan');
            $table->integer('nilai_kegiatan_doa_pagi');
            $table->integer('nilai_indisipliner');
            $table->integer('nilai_tepat_mengumpulkan_tugas');
            $table->integer('nilai_penampilan');
            $table->integer('nilai_tugas_mengawas');
            $table->integer('nilai_komunikasi');
            $table->integer('nilai_ghibah');
            $table->integer('nilai_cepat_tanggap_dan_support');
            $table->integer('nilai_pengelolaan_emosi');
            $table->integer('nilai_komentar_dan_status_medsos');
            $table->integer('nilai_ketuntasan_nilai_siswa');
            $table->integer('nilai_pengumpulan_hasil_ulangan');
            $table->integer('nilai_akhlak_dan_kepribadian');
            $table->integer('nilai_pengumpulan_hasil_siswa');
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
        Schema::dropIfExists('rekap_nilais');
    }
}
