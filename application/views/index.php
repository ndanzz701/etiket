<!DOCTYPE html>
<html>
<head>
	<title>Etiket</title>
	<!-- require meta tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shink-to-fit-no">

  <title>Etiket</title>

  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/bootstrap/dist/css/bootstrap.css')?>">

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/home/custom/css/style.css')?>">

</head>
<body>


	<!-- navbar -->

	<nav class="navbar navbar-expand-md navbar-light">
		<div class="container">
			<a class="navbar-brand" href="">E-tiket</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="">Beranda<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?php echo base_url('login')?>">SIGN-IN</a>
				</div>
			</div>
		</div>
	</nav>

	<!-- end navbar -->


	<!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="">Cari tiket  <span>mudah?</span><br> pakai <span>E-tiket</span> saja</h1>
			<a href="<?php echo base_url('login')?>" class="btn btn-primary tombol">SIGN-IN</a>
		</div>
	</div>
	<!-- end jumbotron -->



	<!-- container -->
	<div class="container">
	<!-- info panel -->
	
		<div class="row justify-content-center">
			<div class="col-10 info-panel">
				<div class="row">
					<div class="col-lg">
						<img src="<?php echo base_url('assets/home/foto/iconpesawat.png')?>" alt="Pesawat" class="float-left">
						<h4>Tiket Pesawat</h4>
						<p>Lorem ipsum dolor sit amet consectetur.
						</p>
					</div>
					<div class="col-lg">
						<img src="<?php echo base_url('assets/home/foto/iconkereta.png')?>" alt="Kereta" class="float-left">
						<h4>Tiket Kereta</h4>
						<p>Lorem ipsum dolor sit amet consectetur.</p>
					</div>
					<div class="col-lg">
						<img src="<?php echo base_url('assets/home/foto/icongembok.png')?>" alt="Gembok" class="float-left rounded-circle">
						<h4>Keamanan</h4>
						<p>Lorem ipsum dolor sit amet consectetur.</p>
					</div>
				</div>
			</div>
		</div>
	
	<!-- end info panel -->
	

	<!-- deskripsi -->
	
		<div class="row deskripsi">
			<div class="row">
				<div class="col-lg">
					<img src="<?php echo base_url('assets/home/foto/pesawat.png')?>" class="img-fluid">
				</div>
				<div class="col-lg">
					<h3>Anda diberikan <span>banyak</span> pilihan <span>pesawat</span></h3>
					<p>Banyaknya maskapai penerbangan yang bekerja sama dengan kami menjadikan etiket punya banyak pilihan pesawat</p>
					<a href="<?php echo base_url('login')?>" class="btn btn-primary tombol">SIGN-IN</a>
					<hr>
				</div>
			</div>
			<div class="m-5">
			</div>
			<div class="row">
				<div class="col-lg">
					<h3>Anda diberikan <span>banyak</span> pilihan <span>kereta</span></h3>
					<p>Lebih 1000 perusahaan kereta menjalin kerja sama dengan kami sehingga tersedia banyak pilihan dalam memilih kereta</p>
					<a href="<?php echo base_url('login')?>" class="btn btn-primary tombol">SIGN-IN</a>
				</div>
				<div class="col-lg">
					<img src="<?php echo base_url('assets/home/foto/kereta.png')?>" class="img-fluid">
					<hr>
				</div>
			</div>
			<div class="m-5">
			</div>
		</div>
	
	<!-- end deskripsi -->


	<!-- footer -->
		<div class="row footer">
			<div class="col text-center text-capitalize">
				<p>&copy;2018 all rights reserved. </p>
			</div>
		</div>
	<!-- end footer -->
	</div>
	<!-- end container -->



	<!-- optional javascript -->
	<!--jquery, pooper.js, bootstrap.js-->
	<script src="<?php echo base_url('assets/home/jquery/3.3.1.js')?>"></script>
	<script src="<?php echo base_url('assets/home/bootstrap/assets/js/vendor/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/home/bootstrap/dist/js/bootstrap.js')?>"></script>
</body>
</html>