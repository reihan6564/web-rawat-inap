        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <?php
            $queri = $this->db->get_where('tb_pasien', ['id_pasien' => $id])->row_array();
            ?>
          </div>

            <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Edit Form Pasien</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_pasien');?>">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nama Pasien</label>
                          <input type="hidden" name="id_p" class="form-control" id="inputEmail4"  value="<?= $queri['id_pasien']; ?>">
                          <input type="text" name="nama_p" class="form-control" id="inputEmail4"  value="<?= $queri['nama_p']; ?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputPassword4">Umur Pasien</label>
                          <input type="text" name="umur_p" class="form-control" value="<?= $queri['umur_p']; ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Tanggal Lahir Pasien</label>
                              <div class="date">
                                <input type="text" class="form-control datepicker" id="tanggal_lahir_p" name="tanggal_lahir_p" aria-describedby="emailHelp" value="<?= $queri['tanggal_lahir_p']; ?>">
                              </div>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputAddress2">No Telp Pasien</label>
                            <input type="text" name="notelp_p" class="form-control" id="inputAddress2" value="<?= $queri['notelp_p']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Alamat Pasien</label>
                        <textarea class="form-control" name="alamat_p" id="alamat_p" rows="2" value=""><?= $queri['alamat_p']; ?></textarea>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-2">
                             <label for="inputAddress2">Gender Pasien</label>
                              <select class="form-control" name="jenis_kelamin_p">
                                <?php
                                  if($queri['jenis_kelamin_p'] == "laki-laki"){
                                    ?>
                                     <option selected value="laki-laki">Laki-Laki</option>
                                <?php
                                  }else{
                                    ?>
                                    <option selected value="perempuan">Perempuan</option>

                                <?php
                                  }
                                ?>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                           </div>
                           <div class="form-group col-md-2">
                                <label for="inputAddress2">Kota Pasien</label>
                                <input type="text" name="kota_p" class="form-control" id="inputAddress2" value="<?= $queri['kota_p']; ?>">
                           </div>
                       </div>
                      

                      <button type="submit" class="btn btn-success">Update Data</button>
                    </form>
                </div>

                <!-- Modal Hapus  -->
                 <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Apakah data ingin dihapus ?</div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="button" data-dismiss="modal">No</button>
                                <a class="btn btn-danger" id="btn-yes" href="">Yes</a>
                            </div>
                        </div>
                    </div>
                 </div>

            </div>  
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->