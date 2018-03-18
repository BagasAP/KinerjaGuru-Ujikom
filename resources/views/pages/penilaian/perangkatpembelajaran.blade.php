                <div class="row">
                  <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="field-1" class="control-label">Nama Guru Pengajar<span class="text-danger">*</span></label>
                              <input type="text" name="id" hidden="hidden">
                              <select name="guru_id" class="form-control" required="required">
                                <option>Pilih Guru Pengajar</option>
                                @foreach($guru as $data)
                                <option value="{{$data->id}}">{{$data->nama_guru}}</option>
                                @endforeach
                              </select>
                              <span class="help-block"></span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <hr>
                  </div>
                  <h4>1. Administrasi Guru</h4>

                  <div class="row">
                    <div class="col-md-12">
                        <h5>&nbsp;&nbsp;&nbsp;Administrasi Guru &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Kelengkapan ( Ceklis Data Yang Tuntas )</h5>
                      <div class="form-group">
                        <table class="table">
                      <tr>
                        <th>1. Program Tahunan</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai1" value="1"></td>
                      </tr>
                      <tr>
                        <th>2. Program Semester</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai2" value="1"></td>
                      </tr>
                      <tr>
                        <th>3. Silabus</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai3" value="1"></td>
                      </tr>
                      <tr>
                        <th>4. Kriteria Ketuntasan Minimal (KKM)</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai4" value="1"></td>
                      </tr>
                      <tr>
                        <th>5. Dokument Pembelajaran</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai5" value="1"></td>
                      </tr>
                      <tr>
                        <th>6. Identitas Mata Pelajaran</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai6" value="1"></td>
                      </tr>
                      <tr>
                        <th>7. Alokasi Waktu Dan Pertemuan</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai7" value="1"></td>
                      </tr>
                      <tr>
                        <th>8. Standar Kompetensi</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai8" value="1"></td>
                      </tr>
                      <tr>
                        <th>9. Kompetensi Dasar</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai9" value="1"></td>
                      </tr>
                      <tr>
                        <th>10. Tujuan Pembelajaran</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai10" value="1"></td>
                      </tr>
                      <tr>
                        <th>11. Materi Ajar</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai11" value="1"></td>
                      </tr>
                      <tr>
                        <th>12. Alokasi Waktu Yang Diperlukan</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai12" value="1"></td>
                      </tr>
                      <tr>
                        <th>13. Metode Pembelajaran</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai13" value="1"></td>
                      </tr>
                      <tr>
                        <th>14. Alpha Zone</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai14" value="1"></td>
                      </tr>
                      <tr>
                        <th>15. Langkah-Langkah Pembelajaran</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai15" value="1"></td>
                      </tr>
                      <tr>
                        <th>16. Tugas Terstruktruk Dan Tidak Terstruktur</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai16" value="1"></td>
                      </tr>
                      <tr>
                        <th>17. Penilaian</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai17" value="1"></td>
                      </tr>
                      <tr>
                        <th>18. Rancangan Penilaian Di Awal Semester</th>
                        <th></th>
                        <td><input type="checkbox" name="nilai18" value="1"></td>
                      </tr>
                             </table>
                          </div>
                      </div>
                  </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                    <h4>2. Konsultasi</h4>
                      <label class="control-label">Jumlah Pertemuan Konsultasi 1 Semester</label><br>
                      1. <input type="checkbox" name="konsultasi_1" value="1">&nbsp;&nbsp;
                      2. <input type="checkbox" name="konsultasi_2" value="1">&nbsp;&nbsp;
                      3. <input type="checkbox" name="konsultasi_3" value="1">&nbsp;&nbsp;
                      4. <input type="checkbox" name="konsultasi_4" value="1">&nbsp;&nbsp;
                      5. <input type="checkbox" name="konsultasi_5" value="1">&nbsp;&nbsp;
                    </div>

                    <div class="col-md-6">
                  <h4>3. Observasi</h4>
                      <label class="control-label">Jumlah Pertemuan Observasi 1 Semester</label><br>
                      1. <input type="checkbox" name="observasi_1" value="1">&nbsp;&nbsp;
                      2. <input type="checkbox" name="observasi_2" value="1">&nbsp;&nbsp;
                      3. <input type="checkbox" name="observasi_3" value="1">&nbsp;&nbsp;
                      4. <input type="checkbox" name="observasi_4" value="1">&nbsp;&nbsp;
                      5. <input type="checkbox" name="observasi_5" value="1">&nbsp;&nbsp;
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
