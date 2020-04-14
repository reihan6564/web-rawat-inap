        <div class="container-fluid">
          <div class="row">
           <div class="col-md-8">
            <div class="card">
              <div class="alert bg-<?=$warna?>" role="alert">
                <h4 class="text-center text-light">Form <?= $lapor;?> <?= $pilih;?> </h4>
              </div>
              <div class="card-body">
                <?php
                if($periode == "hari"){
                  ?>
                  <div class="card">
                    <div class="card-body">
                        <form action="
                        <?php
                          if($lapor == 'pasien'){
                            echo base_url('admin/lapor_pasien');
                          }else if($lapor == 'dokter'){
                            echo base_url('admin/lapor_dokter');
                          }else if($lapor == 'kamar'){
                            echo base_url('admin/lapor_kamar');
                          }else if($lapor == 'user'){
                            echo base_url('admin/lapor_user');
                          }else if($lapor == 'spesialis'){
                            echo base_url('admin/lapor_spesialis');
                          }else if($lapor == 'rawat'){
                            echo base_url('admin/lapor_rawat');
                          }else if($lapor == 'pembayaran'){
                            echo base_url('admin/lapor_pembayaran');
                          }else if($lapor == 'hasil periksa'){
                            echo base_url('admin/lapor_hasil_periksa');
                          }

                        ?>
                        " method="post">
                     <div class="row">
                       <div class="col-md-6">
                         <div class="row">
                           <div class="col-md-6">
                            <label for="inputAddress">Dari Tgl</label>
                            <div class="date">
                              <input type="text" class="form-control datepicker" id="tanggal" name="tanggal1" aria-describedby="emailHelp" placeholder="Tanggal Hari ...." required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="inputAddress">Sampai Tgl</label>
                            <div class="date">
                              <input type="text" class="form-control datepicker" id="tanggal" name="tanggal2" aria-describedby="emailHelp" placeholder="Tanggal Hari ...." required>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group col-md-12">
                        <label for="inputAddress">&nbsp</label>
                        <input type="submit" class="btn btn-outline-<?=$warna?> form-control" value="Pilih" name="btn_tanggal">
                      </div>
                    </div>
                  </div>
                  </form>

                </div>
              </div>
              <?php
            }else if($periode == "minggu"){
              ?>
              <div class="card">
               <div class="card-body">
                        <form action="
                        <?php
                          if($lapor == 'pasien'){
                            echo base_url('admin/lapor_pasien');
                          }else if($lapor == 'dokter'){
                            echo base_url('admin/lapor_dokter');
                          }else if($lapor == 'kamar'){
                            echo base_url('admin/lapor_kamar');
                          }else if($lapor == 'user'){
                            echo base_url('admin/lapor_user');
                          }else if($lapor == 'spesialis'){
                            echo base_url('admin/lapor_spesialis');
                          }else if($lapor == 'rawat'){
                            echo base_url('admin/lapor_rawat');
                          }else if($lapor == 'pembayaran'){
                            echo base_url('admin/lapor_pembayaran');
                          }else if($lapor == 'hasil periksa'){
                            echo base_url('admin/lapor_hasil_periksa');
                          }

                        ?>
                        " method="post"> 
                <div class="row">
                 <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="inputAddress">Minggu</label>
                      <select class="form-control" name="minggu">
                        <option value="satuminggu">1 Minggu</option>
                        <option value="duaminggu">2 Minggu</option>
                        <option value="tigaminggu">3 Minggu</option>
                        <option value="empatminggu">4 Minggu</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="inputAddress">Bulan</label>
                      <select class="form-control" name="bulan">
                        <option value="1">Januari</option>
                        <option value="2">Febuari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label for="inputAddress">Tahun</label>
                      <select class="form-control" name="tahun">
                        <?php
                        $a = 1990;
                        $z = date('Y');

                        for ($i=$z; $i > $a; $i--) { 
                          echo "<option value=$i>$i</option>";
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-md-12">
                    <label for="inputAddress">&nbsp</label>
                    <input type="submit" class="btn btn-outline-<?=$warna?> form-control" value="Pilih" name="btn_minggu">
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
          <?php
        }else if($periode == "bulan"){
          ?>
          <div class="card">
           <div class="card-body">
            <form action="
                        <?php
                          if($lapor == 'pasien'){
                            echo base_url('admin/lapor_pasien');
                          }else if($lapor == 'dokter'){
                            echo base_url('admin/lapor_dokter');
                          }else if($lapor == 'kamar'){
                            echo base_url('admin/lapor_kamar');
                          }else if($lapor == 'user'){
                            echo base_url('admin/lapor_user');
                          }else if($lapor == 'spesialis'){
                            echo base_url('admin/lapor_spesialis');
                          }else if($lapor == 'rawat'){
                            echo base_url('admin/lapor_rawat');
                          }else if($lapor == 'pembayaran'){
                            echo base_url('admin/lapor_pembayaran');
                          }else if($lapor == 'hasil periksa'){
                            echo base_url('admin/lapor_hasil_periksa');
                          }

                        ?>
                        " method="post"> 
            <div class="row">
             <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <label for="inputAddress">Bulan</label>
                  <select class="form-control" name="bulan1" required>
                    <option value="01">Januari</option>
                    <option value="02">Febuari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputAddress">Tahun</label>
                  <select class="form-control" name="tahun1" required>
                    <?php
                    $a = 1990;
                    $z = date('Y');

                    for ($i=$z; $i > $a; $i--) { 
                      echo "<option value=$i>$i</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group col-md-12">
                <label for="inputAddress">&nbsp</label>
                <input type="submit" class="btn btn-outline-<?=$warna?> form-control" value="Pilih" name="btn_bulan">
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
      <?php
    }else if($periode == "tahun"){
      ?>
      <div class="card">
       <div class="card-body">
        <form action="
                        <?php
                          if($lapor == 'pasien'){
                            echo base_url('admin/lapor_pasien');
                          }else if($lapor == 'dokter'){
                            echo base_url('admin/lapor_dokter');
                          }else if($lapor == 'kamar'){
                            echo base_url('admin/lapor_kamar');
                          }else if($lapor == 'user'){
                            echo base_url('admin/lapor_user');
                          }else if($lapor == 'spesialis'){
                            echo base_url('admin/lapor_spesialis');
                          }}else if($lapor == 'rawat'){
                            echo base_url('admin/lapor_rawat');
                          }else if($lapor == 'pembayaran'){
                            echo base_url('admin/lapor_pembayaran');
                          }else if($lapor == 'hasil periksa'){
                            echo base_url('admin/lapor_hasil_periksa');
                          }

                        ?>
                        " method="post"> 
        <div class="row">
         <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <label for="inputAddress">Tahun</label>
              <select class="form-control" name="tahun2" required>
                <?php
                $a = 1990;
                $z = date('Y');

                for ($i=$z; $i > $a; $i--) { 
                  echo "<option value=$i>$i</option>";
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group col-md-12">
            <label for="inputAddress">&nbsp</label>
            <input type="submit" class="btn btn-outline-<?=$warna?> form-control" value="Pilih" name="btn_tahun">
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
  <?php
}
?>

</div>
</div>
</div>
</div>
</div>


        <!-- /.container-fluid -->