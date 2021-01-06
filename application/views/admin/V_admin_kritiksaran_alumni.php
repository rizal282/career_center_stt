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
                                Support
                            </li>
                            <li class="active">
                                Kritik Saran
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Detail Kritik Saran</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Kritik & Saran
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    
                                    <?php
                                        if($this->session->flashdata('pesan_ks') <> ''){
                                            echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_ks').'</div>';
                                        }
                                    ?>
                                    
                                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                        <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>NIM</td>
                                                <td>Nama Alumni</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        
                                <?php
                                    //tampilkan pesan jika artikel sudah dihapus

                                    if(count($ks_alumni) >= 1){
                                        $no = 1;
                                        foreach($ks_alumni as $row){
                                ?>
                                            
                                           <tr>
                                               <td><?php echo $no; ?></td>
                                               <td><?php echo $row->nim; ?></td>
                                               <td><?php echo $row->nama_alumni; ?></td>
                                               <td><a href="<?php echo site_url(); ?>c_career_center_admin/detail_ks_alumni/<?php echo $row->id_ks; ?>">Lihat</a></td>
                                           </tr> 
                                                
                                           



                                <?php
                                            $no++;
                                        }
                                ?>
                                        </table>
                                <?php
                                    }else{
                                ?>

                                       <div class="alert alert-info">Tidak ada data</div>

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