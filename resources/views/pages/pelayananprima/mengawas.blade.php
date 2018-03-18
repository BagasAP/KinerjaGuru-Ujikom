    <div class="row">
      <div class="col-xs-12">
       
        <div class="box">
          <div class="box-body">
            <table id="table-mengawas" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
              <tr>
                <th style="text-align: center;">Nama Guru</th>
                <th style="text-align: center;">Jenis Ujian</th>
                <th style="text-align: center;">Sesuai</th>
                <th style="text-align: center;">Nilai</th>
              </tr>
            </thead>
            <tbody>
              @foreach($mengawas as $data)
              <?php
              if($data->sesuai = 2 ){
                $nilai_15="UTS Dan UAS";
              }elseif ($data->sesuai = 1) {
                $nilai_15="3";
              }else{
                $nilai_15="0";
              }
              ?>
                <tr>
                  <td style="text-align: center;">{{$data->guru->nama_guru}}</td>
                  <td style="text-align: center;">{{$nilai_15}}</td>
                  <td style="text-align: center;">{{$data->sesuai}}</td>
                  <td style="text-align: center;">{{$data->nilai_mengawas}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>	
    </div>