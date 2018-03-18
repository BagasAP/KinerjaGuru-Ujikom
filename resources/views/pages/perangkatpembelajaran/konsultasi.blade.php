    <div class="row">
      <div class="col-xs-12">
        
        <div class="box">
          <div class="box-body">
            <table id="table-konsultasi" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
                <tr>
                  <th style="text-align: center;">Nama Guru Pengajar</th>
                  <th style="text-align: center;">Jumlah Konsultasi</th>
                  <th style="text-align: center;">Nilai</th>
                </tr>
              </thead>
              <tbody>
                @foreach($konsultasi as $data)
                <?php
                $p1 = $data->konsultasi_1;
                $p2 = $data->konsultasi_2;
                $p3 = $data->konsultasi_3;
                $p4 = $data->konsultasi_4;
                $p5 = $data->konsultasi_5;
                $tp = $p1+$p2+$p3+$p4+$p5;
                ?>
                  <tr>
                    <td>{{$data->guru->nama_guru}}</td>
                    <td>{{$tp}}</td>
                    <td>{{$data->nilai_konsultasi}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>  
    </div>