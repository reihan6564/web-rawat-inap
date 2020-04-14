<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Sistem</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('');?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link href="<?= base_url('');?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootsrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  <style type="text/css">
    .kotak{
      margin-top:5%;
    }

  </style>
</head>

<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="kotak"></div>
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register Rawat Inap</h1>
                  </div>
                  <form class="user" action="<?= base_url('login/registrasi_akun');?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username ....">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password ....">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="nama_u" name="nama_u" aria-describedby="emailHelp" placeholder="Full Name ....">
                    </div>
                   <div class="form-group">
                      <select class="form-control" name="jenis_kelamin_u">
                        <option>Pilih Jenis Kelamin ....</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <div class="date">
                        <input type="text" class="form-control datepicker" id="tanggal_lahir_u" name="tanggal_lahir_u" aria-describedby="emailHelp" placeholder="Tanggal Lahir ....">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email_u" name="email_u" aria-describedby="emailHelp" placeholder="Enter Your Email ....">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="alamat_u" id="alamat_u" rows="2" placeholder="Alamat ...."></textarea>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="notelp_u" name="notelp_u" aria-describedby="emailHelp" placeholder="Enter No Telp ....">
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="jabatan_u">
                        <option>Pilih Jabatan ...</option>
                        <option value="Ka puskesmas">KA Puskesmas</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-user btn-block">
                      Register
                    </button>
                   
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small text-success" href="<?= base_url('login');?>">Akun sudah ada , Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url('');?>assets/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $(function() {
          $(".datepicker").datepicker({
              format: 'yyyy-mm-dd',
              autoclose: true,
              todayHighlight: true,
          });
      });
  </script>
</body>

</html>
