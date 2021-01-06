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
                            <a href="<?php echo site_url(); ?>c_career_center_alumni/job_vacancy">
                                Lowongan Kerja
                            </a>
                            </li>
                            <li class="active">
                                Detail Lowongan Kerja
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Apply Lowongan Kerja</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Detail Lowongan Kerja Perusahaan
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php
                                        if(count($show_job) == 0){
                                            echo '<div class="alert alert-info">Tidak ada detail lowongan</div>';
                                        }else{;
                                            foreach($show_job as $row){
                                    ?>

                                                <table class="table">
                                                    <tr>
                                                        <td>Nama Lowongan </td>
                                                        <td>:</td>
                                                        <td><?php echo $row->nama_lowongan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Perusahaan </td>
                                                        <td>:</td>
                                                        <td><b><?php echo strtoupper($row->nama_perusahaan); ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deskripsi Lowongan </td>
                                                        <td>:</td>
                                                        <td><?php echo ucfirst($row->deskripsi); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Post </td>
                                                        <td>:</td>
                                                        <td><?php echo date('d M Y', strtotime($row->tgl_post)); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Akhir Lowongan </td>
                                                        <td>:</td>
                                                        <td><?php echo date('d M Y', strtotime($row->tgl_berakhir)); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Test </td>
                                                        <td>:</td>
                                                        <td><?php echo date('d M Y', strtotime($row->tgl_tes)); ?></td>
                                                    </tr>        
                                                </table>

                                                <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_alumni/show_job/<?php echo $row->id_lowongan; ?>/apply">Apply Lowongan</a>
                                                <p>&nbsp;</p>
                                    <?php

                                        if($apply_job){
                                    ?>
                                            <form class="form-inline" action="<?php echo site_url(); ?>c_career_center_alumni/apply_process" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="control-label">Masukkan berkas CV Anda</label>
                                                    <input type="hidden" value="<?php echo $row->id_lowongan; ?>" name="id_job">
                                                    <input type="file" name="cv_apply">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Apply Lowongan</button>
                                            </form>

                                    <?php
                                        }
                                            }
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
    
<?php include "V_alumni_foot.php"; ?>