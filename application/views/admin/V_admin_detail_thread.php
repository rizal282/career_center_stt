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
                            <a href="<?php echo site_url(); ?>c_career_center_admin/discussion_forum_alumi">
                                Forum Diskusi
                            </a>
                            </li>
                            <li class="active">
                                Detail Forum Diskusi
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Detail Forum Diskusi</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Detail Thread Alumni
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
                                        if(count($detail_thread) == 0){
                                            echo '<div class="alert alert-info">Tidak ada threads</div>';
                                        }else{
                                            foreach($detail_thread as $row){
                                    ?>
                                                    <div class="alert alert-info">
                                                        <h4><?php echo $row->thread; ?></h4>
                                                        <p><?php echo $row->deskripsi; ?></p>
                                                        <p>&nbsp;</p>
                                                    </div>

                                                    
                                                        <?php
                                                            if(count($thread_comments) == 0){
                                                                echo "No Comments";
                                                            }else{
                                                                foreach($thread_comments as $comment){
                                                        ?>
                                                                <div class="alert alert-success">
                                                                    <b><?php echo $comment->nama_alumni; ?></b>
                                                                    <p><?php echo $comment->pesan; ?></p>
                                                                    <?php echo date('d M Y H:i:s', strtotime($comment->waktu)); ?>
                                                                </div>    
                                                        <?php
                                                                }
                                                            }
                                                        ?>
                                                    
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