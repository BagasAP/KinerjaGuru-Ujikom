    <div class="row">
      <div class="col-xs-12">
       
        <div class="box">
          <div class="box-body">
            <table id="table-nilaisiswa" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
              <tr>
                <th style="text-align: center;">Nama Guru</th>
                <th style="text-align: center;">Jumlah Siswa</th>
                <th style="text-align: center;">Tuntas</th>
                <th style="text-align: center;">Belum</th>
                <th style="text-align: center;">Nilai</th>
              </tr>
            </thead>
            <tbody>
              @foreach($nilaisiswa as $data)
                <tr>
                  <td style="text-align: center;">{{$data->guru->nama_guru}}</td>
                  <td style="text-align: center;">{{$data->jumlah_siswa}}</td>
                  <td style="text-align: center;">{{$data->tuntas}}</td>
                  <td style="text-align: center;">{{$data->belum}}</td>
                  <td style="text-align: center;">{{$data->nilai_siswa}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>	
    </div>