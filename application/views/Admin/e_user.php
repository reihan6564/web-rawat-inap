        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <?php
            $queri = $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
            ?>
          </div>

            <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Edit User</h4>
                  </div>
                <div class="card-body">
                     <form method="post" action="<?= base_url('admin/update_user');?>">
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">Username</label>
                          <input type="hidden" name="id_u" class="form-control" id="inputEmail4" value="<?= $queri['id_user'];?>">
                          <input type="text" name="username" class="form-control" id="inputEmail4" value="<?= $queri['username'];?>">
                        </div> 
                        <div class="form-group col-md-3">
                          <label for="inputEmail4">Password User</label>
                          <input type="password" name="password" class="form-control" id="inputEmail4" value="<?= $queri['password'];?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputPassword4">Nama Lengkap</label>
                          <input type="text" name="nama_u" class="form-control" value="<?= $queri['nama_u'];?>">
                        </div>   
                        <div class="form-group col-md-3">
                          <label for="inputPassword4">Email</label>
                          <input type="email" name="email_u" class="form-control" value="<?= $queri['email_u'];?>">
                        </div>
                        <div class="form-group col-md-3">
                             <label for="inputAddress2">Gender User</label>
                              <select class="form-control" name="jenis_kelamin_u">
                                <?php
                                  if($queri['jenis_kelamin_u'] == "laki-laki"){
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
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Tanggal Lahir User</label>
                              <div class="date">
                                <input type="text" class="form-control datepicker" id="tanggal_lahir_u" name="tanggal_lahir_u" aria-describedby="emailHelp" value="<?= $queri['tanggal_lahir_u'];?>">
                              </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress2">No Telp User</label>
                            <input type="text" name="notelp_u" class="form-control" id="inputAddress2" value="<?= $queri['notelp_u'];?>">
                        </div> 
                        <div class="form-group col-md-3">
                             <label for="inputAddress2">Jabatan User</label>
                              <select class="form-control" name="jabatan_u">
                                <?php
                                  if($queri['jabatan_u'] == "administrator"){
                                    ?>
                                     <option selected value="administrator">Administrator</option>
                                <?php
                                  }else{
                                    ?>
                                    <option selected value="ka puskesmas">Ka Puskesmas</option>

                                <?php
                                  }
                                ?>
                                <option value="administrator">Administrator</option>
                                <option value="ka puskesmas">Ka Puskesmas</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Alamat User</label>
                        <textarea class="form-control" name="alamat_u" id="alamat_u" rows="2"><?= $queri['alamat_u'];?></textarea>
                      </div>
                      <button type="submit" class="btn btn-success">Simpan Data</button>
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
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                                <a class="btn btn-danger" id="btn-yes" href="">Yes</a>
                            </div>
                        </div>
                    </div>
                 </div>

            </div>  
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->