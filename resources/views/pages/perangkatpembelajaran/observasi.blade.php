    <div class="row">
      <div class="col-xs-12">
        
        <div class="box">
          <div class="box-body">
            <table id="table-observasi" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
                <tr>
                  <th style="text-align: center;">Nama Guru Pengajar</th>
                  <th style="text-align: center;">Jumlah Observasi</th>
                  <th style="text-align: center;">Nilai</th>
                </tr>
              </thead>
              <tbody>
                @foreach($observasi as $data)
                <?php
                $p1 = $data->observasi_1;
                $p2 = $data->observasi_2;
                $p3 = $data->observasi_3;
                $p4 = $data->observasi_4;
                $p5 = $data->observasi_5;
                $tp = $p1+$p2+$p3+$p4+$p5;
                ?>
                  <tr>
                    <td>{{$data->guru->nama_guru}}</td>
                    <td>{{$tp}}</td>
                    <td>{{$data->nilai_observasi}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>  
    </div>