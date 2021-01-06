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
                                Konsultasi Alumni
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Konsultasi Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar Konsultasi Alumni
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">

                                    <?php
                                        if($this->session->flashdata('pesan_consult') <> ''){
                                            echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_consult').'</div>';
                                        }
                                    ?>
                                    <table id="sample_1" class="table table-striped table-bordered table-hover table-full-width">
                                        <thead>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Alumni</th>
                                            <th>Alasan</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Jadwal</th>
                                            <th>Tgl Konsultasi</th>
                                            <th>Atur Jadwal</th>
                                            <th>Hapus</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                if(count($konsultasi_alumni) >= 1){
                                                    $no = 1;
                                                    foreach($konsultasi_alumni as $ka){
                                            ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $ka->id_alumni; ?></td>
                                                        <td><?php echo ucwords($ka->nama_alumni); ?></td>
                                                        <td><?php echo ucwords($ka->alasan); ?></td>
                                                        <td><?php echo date('d M Y', strtotime($ka->tgl_input)); ?></td>
                                                        <td>
                                                            <?php
                                                                if(!empty($ka->jadwal_consult)){
                                                                    echo $ka->jadwal_consult;
                                                                }else{
                                                                    echo "-";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($ka->tgl_consult != "0000-00-00"){
                                                                    echo date('d M Y', strtotime($ka->tgl_consult));
                                                                }else{
                                                                    echo "-";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td><a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_admin/set_jadwal_konsultasi/<?php echo $ka->id_alumni; ?>">Atur Jadwal</a></td>
                                                        <td><a class="btn btn-danger" href="<?php echo site_url(); ?>c_career_center_admin/delete_consulting/<?php echo $ka->id_alumni; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                                                    </tr>
                                            <?php
                                                        $no ++;
                                                    }
                                                }else{
                                            ?>
                                                <td colspan="8">Tidak ada data pengajuan konsultasi</td>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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