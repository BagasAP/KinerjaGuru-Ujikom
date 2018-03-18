@extends('layouts.master')

@section('title')
	Perangkat Pembelajaran
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title"> Perangkat Pembelajaran</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Data Nilai Guru</a>
            </li>
            <li class="active">
               Perangkat Pembelajaran
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
              <li class="active"><a href="#tab_1" data-toggle="tab">Administrasi Guru</a></li>
              <li><a href="#tab_2" data-toggle="tab">Konsultasi</a></li>
              <li><a href="#tab_3" data-toggle="tab">Observasi</a></li>
            </ul>
            
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  @include('pages.perangkatpembelajaran.administrasi')
                </div>

                <div class="tab-pane" id="tab_2">
                  @include('pages.perangkatpembelajaran.konsultasi')
                </div>
           
                <div class="tab-pane" id="tab_3">
                  @include('pages.perangkatpembelajaran.observasi')
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
    $('#table-administrasi').DataTable()
    $('#table-konsultasi').DataTable()
    $('#table-observasi').DataTable()
})
</script>
@endpush