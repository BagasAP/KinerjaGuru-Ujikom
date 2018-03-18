@extends('layouts.master')

@section('title')
	Pelayanan Prima
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title"> Pelayanan Prima</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Data Nilai Guru</a>
            </li>
            <li class="active">
               Pelayanan Prima
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
              <li class="active"><a href="#tab_1" data-toggle="tab">Komunikasi</a></li>
              <li><a href="#tab_2" data-toggle="tab">Ghibah</a></li>
              <li><a href="#tab_3" data-toggle="tab">Tanggap&Support</a></li>
              <li><a href="#tab_4" data-toggle="tab">Pengelolaan Emosi</a></li>
              <li><a href="#tab_5" data-toggle="tab">Komentar&Status Medsos</a></li>
              <li><a href="#tab_6" data-toggle="tab">Penampilan</a></li>
              <li><a href="#tab_7" data-toggle="tab">Tugas Mengawas</a></li>
            </ul>
            
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                  @include('pages.pelayananprima.komunikasi')
                </div>

                <div class="tab-pane" id="tab_2">
                  @include('pages.pelayananprima.ghibah')
                </div>
           
                <div class="tab-pane" id="tab_3">
                  @include('pages.pelayananprima.tanggapdansupport')
                </div>

                <div class="tab-pane" id="tab_4">
                  @include('pages.pelayananprima.emosi')
                </div>

                <div class="tab-pane" id="tab_5">
                  @include('pages.pelayananprima.medsos')
                </div>

                <div class="tab-pane" id="tab_6">
                  @include('pages.pelayananprima.penampilan')
                </div>

                <div class="tab-pane" id="tab_7">
                  @include('pages.pelayananprima.mengawas')
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
    $('#table-komunikasi').DataTable()
    $('#table-ghibah').DataTable()
    $('#table-tanggapdansupport').DataTable()
    $('#table-emosi').DataTable()
    $('#table-medsos').DataTable()
    $('#table-penampilan').DataTable()
    $('#table-mengawas').DataTable()
})
</script>
@endpush