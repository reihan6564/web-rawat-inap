        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="row">
          </div>

            <div class="card">
                  <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Form Pendaftaran</h4>
                  </div>
               <div class="card-body">
                    <form method="post" action="<?= base_url('admin/input_pasien');?>">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nama Pasien</label>
                          <input type="text" name="nama_p" class="form-control" id="inputEmail4" placeholder=".....">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputPassword4">Umur Pasien</label>
                          <input type="text" name="umur_p" class="form-control" placeholder="... Tahun">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Tanggal Lahir Pasien</label>
                              <div class="date">
                                <input type="text" class="form-control datepicker" id="tanggal_lahir_p" name="tanggal_lahir_p" aria-describedby="emailHelp" placeholder="Tanggal Lahir ....">
                              </div>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputAddress2">No Telp Pasien</label>
                            <input type="text" name="notelp_p" class="form-control" id="inputAddress2" placeholder="0892.....">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2">Alamat Pasien</label>
                        <textarea class="form-control" name="alamat_p" id="alamat_p" rows="2" placeholder="Alamat ...."></textarea>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-md-2">
                             <label for="inputAddress2">Gender Pasien</label>
                              <select class="form-control" name="jenis_kelamin_p">
                                <option>Pilih Jenis Kelamin ...</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                              </select>
                           </div>
                           <div class="form-group col-md-2">
                                <label for="inputAddress2">Kota Pasien</label>
                                <input type="text" name="kota_p" class="form-control" id="inputAddress2" placeholder="Leuwisadeng...">
                           </div>
                       </div>
                      

                      <button type="submit" class="btn btn-success">Simpan Data</button>
                    </form>
                </div>

            </div>  
             <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->