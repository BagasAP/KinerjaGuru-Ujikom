@extends('layouts.master')
@section('title')
	Rapot Akhir
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
                <h4 class="page-title">Rapot Guru SMK Assalaam Bandung</h4>
	            <ol class="breadcrumb p-0 m-0">
	                <li>
	                    <p>Semester 1</p>
	                </li>

	                <li class="active">
	                    Tahun Ajaran 2017-2018
	                </li>
	            </ol>
	            <div class="clearfix"></div>
	        </div>
		</div>
	</div>
    <center>
    <h3>Kepada yang terhormat :</h3>
    <h4><span style="text-decoration: underline; color: #000000;">{{$rapot->guru->nama_guru}}</span></h4><br>
    </center>
    <?php
        //nilai perangkat pembelajaran
        $administrasi = App\Administrasi::find($rapot->id);
        $konsultasi = App\Konsultasi::find($rapot->id);
        $observasi = App\Observasi::find($rapot->id);

        $nilai1 = $administrasi->nilai_administrasi+$konsultasi->nilai_konsultasi+$observasi->nilai_observasi;
        $rata_pb = $nilai1/3;
        $nilai_pb = $rata_pb*30/100;

        //nilai kedisiplinan
        $izin = App\Izin::find($rapot->id);
        $alfa = App\Alfa::find($rapot->id);
        $terlambat_kekelas = App\KeterlambatanKeKelas::find($rapot->id);
        $unit_dan_yayasan = App\UnitDanYayasan::find($rapot->id);
        $doa_pagi = App\KegiatanDoaPagi::find($rapot->id);
        $indisipliner = App\Indisipliner::find($rapot->id);

        $nilai2 = $izin->nilai_izin+$alfa->nilai_alfa+$terlambat_kekelas->nilai_terlambat_ke_kelas+$unit_dan_yayasan->nilai_unit_dan_yayasan+$doa_pagi->nilai_doa_pagi+$indisipliner->nilai_indisipliner;
        $rata_k = $nilai2/6;
        $nilai_k = $rata_k*30/100;

        //nilai pelayanan prima
        $komunikasi = App\Komunikasi::find($rapot->id);
        $ghibah = App\Ghibah::find($rapot->id);
        $support = App\CepatTanggapDanSupport::find($rapot->id);
        $emosi = App\PengelolaanEmosi::find($rapot->id);
        $medsos = App\KomentarDanStatusMedsos::find($rapot->id);
        $penampilan = App\Penampilan::find($rapot->id);
        $mengawas = App\TugasMengawas::find($rapot->id);

        $nilai3 = $komunikasi->rata_rata_komunikasi+$ghibah->rata_rata_ghibah+$support->rata_rata_tanggap_dan_support+$emosi->rata_rata_emosi+$medsos->rata_rata_medsos+$penampilan->nilai_penampilan+$mengawas->nilai_mengawas;
        $rata_pp = $nilai3/7;
        $nilai_pp = $rata_pp*20/100;

        //nilai ketuntasan nilai
        $siswa = App\KetuntasanNilaiSiswa::find($rapot->id);
        $akhlak = App\AkhlakDanKepribadian::find($rapot->id);
        $ulangan = App\PengumpulanHasilUlangan::find($rapot->id);
        $hasil = App\PengumpulanHasilSiswa::find($rapot->id);
        $agenda = App\AgendaGuru::find($rapot->id);
        $tugas = App\TepatMengumpulkanTugas::find($rapot->id);

        $nilai4 = $siswa->nilai_siswa+$akhlak->nilai_akhlak_dan_kepribadian+$ulangan->nilai_ulangan+$hasil->nilai_hasil_siswa+$agenda->nilai_agenda_guru+$tugas->nilai_tugas;
        $rata_kn = $nilai4/6;
        $nilai_kn = $rata_kn*20/100;


        $total2 = $nilai_pb+$nilai_k+$nilai_pp+$nilai_kn;
        $total1 = $total2/5*100;

        if($total1 <= 100 && $total1 >= 90){
            $ket="Excellent Teacher";
         }elseif ($total1 <=89 && $total1 >= 80) {
            $ket="Great Teacher";
         }elseif ($total1 <=79 && $total1 >= 70) {
             $ket="Good Teacher";
         }elseif ($total1 <=69 && $total1 >= 60) {
             $ket="Medium Teacher";
         }elseif ($total1 >100 || $total1 < 0 ) {
            $ket="Errro Input";
         }else{
            $ket="";
         }

    ?>
    {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{ $rapot->id }}">
  <div class="col-xs-12">
        <center><h5>Data dan analisa kinerja adalah sebagai berikut:</h5></center>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            <table id="table-administrasi" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>AKTIFITAS KREATIF</th>
                  <th>POIN</th>
                  <th>PERATA</th>
                  <th>BOBOT</th>
                  <th>NILAI</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td><b>Perangkat Pembelajaran</b></td>
                    <td></td>
                    <td>{{number_format($rata_pb,2)}}</td>
                    <td>30%</td>
                    <td>{{$nilai_pb}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Administrasi Guru</td>
                    <td style="background-color: #ffd700;">{{$administrasi->nilai_administrasi}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Konsultasi</td>
                    <td style="background-color: #ffd700;">{{$konsultasi->nilai_konsultasi}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Observasi</td>
                    <td style="background-color: #ffd700;">{{$observasi->nilai_observasi}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><b>Kedisiplinan</b></td>
                    <td></td>
                    <td>{{number_format($rata_k,2)}}</td>
                    <td>30%</td>
                    <td>{{$nilai_k}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Izin</td>
                    <td style="background-color: #ffd700;">{{$izin->nilai_izin}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Alfa</td>
                    <td style="background-color: #ffd700;">{{$alfa->nilai_alfa}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Terlambat Masuk Ke Kelas</td>
                    <td style="background-color: #ffd700;">{{$terlambat_kekelas->nilai_terlambat_ke_kelas}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Pengabdian Kegiatan Unit Dan Yayasan</td>
                    <td style="background-color: #ffd700;">{{$unit_dan_yayasan->nilai_unit_dan_yayasan}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Kegiatan Sambut Siswa Dan Doa Pagi</td>
                    <td style="background-color: #ffd700;">{{$doa_pagi->nilai_doa_pagi}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>f. Indisipliner</td>
                    <td style="background-color: #ffd700;">{{$indisipliner->nilai_indisipliner}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><b>Pelayanan Prima</b></td>
                    <td></td>
                    <td>{{number_format($rata_pp,2)}}</td>
                    <td>20%</td>
                    <td>{{$nilai_pp}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Komunikasi</td>
                    <td style="background-color: #ffd700;">{{$komunikasi->rata_rata_komunikasi}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Ghibah</td>
                    <td style="background-color: #ffd700;">{{$ghibah->rata_rata_ghibah}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Cepat Tanggap Dan Support</td>
                    <td style="background-color: #ffd700;">{{$support->rata_rata_tanggap_dan_support}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Pengelolaan Emosi</td>
                    <td style="background-color: #ffd700;">{{$emosi->rata_rata_emosi}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Komentar Dan Status Medsos</td>
                    <td style="background-color: #ffd700;">{{$medsos->rata_rata_medsos}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>f. Penampilan</td>
                    <td style="background-color: #ffd700;">{{$penampilan->nilai_penampilan}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>g. Melaksanakan Tugas Mengawas Sesuai Jadwal</td>
                    <td style="background-color: #ffd700;">{{$mengawas->nilai_mengawas}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><b>Ketuntasan Nilai</b></td>
                    <td></td>
                    <td>{{number_format($rata_kn,2)}}</td>
                    <td>20%</td>
                    <td>{{$nilai_kn}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>a. Ketuntasan Nilai Siswa</td>
                    <td style="background-color: #ffd700;">{{$siswa->nilai_siswa}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>b. Nilai Akhlak Dan Kepribadian</td>
                    <td style="background-color: #ffd700;">{{$akhlak->nilai_akhlak_dan_kepribadian}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>c. Hasil Analisis Ulangan</td>
                    <td style="background-color: #ffd700;">{{$ulangan->nilai_ulangan}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>d. Pengumpulan Hasil Ulangan</td>
                    <td style="background-color: #ffd700;">{{$hasil->nilai_hasil_siswa}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>e. Kelengkapan Agenda Guru</td>
                    <td style="background-color: #ffd700;">{{$agenda->nilai_agenda_guru}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>f. Ketepatan Mengumpulkan Tugas Guru</td>
                    <td style="background-color: #ffd700;">{{$tugas->nilai_tugas}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4"><center><b>Total</b></center></td>
                    <td style="background-color: #ffd700;"><b>{{$total1}}%</b></td>
                    <td style="background-color: #ffd700;"><b>{{$total2}}</b></td>
                </tr>
                <tr>
                    <td colspan="2"><center><b>NILAI AKHIR</b></center></td>
                    <td colspan="4" style="background-color: #7FFFD4;"><center><b>{{$ket}}</b></center></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>    
    </div>

    <div class="btn-group">
        <a href="{{action('RapotAkhirController@downloadPDF', $rapot->id)}}"><button class="btn btn-success pull-right btn-bordered waves-effect waves-light "> Download PDF <i class="fa fa-file-excel-o"></i> </button> </a>
    </div>
    <div class="btn-group">
        <a href="{{ URL::to('laporan/rapot/downloadExcel/xls') }}"><button class="btn btn-info pull-right btn-bordered waves-effect waves-light">Print Excel <i class="fa fa-file-excel-o"></i> </button></a>
    </div>
  </div>
</div>
@endsection