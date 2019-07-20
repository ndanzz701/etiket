<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
  <meta name="msapplication-tap-highlight" content="no">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Milestone">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Milestone">

  <meta name="theme-color" content="#4C7FF0">

  <title>Milestone - Bootstrap 4 Dashboard Template</title>

  <!-- page stylesheets -->
  <script src="<?php echo base_url('assets/offline/datatables.min.css')?>"></script>
  <!-- endbuild -->
</head>

<body>

  <div class="app expanding">
    <!--sidebar panel-->
    <div class="off-canvas-overlay" data-toggle="sidebar"></div>
    
    <!-- /sidebar panel -->
    <!-- content panel -->
    <div class="main-panel">
      <!-- top header -->

      <!-- /top header -->

      <!-- main area -->
      <div class="main-content">
      <div class="content-view">
          <div class="card">
            <div class="card-header no-bg b-a-0">
              Data Pelanggan
              <a href="javascript:void(0);" class="btn btn-outline-success btn-sm m-r-xs" data-toggle="modal" data-target="#Modal_Add">ADD</a>
            </div>
            <div class="card-block">
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
        </div>
         <!-- MODAL ADD -->
         <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Username</label>
                            <div class="col-md-10">
                              <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                              <input type="text" name="password" id="password" class="form-control" placeholder="Masukan Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
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
        <!--END MODAL ADD-->
      </div>
           <!-- MODAL EDIT -->
           <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Username</label>
                            <div class="col-md-10">
                            <input type="text" name="id_edit" id="id_edit" class="form-control" hidden>
                              <input type="text" name="username_edit" id="username_edit" class="form-control" placeholder="Masukan Username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                              <input type="text" name="password_edit" id="password_edit" class="form-control" placeholder="Masukan Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email_edit" id="email_edit" class="form-control" placeholder="Masukan Email">
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
      <!-- /main area -->
    </div>
        <!--MODAL DELETE-->
      
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

        <!--END MODAL DELETE-->
    <!-- /content panel -->
  
  </div>
  <script type="text/javascript">
    window.paceOptions = {
      document: true,
      eventLag: true,
      restartOnPushState: true,
      restartOnRequestAfter: true,
      ajax: {
        trackMethods: ['POST', 'GET']
      }
    };
  </script>

  <!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="<?php echo base_url('assets/offline/jquery-3.3.1.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/pace/pace.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/tether/dist/js/tether.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/bootstrap/dist/js/bootstrap.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/fastclick/lib/fastclick.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/scripts/constants.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/scripts/main.js')?>"></script>
  <!-- endbuild -->

  <!-- page scripts -->
  <script src="<?php echo base_url('assets/admin/vendor/flot/jquery.flot.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/flot/jquery.flot.resize.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/flot/jquery.flot.stack.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/flot-spline/js/jquery.flot.spline.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/data/maps/jquery-jvectormap-us-aea.js')?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js')?>"></script>
  <script src="<?php echo base_url('assets/offline/datatables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/offline/numeral.min.js')?>"></script>
  <!-- end page scripts -->

  <!-- initialize page scripts -->
  <script src="<?php echo base_url('assets/admin/scripts/dashboard/dashboard.js')?>"></script>
  <!-- end initialize page scripts -->
  <script type="text/javascript">
	$(document).ready(function(){
		show_productunconfrim();	//call function show all product
		
		$('#mydataunconfrim').dataTable({
    
    });
    
		//function show all product
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