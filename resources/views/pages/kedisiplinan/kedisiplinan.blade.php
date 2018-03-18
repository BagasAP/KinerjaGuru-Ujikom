@extends('layouts.master')

@section('title')
	Kedisiplinan
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title"> Kedisiplinan</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Data Nilai Guru</a>
            </li>
            <li class="active">
               Kedisiplinan
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
              <li class="active"><a href="#tab_1" data-toggle="tab">Izin</a></li>
              <li><a href="#tab_2" data-toggle="tab">Alfa</a></li>
              <li><a href="#tab_3" data-toggle="tab">Keterlambatan Hadir Ke Kelas</a></li>
              <li><a href="#tab_4" data-toggle="tab">Kegiatan Unit Dan Yayasan</a></li>
              <li><a href="#tab_5" data-toggle="tab">Kegiatan Sambut Siswa Doa pagi</a></li>
              <li><a href="#tab_6" data-toggle="tab">Indisipliner</a></li>
            </ul>
            
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  @include('pages.kedisiplinan.izin')
                </div>

                <div class="tab-pane" id="tab_2">
                  @include('pages.kedisiplinan.alfa')
                </div>
           
                <div class="tab-pane" id="tab_3">
                  @include('pages.kedisiplinan.terlambatkekelas')
                </div>

                <div class="tab-pane" id="tab_4">
                  @include('pages.kedisiplinan.unitdanyayasan')
                </div>

                <div class="tab-pane" id="tab_5">
                  @include('pages.kedisiplinan.doapagi')
                </div>

                <div class="tab-pane" id="tab_6">
                  @include('pages.kedisiplinan.indisipliner')
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
    $('#table-izin').DataTable()
    $('#table-alfa').DataTable()
    $('#table-terlambatkekelas').DataTable()
    $('#table-unitdanyayasan').DataTable()
    $('#table-doapagi').DataTable()
    $('#table-indisipliner').DataTable()
})
</script>
@endpush