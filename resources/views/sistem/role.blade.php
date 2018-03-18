@extends('layouts.master')

@section('title')
	Role
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title">Role</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Sistem</a>
            </li>
            <li class="active">
              Role
            </li>
          </ol>
        <div class="clearfix"></div>
      </div>
		</div>
	</div>

  <div class="row m-b-10">
    <div class="col-md-4">
      <button class="btn btn-primary btn-bordered waves-effect waves-light" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah</button>
    </div>
  </div>

	<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <table id="table-user" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="text-align: center;">Nama Role</th>
                <th style="text-align: center;">Tampilan Nama</th>
              </tr>
            </thead>
            <tbody>
              @foreach($role as $data)
                <tr>
                  <td style="text-align: center;">{{$data->name}}</td>
                  <td style="text-align: center;">{{$data->display_name}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>	
  </div>
</div>

<div class="modal fade" id="modal-tambah">
<form action="{{route('role.store')}}" method="post" >
{{ csrf_field() }}
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data Role</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Nama Role <span class="text-danger">*</span></label>
                              <input type="text" name="name" required="" class="form-control" placeholder="Nama Role">
                              
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Tampilan Nama<span class="text-danger">*</span></label>
                              <input type="text" name="display_name" class="form-control" placeholder="Tampilan Nama" required="">
                              <span class="help-block"></span>
                          </div>
                      </div>
                  </div>   
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </div>
        </form>
</div>

@endsection

@push('js')
<script>
  $(function () {
    $('#table-user').DataTable()
})
</script>
@endpush