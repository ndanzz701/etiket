<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Nauval Al Zidane">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
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
                                        <form action="submitdata" method="post">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">Nama</label>
                                            <input type="text" id="company" placeholder="Masukan Nama Pelanggan" class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">NIK</label>
                                            <input type="text" id="vat" placeholder="1234567890" class="form-control" name="nik" onkeypress='validate(event)'>
                                            <input type="text" name="nik2" id="nik" placeholder="1234567890" class="form-control" style="display: none;">
                                            <input type="text" name="harga2" id="hargangumpet" placeholder="1234567890" class="form-control" style="display: none;">
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-8">
                                                <div class="form-group tujuan">
                                                    <label for="city" class=" form-control-label">Tujuan</label>
                                                    <input type="text" id="title" onkeydown="hapus()" placeholder="Cari Kota Tujuan" class="form-control" id="category_search_name" name="tujuan">
                                                    <div>
	                                                    <ul id="more_result"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                    <label for="postal-code" class=" form-control-label">Jumlah Penumpang</label>
                                                 <div class="form-group">
                                                    <div class='number-input'> 
                                                        <button type="button" id="turun" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); kurang();" disabled>-</button>
                                                             <input class="form-control" min="1" max="3" id="quantity" name="jml_penumpang" value="1" type="number">
                                                         <button type="button" id="naik"onclick="this.parentNode.querySelector('input[type=number]').stepUp(); tambah();" class="plus">+</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" form-control-label">Tanggal Pemberangkatan</label>
                                                         <div id="datepicker" class=" input-group date" data-date-format="mm-dd-yyyy">
                                                            <input class="form-control" name="tgl_pemberangkatan" type="text" readonly />
                                                                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                                          </div>
                                                    </div>
                                            </div>
                                          
                                        </div>
                                        <div class="form-group">
                                                    <label class=" form-control-label">Total Pembayaran :</label>
                                                        <strong>  <label class=" form-control-label">Rp. </label><label class=" form-control-label" name="harga" id="rupiah" >0</label></strong>
                                                    </div>
                                        <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                      
                                                    <span id="payment-button-amount">Selanjutnya</span> &nbsp; <i class="fas fa-arrow-right"></i>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
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
   
    <!-- Main JS-->

   
   
    <script>
 $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

    </script>

   
     <script type="text/javascript">
  $(document).ready(function(){
 
 $('#title').autocomplete({
     source: "<?php echo site_url('user/get_autocomplete');?>",

     select: function (event, ui) {
         $('[name="harga"]').html(ui.item.description) ; 
      $('[name="nik2"]').val(ui.item.description) ; 
        
         var a  = document.getElementById('rupiah').innerHTML;
        var d = numeral(a).format('0,0');
        var newStr = d.replace(/,/g, "");
        var b = document.getElementById('quantity').value;
        var e = newStr * b;
         document.getElementById('rupiah').innerHTML = numeral(e).format('0,0');
         document.getElementById('hargangumpet').value = document.getElementById('rupiah').innerHTML;
       
     }
 });

});
    </script>
<script>
 
  
</script>
<script>
    
function tambah(){

    var a  = document.getElementById('rupiah').innerHTML;
    var newStr = a.replace(/,/g, "");
    var b = document.getElementById('nik').value;
    var e = parseInt(newStr);
    var f = parseInt(b);

     var c = e+f;
     var d = numeral(c).format('0,0');
    
    document.getElementById('rupiah').innerHTML = d;
    document.getElementById('hargangumpet').value = d;
    if(document.getElementById('quantity').value == 3){
        document.getElementById("naik").disabled = true; 
     }
     if(document.getElementById('quantity').value == 2){
        document.getElementById("turun").disabled = false; 
     }
}

function kurang(){
    var a  = document.getElementById('rupiah').innerHTML;
    var newStr = a.replace(/,/g, "");
    var b = document.getElementById('nik').value;
    var e = parseInt(newStr);
    var f = parseInt(b);

     var c = e-f;
     var d = numeral(c).format('0,0');
    
    document.getElementById('rupiah').innerHTML = d;
    document.getElementById('hargangumpet').value = d;
    if(document.getElementById('quantity').value == 1){
        document.getElementById("turun").disabled = true; 
     }
    if(document.getElementById('quantity').value == 2){
        document.getElementById("naik").disabled = false; 
     }
}
</script>
<script>
jQuery('#title').on('keydown', function(e) {
    if( e.which == 8 || e.which == 46 ) {
        document.getElementById('title').value = '';
        document.getElementById('rupiah').innerHTML = 0;
        return false;}
});
</script>
<script>
$(document).ready(function(){
    $('[id^=vat]').keypress(validateNumber);
});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
    	return true;
    }
};
</script>
</body>

</html>
<!-- end document-->
