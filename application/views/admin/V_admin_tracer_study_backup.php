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
                                Tracer Study Alumni
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Tracer Study Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar Tracer Study
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
                                        if($tracer_study->num_rows() == 0){
                                    ?>
                                        <div class="alert alert-warning">Tidak Ada Tracer Study</div>
                                        
                                    <?php
                                        }else{
                                    ?>
                                        <table class="table table-striped table-hover" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIM</th>
                                                    <th>Nama Alumni</th>
                                                    <th>Status Kerja</th>
                                                    <th>Tahun Masuk</th>
                                                    <th>Lihat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //jika artikel ada
                                                    $no = 1;
                                                    foreach($tracer_study->result() as $row){
                                                ?>

                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $row->id_alumni; ?></td>
                                                    <td><?php echo $row->nama_alumni; ?></td>
                                                    <td><?php echo $row->sts_kerja; ?></td>
                                                    <td><?php echo $row->tahun_masuk; ?></td>
                                                    <td><a class="btn btn-xs btn-green" href="<?php echo site_url(); ?>c_career_center_admin/tracer_study_alumni/show_tracer/<?php echo $row->id_alumni; ?>" class="delete-row"><i class="fa fa-eye"></i></a></td>
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
    
<?php include "V_login_admin_foot.php"; ?>