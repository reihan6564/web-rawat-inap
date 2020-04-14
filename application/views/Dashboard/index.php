<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Embellished 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140207

-->
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
		#menu a:hover{
			color: #fffff;
		}
		#logo .icon{
			background: #28a745;
		}
		.btn-lihat{
			font-size: x-large;
		} 
		html {
			scroll-behavior: smooth;
		}
		img{
			height: 150px;
			width: : 150px;
			border-radius: 50%;
		}

	</style>
</head>
<body class="bg-success">
	<div id="wrapper1">
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo"><img src="<?= base_url('')?>assets/img/logo-puskesmas.jpeg">
					<!-- Untuk Masukkin Logonya disini yah gan -->
					<h1><a class="text-success" href="#">Web Rawat Inap</a></h1>
					<span>KangR Development</span>
				</div>
					<div id="menu">
						<ul>
							<li><a class="btn btn-success text-light" href="">Home</a></li>
							<li><a class="btn btn-success text-light" href="#footer">Cari Pasien</a></li>
							<li><a class="btn btn-success text-light" href="#wrapper3">Lihat Kamar</a></li>
							<li><a class="btn btn-success text-light" href="#wrapper2">Tentang Aplikasi</a></li>
							<li><a class="btn btn-success text-light" href="<?= base_url('admin')?>">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="wrapper2" class="bg-success">
				<div id="welcome" class="container">
					<div class="title">
						<h2>Aplikasi Web Rawat Inap Puskesmas Sitiung 1</h2>
					</div>
					<p>Aplikasi ini berisi kan alur dari pasien untuk mencapai rawat di puskesmas cidahu. Dengan Menggunakan aplikasi ini akan sangat mudah dalam pengaplikasian dari kinerja puskesmas tersebut. Aplikasi Rawat inap ini juga mempunyai dua akses yang bisa di gunakan melalui login dan juga menggunakan kode tertentu </p>
				</div>
			</div>
			<div id="wrapper3">
				<div id="portfolio" class="container">
					<div class="title">
						<h2 class="text-success">Lihat Kamar</h2>
						<hr>
						<h5 class="text-capitalize text-success">hanya bisa melihat jika ingin rawat inap silahkan hubungi admin</h5> 
					</div>
					<div class="row">
						<?php
							foreach ($tampil_k as $tk) : 
						?>
						<div class="col-md-4">
							<div class="card">
								<div class="card-header alert bg-success">
									<h4 class="text-center text-light"><?= $tk['no_k'];?></h4>
								</div>
								<div class="card-body">
									<h5>Nama Kamar : <strong> <?= $tk['nama_k'];?></strong></h5><hr>
									<h5>Kelas Kamar : <?= $tk['kelas_k'];?></h5><hr>
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
									?>
								</h5>
								</div>
							</div>
						</div>
						<?php
                        	endforeach;
						?>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="col-md-12 text-center ">
								<a href="<?= base_url('dashboard/lihat_kamar');?>" class="btn btn-outline-success btn-lihat">
									 Kamar Lainnya 
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="container">
			<div class="title">
				<form action="<?= base_url('dashboard/cari_pasien');?>" method="post">
					<h2 class="text-center"><i class="fas fa-user-injured"></i>&nbspCari Pasien</h2>
					<hr class="bg-light">
					<div>
						<p class="text-light text-left">
							Gunakan kode pasien yang didapat setelah melakukan pembayaran struk
						</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" name="kode" placeholder="Masukkan Kode pasien">
						</div>
						<div class="col-md-4">
							<input type="submit" class="form-control btn btn-outline-light" value="Cari">
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
	</html>
