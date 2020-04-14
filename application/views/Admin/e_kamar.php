        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <?php
            $queri = $this->db->get_where('tb_kamar', ['id_kamar' => $id])->row_array();
            ?>
          </div>

            <div class="card">
                <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Edit Kamar</h4>
                  </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_kamar');?>">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nama Kamar</label>
                          <input type="text" name="id_k" hidden class="form-control" id="inputEmail4" value="<?= $queri['id_kamar'];?>">
                          <input type="text" name="nama_k" class="form-control" id="inputEmail4" value="<?= $queri['nama_k'];?>">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputEmail4">No Kamar</label>
                          <input type="text" name="no_k" class="form-control" id="inputEmail4"  value="<?= $queri['no_k'];?>">
                        </div>
                         <div class="form-group col-md-2">
                             <label for="inputAddress2">Kelas Kamar</label>
                              <select class="form-control" name="kelas_k">
                                <?php
                                  if($queri['kelas_k'] == "1"){
                                    ?>
                                     <option selected value="1">1</option>
                                <?php
                                  }elseif ($queri['kelas_k'] == "2") {
                                    ?>
                                    <option selected value="2">2</option>

                                <?php
                                  }else{
                                    ?>
                                    <option selected value="3">3</option>

                                <?php
                                  }
                                ?>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                              </select>
                           </div>
                            <div class="form-group col-md-2">
                             <label for="inputAddress2">Status Kamar</label>
                              <select class="form-control" name="status_k">
                                <option value="<?=$queri['status_k'];?>"><?=$queri['status_k'];?></option>
                                <option value="terisi">Terisi</option>
                                <option value="kosong">Kosong</option>
                              </select>
                           </div>
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