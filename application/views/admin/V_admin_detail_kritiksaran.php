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
                            <a href="<?php echo site_url(); ?>c_career_center_admin/kritik_saran_alumni">
                                Kritik Saran
                            </a>
                            </li>
                            <li class="active">
                                Detail
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
                                <i class="fa fa-external-link-square"></i> Detail Kritik & Saran
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    
                                    <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_admin/kritik_saran_alumni">Kemballi</a>
                                    
                                    <p>&nbsp;</p>
                                    
                                    <table class="table">
                                        <tr>
                                            <td>No</td>
                                            <td>NIM</td>
                                            <td>Nama Alumni</td>
                                            <td>Kritik & saran</td>
                                            <td>Hapus</td>
                                        </tr>
                                        
                                <?php
                                    //tampilkan pesan jika artikel sudah dihapus

                                    if(count($detail_ks) >= 1){
                                        $no = 1;
                                        foreach($detail_ks as $row){
                                ?>
                                            
                                           <tr>
                                               <td><?php echo $no; ?></td>
                                               <td><?php echo $row->nim; ?></td>
                                               <td><?php echo $row->nama_alumni; ?></td>
                                               <td><?php echo $row->pesan; ?></td>
                                               <td><a class="btn btn-danger" href="<?php echo site_url(); ?>c_career_center_admin/hapus_kritiksaran/<?php echo $row->id_ks; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
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