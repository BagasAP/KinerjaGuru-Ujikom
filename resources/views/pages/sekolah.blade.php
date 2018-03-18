@extends('layouts.master')
@section('title')
    Sekolah
@endsection
@section('content')
@foreach($sekolah as $data)
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-title-box">
                <h4 class="page-title">{{ $data->nama_sekolah }} </h4>
                <ol class="breadcrumb p-0 m-0">
                    <li>
                        <p>Identitas</p>
                    </li>
                    <li class="active">
                        {{ $data->nama_sekolah }}
                    </li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="member-thumb center-block">
                        <img src="{{ url('uploads/images/sekolah.png') }}" >
                    </div>
                    <div>
                        <h4 class="m-b-5">{{ $data->nama_sekolah }}</h4>
                        <p class="text-muted">{{ $data->nss }} | <span class="text-pink">{{ $data->status }}</span> </p>
                    </div>
                    <hr>
                    <div class="text-left">
                        <p><strong>Alamat</strong></p>
                        <i class="fa fa-map-marker"></i><small> {{ $data->alamat }}
                        </small>
                        <p></p>
                        <p><strong>Telepon</strong></p>
                        <i class="fa fa-phone"></i><small> {{ $data->telepon}}</small>
                    </div>

                </div>
            </div> <!-- end card-box -->
        </div>
        <div class="col-md-6">
            <div class="text-center card-box">
                <div class="member-card">
                    <h4>Kepala Sekolah </h4>
                    <div class="thumb-xl member-thumb m-b-10 center-block">
                        <img src="{{ url('uploads/images/kepsek.jpg')  }}" class="img-circle img-thumbnail" alt="profile-image">
                    </div>
                    <div>
                        <h4 class="m-b-5">{{ $data->nama_kepsek }}</h4>
                    </div>
                    <hr>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fa fa-pencil"></i> Ubah</button>
                </div>
            </div> <!-- end card-box -->
        </div>
    </div>
    <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <form action="{{route('sekolah.update',$data->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    {{ csrf_field() }}
                    @php
                         $model = App\Sekolah::find($data->id);
                    @endphp
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edit">Ubah Data Sekolah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                                      <div class="col-lg-12">
                                          <div class="card-body card-block">
                                            <div class="form-group">
                                                <label for="company" class=" form-control-label">Nama Sekolah</label>
                                                <input type="text" placeholder="Nama Sekolah" class="form-control" required="" name="nama_sekolah" value="{{$model->nama_sekolah}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="vat" class=" form-control-label">NSS</label>
                                                <input type="text" placeholder="NSS" class="form-control" required="" name="nss" value="{{$model->nss}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="street" class=" form-control-label">Status</label>
                                                <input type="text" placeholder="Status" class="form-control" required="" name="status" value="{{$data->status}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class=" form-control-label">Nama Kepala Sekolah</label>
                                                <input type="text" placeholder="Nama Kepala Sekolah" class="form-control" name="nama_kepsek" required="" value="{{$model->nama_kepsek}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class=" form-control-label">Alamat</label>
                                                <input type="text" placeholder="Alamat" class="form-control" required="" name="alamat" value="{{$model->alamat}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class=" form-control-label">Telepon</label>
                                                <input type="text" placeholder="Telepon" class="form-control" required="" name="telepon" value="{{$model->telepon}}">
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
    @endforeach
</div>
@endsection