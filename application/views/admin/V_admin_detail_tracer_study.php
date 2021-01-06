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
                                Alumni Center
                            </li>
                            <li class="active">
                            <a href="<?php echo site_url(); ?>c_career_center_admin/tracer_study_alumni">
                                Tracer Study Alumni
                            </a>
                            </li>
                            <li class="active">
                                Detail Tracer Study Alumni
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Detail Tracer Study Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Detail Tracer Study
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
                                        if(count($detail_tracer) == 0){
                                    ?>
                                        <div class="alert alert-warning">Tidak Ada Tracer Study</div>
                                        
                                    <?php
                                        }else{
                                            foreach($detail_tracer as $row){}
                                    ?>
                                                <img src="<?php echo base_url(); ?>foto_alumni/<?php echo $row->foto_alumni; ?>" alt="<?php echo $row->foto_alumni; ?>" width="100" height="100" class="img-circle">
                                                <table class="table">
                                                    <tr>
                                                        <td>NIM</td>
                                                        <td> : </td>
                                                        <td><b><?php echo $row->id_alumni; ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Alumni</td>
                                                        <td> : </td>
                                                        <td><?php echo ucwords($row->nama_alumni); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. HP</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->no_hp; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->j_kelamin; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td> : </td>
                                                        <td><?php echo date('d M Y', strtotime($row->tgl_lahir)); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prorgam Studi</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->program_studi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Masuk</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->tahun_masuk; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Lulus</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->tahun_lulus; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->email; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Bekerja</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->sts_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Perusahaan</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->nama_perusahaan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Perusahaan</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->alamat_perusahaan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Posisi Pekerjaan</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->posisi_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mulai Bekerja</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->mulai_kerja; ?></td>
                                                    </tr>
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