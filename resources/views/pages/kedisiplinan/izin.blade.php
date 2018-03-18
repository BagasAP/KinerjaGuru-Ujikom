    <div class="row">
      <div class="col-xs-12">
       
        <div class="box">
          <div class="box-body">
            <table id="table-izin" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
                <tr>
                  <th style="text-align: center;">Nama Guru</th>
                  <th style="text-align: center;">Jumlah Izin 1 Semester</th>
                  <th style="text-align: center;">Nilai</th>
                </tr>
              </thead>
              <tbody>
                @foreach($izin as $data)
                  <tr>
                    <td>{{$data->guru->nama_guru}}</td>
                    <td>{{$data->jumlah}}</td>
                    <td>{{$data->nilai_izin}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>	
    </div>