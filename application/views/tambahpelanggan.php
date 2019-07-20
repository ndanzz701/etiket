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
    <script src="<?php echo base_url('assets/offline/datatables.min.css')?>"></script>
    <script src="<?php echo base_url('assets/offline/datatables.min.js')?>"></script>
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
										<strong class="card-title" v-if="headerText">Tambah Pelanggan</strong> 
										</div>
										<div class="card-body">
                                        <a href="javascript:void(0);" class="btn btn-outline-success btn-sm m-r-xs" data-toggle="modal" data-target="#Modal_Add">ADD</a>
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
                                                    Action
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
                  <!-- MODAL ADD -->
        <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                              <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">NIK</label>
                            <div class="col-md-10">
                              <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-10">
                            <select class="form-control" name="gender" id="gender">
                              <option>Laki-Laki</option>
                              <option>Perempuan</option>
                            </select>
                            </div>
                       
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No HP</label>
                            <div class="col-md-10">
                              <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukan No HP">
                            </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>

			</div>
                <!-- MODAL EDIT -->
           <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama</label>
                            <div class="col-md-10">
                            <input type="text" name="id_edit" id="id_edit" class="form-control" hidden>
                              <input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Masukan Nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">NIK</label>
                            <div class="col-md-10">
                              <input type="text" name="nik_edit" id="nik_edit" class="form-control" placeholder="Masukan NIK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-10">
                            <select class="form-control" name="gender_edit" id="gender_edit">
                              <option>Laki-Laki</option>
                              <option>Perempuan</option>
                            </select>
                            </div>
                       
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No HP</label>
                            <div class="col-md-10">
                              <input type="text" name="no_hp_edit" id="no_hp_edit" class="form-control" placeholder="Masukan No HP">
                            </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->
		</div>
       
         
         <!--MODAL DELETE-->
       
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
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
<script type="text/javascript">
	$(document).ready(function(){
		show_product();	//call function show all product
		
		$('#mydata').dataTable({

    });
		 
		//function show all product
		function show_product(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url('admin/data_pelanggan')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].nik+'</td>'+
		                        '<td>'+data[i].gender+'</td>'+
                            '<td>'+data[i].no_hp+'</td>'+
		                        '<td>'+
                                    '<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm m-r-xs item_edit" data-id="'+data[i].id+'" data-nama="'+data[i].nama+'" data-nik="'+data[i].nik+'" data-gender="'+data[i].gender+'" data-no_hp="'+data[i].no_hp+'">UPDATE</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-outline-danger btn-sm m-r-xs item_delete" data-id="'+data[i].id+'">DELETE</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save product
        $('#btn_save').on('click',function(){
            var nama = $('#nama').val();
            var nik = $('#nik').val();
            var gender        = $('#gender').val();
            var no_hp        = $('#no_hp').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/add')?>",
                dataType : "JSON",
                data : {nama:nama , nik:nik, gender:gender, no_hp:no_hp},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="nik"]').val("");
                    $('[name="gender"]').val("");
                    $('[name="no_hp"]').val("");
                    $('#Modal_Add').modal('hide');
                    location.reload();
                 
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var nama = $(this).data('nama');
            var nik = $(this).data('nik');
            var gender        = $(this).data('gender');
            var no_hp = $(this).data('no_hp');
            var id=$(this).data('id');
            $('#Modal_Edit').modal('show');
            $('[name="nama_edit"]').val(nama);
            $('[name="nik_edit"]').val(nik);
            $('[name="gender_edit"]').val(gender);
            $('[name="no_hp_edit"]').val(no_hp);
            $('[name="id_edit"]').val(id);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var nama = $('#nama_edit').val();
            var nik = $('#nik_edit').val();
            var gender        = $('#gender_edit').val();
            var no_hp        = $('#no_hp_edit').val();
            var id        = $('#id_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/update')?>",
                dataType : "JSON",
                data : {id:id, nama:nama, nik:nik, gender:gender, no_hp:no_hp},
                success: function(data){
                  $('[name="nama_edit"]').val("");
                  $('[name="nik_edit"]').val("");
                  $('[name="gender_edit"]').val("");
                  $('[name="no_hp_edit"]').val("");
                  $('[name="id"]').val("");
                    $('#Modal_Edit').modal('hide');
                    location.reload();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var id = $('#id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('admin/delete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
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
