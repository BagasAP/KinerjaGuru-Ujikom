@extends('layouts.master')
@section('title')
  Tambah Guru Inti
@endsection
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              <h4 class="page-title">Tambah Guru Inti</h4>
              <ol class="breadcrumb p-0 m-0">
                  <li>
                      <a href="#">Identitas</a>
                  </li>
                  <li>
                      <a href="{{ url('identitas/guruinti') }}">Guru Inti</a>
                  </li>
                  <li class="active">
                      Tambah Guru Inti Baru
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <form method="post" action="{{ route('guruinti.store') }}" id="form-guru">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-9">
        <div class="card-box">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">NIP <span class="text-danger">*</span></label>
                <input type="text" name="nip" class="form-control" placeholder="NIP ( Nomor Induk Pegawai )" required="required">
                <span class="help-block"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Nama Guru<span class="text-danger">*</span></label>
                <input type="text" name="nama_guru" class="form-control" placeholder="Nama Lengkap" required="required">
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
                      <select name="jenis_kelamin" class="form-control" required="required">
                        <option>Pilih Jenis Kelamin</option>
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
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required="required">
                    <span class="help-block"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" name="tgl_lahir" class="form-control" required="required">
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
                  <input type="text" name="pangkat" class="form-control" placeholder="Pangkat">
                <span class="help-block"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Jabatan Fungisional<span class="text-danger">*</span></label>
                    <input type="text" name="jabatan_fungisional" class="form-control" placeholder="Jabatan Fungisional" required="required">
                    <span class="help-block"></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control" required="required">
                        <option>Pilih Status</option>
                        <option value="GTY">GTY</option>
                        <option value="GTT">GTT</option>
                    </select>
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
          <div class="form-group">
            <label>Foto</label>
            <div class="drag-drop text-center">
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
            <input type="text" name="old_pic" hidden="hidden">
          </div>
        </div>
      </div>

      <div class="col-xs-12">
        <div class="card-box">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Agama <span class="text-danger">*</span></label>
                <select name="agama" class="form-control" required="required">
                        <option>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Katholik">Katholik</option>
                    </select>
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label class="control-label">No. Telepon Seuler</label>
                <input type="text" name="telepon" class="form-control number" placeholder="08xxxxxxxxxx">
              </div>
              <div class="form-group">
                <label class="control-label">Pendidikan<span class="text-danger">*</span></label>
                <input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Pendidikan Terakhir" required="required">
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label class="control-label">Alamat<span class="text-danger">*</span></label>
                <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap" rows="6" required="required"></textarea>
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Mulai Kerja <span class="text-danger">*</span></label>
                 <input type="date" name="tgl_mulai_kerja" class="form-control" placeholder="yyyy-mm-dd">
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label class="control-label">NUPTK</label>
                <input type="text" name="nuptk" class="form-control number" placeholder="NUPTK">
              </div>
              <div class="form-group">
                <label class="control-label">Jumlah KD<span class="text-danger">*</span></label>
                <input type="text" name="jumlah_kd" class="form-control number" placeholder="Jumlah KD" required="required">
              </div>
              <div class="form-group">
                <label class="control-label">Kelas Mengajar<span class="text-danger">*</span></label>
                <select id="id_kelas" name="id_kelas[]" multiple="multiple" class="form-control" required="required">
                        <option>Pilih Kelas Mengajar</option>
                        @foreach($kelas as $data_kelas)
                          <option value="{{ $data_kelas->kelas }}">{{ $data_kelas->kelas}}</option>
                        @endforeach
                </select>
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label class="control-label">Mata Pelajaran<span class="text-danger">*</span></label>
                <select name="id_mapel[]" class="form-control" multiple="multiple" required="required">
                        <option>Pilih Mata Pelajaran</option>
                        @foreach($mapel as $data_mapel)
                          <option value="{{ $data_mapel->mapel}}">{{ $data_mapel->mapel }}</option>
                        @endforeach
                </select>
                <span class="help-block"></span>
              </div>
            </div>
            <div class="col-md-12">
              <hr>
            </div>
      <div class="col-xs-12">
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">E-Mail</label>
                  <input type="email" name="email" class="form-control" placeholder="E-Mail">
                <span class="help-block"></span>
              </div>

              <div class="form-group">
                <label class="control-label">Password<span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                <span class="help-block"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Nama Guru Pengajar</label>
                <input type="text" name="id" hidden="hidden">
                              <select name="guru_id" class="form-control" required="required">
                                <option>Pilih Guru Pengajar</option>
                                @foreach($gurupengajar as $data)
                                <option value="{{$data->id}}">{{$data->nama_guru}}</option>
                                @endforeach
                              </select>
              </div>

              <div class="form-group">
                <label class="control-label">Role</label>
                <input type="text" name="id" hidden="hidden">
                              <select name="role_id" class="form-control" required="required">
                                <option>Pilih Role</option>
                                @foreach(App\Role::all() as $data)
                                <option value="{{$data->id}}">{{$data->name}}</option>
                                @endforeach
                              </select>
              </div>
            </div>
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