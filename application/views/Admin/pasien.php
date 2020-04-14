        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         
            <?= $this->session->flashdata('message'); ?>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">

            <div class="card">
              <div class="alert bg-success" role="alert">
                <h4 class="text-center text-light">Form Pasien</h4>
              </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/input_pasien');?>">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="inputEmail4">Nama Pasien</label>
                          <input type="text" name="nama_p" class="form-control" id="inputEmail4" placeholder=".....">
                        </div>
                        <div class="form-group col-md-12">
                          <label for="inputPassword4">Umur Pasien</label>
                          <input type="text" name="umur_p" class="form-control" placeholder="... Tahun">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Tanggal Lahir Pasien</label>
                              <div class="date">
                                <input type="text" class="form-control datepicker" id="tanggal_lahir_p" name="tanggal_lahir_p" aria-describedby="emailHelp" placeholder="Tanggal Lahir ....">
                              </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress2">No Telp Pasien</label>
                            <input type="text" name="notelp_p" class="form-control" id="inputAddress2" placeholder="0892.....">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Alamat Pasien</label>
                        <textarea class="form-control" name="alamat_p" id="alamat_p" rows="2" placeholder="Alamat ...."></textarea>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-12">
                             <label for="inputAddress2">Gender Pasien</label>
                              <select class="form-control" name="jenis_kelamin_p">
                                <option>Pilih Jenis Kelamin ...</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                           </div>
                           <div class="form-group col-md-12">
                                <label for="inputAddress2">Kota Pasien</label>
                                <input type="text" name="kota_p" class="form-control" id="inputAddress2" placeholder="Leuwisadeng...">
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
                <h4 class="text-center text-light">Table Pasien</h4>
              </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                   <!-- <th>Id Pasien</th> -->
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat </th>
                                    <th>No Telp </th>
                                    <th>Gender </th>
                                    <th>Kota</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pasien as $tpasien) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <!--<td><?= $tpasien['id_pasien']; ?></td>-->
                                            <td><?= $tpasien['nama_p']; ?></td>
                                            <td><?= $tpasien['umur_p']; ?></td>
                                            <td><?= $tpasien['tanggal_lahir_p']; ?></td>
                                            <td><?= $tpasien['alamat_p']; ?></td>
                                            <td><?= $tpasien['notelp_p']; ?></td>
                                            <td><?= $tpasien['jenis_kelamin_p']; ?></td>
                                            <td><?= $tpasien['kota_p']; ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/edit_pasien/') . $tpasien['id_pasien']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                <a href="" class="hapusModalpasien" data-target="#hapusModal" data-toggle="modal" data-id="<?= $tpasien['id_pasien'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
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