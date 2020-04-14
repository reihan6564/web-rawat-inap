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
  <style type="text/css">
    .kotak{
      margin-top:20%;
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
                    <h1 class="h4 text-gray-900 mb-4">Login Rawat Inap</h1>
                     <?= $this->session->flashdata('message'); ?>
                  </div>
                  <form class="user" action="<?= base_url('login/cek_login');?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username ...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                  <hr>
                    <button type="submit" class="btn btn-success btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small text-success" href="<?= base_url('dashboard');?>">Dashboard</a>
                  </div>
                  <div class="text-center">
                    <!--<a class="small text-success" href="<?= base_url('login/registrasi');?>">Buat Akun</a>-->
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

</body>

</html>
