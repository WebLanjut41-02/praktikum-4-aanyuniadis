<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Input Data Project Maker</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url()?>assets/Project/R_vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/Project/R_vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>assets/Project/R_vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>assets/Project/R_vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>assets/Project/R_css/main.css" rel="stylesheet" media="all">
</head>
<form action="<?php echo site_url();?>Project/C_inputmaker/prosesinputmaker" role="form" method="post">
<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Input Project Maker</h2>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ID Project" name="id_project">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Project" name="nama_project">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Dana Yang Dibutuhkan" name="dana_dibutuhkan">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Jatuh Tempo" name="jatuh_tempo">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Detail Project" name="detail_project">
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>assets/Project/R_vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url()?>assets/Project/R_vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url()?>assets/Project/R_vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/Project/R_vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>assets/Project/R_js/global.js"></script>

     <script src="<?php echo base_url()?>assets/Project/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url()?>assets/Project/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url()?>assets/Project/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url()?>assets/Project/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url()?>assets/Project/js/active.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
