<?php
function rupiah($angka){
	

	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
   
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
    <link href="<?php echo base_url('assets/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/jquery-ui-1.12.1/jquery-ui.css')?>" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">
   
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/offline/datepicker.css'?>">

</head>

<body class="animsition">
<div class="page-wrapper">
		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<i class="fas fa-check-circle"></i>
										<strong class="card-title" v-if="headerText">Order Sukses</strong>
									</div>
									<div class="card-body">
										<div class="d-flex flex-row bd-highlight mb-3 justify-content-center">
											<div class="p-2 bd-highlight"><h1>ORDER SUKSES</h1></div>
										</div>
                                        <?php foreach($content->result() as $key): ?>
									<div class="bd-highlight mb-3 d-flex justify-content-between">
										<div class="p-2 bd-highlight">
											<p>Nama</p>
											<p>Nik</p>
											<p>Jenis Kelamin</p>
											<p>Telepon</p>
											<p>Dari</p>
											<p>Tujuan</p>
											<p>Tanggal Pemberangkatan</p>
											<p>Jumlah Penumpang</p>
											<p>Maskapai</p>
											<p>Total Harga</p>
										</div>
										<div class="p-2 bd-highlight">
											<p><?php echo $key->nama?></p>
											<p><?php echo $key->nik?></p>
											<p><?php echo $key->gender?></p>
											<p><?php echo $key->no_hp?></p>
											<p><?php echo $key->dari?></p>
											<p><?php echo $key->tujuan?></p>
											<p><?php echo $key->tanggal_pemberangkatan?></p>
											<p><?php echo $key->jumlah_penumpang?></p>
											<p><?php echo $key->maskapai?></p>
											<p><?php echo rupiah($key->total_harga)?></p>
										</div>
									</div>
									<div class="d-flex flex-row bd-highlight mb-3 justify-content-center">
										<div class="p-2 bd-highlight"><p class="text-danger">Silahkan Menunggu Konfirmasi Dari Petugas</p></div>
									</div>
									<div class="d-flex flex-row bd-highlight mb-3 justify-content-between">
										<div class="p-2 bd-highlight"></div>
										<div class="p-2 bd-highlight"><form action="caripesawat"><button type="submit" class="btn btn-primary"><i class="fas fa-home"></i> Home</button></form></div>
                                        <?php endforeach?>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTAINER-->

	</div>

   


    <!-- Jquery JS-->
	<script src="<?php echo base_url('assets/offline/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/offline/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url('assets/offline/numeral.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-ui-1.12.1/jquery-ui.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/autonumeric/autoNumeric.js')?>"></script>
   
    <!-- Main JS-->


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
   
  
</body>
</html>
<!-- end document-->
