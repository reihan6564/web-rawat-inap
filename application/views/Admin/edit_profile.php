        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Ubah Profil</h1>
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_user'); ?>" enctype="multipart/form-data">
                        <?php
                        $queri = $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
                        ?>
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" value="<?= $queri['username']; ?>" class="form-control" id="username" placeholder="Username">
                                <input type="text" hidden name="id_u" value="<?= $queri['id_user']; ?>" class="form-control" id="id" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" value="" class="form-control" id="password" placeholder="...isi lagi jika ingin mengubah password...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_u"  class="form-control" value="<?= $queri['nama_u'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
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
                        </div>
                         <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10 date">
                                <input type="text" name="tanggal_lahir_u"  class="form-control datepicker" id="password" value="<?= $queri['tanggal_lahir_u'];?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email_u"  class="form-control" id="password" value="<?= $queri['email_u'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAddress2"  class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="alamat_u" id="alamat_p" rows="2" value=""><?= $queri['alamat_u']; ?></textarea>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nama_kategori" class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-10">
                                <input type="text" name="notelp_u"  class="form-control" id="password" value="<?= $queri['notelp_u'];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-outline-primary">Update Profil</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->