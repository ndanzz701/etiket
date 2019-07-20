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
    <link href="<?php echo base_url('assets/vendor/easyautocomplete/easy-autocomplete.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/easyautocomplete/easy-autocomplete.themes.css')?>" rel="stylesheet"
        media="all">
        <link href="<?php echo base_url('assets/datepicker/datepicker.min.css')?>" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">



    <style>

        #gambar {
    height: 35px;


}
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
                                        <small> Pencarian</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="vat" class=" form-control-label">Dari</label>
                                                <div class="form-group tujuan d-flex justify-content-start">
                                                    <input type="text" id="vat" onkeydown="hapus()" class="form-control"
                                                        placeholder="Dari" name="dari">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <label for="city" class=" form-control-label">Tujuan</label>
                                                <div class="form-group tujuan d-flex justify-content-start">

                                                    <input type="text" id="title" onkeydown="hapus()" placeholder="Tujuan"
                                                        class="form-control" name="tujuan">
                                                    <div>
                                                        <ul id="more_result"></ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <label for="postal-code" class=" form-control-label">Jumlah</label>
                                                <div class="form-group d-flex justify-content-center">
                                                    <div class='number-input'>
                                                        <button type="button" id="turun" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); kurang();">-</button>
                                                        <input class="form-control" min="1" max="3" id="quantity" name="jml_penumpang"
                                                            value="1" type="number" />
                                                        <button type="button" id="naik" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); tambah();"
                                                            class="plus">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <label class=" form-control-label">Tanggal</label>
                                                <div class="form-group d-flex justify-content-start">

                                                    <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                                        <input data-toggle="datepicker" class="form-control" name="tgl_pemberangkatan" type="text"
                                                            readonly />
                                                        <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span>
                                                    </div>
                                                </div>
                                         
                                            </div>
                                            <div class="col-3">
                                                <label class=" form-control-label">Tipe</label>
                                                <div class="form-group d-flex justify-content-end">
                                                <select class="form-control" id="tipe">
                                                    <option>Pesawat</option>
                                                    <option>Kereta</option>
                                                </select>
                                                <div class="col-3">
                                                <button id="submit" type="submit" class="btn btn-info">
                                                        <span id="payment-button-amount">Cari Tiket</span> &nbsp; <i
                                                            class="fas fa-search"></i>
                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" id="result">

                                            <!-- /# column -->
                                        </div>
                                        <div class="row">
                                            <div class="preloader col-lg-12">
                                                <div class="loading d-flex justify-content-center">
                                                    <img src="<?php echo base_url('assets/images/icons/loader.gif')?>"
                                                        width="200" id="loading-image" style="display:none;">
                                                </div>
                                            </div>

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
    <script src="<?php echo base_url('assets/datepicker/datepicker.min.js')?>"></script>
    
    <script>
        $('[data-toggle="datepicker"]').datepicker(
            {format: 'dd-mm-yyyy',autoPick: true,}
        );
        var options = {
            url: "<?php echo base_url('assets/json/kota-kabupaten.json')?>",
            list: {
                showAnimation: {
                    type: "slide"
                },
                match: {
                    enabled: true
                }
            },
        };
        $("#vat").easyAutocomplete(options);
        $("#title").easyAutocomplete(options);
    </script>
    <script>
        $('#submit').click(function () {
            var search2 = $('#vat').val();
            var search = $('#title').val();
            var tipe = $('#tipe').val();
            var jumlah = $('input[name="jml_penumpang"]').val();
            var dari = $('input[name="dari"]').val();
            var tujuan = $('input[name="tujuan"]').val();
            var tgl_pemberangkatan = $('input[name="tgl_pemberangkatan"]').val();
            if (search2 != '') {
                function load_data(query,query2,query3) {
                    $.ajax({
                        url: "<?php echo base_url('ajaxsearch/Bandung'); ?>",
                        method: "POST",
                        data: {
                            query: query,
                            query2: query2,
                            query3: query3,
                            jumlah: jumlah,
                            dari: dari,
                            tujuan: tujuan,
                            tgl_pemberangkatan: tgl_pemberangkatan
                        },
                        beforeSend: function () {
                            $("#loading-image").show();
                            $("#result").hide();
                        },

                        success: function (data) {
                            setTimeout(function () {
                                $("#result").show();
                                $('#result').html(data);
                            }, 3000);


                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            console.log(xhr.responseText);
                        },
                        complete: function () {
                            setTimeout(function () {
                                $("#result").show();
                                $("#loading-image").hide();
                            }, 3000);

                        }

                    })
                }
            } else {

            }



            if (search != '' && search2 != '') {
                load_data(search,search2,tipe);
            } else {

            }


        });
    </script>

    <script>
        jQuery('#title').on('keydown', function (e) {
            if (e.which == 8 || e.which == 46) {
                document.getElementById('title').value = '';
                document.getElementById('rupiah').innerHTML = 0;
                return false;
            }
        });
    </script>

    <script>
        jQuery('#vat').on('keydown', function (e) {
            if (e.which == 8 || e.which == 46) {
                document.getElementById('vat').value = '';

                return false;
            }
        });
    </script>



</body>

</html>
<!-- end document-->