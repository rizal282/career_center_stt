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
                                Career Center
                            </li>
                            <li class="active">
                            <a href="<?php echo site_url(); ?>c_career_center_admin/job_fair">
                                Job Fair
                            </a>
                            </li>
                            <li class="active">
                                Edit Job Fair
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Career Center Job Fair</small></h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Edit Job Fair
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <?php
                                    //tampilkan pesan jika artikel sudah dihapus
                                    if($this->session->flashdata('pesan_job_fair') <> ''){
                                        echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_job_fair').'</div>';
                                    }
                                ?>

                                <div class="table-responsive">
                                    <?php
                                        if(count($edit_job_fair) == 0){
                                            echo '<div class="alert alert-warnign">Tidak ada data</div>';
                                        } else{
                                            foreach($edit_job_fair as $row){

                                            
                                                $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open('c_career_center_admin/process_edit_job_fair', $attributes);
                                    ?>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <?php echo validation_errors(); ?>  
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="form-field-1">
                                                        Nama Job Fair
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input name="e_id_job_fair" type="hidden" value="<?php echo $row->id_job_fair; ?>" id="form-field-1">
                                                        <input name="e_nama_job_fair" type="text" value="<?php echo $row->nama_job_fair; ?>" id="form-field-1" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="form-field-1">
                                                        Deskripsi
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" name="e_deskripsi" id="" cols="30" rows="10"><?php echo $row->deskripsi; ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="form-field-1">
                                                        Tanggal Tes
                                                    </label>
                                                    <div class="col-sm-9">
                                                    <input name="tgl_test_skrg" value="<?php echo date('d-m-Y', strtotime($row->tgl_test)); ?>" type="text" id="form-field-1" class="form-control" readonly>
                                                    <input name="e_tgl_test" type="date" id="form-field-1" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-9">
                                                    <button class="btn btn-green" type="submit"><i class="fa fa-save"></i></button> 
                                                        <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_admin/admin_artikel"><i class="fa fa-close"></i></a>
                                                    </div>
                                                </div>
                                        
                                    <?php 
                                                echo form_close();
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