@extends('layouts.master')

@section('title')
	User
@endsection

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title-box">
        <h4 class="page-title">User</h4>
          <ol class="breadcrumb p-0 m-0">
            <li>
              <a href="#">Sistem</a>
            </li>
            <li class="active">
              User
            </li>
          </ol>
        <div class="clearfix"></div>
      </div>
		</div>
	</div>
<!-- 
  <div class="row m-b-10">
    <div class="col-md-4">
      <button class="btn btn-primary btn-bordered waves-effect waves-light" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i> Tambah</button>
    </div>
  </div> -->

	<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-body">
          <table id="table-user" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th style="text-align: center;">Nama User</th>
                <th style="text-align: center;">E-mail</th>
                <th style="column-span: 2;">Opsi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($user as $data)
              @if($loop->first)
                <tr>
                    <td style="text-align: center;">{{$data->name}}</td>
                    <td style="text-align: center;">{{$data->email}}</td>
                    <td>
                      <button class="btn btn-warning btn-bordered btn-sm waves-effect waves-light" data-toggle="modal" data-target="#edit{{$data->id}}"> <i class="fa fa-pencil"></i> Ubah</button>
                    </td>
                </tr>
                @else
                <tr>
                    <td style="text-align: center;">{{$data->name}}</td>
                    <td style="text-align: center;">{{$data->email}}</td>
                    <td>
                      <button class="btn btn-warning btn-bordered btn-sm waves-effect waves-light" data-toggle="modal" data-target="#edit{{$data->id}}"> <i class="fa fa-pencil"></i> Ubah</button>
                    
                      <form action="{{route('user.destroy', $data->id )}}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              <input type="hidden" name="_token" >
                              <button type="submit" class="btn btn-danger btn-sm btn-bordered waves-effect waves-light"><i class="fa fa-trash"></i> Hapus</button>
                              {{csrf_field()}}
                              </form>
                    </td>
                </tr>
              @endif

              

        <div class="modal fade" id="edit{{$data->id}}">
            <form action="{{route('user.update',$data->id)}}" method="post">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              {{ csrf_field() }}
              @php
                $model = App\User::find($data->id);
              @endphp
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Ubah Data User</h4>
                  </div>
                      <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label">Nama User</label>
                                <input type="text" name="name" class="form-control" value="{{$data->name}}">
                              </div>
                              <div>
                                <div class="form-group">
                                  <label class="control-label">E-mail</label>
                                  <input type="text" name="email" class="form-control" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                  <label class="control-label">Password</label>
                                  <input type="password" name="password" class="form-control" value="{{$data->password}}">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </form>
        </div>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>	
  </div>

  <div class="modal fade" id="modal-tambah">
<form action="{{route('user.store')}}" method="post" >
{{ csrf_field() }}
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data User</h4>
      </div>
          <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="control-label">Nama User</label>
                        <input type="text" name="name" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="control-label">E-Mail</label>
                        <input type="email" name="email" required="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" name="password" required="" class="form-control">
                      </div>
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
        </form>
        </div>
</div>


@endsection

@push('js')
<script>
  $(function () {
    $('#table-user').DataTable()
})
</script>
@endpush