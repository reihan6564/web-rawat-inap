        <!-- Begin Page Content -->
        <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Form Spesialis</h4>
                  </div>
                  <div class="card-body">
                      <form method="post" action="<?= base_url('admin/input_spesialis');?>">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama Spesialis</label>
                            <input type="text" name="nama_s" class="form-control" id="inputEmail4" placeholder=".....">
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
              </div>  
            <div class="col-md-6">
                  <div class="card">
                    <div class="alert bg-success" role="alert">
                      <h4 class="text-center text-light">Table Spesialis</h4>
                   </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Id Spesialis</th>
                                      <th>Nama Spesialis</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  foreach ($spesialis as $tspesialis) :
                                          ?>
                                          <tr>
                                              <td><?= $no++; ?></td>
                                              <td><?= $tspesialis['id_spesialis']; ?></td>
                                              <td><?= $tspesialis['nama_spesialis']; ?></td>
                                              <td>
                                                  <a href="<?= base_url('admin/edit_spesialis/') . $tspesialis['id_spesialis']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                  <a href="" class="hapusModalspesialis" data-target="#hapusModal" data-toggle="modal" data-id="<?= $tspesialis['id_spesialis'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
                                              </td>
                                          </tr>
                                  <?php
                                      
                                  endforeach; ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          <hr>
          
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->