<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuruPengajar;
use App\Administrasi;
use App\AgendaGuru;
use App\Alfa;
use App\AkhlakDanKepribadian;
use App\CepatTanggapDanSupport;
use App\Ghibah;
use App\Indisipliner;
use App\Izin;
use App\KegiatanDoaPagi;
use App\KeterlambatanKeKelas;
use App\KetuntasanNilaiSiswa;
use App\KomentarDanStatusMedsos;
use App\Komunikasi;
use App\Konsultasi;
use App\Observasi;
use App\Penampilan;
use App\PengelolaanEmosi;
use App\PengumpulanHasilSiswa;
use App\PengumpulanHasilUlangan;
use App\TepatMengumpulkanTugas;
use App\TugasMengawas;
use App\UnitDanYayasan;
use App\RekapNilai;
use Alert;
class PenilaianGuruController extends Controller
{
    //
    public function index()
    {
    	$guru = GuruPengajar::all();
    	return view('pages.penilaianguru',compact('guru'));
    }

    public function store(Request $request)
    {
    		$total_kelengkapan = $request->nilai1+$request->nilai2+$request->nilai3+
            				$request->nilai4+$request->nilai5+$request->nilai6+$request->nilai7+
            				$request->nilai8+$request->nilai9+$request->nilai10+$request->nilai11+
            				$request->nilai12+$request->nilai13+$request->nilai14+$request->nilai15+
            				$request->nilai16+$request->nilai17+$request->nilai18;

            $administrasi = new Administrasi();
            $administrasi->guru_id = $request->guru_id;
            $administrasi->nilai1 = $request->nilai1;
            $administrasi->nilai2 = $request->nilai2;
            $administrasi->nilai3 = $request->nilai3;
            $administrasi->nilai4 = $request->nilai4;
            $administrasi->nilai5 = $request->nilai5;
            $administrasi->nilai6 = $request->nilai6;
            $administrasi->nilai7 = $request->nilai7;
            $administrasi->nilai8 = $request->nilai8;
            $administrasi->nilai9 = $request->nilai9;
            $administrasi->nilai10 = $request->nilai10;
            $administrasi->nilai11 = $request->nilai11;
            $administrasi->nilai12 = $request->nilai12;
            $administrasi->nilai13 = $request->nilai13;
            $administrasi->nilai14 = $request->nilai14;
            $administrasi->nilai15 = $request->nilai15;
            $administrasi->nilai16 = $request->nilai16;
            $administrasi->nilai17 = $request->nilai17;
            $administrasi->nilai18 = $request->nilai18;
            $administrasi->total_kelengkapan = $total_kelengkapan;

            if($total_kelengkapan <= 18 && $total_kelengkapan >= 15){
            	$nilai_1="5";
         	}elseif ($total_kelengkapan <=14 && $total_kelengkapan >= 11) {
            	$nilai_1="4";
         	}elseif ($total_kelengkapan <=10 && $total_kelengkapan >= 7) {
             	$nilai_1="3";
         	}elseif ($total_kelengkapan <=6 && $total_kelengkapan >= 3) {
             	$nilai_1="2";
         	}elseif ($total_kelengkapan <=2 && $total_kelengkapan >= 1 ) {
            	$nilai_1="1";
         	}else{
            	$nilai_1="0";
         	}				
            $administrasi->nilai_administrasi = $nilai_1;
            $administrasi->save();

            $konsultasi = new Konsultasi();
            $konsultasi->guru_id = $request->guru_id;
            $konsultasi->konsultasi_1 = $request->konsultasi_1;
            $konsultasi->konsultasi_2 = $request->konsultasi_2;
            $konsultasi->konsultasi_3 = $request->konsultasi_3;
            $konsultasi->konsultasi_4 = $request->konsultasi_4;
            $konsultasi->konsultasi_5 = $request->konsultasi_5;
            $total_konsultasi = $request->konsultasi_1+$request->konsultasi_2+$request->konsultasi_3+$request->konsultasi_4+$request->konsultasi_5;
            $konsultasi->nilai_konsultasi = $total_konsultasi;
            $konsultasi->save();

			$observasi = new Observasi();
            $observasi->guru_id = $request->guru_id;
            $observasi->observasi_1 = $request->observasi_1;
            $observasi->observasi_2 = $request->observasi_2;
            $observasi->observasi_3 = $request->observasi_3;
            $observasi->observasi_4 = $request->observasi_4;
            $observasi->observasi_5 = $request->observasi_5;
            $total_observasi = $request->observasi_1+$request->observasi_2+$request->observasi_3+$request->observasi_4+$request->observasi_5;
            $observasi->nilai_observasi = $total_observasi;
            $observasi->save(); 

            $izin = new Izin();
            $izin->guru_id = $request->guru_id;
            $izin->jumlah = $request->jumlah_izin;
            if($request->jumlah_izin < 1 ){
                $nilai_2="5";
            }elseif ($request->jumlah_izin <= 2 && $request->jumlah_izin >= 1) {
                $nilai_2="4";
            }elseif ($request->jumlah_izin <= 4 && $request->jumlah_izin >= 3) {
                $nilai_2="3";
            }elseif ($request->jumlah_izin <= 6 && $request->jumlah_izin >= 5) {
                $nilai_2="2";
            }elseif ($request->jumlah_izin <= 8 && $request->jumlah_izin >= 7 ) {
                $nilai_2="1";
            }else{
                $nilai_2="0";
            }
           
            $izin->nilai_izin = $nilai_2;
            $izin->save();

            $alfa = new Alfa();
            $alfa->guru_id = $request->guru_id;
            $alfa->jumlah = $request->jumlah_alfa;   
            if($request->jumlah_alfa < 1 ){
                $nilai_3="5";
            }elseif ($request->jumlah_alfa <= 2 && $request->jumlah_alfa >= 1) {
                $nilai_3="4";
            }elseif ($request->jumlah_alfa <= 4 && $request->jumlah_alfa >= 3) {
                $nilai_3="3";
            }elseif ($request->jumlah_alfa <= 6 && $request->jumlah_alfa >= 5) {
                $nilai_3="2";
            }elseif ($request->jumlah_alfa <= 8 && $request->jumlah_alfa >= 7 ) {
                $nilai_3="1";
            }else{
                $nilai_3="0";
            }       
            $alfa->nilai_alfa = $nilai_3;
            $alfa->save();

            $terlambatkekelas = new KeterlambatanKeKelas();
            $terlambatkekelas->guru_id = $request->guru_id;
            $terlambatkekelas->jumlah = $request->jumlah_terlambat_kekelas;
            if($request->jumlah_terlambat_kekelas < 1 ){
                $nilai_4="5";
            }elseif ($request->jumlah_terlambat_kekelas <= 1 ) {
                $nilai_4="4";
            }elseif ($request->jumlah_terlambat_kekelas <= 2 ) {
                $nilai_4="3";
            }elseif ($request->jumlah_terlambat_kekelas <= 3 ) {
                $nilai_4="2";
            }elseif ($request->jumlah_terlambat_kekelas <= 4 ) {
                $nilai_4="1";
            }else{
                $nilai_4="0";
            }               
            $terlambatkekelas->nilai_terlambat_ke_kelas = $nilai_4;
            $terlambatkekelas->save();

            $kegiatanunitdanyayasan = new UnitDanYayasan();
            $kegiatanunitdanyayasan->guru_id = $request->guru_id;
            $kegiatanunitdanyayasan->jumlah = $request->jumlah_ketidakhadiran_unityayasan;
            if($request->jumlah_ketidakhadiran_unityayasan < 1  ){
                $nilai_5="5";
            }elseif ($request->jumlah_ketidakhadiran_unityayasan <= 1 ) {
                $nilai_5="4";
            }elseif ($request->jumlah_ketidakhadiran_unityayasan <= 2 ) {
                $nilai_5="3";
            }elseif ($request->jumlah_ketidakhadiran_unityayasan <= 3 ) {
                $nilai_5="2";
            }elseif ($request->jumlah_ketidakhadiran_unityayasan <= 4 ) {
                $nilai_5="1";
            }else{
                $nilai_5="0";
            }           
            $kegiatanunitdanyayasan->nilai_unit_dan_yayasan = $nilai_5;
            $kegiatanunitdanyayasan->save();

            $kegiatandoapagi = new KegiatanDoaPagi();
            $kegiatandoapagi->guru_id = $request->guru_id;
            $kegiatandoapagi->jumlah = $request->jumlah_ketidakhadiran_doapagi;
            if($request->jumlah_ketidakhadiran_doapagi < 1 ){
                $nilai_6="5";
            }elseif ($request->jumlah_ketidakhadiran_doapagi <= 2 && $request->jumlah_ketidakhadiran_doapagi >= 1) {
                $nilai_6="4";
            }elseif ($request->jumlah_ketidakhadiran_doapagi <= 4 && $request->jumlah_ketidakhadiran_doapagi >= 3) {
                $nilai_6="3";
            }elseif ($request->jumlah_ketidakhadiran_doapagi <= 6 && $request->jumlah_ketidakhadiran_doapagi >= 5) {
                $nilai_6="2";
            }elseif ($request->jumlah_ketidakhadiran_doapagi <= 8 && $request->jumlah_ketidakhadiran_doapagi >= 7 ) {
                $nilai_6="1";
            }else{
                $nilai_6="0";
            }           
            $kegiatandoapagi->nilai_doa_pagi = $nilai_6;
            $kegiatandoapagi->save();

            $indisipliner = new Indisipliner();
            $indisipliner->guru_id = $request->guru_id;
            $indisipliner->jumlah = $request->jumlah_pelanggaran;
            if($request->jumlah_pelanggaran < 1 ){
                $nilai_7="5";
            }elseif ($request->jumlah_pelanggaran <= 1 ) {
                $nilai_7="3";
            }elseif ($request->jumlah_pelanggaran > 1 ) {
                $nilai_7="0";
            }else{
                $nilai_7="0";
            }           
            $indisipliner->nilai_indisipliner = $nilai_7;
            $indisipliner->save();


            $komunikasi = new Komunikasi();
            $komunikasi->guru_id = $request->guru_id;
            $komunikasi->wakasek = $request->komunikasi_wakasek;
            $komunikasi->guru_inti = $request->komunikasi_guru_inti;           
            $komunikasi->guru_adaptif = $request->komunikasi_guru_adaptif;
            $komunikasi->guru_normatif = $request->komunikasi_guru_normatif;
            $komunikasi->guru_otomotif = $request->komunikasi_guru_produktif_otomotif;
            $komunikasi->guru_rpl = $request->komunikasi_guru_produktif_rpl;
            $komunikasi->tu = $request->komunikasi_tu;
            $jumlah_komunikasi = $request->komunikasi_guru_inti+$request->komunikasi_wakasek+$request->komunikasi_guru_adaptif+$request->komunikasi_guru_normatif+$request->komunikasi_guru_produktif_otomotif+$request->komunikasi_guru_produktif_rpl+$request->komunikasi_tu;
            $rata_komunikasi = $jumlah_komunikasi/7;
            $komunikasi->rata_rata_komunikasi = $rata_komunikasi;
            $komunikasi->save();

            $ghibah = new Ghibah();
            $ghibah->guru_id = $request->guru_id;
            $ghibah->wakasek = $request->ghibah_wakasek;
            $ghibah->guru_inti = $request->ghibah_guru_inti;           
            $ghibah->guru_adaptif = $request->ghibah_guru_adaptif;
            $ghibah->guru_normatif = $request->ghibah_guru_normatif;
            $ghibah->guru_otomotif = $request->ghibah_guru_produktif_otomotif;
            $ghibah->guru_rpl = $request->ghibah_guru_produktif_rpl;
            $ghibah->tu = $request->ghibah_tu;
            $jumlah_ghibah = $request->ghibah_guru_inti+$request->ghibah_wakasek+$request->ghibah_guru_adaptif+$request->ghibah_guru_normatif+$request->ghibah_guru_produktif_otomotif+$request->ghibah_guru_produktif_rpl+$request->ghibah_tu;
            $rata_ghibah = $jumlah_ghibah/7;
            $ghibah->rata_rata_ghibah = $rata_ghibah;
            $ghibah->save();

            $cepattanggapdansupport = new CepatTanggapDanSupport();
            $cepattanggapdansupport->guru_id = $request->guru_id;
            $cepattanggapdansupport->wakasek = $request->cepattanggap_wakasek;
            $cepattanggapdansupport->guru_inti = $request->cepattanggap_guru_inti;           
            $cepattanggapdansupport->guru_adaptif = $request->cepattanggap_guru_adaptif;
            $cepattanggapdansupport->guru_normatif = $request->cepattanggap_guru_normatif;
            $cepattanggapdansupport->guru_otomotif = $request->cepattanggap_guru_produktif_otomotif;
            $cepattanggapdansupport->guru_rpl = $request->cepattanggap_guru_produktif_rpl;
            $cepattanggapdansupport->tu = $request->cepattanggap_tu;
            $jumlah_cepattanggap = $request->cepattanggap_guru_inti+$request->cepattanggap_wakasek+$request->cepattanggap_guru_adaptif+$request->cepattanggap_guru_normatif+$request->cepattanggap_guru_produktif_otomotif+$request->cepattanggap_guru_produktif_rpl+$request->cepattanggap_tu;
            $rata_cepattanggap = $jumlah_cepattanggap/7;
            $cepattanggapdansupport->rata_rata_tanggap_dan_support = $rata_cepattanggap;
            $cepattanggapdansupport->save();

            $pengelolaanemosi = new PengelolaanEmosi();
            $pengelolaanemosi->guru_id = $request->guru_id;
            $pengelolaanemosi->wakasek = $request->emosi_wakasek;
            $pengelolaanemosi->guru_inti = $request->emosi_guru_inti;         
            $pengelolaanemosi->guru_adaptif = $request->emosi_guru_adaptif;
            $pengelolaanemosi->guru_normatif = $request->emosi_guru_normatif;
            $pengelolaanemosi->guru_otomotif = $request->emosi_guru_produktif_otomotif;
            $pengelolaanemosi->guru_rpl = $request->emosi_guru_produktif_rpl;
            $pengelolaanemosi->tu = $request->emosi_tu;
            $jumlah_emosi = $request->emosi_guru_inti+$request->emosi_wakasek+$request->emosi_guru_adaptif+$request->emosi_guru_normatif+$request->emosi_guru_produktif_otomotif+$request->emosi_guru_produktif_rpl+$request->emosi_tu;
            $rata_emosi = $jumlah_emosi/7;
            $pengelolaanemosi->rata_rata_emosi = $rata_emosi;
            $pengelolaanemosi->save();

            $komentardanstatus = new KomentarDanStatusMedsos();
            $komentardanstatus->guru_id = $request->guru_id;
            $komentardanstatus->wakasek = $request->medsos_wakasek;
            $komentardanstatus->guru_inti = $request->medsos_guru_inti;            
            $komentardanstatus->guru_adaptif = $request->medsos_guru_adaptif;
            $komentardanstatus->guru_normatif = $request->medsos_guru_normatif;
            $komentardanstatus->guru_otomotif = $request->medsos_guru_produktif_otomotif;
            $komentardanstatus->guru_rpl = $request->medsos_guru_produktif_rpl;
            $komentardanstatus->tu = $request->medsos_tu;
            $jumlah_medsos = $request->medsos_guru_inti+$request->medsos_wakasek+$request->medsos_guru_adaptif+$request->medsos_guru_normatif+$request->medsos_guru_produktif_otomotif+$request->medsos_guru_produktif_rpl+$request->medsos_tu;
            $rata_medsos = $jumlah_medsos/7;
            $komentardanstatus->rata_rata_medsos = $rata_medsos;
            $komentardanstatus->save();

            $penampilan = new Penampilan();
            $penampilan->guru_id = $request->guru_id;
            $penampilan->jumlah = $request->jumlah_penampilan; 
            if($request->jumlah_penampilan < 1  ){
                $nilai_8="5";
            }elseif ($request->jumlah_penampilan <= 2 && $request->jumlah_penampilan >= 1) {
                $nilai_8="4";
            }elseif ($request->jumlah_penampilan <= 4 && $request->jumlah_penampilan >= 3) {
                $nilai_8="3";
            }elseif ($request->jumlah_penampilan <= 6 && $request->jumlah_penampilan >= 5) {
                $nilai_8="2";
            }elseif ($request->jumlah_penampilan <= 8 && $request->jumlah_penampilan >= 7 ) {
                $nilai_8="1";
            }else{
                $nilai_8="0";
            }       
            $penampilan->nilai_penampilan = $nilai_8;
            $penampilan->save();

            $sesuai_jadwal = $request->poin1+$request->poin2;
            $nilai_mengawas = $request->poin1+$request->poin2;
            if($sesuai_jadwal = 10 ){
                $nilai_15="5";
                $sesuai ="2";
            }elseif ($sesuai_jadwal = 5) {
                $nilai_15="3";
                $sesuai ="1";
            }else{
                $nilai_15="0";
                $sesuai ="0";
            }  
            $tugasmengawas = new TugasMengawas();
            $tugasmengawas->guru_id = $request->guru_id;
            $tugasmengawas->sesuai = $sesuai;           
            $tugasmengawas->nilai_mengawas =$nilai_15;
            $tugasmengawas->save();


            $tepatmengumpulkantugas = new TepatMengumpulkanTugas();
            $tepatmengumpulkantugas->guru_id = $request->guru_id;
            $tepatmengumpulkantugas->jumlah = $request->jumlah_tepat_tugas;
            if($request->jumlah_tepat_tugas < 1 ){
                $nilai_9="5";
            }elseif ($request->jumlah_tepat_tugas <= 1 ) {
                $nilai_9="4";
            }elseif ($request->jumlah_tepat_tugas <= 2 ) {
                $nilai_9="3";
            }elseif ($request->jumlah_tepat_tugas <= 3 ) {
                $nilai_9="2";
            }elseif ($request->jumlah_tepat_tugas <= 4 ) {
                $nilai_9="1";
            }else{
                $nilai_9="0";
            }           
            $tepatmengumpulkantugas->nilai_tugas = $nilai_9;
            $tepatmengumpulkantugas->save();

            $ketuntasannilaisiswa = new KetuntasanNilaiSiswa();
            $ketuntasannilaisiswa->guru_id = $request->guru_id;
            $ketuntasannilaisiswa->jumlah_siswa = $request->jumlah_siswa;
            $ketuntasannilaisiswa->tuntas = $request->tuntas_siswa;
            $belum = $request->jumlah_siswa-$request->tuntas_siswa;
            $ketuntasannilaisiswa->belum = $belum;

            if($belum < 1 ){
                $nilai_10="5";
            }elseif ($belum <= 10 && $belum >= 5) {
                $nilai_10="4";
            }elseif ($belum <= 15 && $belum >= 11) {
                $nilai_10="3";
            }elseif ($belum <= 20 && $belum >= 16) {
                $nilai_10="2";
            }elseif ($belum <= 25 && $belum >= 21 ) {
                $nilai_10="1";
            }else{
                $nilai_10="0";
            }  

            $ketuntasannilaisiswa->nilai_siswa = $nilai_10;
            $ketuntasannilaisiswa->save();

            $pengumpulanhasilulangan = new PengumpulanHasilUlangan();
            $pengumpulanhasilulangan->guru_id = $request->guru_id;
            $pengumpulanhasilulangan->keterlambatan = $request->jumlah_ulangan;
            if($request->jumlah_ulangan < 1 ){
                $nilai_11="5";
            }elseif ($request->jumlah_ulangan <= 1 ) {
                $nilai_11="4";
            }elseif ($request->jumlah_ulangan <= 2 ) {
                $nilai_11="3";
            }elseif ($request->jumlah_ulangan <= 3 ) {
                $nilai_11="2";
            }elseif ($request->jumlah_ulangan <= 4 ) {
                $nilai_11="1";
            }else{
                $nilai_11="0";
            }           
            $pengumpulanhasilulangan->nilai_ulangan = $nilai_11;
            $pengumpulanhasilulangan->save();

            $akhlakdankepribadian = new AkhlakDanKepribadian();
            $akhlakdankepribadian->guru_id = $request->guru_id;
            $akhlakdankepribadian->keterlambatan = $request->jumlah_akhlak;
            if($request->jumlah_akhlak < 1 ){
                $nilai_12="5";
            }elseif ($request->jumlah_akhlak <= 1 ) {
                $nilai_12="4";
            }elseif ($request->jumlah_akhlak <= 2 ) {
                $nilai_12="3";
            }elseif ($request->jumlah_akhlak <= 3 ) {
                $nilai_12="2";
            }elseif ($request->jumlah_akhlak <= 4 ) {
                $nilai_12="1";
            }else{
                $nilai_12="0";
            }               
            $akhlakdankepribadian->nilai_akhlak_dan_kepribadian = $nilai_12;
            $akhlakdankepribadian->save();

            $hasilsiswa = new PengumpulanHasilSiswa();
            $hasilsiswa->guru_id = $request->guru_id;
            $hasilsiswa->tugas1 = $request->hasil_tugas1;
            $hasilsiswa->tugas2 = $request->hasil_tugas2;
            $hasilsiswa->tugas3 = $request->hasil_tugas3;
            $hasilsiswa->tugas4 = $request->hasil_tugas4;
            $jumlah_hasil = $request->hasil_tugas1+$request->hasil_tugas2+$request->hasil_tugas3+$request->hasil_tugas4;
            $hasilsiswa->jumlah = $jumlah_hasil;
            if($jumlah_hasil <= 5 && $jumlah_hasil >= 4){
                $nilai_13="5";
            }elseif ($jumlah_hasil <= 3 && $jumlah_hasil >= 4) {
                $nilai_13="4";
            }elseif ($jumlah_hasil <= 2 && $jumlah_hasil >= 3) {
                $nilai_13="3";
            }elseif ($jumlah_hasil <= 1 && $jumlah_hasil >= 2) {
                $nilai_13="2";
            }elseif ($jumlah_hasil < 1 ) {
                $nilai_13="1";
            }else{
                $nilai_13="0";
            }           
            $hasilsiswa->nilai_hasil_siswa = $nilai_13;
            $hasilsiswa->save();

            $agendaguru = new AgendaGuru();
            $agendaguru->guru_id = $request->guru_id;
            $agendaguru->poin1 = $request->agenda_poin1;
            $agendaguru->poin2 = $request->agenda_poin2;
            $agendaguru->poin3 = $request->agenda_poin3;
            $jumlah_agenda = $request->agenda_poin1+$request->agenda_poin2+$request->agenda_poin3;
            $agendaguru->jumlah = $jumlah_agenda;
            if($jumlah_agenda = 3 ){
                $nilai_14="5";
            }elseif ($jumlah_agenda = 2) {
                $nilai_14="4";
            }elseif ($jumlah_agenda = 1) {
                $nilai_14="3";
            }elseif ($jumlah_agenda < 0) {
                $nilai_14="1";
            }else{
                $nilai_14="0";
            }           
            $agendaguru->nilai_agenda_guru = $nilai_14;
            $agendaguru->save();


            $rekap = new RekapNilai();
            $rekap->guru_id = $request->guru_id;
            $rekap->nilai_administrasi = $nilai_1;
            $rekap->nilai_konsultasi = $total_konsultasi;
            $rekap->nilai_observasi = $total_observasi;
            $rekap->nilai_izin = $nilai_2;
            $rekap->nilai_alfa = $nilai_3;
            $rekap->nilai_terlambat_ke_kelas = $nilai_4;
            $rekap->nilai_kegiatan_unit_dan_yayasan = $nilai_5;
            $rekap->nilai_kegiatan_doa_pagi = $nilai_6;
            $rekap->nilai_indisipliner = $nilai_7;
            $rekap->nilai_tepat_mengumpulkan_tugas = $nilai_9;
            $rekap->nilai_penampilan = $nilai_8;
            $rekap->nilai_tugas_mengawas = $nilai_15;
            $rekap->nilai_komunikasi = $rata_komunikasi;
            $rekap->nilai_ghibah = $rata_ghibah;
            $rekap->nilai_cepat_tanggap_dan_support = $rata_cepattanggap;
            $rekap->nilai_pengelolaan_emosi = $rata_emosi;
            $rekap->nilai_komentar_dan_status_medsos = $rata_medsos;
            $rekap->nilai_ketuntasan_nilai_siswa = $nilai_10;
            $rekap->nilai_pengumpulan_hasil_ulangan = $nilai_11;
            $rekap->nilai_akhlak_dan_kepribadian = $nilai_12;
            $rekap->nilai_pengumpulan_hasil_siswa = $nilai_13;
            $rekap->nilai_agenda_guru = $nilai_14;
            $rekap->save();


            return redirect()->route('penilaianguru.index')->with([Alert::success('Berhasil Menyimpan Data Penilaian Guru', 'Data Tersimpan!')]);
    }
}
