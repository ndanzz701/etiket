<?php 
//membuat format rupiah dengan PHP
//tutorial www.malasngoding.com
function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

?>
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
              <table class="table table-bordered datatable display nowrap" id="mydata">
                <thead>
                  <tr>
                    <th>
                      Dari
                    </th>
                    <th>
                      Tujuan
                    </th>
                    <th>
                      Harga
                    </th>
                    <th>
                      Maskapai
                    </th>
                    <th>
                      Tipe
                    </th>
                    <th>
                      Jumlah Tiket
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
                            <label class="col-md-2 col-form-label">Dari</label>
                            <div class="col-md-10">
                              <input type="text" name="dari" id="dari" class="form-control" placeholder="Dari">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tujuan</label>
                            <div class="col-md-10">
                              <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Tujuan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Harga</label>
                            <div class="col-md-10">
                              <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga">
                            </div>
                  </div>
                  <div class="form-group row">
                            <label class="col-md-2 col-form-label">Maskapai</label>
                            <div class="col-md-10">
                              <input type="text" name="maskapai" id="maskapai" class="form-control" placeholder="Maskapai">
                            </div>
                  </div>
                  <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jumlah Tiket</label>
                            <div class="col-md-10">
                              <input type="number" name="qty" id="qty" class="form-control" min="0" value="0" placeholder="Jumlah Tiket">
                            </div>
                  </div>
                  <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tipe</label>
                            <div class="col-md-10">
                            <select class="form-control" name="tipe" id="tipe">
                              <option>Pesawat</option>
                              <option>Kereta</option>
                            </select>
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
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Dari</label>
                            <div class="col-md-10">
                            <input type="text" name="id_edit" id="id_edit" class="form-control" hidden>
                              <input type="text" name="dari_edit" id="dari_edit" class="form-control" placeholder="Dari">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Tujuan</label>
                            <div class="col-md-10">
                              <input type="text" name="tujuan_edit" id="tujuan_edit" class="form-control" placeholder="Tujuan">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-md-2 col-form-label">Harga</label>
                                <div class="col-md-10">
                                  <input type="text" name="harga_edit" id="harga_edit" class="form-control" placeholder="Harga">
                                </div>
                          </div>
                          <div class="form-group row">
                                <label class="col-md-2 col-form-label">Maskapai</label>
                                <div class="col-md-10">
                                  <input type="text" name="maskapai_edit" id="maskapai_edit" class="form-control" placeholder="Maskapai">
                                </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-md-2 col-form-label">Jumlah Tiket</label>
                            <div class="col-md-10">
                              <input type="number" name="qty_edit" id="qty_edit" class="form-control" min="0" placeholder="Jumlah Tiket">
                            </div>
                  </div>
                          <div class="form-group row">
                                <label class="col-md-2 col-form-label">Tipe</label>
                                <div class="col-md-10">
                                <select class="form-control" name="tipe_edit" id="tipe_edit">
                                  <option>Pesawat</option>
                                  <option>Kereta</option>
                                </select>
                                </div>
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
		        url   : '<?php echo base_url('c_transportasi/data_transportasi')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
                var harga='';
		            for(i=0; i<data.length; i++){
                    harga=data[i].harga;
		                html += '<tr>'+
		                  		'<td>'+data[i].dari+'</td>'+
		                        '<td>'+data[i].tujuan+'</td>'+
		                        '<td>'+'RP. '+''+numeral(harga).format('0,0')+'</td>'+
                            '<td>'+data[i].maskapai+'</td>'+
                            '<td>'+data[i].tipe+'</td>'+
                            '<td>'+data[i].qty+'</td>'+
		                        '<td>'+
                                    '<a href="javascript:void(0);" style="margin-bottom:10px;margin-top:0px" class="btn btn-outline-primary btn-sm m-r-xs item_edit" data-id="'+data[i].id+'" data-dari="'+data[i].dari+'" data-tujuan="'+data[i].tujuan+'" data-harga="'+data[i].harga+'" data-maskapai="'+data[i].maskapai+'" data-tipe="'+data[i].tipe+'" data-qty="'+data[i].qty+'">UPDATE</a>'+' '+
                                    '<a href="javascript:void(0);" style="margin-bottom:10px;margin-top:0px"class="btn btn-outline-danger btn-sm m-r-xs item_delete" data-id="'+data[i].id+'">DELETE</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save product
        $('#btn_save').on('click',function(){
            var dari = $('#dari').val();
            var tujuan = $('#tujuan').val();
            var harga        = $('#harga').val();
            var maskapai        = $('#maskapai').val();
            var tipe        = $('#tipe').val();
            var qty = $('#qty').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('c_transportasi/add_transportasi')?>",
                dataType : "JSON",
                data : {dari:dari , tujuan:tujuan, harga:harga, maskapai:maskapai, tipe:tipe, qty:qty},
                success: function(data){
                    $('[name="dari"]').val("");
                    $('[name="tujuan"]').val("");
                    $('[name="harga"]').val("");
                    $('[name="maskapai"]').val("");
                    $('[name="tipe"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                  
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var dari = $(this).data('dari');
            var tujuan = $(this).data('tujuan');
            var harga        = $(this).data('harga');
            var maskapai = $(this).data('maskapai');
            var tipe = $(this).data('tipe');
            var id=$(this).data('id');
            var qty=$(this).data('qty');
            $('#Modal_Edit').modal('show');
            $('[name="dari_edit"]').val(dari);
            $('[name="tujuan_edit"]').val(tujuan);
            $('[name="harga_edit"]').val(harga);
            $('[name="maskapai_edit"]').val(maskapai);
            $('[name="tipe_edit"]').val(tipe);
            $('[name="id_edit"]').val(id);
            $('[name="qty_edit"]').val(qty);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var dari = $('#dari_edit').val();
            var tujuan = $('#tujuan_edit').val();
            var harga        = $('#harga_edit').val();
            var maskapai        = $('#maskapai_edit').val();
            var tipe = $('#tipe_edit').val();
            var id        = $('#id_edit').val();
            var qty        = $('#qty_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('c_transportasi/update_transportasi')?>",
                dataType : "JSON",
                data : {id:id, dari:dari, tujuan:tujuan, harga:harga, maskapai:maskapai, tipe:tipe, qty:qty},
                success: function(data){
                  $('[name="dari_edit"]').val("");
                  $('[name="tujuan_edit"]').val("");
                  $('[name="harga_edit"]').val("");
                  $('[name="maskapai_edit"]').val("");
                  $('[name="tipe_edit"]').val("");
                  $('[name="id"]').val("");
                  $('[name="qty"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
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
                url  : "<?php echo base_url('c_transportasi/delete_transportasi')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

	});

</script>
</body>

</html>