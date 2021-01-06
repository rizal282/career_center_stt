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
                            <a href="<?php echo site_url(); ?>c_career_center_admin/admin_artikel">
                                Artikel
                            </a>
                            </li>
                            <li class="active">
                                Tambah Artikel
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Tambah Artikel</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Tambah Artikel
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
                                        echo form_open_multipart('c_career_center_admin/process_adding_article', $attributes); 
                                    ?>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <?php echo validation_errors(); ?>  
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                Nama Artikel
                                            </label>
                                            <div class="col-sm-9">
                                                <input name="nama_artikel" type="text" placeholder="Nama Artikel" id="form-field-1" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                Deskripsi
                                            </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                               Foto Artikel
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="file" name="foto_artikel">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-9">
                                                <button class="btn btn-green" type="submit"><i class="fa fa-save"></i></button> 
                                                <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_admin/admin_artikel">
                                                <i class="fa fa-close"></i></a>
                                                <button class="btn btn-blue" type="reset"><i class="fa fa-refresh"></i></button>
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
    
<?php include "V_login_admin_foot.php"; ?>