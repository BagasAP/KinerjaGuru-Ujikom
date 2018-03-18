@extends('layouts.master')
@section('title')
	{{ $guru->nama_guru }}
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
	            <h4 class="page-title">{{ $guru->nama_guru }} </h4>
	            <ol class="breadcrumb p-0 m-0">
	                <li>
	                    <p>Identitas</p>
	                </li>
	                <li>
	                    <a href="{{ url('identitas/gurupengajar') }}">Guru </a>
	                </li>
	                <li class="active">
	                    {{ $guru->nama_guru }}
	                </li>
	            </ol>
	            <div class="clearfix"></div>
	        </div>
		</div>
	</div>
	@php ($is_foto = file_exists(public_path('uploads/images/'.$guru->foto)) && !empty($guru->foto) ? true : false)
	<div class="row">
		<div class="col-lg-4 col-md-5">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="thumb-xl member-thumb m-b-10 center-block">
                        <img src="{{ $is_foto ? url('uploads/images/'.$guru->foto) : url('uploads/images/default.png') }}" class="img-circle img-thumbnail" alt="profile-image">
                        <!-- <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i> -->
                    </div>
                    <div>
                        <h4 class="m-b-5">{{ $guru->nama_guru }}</h4>
                        <p class="text-muted">{{ $guru->nip }} </p>
                        <small class="text-muted">{{ $guru->tempat_lahir }} , {{$guru->tgl_lahir}}</small>
                    </div>
                 	<hr>

                 	<div class="text-center">
                        <ul class="list-profile text-muted">
                        	<li>{{ $guru->jenis_kelamin }}</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="text-left">
	                    <p><strong>Alamat</strong></p>
	        			<small><i class="fa fa-map-marker"></i> {{ $guru->alamat }}
	        			</small>
	        		</div>

                </div>
            </div> <!-- end card-box -->
        </div>
        <div class="col-md-7 col-lg-8">
        	<div class="row">
        		<div class="col-md-12">
       
        			<div class="row mb-30">
        				<div class="col-md-12">
		        			<table class="table">
		        				<tr>
	        						<th>Status </th>
	        						<th>:</th>
	        						<td>{{ $guru->status }}</td>
	        					</tr>
	        					<tr>
	        						<th>Agama</th>
	        						<th>:</th>
	        						<td>{{ $guru->agama }}</td>
	        					</tr>
	        					<tr>
	        						<th>No. Telepon Selular</th>
	        						<th>:</th>
	        						<td>{{ $guru->telepon }}</td>
	        					</tr>
	        					<tr>
	        						<th>Pendidikan</th>
	        						<th>:</th>
	        						<td>{{ $guru->pendidikan_terakhir }}</td>
	        					</tr>
	        					<tr>
	        						<th>Jabatan Fungisional</th>
	        						<th>:</th>
	        						<td>{{ $guru->jabatan_fungisional }}</td>
	        					</tr>
	        					<tr>
	        						<th>Pangkat</th>
	        						<th>:</th>
	        						<td>{{ $guru->pangkat }}</td>
	        					</tr>
	        					<tr>
	        						<th>NUPTK</th>
	        						<th>:</th>
	        						<td>{{ $guru->nuptk }}</td>
	        					</tr>
	        					<tr>
	        						<th>Kelas Mengajar</th>
	        						<th>:</th>
	        						<td>
	        							@foreach($kelas as $data)
	        							{{$data}},
	        							@endforeach
	        						</td>
	        						
	        					</tr>
	        					<tr>
	        						<th>Mengajara MAPEL</th>
	        						<th>:</th>
	        						<td>
	        							@foreach($mapel as $datas)
	        							{{$datas}},
	        							@endforeach
	        						</td>
	        					</tr>
	        					<tr>
	        						<th>Mulai Kerja</th>
	        						<th>:</th>
	        						<td>{{ $guru->tgl_mulai_kerja }}</td>
	        					</tr>
	        					<tr>
	        						<th>Jumlah KD</th>
	        						<th>:</th>
	        						<td>{{ $guru->jumlah_kd }}</td>
	        					</tr>
		        			</table>
		        		</div>
	        		</div>
        		</div>
        	</div>
        </div>
	</div>

</div>
@endsection