@extends('layouts.master')
@section('title')
	Ubah Guru
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
	            <h4 class="page-title">Ubah Guru </h4>
	            <ol class="breadcrumb p-0 m-0">
	                <li>
	                    <a href="#">Identitas</a>
	                </li>
	                <li>
	                    <a href="{{ url('identitas/gurupengajar') }}">Guru </a>
	                </li>
	                <li class="active">
	                    Ubah Guru
	                </li>
	            </ol>
	            <div class="clearfix"></div>
	        </div>
		</div>
	</div>

	<form method="post" action="{{ url('identitas/gurupengajar/'.$guru->id) }}" id="form-guru">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="id" value="{{ $guru->id }}">
		<div class="row">
      		<div class="col-xs-9">
	        	<div class="card-box">
	          		<div class="row">
	            		<div class="col-md-6">
	              			<div class="form-group">
	                			<label class="control-label">NIP <span class="text-danger">*</span></label>
	                			<input type="text" name="nip" class="form-control" placeholder="ex: 12345" required="required" value="{{ $guru->nip }}">
	                			<span class="help-block"></span>
	              			</div>
	           		 	</div>
	            		<div class="col-md-6">
	              			<div class="form-group">
	                			<label class="control-label">Nama <span class="text-danger">*</span></label>
	                			<input type="text" name="nama_guru" class="form-control" placeholder="ex: John Doe" required="required" value="{{ $guru->nama_guru }}">
	                			<span class="help-block"></span>
	              			</div>
	            		</div>
	          		</div>

	          		<div class="row">
	            		<div class="col-md-6">
	              			<div class="row">
	                			<div class="col-md-12">
	                  				<div class="form-group">
										<label class="control-label">Jenis Kelamin <span class="text-danger">*</span></label>
										<select name="jenis_kelamin" class="form-control" data-placeholder="Pilih Jenis Kelamin" required="required">
	                					<option>{{$guru->jenis_kelamin}}</option>
                                		<option value="Laki-Laki">Laki-Laki</option>
                        				<option value="Perempuan">Perempuan</option>
                              			</select>
										<span class="help-block"></span>
									</div>
	                			</div>
	             			 </div>
	            		</div>
	            		<div class="col-md-6">
	              			<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Tempat Lahir <span class="text-danger">*</span></label>
										<input type="text" name="tempat_lahir" value="{{ $guru->tempat_lahir }}" class="form-control" placeholder="eg: Jakarta" required="required">
										<span class="help-block"></span>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Tanggal Lahir <span class="text-danger">*</span></label>
										<input type="text" name="tgl_lahir" value="{{ $guru->tgl_lahir }}" class="form-control datepicker" placeholder="yyyy-mm-dd" required="required">
										<span class="help-block"></span>
									</div>
								</div>
							</div>
	            		</div>
	          		</div>

	          		<div class="row">
	            		<div class="col-md-6">
	              			<div class="form-group">
	                			<label class="control-label">Pangkat</label>
	                 	 		<input type="text" name="pangkat" class="form-control" placeholder="" value="{{ $guru->pangkat }}">
	                			<span class="help-block"></span>
	              			</div>
	            		</div>
	            		<div class="col-md-6">
	              			<div class="row">
	               		 		<div class="col-md-6">
	                  				<div class="form-group">
	                    				<label class="control-label">Jabatan Fungisional<span class="text-danger">*</span></label>
	                    				<input type="text" name="jabatan_fungisional" class="form-control" placeholder="" required="required" value="{{ $guru->jabatan_fungisional }}">
	                   	 				<span class="help-block"></span>
	                  				</div>
	                			</div>
	                			<div class="col-md-6">
	                  				<div class="form-group">
	                    				<label class="control-label">Status <span class="text-danger">*</span></label>
	                    				<input type="text" name="status" class="form-control" placeholder="" required="required" value="{{ $guru->status }}">
	                    				<span class="help-block"></span>
	                  				</div>
	                			</div>
	              			</div>
	            		</div>
	         		</div>
	        	</div>
	      	</div>

	      	<div class="col-xs-3">
				<div class="card-box">
					@php ($is_foto = file_exists(public_path('uploads/images/'.$guru->foto)) && !empty($guru->foto) ? true : false)
					<div class="form-group">
						<label>Foto</label>
						<div class="drag-drop text-center" {{ $is_foto ? 'style=display:none' : '' }}>
							<p>Drag and drop file here</p>
							<span class="block">or</span>
							<button class="btn btn-primary btn-bordered waves-effect waves-light" id="browse-file" type="button">Browse File</button>
						</div>
						<div class="preview">
							<div class="template">
								<div class="remove">
									<button class="btn btn-danger btn-circle btn-bordered waves-effect waves-light" type="button" data-dz-remove><i class="mdi mdi-close"></i></button>
								</div>
								<img data-dz-thumbnail class="thumbail-preview img img-responsive img-thumbnail">
								<div class="progress-wrapper">
									<div class="progress progress-striped active" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						          		<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
							        </div>
							    </div>
							</div>
						</div>
						@if ($is_foto)
						<div class="preview-edit">
							<div class="template-edit">
								<div class="remove">
									<button class="btn btn-danger btn-circle btn-bordered waves-effect waves-light" type="button" id="remove-picture"><i class="mdi mdi-close"></i></button>
								</div>
								<img class="thumbail-preview img img-responsive img-thumbnail" src="{{ url('uploads/images/'.$guru->foto) }}">
							</div>
						</div>
						@endif
						<input type="text" name="old_pic" value="{{ $guru->foto }}" hidden="hidden">
					</div>
				</div>
			</div>

	      	<div class="col-xs-12">
	        	<div class="card-box">
	          		<div class="row">
	            		<div class="col-md-6">
	              			<div class="form-group">
	                			<label class="control-label">Agama <span class="text-danger">*</span></label>
	                			<select name="agama" class="form-control" data-placeholder="Pilih Agama" required="required">
	                					<option>{{$guru->agama}}</option>
                                		<option value="Islam">Islam</option>
                        				<option value="Kristen">Kristen</option>
                        				<option value="Budha">Budha</option>
                        				<option value="Katholik">Katholik</option>
                              			</select>
	                			<span class="help-block"></span>
	              			</div>
	              			<div class="form-group">
	                			<label class="control-label">No. Telepon Seuler</label>
	                			<input type="text" name="telepon" class="form-control number" placeholder="08xxxxxxx" value="{{ $guru->telepon }}">
	              			</div>
	              			<div class="form-group">
	                			<label class="control-label">Pendidikan<span class="text-danger">*</span></label>
	                			<input type="text" name="pendidikan_terakhir" class="form-control" placeholder="eg: S1" required="required" value="{{ $guru->pendidikan_terakhir }}">
	                			<span class="help-block"></span>
	              			</div>
	              			<div class="form-group">
	                			<label class="control-label">Alamat<span class="text-danger">*</span></label>
	                			<textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" rows="6" required="required">{{ $guru->alamat }}</textarea>
	               		 		<span class="help-block"></span>
	              			</div>
	            		</div>

	           			<div class="col-md-6">
	              			<div class="form-group">
	                			<label class="control-label">Mulai Kerja <span class="text-danger">*</span></label>
	                 			<input type="text" name="tgl_mulai_kerja" class="form-control datepicker" placeholder="yyyy-mm-dd" value="{{ $guru->tgl_mulai_kerja }}">
	                			<span class="help-block"></span>
	              			</div>
	              			<div class="form-group">
	                			<label class="control-label">NUPTK</label>
	                			<input type="text" name="nuptk" class="form-control number" placeholder="" value="{{ $guru->nuptk }}">
	              			</div>
	              			<div class="form-group">
	               	 			<label class="control-label">Jumlah KD<span class="text-danger">*</span></label>
	                			<input type="text" name="jumlah_kd" class="form-control" placeholder="" required="required" value="{{ $guru->jumlah_kd }}">
	              			</div>
	              			<div class="form-group">
	                			<label class="control-label">Kelas Mengajar<span class="text-danger">*</span></label>
	                			@foreach($kelas as $data)
	        							<input type="text" value="{{$data}}" readonly="" class="form-control">
	        					@endforeach
	        					<br>
	                			<select id="id_kelas" name="id_kelas[]" multiple="multiple" class="form-control" required="required">
				                        <option>Pilih Kelas Mengajar</option>
				                        @foreach(App\Kelas::all() as $data_kelas)
				                          <option value="{{ $data_kelas->kelas }}">{{ $data_kelas->kelas}}</option>
				                        @endforeach
				                </select>
	                			<span class="help-block"></span>
	              			</div>
	              			<div class="form-group">
	                			<label class="control-label">Mata Pelajaran<span class="text-danger">*</span></label>
	                			@foreach($mapel as $data)
	        							<input type="text" value="{{$data}}" readonly="" class="form-control">
	        					@endforeach
	        					<br>
	                			<select id="id_mapel" name="id_mapel[]" multiple="multiple" class="form-control" required="required">
				                        <option>Pilih Kelas Mengajar</option>
				                        @foreach(App\Mapel::all() as $data_mapel)
				                          <option value="{{ $data_mapel->mapel }}">{{ $data_mapel->mapel}}</option>
				                        @endforeach
				                </select>
	                			<span class="help-block"></span>
	              			</div>
	            		</div>
	            		<div class="col-md-12">
	              			<hr>
	              			<div class="pull-right">
	                			<button class="btn btn-default btn-bordered waves-effect waves-light" type="reset">Reset</button>
	                			<button class="btn btn-primary btn-bordered waves-effect waves-light" type="submit">Simpan</button>
	              			</div>
	            		</div>
         	 		</div>
        		</div>
     	   	</div>
    	</div>
	</form>
</div>

@endsection

@push('js')

<script src="{{ url('assets/js/pages/guru-add-edit.js') }}"></script>
<script src="{{ url('assets/js/pages/upload-image.js') }}"></script>

@endpush