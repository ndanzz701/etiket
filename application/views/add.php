
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
        <!-- HEADER MOBILE-->
       
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <!-- END HEADER DESKTOP-->

                 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form</strong>
                                        <small> Add Data</small>
                                    </div>
                                    <form action="actionadd" method="post">
                                    <div class="card-body card-block">
									  <div class="row form-group">
                                            <div class="col-8">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Nama</label>
                                            <input type="text" id="company" placeholder="Masukan Nama Pelanggan" class="form-control" name="nama">
                                        </div>
										 </div>
										  </div>
                                        <div class="form-group">
										 <div class="row form-group">
                                            <div class="col-8">
                                            <label for="vat" class=" form-control-label">NIK</label>
                                            <input type="text" id="vat" placeholder="1234567890" class="form-control" name="nik">
											      </div>
										 </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Gender</label>
                                                    <input type="text" id="city" placeholder="Masukan Jenis Kelamin" class="form-control" name="gender">
                                                </div>
                                            </div>
                                              <div class="col-8">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">Telepon</label>
                                                    <input type="text" id="city" placeholder="Masukan No Telp" class="form-control" name="no_hp">
                                                </div>
                                            </div>
                                            
                                        
                                        </div>
                                       
                                        <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                      
                                                    <span id="payment-button-amount">Save</span> &nbsp; <i class="fas fa-save"></i>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                                </form>
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
<script>
$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>user/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
	



});


</script>
</html>
<!-- end document-->
