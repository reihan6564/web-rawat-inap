        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <?= $this->session->flashdata('message'); ?>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Form User</h4>
                  </div>
                  <div class="card-body">
                      <form method="post" action="<?= base_url('admin/input_user');?>">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Username</label>
                            <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="...Username">
                          </div> 
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Password User</label>
                            <input type="password" name="password" class="form-control" id="inputEmail4" placeholder=".....">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="inputPassword4">Nama Lengkap</label>
                            <input type="text" name="nama_u" class="form-control" placeholder="... Full Name">
                          </div>   
                          <div class="form-group col-md-12">
                            <label for="inputPassword4">Email</label>
                            <input type="email" name="email_u" class="form-control" placeholder="... Email Name">
                          </div>
                          <div class="form-group col-md-12">
                               <label for="inputAddress2">Gender User</label>
                                <select class="form-control" name="jenis_kelamin_u">
                                  <option>Pilih Jenis Kelamin ...</option>
                                  <option value="laki-laki">Laki-Laki</option>
                                  <option value="perempuan">Perempuan</option>
                                </select>
                          </div>
                          <div class="form-group col-md-12">
                              <label for="inputAddress">Tanggal Lahir User</label>
                                <div class="date">
                                  <input type="text" class="form-control datepicker" id="tanggal_lahir_u" name="tanggal_lahir_u" aria-describedby="emailHelp" placeholder="Tanggal Lahir ....">
                                </div>
                          </div>
                          <div class="form-group col-md-12">
                              <label for="inputAddress2">No Telp User</label>
                              <input type="text" name="notelp_u" class="form-control" id="inputAddress2" placeholder="0892.....">
                          </div> 
                          <div class="form-group col-md-12">
                            <label for="inputAddress2">Jabatan User</label>
                            <select class="form-control" name="jabatan_u">
                              <option>Pilih Jabatan ...</option>
                              <option value="ka puskesmas">Ka Puskesmas</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">Alamat User</label>
                          <textarea class="form-control" name="alamat_u" id="alamat_u" rows="2" placeholder="Alamat ...."></textarea>
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
                    <h4 class="text-center text-light">Table User</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Id User</th>
                                      <th>Username</th>
                                      <th>Nama Lengkap</th>
                                      <th>Gender</th>
                                      <th>Tanggal Lahir</th>
                                      <th>Email</th>
                                      <th>Alamat</th>
                                      <th>No Telpon </th>
                                      <th>Jabatan </th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  foreach ($user as $tuser) :
                                          ?>
                                          <tr>
                                              <td><?= $no++; ?></td>
                                              <td><?= $tuser['id_user']; ?></td>
                                              <td><?= $tuser['username']; ?></td>
                                              <td><?= $tuser['nama_u']; ?></td>
                                              <td><?= $tuser['jenis_kelamin_u']; ?></td>
                                              <td><?= $tuser['tanggal_lahir_u']; ?></td>
                                              <td><?= $tuser['email_u']; ?></td>
                                              <td><?= $tuser['alamat_u']; ?></td>
                                              <td><?= $tuser['notelp_u']; ?></td>
                                              <td><?= $tuser['jabatan_u']; ?></td>
                                              <td>
                                                  <a href="<?= base_url('admin/edit_user/') . $tuser['id_user']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                  <a href="" class="hapusModaluser" data-target="#hapusModal" data-toggle="modal" data-id="<?= $tuser['id_user'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
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
            <hr>
          </div>
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->