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
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet"
        media="all">
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet"
        media="all">
    <link href="<?php echo base_url('assets/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/jquery-ui-1.12.1/jquery-ui.css')?>" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/vendor/easyautocomplete/easy-autocomplete.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/easyautocomplete/easy-autocomplete.themes.css')?>" rel="stylesheet"
        media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/offline/datepicker.css'?>">
    <style>
        input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}

.number-input {
  border: 2px solid #ddd;
  display: inline-flex;
}

.number-input,
.number-input * {
  box-sizing: border-box;
}

.number-input button {
  outline:none;
  -webkit-appearance: none;
  background-color: transparent;
  border: none;
  align-items: center;
  justify-content: center;
  width: 40px;

  cursor: pointer;
  margin: 0;
  position: relative;
}

.number-input button:before,
.number-input button:after {
  display: inline-block;
  position: absolute;
  content: '';
  background-color: #212121;
  transform: translate(-50%, -50%);
}
.number-input button.plus:after {
  transform: translate(-50%, -50%) rotate(90deg);
}

.number-input input[type=number] {
  font-family: sans-serif;

  border: solid #ddd;
  border-width: 0 2px;

  font-weight: bold;
  text-align: center;
}
#quantity{
    width: 60px;
}

#datepicker{width:180px;}
#datepicker > span:hover{cursor: pointer;}
.mb-0 > a {
  display: block;
  position: relative;
}
.mb-0 > a:after {
  content: "\f078"; /* fa-chevron-down */
  font-family: 'FontAwesome';
  position: absolute;
  right: 0;
}
.mb-0 > a[aria-expanded="true"]:after {
  content: "\f077"; /* fa-chevron-up */
}
a:link {
  text-decoration:none;
}
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->

            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form</strong>
                                        <small> Pembelian</small>
                                    </div>
                                    <div class="card-body card-block">


                                        <div class="row" id="">
                                            <div class="col-lg-6" id="">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                                <i class="fas fa-user"></i>
                                                            </div>

                                                            <div class="col-md-10">
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="text-center font-weight-bold">Data
                                                                        Pelanggan</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <form action="<?php echo base_url('user/checkout')?>" method="POST">
                                                     

                                                            <div class="d-flex justify-content-between">Nama :<p class="m-b-15"
                                                                    id="nama"><?php echo $datapelanggan['namapelanggan']?></p></div>
                                                            <div class="d-flex justify-content-between">NIK :<p class="m-b-15"
                                                                    id="nik"><?php echo $datapelanggan['nik']?></p></div>
                                                            <div class="d-flex justify-content-between">Jenis Kelamin :<p
                                                                    class="m-b-15" id="gender"><?php echo $datapelanggan['gender']?></p></div>
                                                            <div class="d-flex justify-content-between">Telepon :<p
                                                                    class="m-b-15" id="telepon"><?php echo $datapelanggan['nohp']?></p></div>
                                                            <div class="d-flex justify-content-between">Dari :<p class="m-b-15"
                                                                    id="telepon">
                                                                    <?php echo $dari?>
                                                                </p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">Tujuan :<p
                                                                    class="m-b-15" id="telepon">
                                                                    <?php echo $tujuan?>
                                                                </p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">Tanggal
                                                                Pemberangkatan :<p class="m-b-15" id="telepon">
                                                                    <?php echo $tgl_pemberangkatan?>
                                                                </p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">Jumlah
                                                                Penumpang :<p class="m-b-15" id="telepon">
                                                                    <?php echo $jumlah?>
                                                                </p>
                                                            </div>
                                                    </div>
                                                    <div class="card-header">
                                                        <div class="row">


                                                            <div class="col-lg-12">
                                                                <div class="d-flex justify-content-between"> <label> </label><button
                                                                         type="submit" class="btn btn-success"
                                                                        id="payment-button">
                                                                        <i class="fas fa-shopping-cart"></i>&nbsp;
                                                                        CheckOut</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6" >
                                            <div class="card">
				<div class="card-header">
					<div class="row" id="">
						<div class="col-md-2">
						<img src="<?php echo $content['gambar']?>" id="gambar">
						</div>
					
						<div class="col-md-10">
						<div class="d-flex justify-content-between"><p class="text-center font-weight-bold"><?php echo $content['maskapai']?></p></div>
					
						  </div>
						</div>
                        </div>
                  
                                   
						<div class="card-body">
							<div class="d-flex justify-content-between">Harga x <?php echo $content['jumlah']?> :<p class="m-b-15" id="harga" ><?php echo rupiah($content['harga'])?></p></div>
							  <div class="d-flex justify-content-between">Biaya Layanan :<p class="m-b-15 text-primary">Gratis</p></div>
								   <div class="d-flex justify-content-between">Pajak :<p class="m-b-15 text-primary">Termasuk</p></div>
						</div>

						 <div class="card-footer">
                         <div class="d-flex justify-content-between"><h4>Total :</h4><p id="hargatotal"><?php echo rupiah($content['total'])?></p></div>
                        
						</div>
							</div>
                                            </div>
                                            <!-- /# column -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>By : Nauval Al Zidane</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <script src="<?php echo base_url('assets/vendor/easyautocomplete/jquery.easy-autocomplete.js')?>"></script>
    <!-- Main JS-->


   
    <script>
        $(function () {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>
</body>

</html>
<!-- end document-->