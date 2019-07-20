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
  <link rel="stylesheet" href="<?php echo base_url('assets/offline/datatables.min.css')?>">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
          <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-2">
              <div class="card card-block">
                <h5 class="m-b-0 v-align-middle text-overflow">
                  <span><?php echo $jumlah_order?></span>
                </h5>
                <div class="small text-overflow text-muted">
                  Jumlah Order
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2">
              <div class="card card-block">
                <h5 class="m-b-0 v-align-middle text-overflow">
                  <span><?php echo $jumlah_pelanggan?></span>
                </h5>
                <div class="small text-overflow text-muted">
                  Jumlah Pelanggan
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2">
              <div class="card card-block">
                <h5 class="m-b-0 v-align-middle text-overflow">
                  <span><?php echo $jumlah_pesawat?></span>
                </h5>
                <div class="small text-overflow text-muted">
                Total Pesawat
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2">
              <div class="card card-block">
                <h5 class="m-b-0 v-align-middle text-overflow">
                  <span><?php echo $jumlah_kereta?></span>
                </h5>
                <div class="small text-overflow text-muted">
                  Total Kereta
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2">
              <div class="card card-block">
                <h5 class="m-b-0 v-align-middle text-overflow">
                  <span><?php echo $jumlah_user?></span>
                </h5>
                <div class="small text-overflow text-muted">
                  Jumlah User
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2">
              <div class="card card-block">
                <h5 class="m-b-0 v-align-middle text-overflow">
                  <span><?php echo $total_pendapatan?></span>
                </h5>
                <div class="small text-overflow text-muted">
                  Total Pendapatan
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header no-bg b-a-0">
            <h6>
                  Last Order
                </h6>
            </div>
            <div class="card-block">
              <div class="table-responsive">
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
      <!-- /main area -->
    </div>
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
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <!-- initialize page scripts -->
  <script src="<?php echo base_url('assets/admin/scripts/dashboard/dashboard.js')?>"></script>
  <!-- end initialize page scripts -->
  <script type="text/javascript">
	$(document).ready(function(){
	
		show_product();
	
	$('#mydata').dataTable({
      responsive: true,
      scrollX: true,
      "order": [[ 11, "desc" ]]
    });
		
	
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

	});
</script>
</body>

</html>