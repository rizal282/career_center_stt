<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>PUSAT KARIR STT WASTUKANCANA <?php echo $this->session->userdata('username'); ?></title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
    <meta content="ClipTheme" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/favicon.ico" type="image/x-icon">
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/fonts/clip-font.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/iCheck/skins/all.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/sweetalert/dist/sweetalert.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/css/main.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/css/main-responsive.min.css" />
    <link type="text/css" rel="stylesheet" media="print" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/css/print.min.css" />
    <link type="text/css" rel="stylesheet" id="skin_color" href="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/css/theme/light.min.css" />
    <link href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/datatables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
            <script src=".<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/respond/dest/respond.min.js"></script>
            <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/Flot/excanvas.min.js"></script>
            <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/jquery-1.x/dist/jquery.min.js"></script>
            <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/usr_career_center/assets/js/highcharts.js"></script>
    <!--<![endif]-->
    <script type="text/javascript" src=".<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/jquery.cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/js/min/main.min.js"></script>
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/bootbox.js/bootbox.js"></script>
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/jquery-mockjax/dist/jquery.mockjax.min.js"></script>
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/bower_components/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/js/min/table-data.min.js"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <!--<script src="<?php //echo base_url(); ?>lib_career_center/adm_career_center/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>-->
    <script src="<?php echo base_url(); ?>lib_career_center/adm_career_center/assets/js/min/login.min.js"></script> 
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    

</head>

<body class="login example1">

<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
        <!-- start: TOP NAVIGATION CONTAINER -->
        <div class="container">
            <div class="navbar-header">
                <!-- start: RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="clip-list-2"></span>
            </button>
                <!-- end: RESPONSIVE MENU TOGGLER -->
                <!-- start: LOGO -->
                <a class="navbar-brand" href="index.html">
                PUSAT KARIR STT WASTUKANCANA
            </a>
                <!-- end: LOGO -->
            </div>
            <div class="navbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">                  
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">
                            <span class="username"><?php echo ucwords($this->session->userdata('nama_alumni')); ?></span>
                            <i class="clip-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url(); ?>c_main_career_center/logout_alumni">
                                        <i class="clip-exit"></i> &nbsp;Log Out
                                    </a>
                                </li>
                        </ul>
                        </li>
                        <!-- end: USER DROPDOWN -->
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- end: TOP NAVIGATION CONTAINER -->
    </div>
    <!-- end: HEADER -->