        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Spesialis</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <?php
            $queri = $this->db->get_where('tb_spesialis', ['id_spesialis' => $id])->row_array();
            ?>
          </div>

            <div class="card">
                  <div class="alert bg-success" role="alert">
                     <h4 class="text-center text-light">Edit Spesialis</h4>
                  </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_spesialis');?>">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Nama Spesialis</label>
                          <input type="hidden" name="id_s" class="form-control" id="inputEmail4" value="<?=$queri['id_spesialis'];?>">
                          <input type="text" name="nama_s" class="form-control" id="inputEmail4" value="<?=$queri['nama_spesialis'];?>">
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