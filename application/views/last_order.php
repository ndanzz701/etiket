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
    <link href="<?php echo base_url('assets/offline/datatables.min.css')?>" rel="stylesheet">
  
  <script src="<?php echo base_url('assets/offline/numeral.min.js')?>"></script>
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
										<i class="fas fa-users"></i>
										<strong class="card-title" v-if="headerText">Menunggu Konfirmasi</strong> 
										</div>
										<div class="card-body">
                                        <table class="table table-bordered datatable" id="mydataunconfrim">
                <thead>
                  <tr>
                    <th>
                      Nama
                    </th>
                    <th>
                      Nik
                    </th>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      No Hp
                    </th>
                    <th>
                      Dari
                    </th>
                    <th>
                      Tujuan
                    </th>
                    <th>
                      Maskapai
                    </th>
                    <th>
                      Tipe
                    </th>
                    <th>
                      Tanggal Pemberangakatan
                    </th>
                    <th>
                      Jumlah Penumpang
                    </th>
                    <th>
                      Total Harga
                    </th>
                    <th>
                      Tanggal Order
                    </th>
                    <th>
                      Invoices
                    </th>
                  </tr>
                </thead>
                <tbody id="show_dataunconfrim">
                    
                    </tbody>
              </table>
										</div>
									</div>
								<div class="card">
									<div class="card-header">
										<i class="fas fa-users"></i>
										<strong class="card-title" v-if="headerText">Telah Di Konfirmasi</strong> 
										</div>
										<div class="card-body">
                                        <table class="table table-bordered datatable" id="mydata">
                <thead>
                  <tr>
                    <th>
                      Nama
                    </th>
                    <th>
                      Nik
                    </th>
                    <th>
                      Jenis Kelamin
                    </th>
                    <th>
                      No Hp
                    </th>
                    <th>
                      Dari
                    </th>
                    <th>
                      Tujuan
                    </th>
                    <th>
                      Maskapai
                    </th>
                    <th>
                      Tipe
                    </th>
                    <th>
                      Tanggal Pemberangakatan
                    </th>
                    <th>
                      Jumlah Penumpang
                    </th>
                    <th>
                      Total Harga
                    </th>
                    <th>
                      Tanggal Order
                    </th>
                    <th>
                      Invoices
                    </th>
                  </tr>
                </thead>
                <tbody id="show_data">
                    
                    </tbody>
              </table>
										</div>
									</div>
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
    <!-- Main JS-->
    <script src="<?php echo base_url('assets/offline/datatables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		show_product();	//call function show all product
		show_productunconfrim();
		$('#mydata').dataTable({
      responsive: true,
      scrollX: true,
      "order": [[ 11, "desc" ]]
    });
    
		$('#mydataunconfrim').dataTable({
      responsive: true,
      scrollX: true,
      "order": [[ 11, "desc" ]]
    });
		 
		//function show all product
		function show_product(){
      var id = <?php echo $this->session->userdata('idpelanggan')?>;
      var status = 1;
		    $.ajax({
            type : "POST",
		        url   : '<?php echo base_url('admin/last_order')?>',
		        data : {id:id,status:status},
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
                var harga='';
		            for(i=0; i<data.length; i++){
                        id=data[i].id;
                    harga=data[i].harga;
		                html += '<tr>'+
		                  		'<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].nik+'</td>'+
                            '<td>'+data[i].gender+'</td>'+
                            '<td>'+data[i].no_hp+'</td>'+
                            '<td>'+data[i].dari+'</td>'+
                            '<td>'+data[i].tujuan+'</td>'+
                            '<td>'+data[i].maskapai+'</td>'+
                            '<td>'+data[i].jenis_tiket+'</td>'+
                            '<td>'+data[i].tanggal_pemberangkatan+'</td>'+
                            '<td>'+data[i].jumlah_penumpang+'</td>'+
                            '<td>'+'RP. '+''+numeral(data[i].total_harga).format('0,0')+'</td>'+
                            '<td>'+data[i].tanggal+'</td>'+
                            '<td>'+'<a href="<?php echo base_url()?>laporanpdf/laporanpdf1/'+data[i].id+'" class="btn btn-outline-success btn-sm m-r-xs item_edit">PRINT</a>'+'</td>'+
		                    '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
		function show_productunconfrim(){
      var id = <?php echo $this->session->userdata('idpelanggan')?>;
      var status = 0;
		    $.ajax({
            type : "POST",
		        url   : '<?php echo base_url('admin/last_orderunconfirm')?>',
		        data : {id:id,status:status},
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
                var harga='';
		            for(i=0; i<data.length; i++){
                        id=data[i].id;
                    harga=data[i].harga;
		                html += '<tr>'+
		                  		'<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].nik+'</td>'+
                            '<td>'+data[i].gender+'</td>'+
                            '<td>'+data[i].no_hp+'</td>'+
                            '<td>'+data[i].dari+'</td>'+
                            '<td>'+data[i].tujuan+'</td>'+
                            '<td>'+data[i].maskapai+'</td>'+
                            '<td>'+data[i].jenis_tiket+'</td>'+
                            '<td>'+data[i].tanggal_pemberangkatan+'</td>'+
                            '<td>'+data[i].jumlah_penumpang+'</td>'+
                            '<td>'+'RP. '+''+numeral(data[i].total_harga).format('0,0')+'</td>'+
                            '<td>'+data[i].tanggal+'</td>'+
                            '<td>'+'<p class="text-danger">Menunggu Konfirmasi</>'+'</td>'+
		                    '</tr>';
		            }
		            $('#show_dataunconfrim').html(html);
		        }

		    });
		}
	});

</script>
</body>
</html>
<!-- end document-->
