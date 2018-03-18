@if($guru->isEmpty())
    <center><h3 class="text-muted">Data tidak ditemukan</h3></center>
@endif

@foreach ($guru as $data_guru)
    <div class="col-md-4">
    	<div class="text-center card-box">
            <div class="clearfix"></div>
            <div class="member-card">
                <div class="thumb-xl member-thumb m-b-10 center-block">
                    <img src="{{ file_exists(public_path('uploads/images/'.$data_guru->foto)) && !empty($data_guru->foto) ? url('uploads/images/'.$data_guru->foto) : url('uploads/images/default.png') }}" class="img-circle img-thumbnail" alt="profile-image">
                </div>

                <div>
                    <h4 class="m-b-5">{{ $data_guru->nama_guru }}</h4>
                    <p class="text-muted">{{ $data_guru->nip }} 
                        <span> | </span> 
                        <span> {{ $data_guru->status }} </span>
                    </p>
                    <a href="{{ url('identitas/gurupengajar/'.$data_guru->id.'/edit') }}" class="btn btn-warning"><i class="mdi mdi-pencil"></i> Ubah</a>
                    <a href="{{ url('identitas/gurupengajar/'.$data_guru->id) }}" class="btn btn-primary"><i class="mdi mdi-arrow-expand"></i> Lihat</a>
                    <form action="{{route('gurupengajar.destroy', $data_guru->id )}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" >
                        <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" style="background: none; border: none; outline: none; color:#0000EE;">
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endforeach

<div class="col-md-12 text-right">
    {{ $guru->links() }}
</div>