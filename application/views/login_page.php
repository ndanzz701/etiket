<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
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
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/sweetalert/sweetalert2.min.css')?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">




<!--===============================================================================================-->
</head>
<body>
	
<div class="limiter animsition">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" accept-charset="utf-8" id="logForm">
					<span class="login100-form-title p-b-33">
					Silahkan Masuk
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Silahkan isi username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Silahkan isi password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button id="button" class="login100-form-btn animsitioon" type="submit" name="submit">
                        <span id="logText"></span>
						</button>
					</div>
					<div class="container-login100-form-btn m-t-20">
						<p class="">Belum Punya Akun? <a href="<?php echo base_url('pendaftaran')?>">Daftar Sekarang</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
<script src='<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>'></script>
<script src='<?php echo base_url('assets/vendor/sweetalert/sweetalert2.min.js')?>'></script>
<script src='<?php echo base_url('assets/offline/jquery2.2.min.js')?>'></script>



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
<script type="text/javascript">
	$(document).ready(function(){
		$('#logText').html('Login');
		$('#logForm').submit(function(e){
			e.preventDefault();
			$('#logText').html('Checking...');
			var url = '<?php echo base_url(); ?>';
			var user = $('#logForm').serialize();
			var login = function(){
				$.ajax({
					type: 'POST',
					url: url + 'index.php/user/login',
					dataType: 'json',
					data: user,
					success:function(response){
						console.log(response.message);
						$('#message').html(response.message);
						$('#logText').html('Login');
						if(response.error){
							swal(
								{
									type: 'error',
									title: 'Username Atau Password Salah',
									showConfirmButton: false,
									timer: 1500
								}
							)
						}
						else{
						
							swal(
								{
									type: 'success',
									title: 'Login Berhasil!',
									showConfirmButton: false,
									timer: 1500
								}
								);
							$('#logForm')[0].reset();
							setTimeout(function(){
								location.reload();
							}, 1000);
						}
					}
				});
			};
			setTimeout(login, 3000);
		});
		$(document).on('click', '#clearMsg', function(){
			$('#responseDiv').hide();
		});
	});
</script>
<script>
		$(document).ready(function() {
			$('.animsition').animsition();
		});
</script>
</body>
</html>