@extends('layouts.master')

@section('title')
	Ketuntasan Nilai
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title"> Ketuntasan Nilai</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Data Nilai Guru</a>
            </li>
            <li class="active">
               Ketuntasan Nilai
            </li>
          </ol>
        <div class="clearfix"></div>
      </div>
		</div>
	</div>

  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tepat Mengumpulkan Tugas</a></li>
              <li><a href="#tab_2" data-toggle="tab">Nilai Siswa</a></li>
              <li><a href="#tab_3" data-toggle="tab">Hasil Ulangan</a></li>
              <li><a href="#tab_4" data-toggle="tab">Nilai Akhlak & Kepribadian</a></li>
              <li><a href="#tab_5" data-toggle="tab">Hasil Siswa</a></li>
              <li><a href="#tab_6" data-toggle="tab">Agenda Guru</a></li>
            </ul>
            
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  @include('pages.ketuntasannilai.mengumpulkantugas')
                </div>

                <div class="tab-pane" id="tab_2">
                  @include('pages.ketuntasannilai.nilaisiswa')
                </div>
           
                <div class="tab-pane" id="tab_3">
                  @include('pages.ketuntasannilai.hasilulangan')
                </div>

                <div class="tab-pane" id="tab_4">
                  @include('pages.ketuntasannilai.akhlakdankepribadian')
                </div>

                <div class="tab-pane" id="tab_5">
                  @include('pages.ketuntasannilai.hasilsiswa')
                </div>

                <div class="tab-pane" id="tab_6">
                  @include('pages.ketuntasannilai.agendaguru')
                </div>
            </div>

          </div>
        </div>
  </div>

</div>

@endsection
@push('js')
<script>
  $(function () {
    $('#table-tugas').DataTable()
    $('#table-nilaisiswa').DataTable()
    $('#table-hasilulangan').DataTable()
    $('#table-akhlakdankepribadian').DataTable()
    $('#table-hasilsiswa').DataTable()
    $('#table-agendaguru').DataTable()
})
</script>
@endpush