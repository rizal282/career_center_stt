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
                                    Forum Diskusi
                                </li>
                        </ol>
                        <div class="page-header">
                            <h1>Forum Diskusi Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Threads Alumni
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <?php
                                    //tampilkan pesan jika artikel sudah dihapus
                                    if($this->session->flashdata('pesan_thread') <> ''){
                                        echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_thread').'</div>';
                                    }
                                ?>

                                <div class="table-responsive">
                                    <?php
                                        if(count($thread) == 0){
                                            echo '<div class="alert alert-info">Tidak ada threads</div>';
                                        }else{
                                            foreach($thread as $row){
                                    ?>
                                                    <div class="alert alert-info">
                                                        <h4><?php echo $row->thread; ?></h4>
                                                        <p><?php echo word_limiter($row->deskripsi, 10); ?></p>
                                                        <p>&nbsp;</p>
                                                        <div class="post-meta">
                                                            <span>
                                                                <i class="fa fa-user"></i> By
                                                                <a href="#">
                                                                    <?php echo ucwords($row->nama_alumni); ?>
                                                                </a>
                                                            </span>
                                                            
                                                            <span>
                                                                <i class="fa fa-comments"></i>
                                                                <a href="<?php echo site_url(); ?>c_career_center_admin/show_thread_alumni/<?php echo $row->id_thread; ?>">
                                                                Lihat
                                                                </a>
                                                            </span>

                                                            <span>
                                                                <i class="fa fa-comments"></i>
                                                                <a href="<?php echo site_url(); ?>c_career_center_admin/delete_a_thread/<?php echo $row->id_thread; ?>">
                                                                Hapus
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                    <?php
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
    
    <?php include "V_login_admin_foot.php"; ?>