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
            </div>
            <div class="card-block">
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
        <!--END MODAL ADD-->
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
      <!-- /main area -->
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
                            '<td>'+data[i].nohp+'</td>'+
		                        '<td>'+
                                    '<a href="javascript:void(0);" class="btn btn-outline-primary btn-sm m-r-xs item_edit" data-id="'+data[i].id+'" data-nama="'+data[i].nama+'" data-nik="'+data[i].nik+'" data-gender="'+data[i].gender+'" data-nohp="'+data[i].nohp+'">UPDATE</a>'+' '+
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
            var nohp = $(this).data('nohp');
            var id=$(this).data('id');
            $('#Modal_Edit').modal('show');
            $('[name="nama_edit"]').val(nama);
            $('[name="nik_edit"]').val(nik);
            $('[name="gender_edit"]').val(gender);
            $('[name="no_hp_edit"]').val(nohp);
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
                data : {id:id, nama:nama, nik:nik, gender:gender, nohp:no_hp},
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