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
                            <li class="active">
                                Alumnni Center
                            </li>
                            <li class="active">
                                Set Jadwal Konsultasi Alumni
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Set Jadwal</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-external-link-square"></i> Set Jadwal Konsultasi Alumni
                        <div class="panel-tools">
                            <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                            <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                            <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="container-fluid">
                            <?php //echo $konsultasi_id; ?>
                            
                            <form class="form-horizontal" action="<?php echo site_url(); ?>c_career_center_admin/atur_jadwal_consult" method="post">
                                <?php
                                    foreach($konsultasi_id as $k){
                                        //echo $k->nama_alumni;
                                ?>
                                    <div class="form-group">
                                        <label>NIM Alumni</label>
                                        <input class="form-control" type="text" name="nim_alumni" value="<?php echo $k->id_alumni; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Alumni</label>
                                        <input class="form-control" type="text" name="nama_alumni" value="<?php echo $k->nama_alumni; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pengajuan</label>
                                        <input class="form-control" type="text" name="tgl_input" value="<?php echo $k->tgl_input; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Alasan</label>
                                        <input class="form-control" type="text" name="alasan" value="<?php echo $k->alasan; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Jadwal Konsultasi</label>
                                        <input class="form-control" type="text" name="jadwal_hari">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Konsultasi</label>
                                        <input class="form-control" type="date" name="tgl">
                                    </div>

                                    <button class="btn btn-primary" type="submit">Atur Jadwal</button>

                                <?php
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end content article -->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    
<?php include "V_login_admin_foot.php"; ?>