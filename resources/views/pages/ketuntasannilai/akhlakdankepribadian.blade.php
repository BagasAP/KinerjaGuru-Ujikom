    <div class="row">
      <div class="col-xs-12">
       
        <div class="box">
          <div class="box-body">
            <table id="table-akhlakdankepribadian" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
              <tr>
                <th style="text-align: center;">Nama Guru</th>
                <th style="text-align: center;">Jumlah Keterlambatan</th>
                <th style="text-align: center;">Nilai</th>
              </tr>
            </thead>
            <tbody>
              @foreach($akhlakdankepribadian as $data)
                <tr>
                  <td style="text-align: center;">{{$data->guru->nama_guru}}</td>
                  <td style="text-align: center;">{{$data->keterlambatan}}</td>
                  <td style="text-align: center;">{{$data->nilai_akhlak_dan_kepribadian}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>	
    </div>