        <!-- Begin Page Content -->
        <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
          <!-- Content Row -->
          <div class="row">
          <div class="col-md-3">
            <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Form Kamar</h4>
                  </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/input_kamar');?>">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Nama Kamar</label>
                          <input type="text" name="nama_k" class="form-control" id="inputEmail4" placeholder=".....">
                        </div>
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">No Kamar</label>
                          <input type="text" name="no_k" class="form-control" id="inputEmail4" placeholder=".....">
                        </div>
                        <div class="form-group col-md-12">
                             <label for="inputAddress2">Kelas Kamar</label>
                              <select class="form-control" name="kelas_k">
                                <option>Pilih Kelas</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                              </select>
                         </div> 
                         <div class="form-group col-md-12">
                             <label for="inputAddress2">Status Kamar</label>
                              <select class="form-control" name="status_k">
                                <option>Pilih Status</option>
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
          </div>
          <div class="col-md-9">
              <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Table Kamar</h4>
                  </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Kamar</th>
                                    <th>Nama kamar</th>
                                    <th>No kamar</th>
                                    <th>Kelas kamar</th>
                                    <th>Status kamar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kamar as $tkamar) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $tkamar['id_kamar']; ?></td>
                                            <td><?= $tkamar['nama_k']; ?></td>
                                            <td><?= $tkamar['no_k']; ?></td>
                                            <td><?= $tkamar['kelas_k']; ?></td>
                                            <td><?= $tkamar['status_k']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/edit_kamar/') . $tkamar['id_kamar']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                <a href="" class="hapusModalkamar" data-target="#hapusModal" data-toggle="modal" data-id="<?= $tkamar['id_kamar'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
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