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
                            <a href="<?php echo site_url(); ?>c_career_center_alumni/alumni_discussion_forum">
                                Forum Diskusi
                            </a>
                            </li>
                            <li class="active">
                                Komentar
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Komentar</h1>
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
                                    if($this->session->flashdata('pesan_comments') <> ''){
                                        echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_comments').'</div>';
                                    }
                                ?>

                                <div class="table-responsive">
                                    <?php
                                        if(count($detail_thread) == 0){
                                            echo '<div class="alert alert-info">Tidak ada threads</div>';
                                        }else{
                                            foreach($detail_thread as $rows){
                                    ?>
                                                    <div class="alert alert-success">
                                                        <small>Detail Thread </small>
                                                        <h2><?php echo $rows->thread; ?></h2>
                                                        <p><?php echo $rows->deskripsi; ?></p>
                                                        <p>&nbsp;</p>
                                                    </div>
                                                    
                                                    <?php
                                                        if(isset($v_edit) && isset($edit_chat)){
                                                            //ambil komentar yg akan diedit
                                                            $query = $this->db->query('select * from forum_chat_thread where id_chat = '.$edit_chat)->result();
                                                            foreach($query as $ec){
                                                    ?>
                                                            <form class="form-inline" action="<?php echo site_url(); ?>c_career_center_alumni/edit_comment" method="post">
                                                                <div class="form-group">
                                                                    <div class="col-sm-8">
                                                                        <input name="e_id_chat" type="hidden" value="<?php echo $ec->id_chat; ?>">
                                                                        <textarea class="form-control" name="e_text_chat" id="" cols="30"><?php echo $ec->pesan; ?></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-sm-9">
                                                                        <button id="simpan" class="btn btn-blue" type="submit">Perbarui</button> 
                                                                    </div>
                                                                </div>
                                                            </form>

                                                    <?php
                                                            }
                                                        }
                                                        
                                                    ?>

                                                    <h4>Komentar</h4> 

                                                    
                                                        <?php 
                                                            $id_alumni_thread = $this->session->userdata('id_alumni');
                                                            
                                                            $comments_thread = $this->M_alumni_career_center->get_comments($rows->id_thread);
                                                            
                                                            if(!$comments_thread){
                                                                echo "No Comments <br>";
                                                            }else{
                                                                foreach($comments_thread as $row){
                                                        ?>

                                                        
                                                            <div class="alert alert-info">
                                                                <?php echo "<b>".ucwords($row->nama_alumni)."</b><br>"; ?>
                                                                <?php echo $row->pesan." <br>"; ?>
                                                                <?php echo "<small>".date('d M Y H:i:s', strtotime($row->waktu))."</small>"; ?>
                                                                
                                                                <?php
                                                                    if($row->id_alumni == $id_alumni_thread){
                                                                ?>
                                                                
                                                                    <a href="<?php echo site_url(); ?>c_career_center_alumni/comment_thread/<?php echo $rows->id_thread; ?>/edit/<?php echo $row->id_chat; ?>">Edit</a>
                                                                    
                                                                    <a href="<?php echo site_url(); ?>c_career_center_alumni/delete_comment/<?php echo $row->id_chat; ?>">Hapus</a>
                                                                
                                                                <?php
                                                                    }
                                                                ?>    
                                                            </div>
                                                        <?php
                                                                }
                                                            }
                                                        ?>

                                                        
                                  
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                    Komentar
                                    <?php
                                        $attr = array('class' => 'form-horizontal', 'id' => 'my_form'); 
                                        echo form_open('c_career_center_alumni/add_comment', $attr); 

                                        echo validation_errors();
                                    ?>
                                            <div class="form-group">
                                                <div class="col-sm-8">
                                                    <input name="id_thread" type="hidden" value="<?php echo $rows->id_thread; ?>">
                                                    <textarea class="form-control" name="komentar" id="" cols="30"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <button id="simpan" class="btn btn-blue" type="submit">Kirim</button> 
                                                </div>
                                            </div>

                                    <?php echo form_close(); ?>
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