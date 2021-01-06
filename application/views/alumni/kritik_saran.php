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
                                Support
                            </li>
                            <li class="active">
                                Kritik saran
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Buat Kritik & Saran Anda</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i>Isi form dibawah untuk membuat Kritik & saran
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <?php
                                        if($this->session->flashdata('kritik_saran') <> ''){
                                            echo '<div class="alert alert-success">'.$this->session->flashdata('kritik_saran').'</div>';
                                        }
                                        
                                        $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                        echo form_open('c_career_center_alumni/process_tambah_ks', $attributes); 
                                        
                                        foreach($k_data_alumni as $ka){
                                            $nim = $ka->id_alumni;
                                            $nama = $ka->nama_alumni;
                                            $notelp = $ka->no_hp;
                                            $email = $ka->email;
                                        }
                                    ?>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <?php echo validation_errors(); ?>  
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                NIM
                                            </label>
                                            <div class="col-sm-9">
                                                <input name="nim_alumni" type="text" value="<?php echo $nim; ?>" id="form-field-1" class="form-control" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                Nama
                                            </label>
                                            <div class="col-sm-9">
                                                <input name="nama_alumni" type="text" value="<?php echo $nama; ?>" id="form-field-1" class="form-control" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                No Telepon 
                                            </label>
                                            <div class="col-sm-9">
                                                <input name="no_telepon" type="text" value="<?php echo $notelp; ?>" id="form-field-1" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                Email
                                            </label>
                                            <div class="col-sm-9">
                                                <input name="email" type="text" value="<?php echo $email; ?>" id="form-field-1" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="form-field-1">
                                                Pesan
                                            </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="pesan" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-9">
                                            <button class="btn btn-green" type="submit"><i class="fa fa-save"></i></button> 
                                            <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_alumni"><i class="fa fa-close"></i></a>
                                            <button class="btn btn-blue" type="reset"><i class="fa fa-refresh"></i></button>
                                            </div>
                                        </div>
                                        
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->

<?php include "V_alumni_foot.php"; ?>