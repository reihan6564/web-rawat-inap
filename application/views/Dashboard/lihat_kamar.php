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
			<div class="card-header bg-success"><h4 class="text-center text-light">Lihat Kamar</h4></div>
			<div class="card-body">
				<?= $this->session->flashdata('message'); ?>
				<div class="row">
					<div class="col-md-2">
						<a class="btn btn-outline-danger form-control" href="../">Kembali</a>
					</div>
					<div class="col-md-2">
						<a class="btn btn-outline-primary form-control" href="<?= base_url('dashboard/lihat_kamar');?>">Refresh</a>
					</div>
				</div>
				<div class="row">
					<?php
					foreach ($tampil_k as $tk) : 
						?>
						<div class="col-md-4">
							<div class="card">
								<form action="<?= base_url('dashboard/lihat_data')?>" method="post">
									<div class="card-header alert bg-success">
										<h4 class="text-center text-light"><?= $tk['no_k'];?></h4>
									</div>
									<div class="card-body">
										<h5>Nama Kamar : <strong> <?= $tk['nama_k'];?></strong></h5><hr>
										<h5>Kelas Kamar : <?= $tk['kelas_k'];?></h5><hr>
										<input type="hidden" name="id_kamar" value="<?= $tk['id_kamar'];?>">
										<h5>Status Kamar : <?php
										if($tk['status_k'] == "kosong"){
											?>
											<span class="text-danger">
												Kosong
											</span>
											<?php
										}else{ 
											echo "<span class='text-success text-capitalize'>". $tk['status_k'];
										}
										?></h5><hr>
										<input type="submit" class="btn btn-outline-success form-control" data-toggle="collapse" data-target="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" value="Lihat Data">
									</div>
								</form>
							</div>
						</div>
						<?php
					endforeach;
					?>
				</div>	
			</div>
		</div>
	</div>
	<div class="container">
		<hr class="bg-success" style="height:10px;">
		<?php 
		if(isset($pasiendata)){

			$kamar = $this->db->get_where('tb_kamar', ['id_kamar' => $id_k])->row_array();
			$rawat = $this->db->get_where('tb_rawat', ['id_rawat' => $rawatdata])->row_array();
			$pasien = $this->db->get_where('tb_pasien', ['id_pasien' => $pasiendata['id_pasien']])->row_array();
			$dokter = $this->db->get_where('tb_dokter', ['id_dokter' => $dokterdata['id_dokter']])->row_array();

			?>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-warning" role="alert">
							<h4 class="text-center text-light">Data Kamar</h4>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="card-body">
									<p class="text-dark">ID Pasien : <b><?= $pasien['id_pasien'];?></b></p>
									<p class="text-dark">Nama Pasien : <b><?= $pasien['nama_p'];?></b></p>
									<p class="text-dark">Umur Pasien : <b><?= $pasien['umur_p'];?></b></p>
									<p class="text-dark">Tanggal Lahir Pasien : <b><?= $pasien['tanggal_lahir_p'];?></b></p>
									<p class="text-dark">Alamat Pasien : <b><?= $pasien['alamat_p'];?></b></p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card-body">
									<p class="text-dark">Notelp Pasien : <b><?= $pasien['notelp_p'];?></b></p>
									<p class="text-dark">Gender Pasien : <b><?= $pasien['jenis_kelamin_p'];?></b></p>
									<p class="text-dark">Kota Pasien : <b><?= $pasien['kota_p'];?></b></p>
									<p class="text-dark">No Kamar : <b><?= $kamar['no_k'];?></b></p>
									<p class="text-dark">Nama Kamar : <b><?= $kamar['nama_k'];?></b></p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card-body">
									<p class="text-dark">Nama Dokter : <b><?= $dokter['nama_d'];?></b></p>
									<?php
									$id_spesialis = $dokter['id_spesialis'];
									$query = $this->db->query("SELECT * FROM tb_spesialis where id_spesialis = '$id_spesialis'")->row_array();
									?>
									<p class="text-dark">Spesialis : <b><?= $query['nama_spesialis'];?></b></p>
									<p class="text-dark">Jam Praktek : <b><?= $dokter['jam_praktek'];?></b></p>
									<p class="text-dark">Gender Dokter: <b><?= $dokter['jenis_kelamin_d'];?></b></p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card-body">
									<p class="text-dark">Kelas Kamar : <b><?= $kamar['kelas_k'];?></b></p>
									<p class="text-dark">Status Kamar : <b><?= $kamar['status_k'];?></b></p>
									<p class="text-dark">Lama Inap: <b><?= $rawat['lama_inap'];?></b></p>
									<p class="text-dark">Tanggal Inap: <b><?= $rawat['tanggal_inap'];?></b></p>
									<p class="text-dark">Tanggal Selesai Inap: <b><?= $rawat['tanggal_selesai_inap'];?></b></p>
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
