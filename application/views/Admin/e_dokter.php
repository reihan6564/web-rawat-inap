        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <?php
            $queri = $this->db->get_where('tb_dokter', ['id_dokter' => $id])->row_array();
            ?>
          </div>

          <div class="card">
           <div class="alert bg-success" role="alert">
             <h4 class="text-center text-light">Edit Dokter</h4>
           </div>
           <div class="card-body">
            <form method="post" action="<?= base_url('admin/update_dokter');?>">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nama Dokter</label>
                  <input type="hidden" name="id_d" class="form-control" id="inputEmail4" value="<?=$queri['id_dokter'];?>">
                  <input type="text" name="nama_d" class="form-control" id="inputEmail4" value="<?=$queri['nama_d'];?>">
                </div>
                <div class="form-group col-md-2">
                  <label for="kategori">Spesialis</label>
                  <select name="id_spesialis" id="" class="form-control">
                    <?php
                    if($queri['id_spesialis']){

                      $query1 = $this->db->query("SELECT * FROM tb_spesialis where id_spesialis = $queri[id_spesialis]")->row_array();
                      ?>
                      <option value="<?= $query1['id_spesialis']; ?>"><?= $query1['nama_spesialis']; ?></option>
                      <?php
                    }else{
                      ?>
                      <option>Kosong Pilih Ulang</option>
                      <?php
                    }
                    ?>
                    <?php
                    $query = $this->db->query("SELECT * FROM tb_spesialis")->result_array();
                    foreach ($query as $sps) :
                      ?>
                      <option value="<?= $sps['id_spesialis']; ?>"><?= $sps['nama_spesialis']; ?></option>
                    <?php endforeach; ?>

                  </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputAddress2">Jam Praktek</label>
                  <input type="text" name="jam_praktek" class="form-control" id="inputAddress2" value="<?=$queri['jam_praktek'];?>">
                </div>
                <div class="form-group col-md-2">
                 <label for="inputAddress2">Gender Pasien</label>
                 <select class="form-control" name="jenis_kelamin_d">
                  <?php
                  if($queri['jenis_kelamin_d'] == "laki-laki"){
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