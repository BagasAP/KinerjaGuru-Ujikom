@extends('layouts.master')

@section('title')
Guru Inti
@endsection

@section('content')

    <div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
                <h4 class="page-title">Guru Inti</h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <a href="#">Identitas</a>
                    </li>
                    <li class="active">
                        <a href="#">Guru Inti</a>
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
		</div>
	</div>
    <!-- end row -->

    <div class="row">
    	<div class="col-md-12 m-b-20">
    		<div class="pull-left">
    		 	        <a href="{{ url('identitas/guruinti/create') }}" class="btn btn-danger btn-bordered waves-effect waves-light"><i class="fa fa-plus"></i> Tambah Guru Inti</a>
    		</div>
    		<div class="pull-right">
    			<div class="form-group has-feedback">
	                <input type="text" class="form-control" placeholder="Pencarian ..." name="keyword">
	                <i class="fa fa-search form-control-feedback l-h-34"></i>
	            </div>
    		</div>
    		<div class="col-md-12">
    			<hr>
    		</div>
    	</div><!-- end col -->

    </div>
    <!-- end row -->


    <div class="row" style="position: relative">
        <div class="loading" style="display:none"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div> 
        @if (count($guru) > 0)
            <section class="guru">
                @include('pages.guruinti.load_data')
            </section>
        @else
            <center><h3>Data tidak ditemukan</h3></center>
        @endif
    </div>

<!-- Modal for question -->
<div class="modal fade in" tabindex="-1" role="dialog" id="modal-delete-confirm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
        <h4 class="modal-title">Apakah anda yakin?</h4>
      </div>
      <div class="modal-body">Data yang dipilih akan dihapus, apakah anda yakin?</div>
      <div class="modal-footer">
      <button type="button" id="btn-confirm" class="btn btn-primary btn-sm">Ya</button>
      <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
    </div>
    </div>
  </div>
</div>

@endsection

@push('js')

<script src="{{ url('assets/js/pages/guru.js') }}"></script>

@endpush