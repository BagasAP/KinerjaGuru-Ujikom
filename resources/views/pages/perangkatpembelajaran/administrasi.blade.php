    <div class="row">
      <div class="col-xs-12">
       
        <div class="box">
          <div class="box-body">
            <table id="table-administrasi" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
                <tr>
                  <th style="text-align: center;">Nama Guru Pengajar</th>
                  <th style="text-align: center;">Total Kelengkapan (Max: 18)</th>
                  <th style="text-align: center;">Nilai</th>
                </tr>
              </thead>
              <tbody>
                @foreach($administrasi as $data)
                  <tr>
                    <td>{{$data->guru->nama_guru}}</td>
                    <td>{{$data->total_kelengkapan}}</td>
                    <td>{{$data->nilai_administrasi}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>	
    </div>