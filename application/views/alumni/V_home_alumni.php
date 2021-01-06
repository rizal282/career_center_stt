<?php include "V_alumni_home_head.php"; ?>

<!-- start: MAIN CONTAINER -->
<div class="main-container">
        <div class="navbar-content">
           <?php include "V_alumni_sidebar.php"; ?>
        </div>

        <!-- start: PAGE -->
        <div class="main-content">
            
            <div class="container">
                <!-- start: PAGE HEADER -->
                <div class="row">
                    <div class="col-sm-12">
                        
                        <!-- start: PAGE TITLE & BREADCRUMB -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="clip-home-3"></i>
                                <a href="<?php echo site_url(); ?>c_career_center_alumni">
                                    Dashboard
                                </a>
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Dashboard</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- lulusan jenis kelamin pria / tahun -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jumlah Alumni Pria / Tahun
                        </div>
                        <div class="panel-body">
                            <?php include_once "V_alumni_data_pria_pertahun.php"; ?>
                        </div>
                    </div>

                    <!-- lulusan jenis kelamin wanita / tahun -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jumlah Alumni Wanita / Tahun
                        </div>
                        <div class="panel-body">
                            <?php include_once "V_alumni_data_wnt_pertahun.php"; ?>
                        </div>
                    </div>

                    <!-- lulusan per prodi -->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jumlah Alumni / Prodi
                        </div>
                        <div class="panel-body">
                            <?php include_once "V_alumni_data_perprodi.php"; ?>
                        </div>
                    </div>

                    <!-- data masa jeda alumni -->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Jumlah Masa Jeda / Waktu
                            </div>
                            <div class="panel-body">
                            
                                <?php include_once "V_alumni_jeda_waktu.php"; ?>
                            </div>
                        </div>
                </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->

<?php include "V_alumni_home_footer.php"; ?>