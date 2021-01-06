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
                                Alumni Center
                            </li>
                            <li class="active">
                                Forum Diskusi
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Forum Diskusi</h1>
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

                                <div class="row">
                                    <div class="col-md-12 space20">
                                        <a class="btn btn-primary add-row" href="<?php echo site_url(); ?>c_career_center_alumni/add_new_thread"><i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <?php
                                        //tampilkan pesan jika artikel sudah dihapus
                                        if($this->session->flashdata('pesan_comments') <> ''){
                                            echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_comments').'</div>';
                                        }
                                    ?>
                                    
                                    <?php
                                        if(!$thread){
                                            echo '<div class="alert alert-info">Tidak ada threads</div>';
                                        }else{
                                            $id = $this->session->userdata('id_alumni');
                                            foreach($thread->result() as $row){
                                                if($row->id_alumni == $id){
                                    ?>
                                                    <div class="alert alert-success">
                                                        <small>Ini Thread Anda </small>
                                                        <h2><?php echo $row->thread; ?></h2>
                                                        <p><?php echo word_limiter($row->deskripsi, 10); ?></p>
                                                        <p>&nbsp;</p>
                                                        <div class="post-meta">
                                                            <span>
                                                                <i class="fa fa-user"></i> By
                                                                <?php echo ucwords($row->nama_alumni); ?>
                                                            </span>
                                                            
                                                            <span>
                                                                <i class="fa fa-comments"></i>
                                                                <a href="<?php echo site_url(); ?>c_career_center_alumni/comment_thread/<?php echo $row->id_thread; ?>">
                                                                    <?php 
                                                                        $comments_thread = $this->M_alumni_career_center->total_comments($row->id_thread);
                                                                        foreach($comments_thread as $comments){
                                                                            if($comments->jumlah != 0){
                                                                                echo $comments->jumlah. " Comments";
                                                                            }else{
                                                                                echo "0 Comments";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </a>
                                                            </span>

                                                            <span>
                                                                <a href="<?php echo site_url(); ?>c_career_center_alumni/edit_thread/<?php echo $row->id_thread; ?>">
                                                                    Edit
                                                                </a>
                                                            </span>

                                                            <span>
                                                                <a href="<?php echo site_url(); ?>c_career_center_alumni/delete_thread/<?php echo $row->id_thread; ?>">
                                                                    Hapus
                                                                </a>
                                                            </span>
                                                            
                                                        </div>
                                                    </div>
                                    <?php
                                                }else{
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
                                                                <a href="<?php echo site_url(); ?>c_career_center_alumni/comment_thread/<?php echo $row->id_thread; ?>">
                                                                    <?php 
                                                                        $comments_thread = $this->M_alumni_career_center->total_comments($row->id_thread);
                                                                        foreach($comments_thread as $row){
                                                                            if($row->jumlah != 0){
                                                                                echo $row->jumlah. " Comments";
                                                                            }else{
                                                                                echo "0 Comments";
                                                                            }
                                                                        }
                                                                    ?>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                    <?php
                                                }
                                            }
                                        }
                                    ?>

                                    <div class="row">
                                        <div class="col">
                                            <!--Tampilkan pagination-->
                                            <?php echo $pagination; ?>
                                        </div>
                                    </div>
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