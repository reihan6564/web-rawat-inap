        <!-- Begin Page Content -->
        <div class="container-fluid">
      <?= $this->session->flashdata('message'); ?>
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                 <div class="alert bg-success" role="alert">
                     <h4 class="text-center text-light">Form Dokter</h4>
                  </div>
                  <div class="card-body">
                      <form method="post" action="<?= base_url('admin/input_dokter');?>">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label for="inputEmail4">Nama Dokter</label>
                            <input type="text" name="nama_d" class="form-control" id="inputEmail4" placeholder=".....">
                          </div>
                          <div class="form-group col-md-12">
                              <label for="kategori">Spesialis</label>
                                  <select name="spesialis" id="" class="form-control">
                                      <option>Pilih Kategori</option>
                                      <?php
                                      $query = $this->db->query("SELECT * FROM tb_spesialis")->result_array();
                                      foreach ($query as $sps) :
                                          ?>
                                          <option value="<?= $sps['id_spesialis']; ?>"><?= $sps['nama_spesialis']; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                          </div>
                          <div class="form-group col-md-12">
                              <label for="inputAddress2">Jam Praktek</label>
                              <input type="text" name="jam_praktek" class="form-control" id="inputAddress2" placeholder="0892.....">
                          </div>
                          <div class="form-group col-md-12">
                               <label for="inputAddress2">Gender Pasien</label>
                                <select class="form-control" name="jenis_kelamin_d">
                                  <option>Pilih Jenis Kelamin ...</option>
                                  <option value="laki-laki">Laki-Laki</option>
                                  <option value="perempuan">Perempuan</option>
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
                     <h4 class="text-center text-light">Table Dokter</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Id Dokter</th>
                                      <th>Nama Dokter</th>
                                      <th>Id Spesialis</th>
                                      <th>Jam Praktek</th>
                                      <th>Jenis Kelamin</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $no = 1;
                                  foreach ($dokter as $tdokter) :
                                          ?>
                                          <tr>
                                              <td><?= $no++; ?></td>
                                              <td><?= $tdokter['id_dokter']; ?></td>
                                              <td><?= $tdokter['nama_d']; ?></td>
                                              <?php
                                              $query2 = $this->db->query("SELECT * FROM tb_spesialis where id_spesialis = '".$tdokter['id_spesialis']."'")->result_array();
                                              foreach ($query2 as $tsps) :
                                                  if($tdokter['id_spesialis'] == 1){
                                              ?>
                                                    <td>Kosong</td>
                                              <?php 
                                                  }else{
                                                  ?>
                                                    <td><?= $tsps['nama_spesialis']; ?></td>
                                              <?php 
                                                  }
                                              endforeach; ?>
                                              <td><?= $tdokter['jam_praktek']; ?></td>
                                              <td><?= $tdokter['jenis_kelamin_d']; ?></td>
                                              <td>
                                                  <a href="<?= base_url('admin/edit_dokter/') . $tdokter['id_dokter']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |
                                                  <a href="" class="hapusModaldokter" data-target="#hapusModal" data-toggle="modal" data-id="<?= $tdokter['id_dokter'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
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