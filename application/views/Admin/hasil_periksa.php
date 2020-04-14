        <!-- Begin Page Content -->
        <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
     
          <!-- Content Row -->
          <div class="row">
          </div>

            <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Form Hasil Periksa</h4>
                  </div>
               <div class="card-body">
                    <form method="post" action="<?= base_url('admin/input_hasil');?>">
                      <div class="form-row">
                          <div class="form-group col-md-12">
                             <label for="inputAddress2">Daftar Pasien</label>
                              <select class="form-control" name="pasien">
                                <?php
                                $no = 1;
                                foreach ($pasien as $tpasien) :
                                        ?>
                               <option value="<?= $tpasien['id_pasien'];?>"><?= $tpasien['nama_p'];?></option>
                                <?php
                                  endforeach;
                                ?>
                              </select>
                           </div>
                           <div class="form-group  col-md-12">
                              <label for="inputAddress2">Keterangan Dokter</label>
                              <textarea class="form-control" name="ket_dok" id="ket_dok" rows="3" placeholder="Alamat ...."></textarea>
                           </div>
                           <div class="form-group col-md-6">
                             <label for="inputAddress2">Ketentuan Rawat</label>
                              <select class="form-control" name="ketentuan_r">
                                <option>Pilih Jenis Ketentuan ...</option>
                                <option value="ya">Dirawat</option>
                                <option value="tidak">Tidak Dirawat</option>
                              </select>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="inputEmail4">Lama Inap</label>
                              <input type="text" name="lama_i" class="form-control" id="inputEmail4" placeholder="..... hari">
                           </div>
                      </div>
                      <button type="submit" class="btn btn-success">Simpan Data</button>
                    </form>
                </div>

            </div>  
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->