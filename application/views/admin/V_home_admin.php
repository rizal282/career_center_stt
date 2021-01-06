<?php include "V_login_admin_head.php"; ?>

    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
        <div class="navbar-content">
           <?php include "V_sidebar_admin.php"; ?>
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
                                <a href="<?php echo site_url(); ?>c_career_center_admin">
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

                <!-- lulusan per jenis kelamin -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Jumlah Alumni / Jenis kelamin
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_pjk.php"; ?>
                    </div>
                </div>

                <!-- end lulusan per jenis kelamin -->

                <!-- lulusan pria per tahun -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lulusan Pria / Tahun
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_pria.php"; ?>
                    </div>
                </div>

                <!-- end lulusan pria per tahun -->

                <!-- lulusan wanit per tahun -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lulusan wanita / Tahun
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_wanita.php"; ?>
                    </div>
                </div>

                <!-- grafik perbandingan sudah kerja dan belum -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Perbandingan yang kerja dan belum
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_kerja_belum.php"; ?>
                    </div>
                </div>

                <!-- end -->
                
                <!-- Tiap Prodi pria yang kerja -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lulusan Pria Tiap Prodi yang Sudah Kerja
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_pria_prodi.php"; ?>
                    </div>
                </div>
                <!-- end prodi yang kerja -->

                <!-- Tiap Prodi wanita yang kerja -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lulusan Wanita Tiap Prodi yang Sudah Kerja
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_wnt_prodi.php"; ?>
                    </div>
                </div>
                <!-- end prodi wanita yang kerja -->

                <!-- waktu mendapatkan kerja -->
                

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Waktu Mendapatkan Kerja
                    </div>
                    <div class="panel-body">
                        <?php include_once "V_admin_lulusan_wkt_kerja.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->

<?php include "V_login_admin_foot.php"; ?>