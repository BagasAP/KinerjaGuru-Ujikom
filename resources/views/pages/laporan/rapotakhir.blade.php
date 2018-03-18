@extends('layouts.master')

@section('title')
	Rapot Akhir
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title">Rapot Akhir</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Laporan</a>
            </li>
            <li class="active">
              Rapot Akhir
            </li>
          </ol>
          <div class="clearfix"></div>
      </div>
		</div>
	</div>

	  <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
              <table id="table-rapot" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Guru</th>
                  <th>Perangkat Pembelajaran</th>
                  <th>Kedisiplinan</th>
                  <th>Pelayanan Prima</th>
                  <th>Ketuntasan Nilai</th>
                  <th>Detail</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($rapot as $data)
                  <?php
                    $n1=$data->nilai_administrasi;
                    $n2=$data->nilai_konsultasi;
                    $n3=$data->nilai_observasi;
                    $npb=$n1+$n2+$n3;
                    $nilai_perangkatpembelajaran = $npb/3*30/100;

                    $n4=$data->nilai_izin;
                    $n5=$data->nilai_alfa;
                    $n5=$data->nilai_terlambat_ke_kelas;
                    $n6=$data->nilai_kegiatan_unit_dan_yayasan;
                    $n7=$data->nilai_kegiatan_doa_pagi;
                    $n8=$data->nilai_indisipliner;
                    $nkd=$n4+$n5+$n5+$n6+$n7+$n8;
                    $nilai_kedisiplinan = $nkd/6*30/100;
                    
                    $n9=$data->nilai_komunikasi;
                    $n10=$data->nilai_ghibah;
                    $n11=$data->nilai_cepat_tanggap_dan_support;
                    $n12=$data->nilai_pengelolaan_emosi;
                    $n13=$data->nilai_komentar_dan_status_medsos;
                    $n14=$data->nilai_penampilan;
                    $n15=$data->nilai_tugas_mengawas;
                    $npp=$n9+$n10+$n11+$n12+$n13+$n14+$n15;
                    $nilai_pelayanan_prima =$npp/7*20/100;

                    $n16=$data->nilai_tepat_mengumpulkan_tugas;
                    $n17=$data->nilai_ketuntasan_nilai_siswa;
                    $n18=$data->nilai_pengumpulan_hasil_ulangan;
                    $n19=$data->nilai_akhlak_dan_kepribadian;
                    $n20=$data->nilai_pengumpulan_hasil_siswa;
                    $n21=$data->nilai_agenda_guru;
                    $nkn=$n16+$n17+$n18+$n19+$n20+$n21;
                    $nilai_ketuntasan_siswa = $nkn/6*20/100;

                  ?>
                  <tr>
                  <td>{{$data->guru->nama_guru}}</td>
                  <td>{{$nilai_perangkatpembelajaran}}</td>
                  <td>{{$nilai_kedisiplinan}}</td>
                  <td>{{$nilai_pelayanan_prima}}</td>
                  <td>{{$nilai_ketuntasan_siswa}}</td>
                  <td>
                    <center><a class="btn btn-sm btn-info" href="{{route('rapotakhir.show', $data->id)}}"><i class="fa fa-file-text"></i> Detail</a>
                    </center>
                  </td>
                  <td>
                    <center>
                      <form action="{{route('rapotakhir.destroy', $data->id)}}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" >
                      <button type="submit" class="btn btn-sm btn-danger " onclick="return confirm('Apakah anda yakin akan menghapus semua data penilaian guru ini?')" style="background: none; border: none; outline: none; color:#0000EE;"><i class="fa fa-trash"></i> Hapus</button>
                        {{csrf_field()}}
                    </form>
                    </center>
                  </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>	
</div>
</div>

@endsection

@push('js')
<script>
  $(function () {
    $('#table-rapot').DataTable()
})
</script>
@endpush