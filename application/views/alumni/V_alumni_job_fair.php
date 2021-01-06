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
                            <li class="active">
                                Job Fair
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Job Fair</small></h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar Job Fair
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php
                                        //jika artikel tidak ada
                                        if($job_fair->num_rows() == 0){
                                    ?>
                                        <div class="alert alert-warning">Tidak Ada Job Fair</div>
                                        
                                    <?php
                                        }else{
                                    ?>
                                        <table class="table table-striped table-hover" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Job Fair</th>
                                                    <th>Deskripsi</th>
                                                    <th>Tanggal Tes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //jika artikel ada
                                                    $no = 1;
                                                    foreach($job_fair->result() as $row){
                                                ?>

                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $row->nama_job_fair; ?></td>
                                                    <td><?php echo $row->deskripsi; ?></td>
                                                    <td><?php echo date('d M Y', strtotime($row->tgl_test)); ?></td>
                                                </tr>

                                                <?php
                                                        $no ++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>

                                    <?php
                                        }
                                   
                                    ?>
                                </div>
                            </div>
                        </div>
                <!-- end content article -->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    
    <?php include "V_alumni_home_footer.php"; ?>