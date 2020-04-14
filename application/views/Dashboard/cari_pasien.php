<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Web Rawat Inap</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="<?= base_url('');?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('');?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url('');?>assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?= base_url('');?>assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
	<style type="text/css">
		.card{
			margin-top:4%;
		}
	</style>
</head>

<body class="bg-light">
	<div class="container">
		<div class="card">
			<div class="card-header bg-success"><h4 class="text-center text-light"><i class="fas fa-user-injured"></i>&nbspCari Pasien</h4></div>
			<div class="card-body">
				<?= $this->session->flashdata('message'); ?>
				<div class="container">
					<form action="<?= base_url('dashboard/cari_pasien');?>" method="post">
						<p class="text-success text-left">
							Gunakan kode pasien yang didapat setelah melakukan pembayaran struk
						</p>
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control" name="kode" value="<?= $kode;?>" placeholder="Masukkan Kode pasien">
							</div>
							<div class="col-md-2">
								<input type="submit" class="form-control btn btn-outline-success" value="Cari">
							</div>
							<div class="col-md-2">
								<a href="../" class="form-control btn btn-outline-danger">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<hr class="bg-success" style="height:10px;">
		<?php 
		if(isset($pasiendata)){

			$pembayaran = $this->db->get_where('tb_pembayaran', ['id_pembayaran' => $kode_p])->row_array();
			$pasien = $this->db->get_where('tb_pasien', ['id_pasien' => $pasiendata['id_pasien']])->row_array();

			?>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-warning" role="alert">
							<h4 class="text-center text-light">Data Pembayaran</h4>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="card-body">
									<p class="text-dark">ID Pasien : <b><?= $pasien['id_pasien'];?></b></p>
									<p class="text-dark">Nama Pasien : <b><?= $pasien['nama_p'];?></b></p>
									<p class="text-dark">Umur Pasien : <b><?= $pasien['umur_p'];?></b></p>
									<p class="text-dark">Tanggal Lahir Pasien : <b><?= $pasien['tanggal_lahir_p'];?></b></p>
									<p class="text-dark">Alamat Pasien : <b><?= $pasien['alamat_p'];?></b></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card-body">
									<p class="text-dark">Notelp Pasien : <b><?= $pasien['notelp_p'];?></b></p>
									<p class="text-dark">Gender Pasien : <b><?= $pasien['jenis_kelamin_p'];?></b></p>
									<p class="text-dark">Kota Pasien : <b><?= $pasien['kota_p'];?></b></p>
									<p class="text-dark">Jenis Tindakan : <b><?= $pembayaran['jenis_tindakan'];?></b></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card-body">
									<p class="text-dark">Jumlah Tindakan : <b><?= $pembayaran['jumlah_p_tindakan'];?></b></p>
									<p class="text-dark">Jumlah Inap : <b><?= $pembayaran['jumlah_p_inap'];?></b></p>
									<p class="text-dark">Total : <b><?= $pembayaran['total'];?></b></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>

		<?php }?>
	</div>
</body>
<script src="<?= base_url('');?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>
