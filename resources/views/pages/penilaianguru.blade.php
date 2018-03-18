@extends('layouts.master')

@section('title')
	Penilaian Guru
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title"> Penilaian Guru</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Penilaian</a>
            </li>
            <li class="active">
               Penilaian Guru
            </li>
          </ol>
        <div class="clearfix"></div>
      </div>
		</div>
	</div>

<form action="{{ route('penilaianguru.store') }}" method="post">
  {{ csrf_field() }}
  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Perangkat Pembelajaran</a></li>
              <li><a href="#tab_2" data-toggle="tab">Kedisiplinan</a></li>
              <li><a href="#tab_3" data-toggle="tab">Pelayanan Prima</a></li>
              <li><a href="#tab_4" data-toggle="tab">Ketuntasan Nilai</a></li>
            </ul>
            
              <div class="tab-content">

              <div class="tab-pane active" id="tab_1">
                @include('pages.penilaian.perangkatpembelajaran')
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                @include('pages.penilaian.kedisiplinan')
              </div>
           
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                @include('pages.penilaian.pelayananprima')
              </div>
              <div class="tab-pane" id="tab_4">
                @include('pages.penilaian.ketuntasannilai')
              </div>
            </div>

          </div>
        </div>
  </div>
</form>


</div>

@endsection
