          <!-- Begin Page Content -->
    <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
      <div class="row">
        <div class="col-md-3">
              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Cek Kode</h4>
                </div>
                 <div class="card-body ">
                        <form method="post" action="<?= base_url('admin/cek_kode');?>">
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
                                    <a href="<?= base_url('admin/rawat');?>" class="btn btn-outline-warning form-control">Refresh</a>
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
                     <h4 class="text-center text-light">Rawat Pasien</h4>
                    </div>
                 <div class="card-body ">
                      <form method="post" action="<?= base_url('admin/input_rawat');?>">
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
                             <div class="form-group col-md-4">
                               <label for="inputAddress2">Dokter</label>
                                <select class="form-control" name="dokter">
                                  <option>Silahkan Pilih Dokter</option>
                                  <?php
                                  $no = 1;
                                  foreach ($dokter as $tdokter) :
                                          ?>
                                 <option value="<?= $tdokter['id_dokter'];?>"><?= $tdokter['nama_d'];?></option>
                                  <?php
                                    endforeach;
                                  ?>
                                </select>
                             </div>
                             <div class="form-group col-md-4">
                               <label for="inputAddress2">Daftar Kamar</label>
                                <select class="form-control" name="kamar">
                                   <option>Silahkan Pilih Kamar</option>
                                  <?php
                                  $no = 1;
                                  $kamart = $this->db->query("SELECT * FROM tb_kamar WHERE status_k = 'kosong' ")->result_array();
                                  foreach ($kamart as $tkamar) :
                                          ?>
                                 <option value="<?= $tkamar['id_kamar'];?>"><?= $tkamar['nama_k'];?></option>
                                  <?php
                                    endforeach;
                                  ?>
                                </select>
                             </div>
                             <div class="form-group col-md-4">
                                <label for="inputEmail4">Lama Inap<b>(hari)</b></label>
                                <input type="text" name="lama_i" class="form-control" id="inputEmail4" value="<?= $query['lama_inap'];?>">
                             </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress">Tanggal Inap</label>
                                <div class="date">
                                  <input type="text" class="form-control datepicker" id="tanggal_inap" name="tanggal_inap" aria-describedby="emailHelp" value="<?= date('Y-m-d'); ?>">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress">Tanggal Selesai Inap</label>
                                <div class="date">
                                  <input type="text" class="form-control datepicker" id="tanggal_selesai_inap" name="tanggal_selesai_inap" value="<?php
                                  $tambahan = "+".$query['lama_inap']." days";
                                  echo date('Y-m-d', strtotime($tambahan, strtotime(date('Y-m-d'))));
                                   ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <input type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" value="Tampilkan Detail">
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
                                        <div class="card ">
                                            <div class="alert bg-success" role="alert">
                                              <h4 class="text-center text-light">Data Pasien</h4>
                                            </div>
                                          <div class="card-body">
                                              <label class="text-dark"><b>Detail Pasien</b></label>
                                              <hr>
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