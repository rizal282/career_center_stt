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
                            <a href="<?php echo site_url(); ?>c_career_center_admin/lowongan_admin">
                                Lowongan
                            </a>
                            </li>
                            <li class="active">
                                Edit Lowongan
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Edit Lowongan</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Form Edit Lowongan Kerja
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <!-- <div class="row">
                                    <div class="col-md-12 space20">
                                        <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_admin/add_new_article">
                                            Add New <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div> -->
                                <div class="table-responsive">
                                    <?php
                                        $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                        echo form_open('c_career_center_admin/process_edit_job_vacancy', $attributes); 
                                    
                                        if(count($edit_lowongan) == 0){
                                            echo '<div class="alert alert-info">Tidak ada data</div>';
                                        }else{
                                            foreach($edit_lowongan as $row){

                                    ?>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="form-field-1">
                                                        Nama Lowongan
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input type="hidden" name="e_id_lowongan" value="<?php echo $row->id_lowongan; ?>">
                                                        <input name="e_nama_lowongan" type="text" id="form-field-1" class="form-control" value="<?php echo $row->nama_lowongan; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="form-field-1">
                                                        Nama Perusahaan
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input name="e_nama_perusahaan" type="text" id="form-field-1" class="form-control" value="<?php echo $row->nama_perusahaan; ?>">
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
                                                        Tanggal Berakhir
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input name="e_tgl_akhir" type="date" id="form-field-1" class="form-control" value="<?php echo $row->tgl_berakhir; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label" for="form-field-1">
                                                        Tanggal Tes
                                                    </label>
                                                    <div class="col-sm-9">
                                                        <input name="e_tgl_tes" type="date" id="form-field-1" class="form-control" value="<?php echo $row->tgl_tes; ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-9">
                                                    <button class="btn btn-green" type="submit"><i class="fa fa-save"></i></button> 
                                                    <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_admin/lowongan_admin">
                                                    <i class="fa fa-close"></i></a>
                                                        </a>
                                                    </div>
                                                </div>
                                        
                                    <?php 
                                                }
                                            }
                                        echo form_close(); 
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