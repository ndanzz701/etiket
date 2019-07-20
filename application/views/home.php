<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/hover/hover.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/sweetalert/sweetalert2.min.css')?>">
<link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
	<link href="<?php echo base_url('assets/fonts/simplifica/simplifica.css')?>" rel="stylesheet"> 
<style>

.d-flex {
	font-family: "Simplifica";
    font-size: 50px;
	color: gray;
}
.hvr-icon-forward:before {
    content: "\f08b";
    position: absolute;
    right: 1em;
    padding: 0 1px;
    font-family: FontAwesome;
    transform: translateZ(0);
    transition-duration: 0.1s;
    transition-property: transform;
    transition-timing-function: ease-out;
}
</style>


<!--===============================================================================================-->
</head>
<body>


<div class="limiter animsition">

		<div class="container-login100 ">

		<div class="container ">
	
	<div class="row ">
    	<div class="col-sm-6" ><a href="kereta" class="animsition-link" ><img src="<?php echo base_url('assets/images/kereta.jpg')?>" class="img-responsive"  alt="kereta" width="450" ></a></div>
   	 <div class="col-sm-6"><a href="pesawat" class="animsition-link" ><img src="<?php echo base_url('assets/images/pesawat.png')?>" class="img-responsive" alt="pesawat" width="500" ></a></div>
  	</div>
	  <div class="row ">
<div class="col-sm-6">
	<span class="d-flex justify-content-center">KERETA</span>
	</div>
	<div class="col-sm-6">
	<span class="d-flex justify-content-center">PESAWAT</span>
	</div>
	</div>
	</div>
	
		</div>
	</div>
	<div class="d-flex justify-content-end"><a href="logout" class="animsition-link" ><i class="fa fa-sign-out fa-2x fa-flip-horizontal logout"></i></a></div>
<!--===============================================================================================-->
<script src='<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>'></script>
<script src='<?php echo base_url('assets/vendor/sweetalert/sweetalert2.min.js')?>'></script>




<!--===============================================================================================-->
<script src="<?php echo base_url('assets/vendor/bootstrap-toast/bootstrap-notify.min.js')?>"></script>	
<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
   <script>
  $(document).ready(function() {
    $('.animsition').animsition();
  });
  swal({
  type: 'info',
  title: 'Silahkan Pilih Tiket',
  showConfirmButton: true,

})
  </script>
</body>
</html>