        <!-- Begin Page Content -->
        <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
     
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Cek Kode</h4>
                </div>      
                 <div class="card-body ">
                        <form method="post" action="<?= base_url('admin/cek_kode_p');?>">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Kode Detail Pasien</label>
                                    <input type="text" name="kode" class="form-control" 
                                      <?php
                              if(isset($berhasil)){
                                ?>
                                   value="<?=$id;?>"
                              <?php } ?>
                                    placeholder="Masukkan Kode Detail Pasien ...">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="inputEmail4">&nbsp</label>
                                    <input type="submit" class="btn btn-outline-success form-control" value="Cek Kode">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="inputEmail4">&nbsp</label>
                                    <a href="<?= base_url('admin/Pembayaran');?>" class="btn btn-outline-warning form-control">Refresh</a>
                                 </div>
                                 
                            </div>
                        </form>
                      </div>
                </div>
            </div>
                    <?php
                              if(isset($berhasil)){
                                ?>
              <div class="col-md-9">
                <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Pembayaran</h4>
                  </div>
                   <div class="card-body ">
                        <form method="post" action="<?= base_url('admin/input_pembayaran');?>">
                          <div class="form-row">
                                   <?php
                                if(isset($berhasil)){
                                  ?>
                                  <div class="form-group col-md-4" hidden>
                                      <label for="inputEmail4">Kode Detail Pasien</label>
                                      <input type="text" name="kode" class="form-control" id="inputEmail4" value="<?= $id;?>">
                                   </div>
                                  <?php
                               }
                               ?>
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Jenis Tindakan</label>
                                        <input type="text" name="jenis_tindakan" class="form-control" id="inputEmail4" value="<?php
                                        if($query['ketentuan_dirawat'] == "tidak"){
                                          echo 'Periksa';
                                        }else{
                                          echo 'Rawat Inap';
                                        }
                                        ?>">
                                    </div> 
                                    <div class="form-group col-md-3">
                                      <label for="inputEmail4">Biaya Periksa</label>
                                      <input type="text" name="biaya_periksa" class="form-control" id="biaya_periksa" onkeyup="sum2();">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="inputEmail4">Biaya Inap<b>(bila dirawat)</b></label>
                                      <input type="text" name="biaya_inap" class="form-control" value="0" id="biaya_inap" onkeyup="sum2();" placeholder="0">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="inputEmail4">Total</label>
                                      <input type="text" name="total" class="form-control" id="total" readonly="">
                                    </div>
                               
                          </div>
                          <button type="submit" class="btn btn-success">Simpan Data</button>
                          <a href="<?= base_url('admin/lapor_bayar/').$id;?>" class="btn btn-info">Cetak Data</a>
                          <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Tampilkan">
                        </form>
                    </div>
                </div>  
              </div> 
                    <?php } ?>
          </div>
          <hr>
                     <?php
                              if(isset($berhasil)){
                                ?>
                                <div class="row">
                                   <div class="col-md-4">
                                     <div class="collapse" id="collapseExample">
                                      <div class="card">
                                        <div class="alert bg-success" role="alert">
                                           <h4 class="text-center text-light">Data Pasien</h4>
                                          </div>
                                        <div class="card-body">
                                            <p class="text-dark">ID Pasien : <b><?= $berhasil['id_pasien'];?></b></p>
                                            <p class="text-dark">Nama Pasien : <b><?= $berhasil['nama_p'];?></b></p>
                                            <p class="text-dark">Umur Pasien : <b><?= $berhasil['umur_p'];?></b></p>
                                            <p class="text-dark">Tanggal Lahir Pasien : <b><?= $berhasil['tanggal_lahir_p'];?></b></p>
                                            <p class="text-dark">Alamat Pasien : <b><?= $berhasil['alamat_p'];?></b></p>
                                            <p class="text-dark">Notelp Pasien : <b><?= $berhasil['notelp_p'];?></b></p>
                                            <p class="text-dark">Gender Pasien : <b><?= $berhasil['jenis_kelamin_p'];?></b></p>
                                            <p class="text-dark">Kota Pasien : <b><?= $berhasil['kota_p'];?></b></p>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                   <div class="col-md-8">
                                     <div class="collapse" id="collapseExample">
                                      <div class="card">
                                        <div class="alert bg-success" role="alert">
                                           <h4 class="text-center text-light">Detail Pasien</h4>
                                          </div>
                                        <div class="card-body">
                                            <p class="text-dark">Keterangan Dokter : <br><b><?= $query['ket'];?></b></p>
                                        </div>
                                      </div>
                                    </div>
                                   </div>
                                </div>
                                <?php
                              }
                             ?>
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->