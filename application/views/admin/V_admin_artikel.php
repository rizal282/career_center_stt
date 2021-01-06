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
                                Artikel
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Artikel</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar Artikel
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <?php
                                    //tampilkan pesan jika artikel sudah dihapus
                                    if($this->session->flashdata('pesan_artikel') <> ''){
                                        echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_artikel').'</div>';
                                    }
                                ?>

                                <div class="row">
                                    <div class="col-md-12 space20">
                                        <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_admin/add_new_article"><i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <?php
                                        //jika artikel tidak ada
                                        if($article->num_rows() == 0){
                                    ?>
                                        <div class="alert alert-warning">Tidak Ada Artikel</div>
                                        
                                    <?php
                                        }else{
                                    ?>
                                        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Artikel</th>
                                                    <th>Deskripsi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //jika artikel ada
                                                    $no = 1;
                                                    foreach($article->result() as $row){
                                                ?>

                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $row->nama_artikel; ?></td>
                                                    <td><?php echo word_limiter($row->deskripsi, 10); ?></td>
                                                    <td><a class="btn btn-xs btn-green" href="<?php echo site_url(); ?>c_career_center_admin/edit_article/<?php echo $row->id_artikel; ?>" class="edit-row"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-xs btn-bricky" href="<?php echo site_url(); ?>c_career_center_admin/delete_article/<?php echo $row->id_artikel; ?>" class="delete-row"><i class="fa fa-trash"></i></a></td>
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