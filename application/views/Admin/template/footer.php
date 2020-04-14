   </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin logout ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik <b>Logout</b> jika anda ingin keluar dari aplikasi ini</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('login/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('');?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('');?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('');?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('');?>assets/vendor/chart.js/Chart.min.js"></script>

   <script src="<?= base_url('');?>assets/js/bootstrap-datepicker.min.js"></script>
  <!-- Page level custom scripts -->
  <script type="text/javascript">
     $(function() {
        $('.hapusModalpasien').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_pasien/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
        $('.hapusModaldokter').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_dokter/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
        $('.hapusModalspesialis').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_spesialis/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
        $('.hapusModalkamar').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_kamar/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        }); 
        $('.hapusModalobat').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_obat/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
         $('.hapusModaluser').on('click', function() {
            const id = $(this).data('id');
            console.log(id);
            var href = '<?= base_url(); ?>admin/hapus_user/' + id;
            console.log(href);
            $('#btn-yes').attr('href', href);
        });
      });

    $(function() {
          $(".datepicker").datepicker({
              format: 'yyyy-mm-dd',
              autoclose: true,
              todayHighlight: true,
          });
      });

    $('#obat').change(function () {
      var id_obat = $('#obat').val();
      if(id_obat != ''){
         $.ajax({
              type: "POST",
              url: "<?= base_url('admin/ambil_obat');?>",
              data: {'id_obat': id_obat },
              success: function (data) {
                console.log("data");
                  $('#harga_obat').html(data);
              }
         });
      }
    });

    function sum2() {
      var biaya_periksa = document.getElementById('biaya_periksa').value;
      var biaya_inap = document.getElementById('biaya_inap').value;
      var total = parseInt(biaya_periksa) + parseInt(biaya_inap);
      if (!isNaN(total)) {
         document.getElementById('total').value = total;
      }
    }
    function sum() {
      var harga_obat = document.getElementById('harga_o').value;
      var jumlah_obat = document.getElementById('jumlah_o').value;
      var hasil_obat = parseInt(harga_obat) * parseInt(jumlah_obat);
      if (!isNaN(hasil_obat)) {
         document.getElementById('hasil_o').value = hasil_obat;
    }

   
}

  </script>
  <script src="<?= base_url(''); ?>assets/js/datatables-demo.js"></script>
  <script src="<?= base_url('');?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url('');?>assets/js/demo/chart-pie-demo.js"></script>
  <script src="<?= base_url(''); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(''); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
</body>

</html>
