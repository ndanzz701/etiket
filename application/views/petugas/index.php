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
    <link href="<?php echo base_url('assets/offline/datatables.min.css')?>" rel="stylesheet">
    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/offline/datepicker.css'?>">

</head>

<body class="animsition">
<form>
	<div class="modal fade" id="Modal_Konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Product</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<strong>Apakah anda yakin untuk mengkonfirmasi orderan ini?</strong>
		</div>
		<div class="modal-footer">
			<input type="hidden" name="id_confirm" id="id_confirm" class="form-control">
			<input type="hidden" name="confirm" id="confirm" class="form-control" value="1">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
			<button type="button" type="submit" id="btn_confirm" class="btn btn-primary">Yes</button>
		</div>
		</div>
		</div>
		</div>
</form>
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
										<strong class="card-title" v-if="headerText">Tabel Konfirmasi</strong>
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
												Konfirmasi
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
										<strong class="card-title" v-if="headerText">Tabel Konfirmasi Sukses</strong>
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
												Konfirmasi
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
    <script src="<?php echo base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery-ui-1.12.1/jquery-ui.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/autonumeric/autoNumeric.js')?>"></script>
   
    <!-- Main JS-->


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>
<script src="<?php echo base_url('assets/offline/datatables.min.js')?>"></script>   
  <script>
  		$(document).ready(function(){
		show_productunconfrim();
		show_product();
		$('#mydataunconfrim').dataTable({
      responsive: true,
      scrollX: true,
      "order": [[ 11, "desc" ]]
    });
	$('#mydata').dataTable({
      responsive: true,
      scrollX: true,
      "order": [[ 11, "desc" ]]
    });
		
		function show_productunconfrim(){
		    $.ajax({
            type : "ajax",
		        url   : '<?php echo base_url('admin/last_orderunconfirmpetugas')?>',
				async : false,
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
                            '<td>'+'<a href="javascript:void(0);" class="btn btn-outline-success btn-sm m-r-xs item_confirm" data-id="'+data[i].id+'">KONFIRMASI</a>'+'</td>'+
		                    '</tr>';
		            }
		            $('#show_dataunconfrim').html(html);
		        }

		    });
		}
		function show_product(){
		    $.ajax({
            type : "ajax",
		        url   : '<?php echo base_url('admin/last_orderpetugas')?>',
				async : false,
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
                            '<td>'+'<p class="text-success">Sukses!</p>'+'</td>'+
		                    '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}
		//get data for delete record
        $('#show_dataunconfrim').on('click','.item_confirm',function(){
			var id = $(this).data('id');
            $('#Modal_Konfirmasi').modal('show');
			$('[name="id_confirm"]').val(id);
        });

		$('#btn_confirm').on('click',function(){
            var id = $('#id_confirm').val();
			var confirm = $('#confirm').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/edit_last_order')?>",
                dataType : "JSON",
                data : {id:id,confirm:confirm},
                success: function(data){
                    $('[name="id_confirm"]').val("");
                    $('#Modal_Konfirmasi').modal('hide');
                    location.reload();
                }
            });
            return false;
        });
	});
  </script>
</body>
</html>
<!-- end document-->
