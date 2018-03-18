    <div class="row">
      <div class="col-xs-12">
       
        <div class="box">
          <div class="box-body">
            <table id="table-tanggapdansupport" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
                <tr>
                  <th>Nama Guru</th>
                  <th>Wakasek</th>
                  <th>Guru Inti</th>
                  <th>Guru Adaptif</th>
                  <th>Guru Normatif</th>
                  <th>Produktif Otomotif</th>
                  <th>Produktif Rpl</th>
                  <th>TU</th>
                  <th>Rata-Rata</th>
                </tr>
              </thead>
              <tbody>
                @foreach($support as $data)
                  <tr>
                    <td>{{$data->guru->nama_guru}}</td>
                    <td>{{$data->wakasek}}</td>
                    <td>{{$data->guru_inti}}</td>
                    <td>{{$data->guru_adaptif}}</td>
                    <td>{{$data->guru_normatif}}</td>
                    <td>{{$data->guru_otomotif}}</td>
                    <td>{{$data->guru_rpl}}</td>
                    <td>{{$data->tu}}</td>
                    <td>{{$data->rata_rata_tanggap_dan_support}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>	
    </div>