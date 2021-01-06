<?php include "V_alumni_head.php"; ?>

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
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Tracer Study
                            </li>
                            <li class="search-box">
                                <form class="sidebar-search">
                                    <div class="form-group">
                                        <input type="text" placeholder="Start Searching...">
                                        <button class="submit">
                                            <i class="clip-search-3"></i>
                                        </button>
                                    </div>
                                </form>
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Career Center Tracer Study Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Editor Tracer Study Anda
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php 
                                        foreach($edit_tracer as $row){ 
                                                $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open('c_career_center_alumni/process_editing_tracer_study', $attributes); 
                                    ?>
                                        
                                                <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <?php echo validation_errors(); ?>  
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label" for="form-field-1">
                                                            Apakah anda sudah bekerja?
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <label class="radio-inline">
                                                                <input type="hidden" value="<?php echo $row->id_tracerstudy; ?>" name="id_tracer">
                                                                <input id="sts_kerja" type="radio" class="grey" value="Sudah" name="e_sts_kerja" <?php if($row->sts_kerja == "Sudah"){ ?> checked=checked <?php } ?>>
                                                                Ya
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input id="sts_kerja" type="radio" class="grey" value="Belum" name="e_sts_kerja" <?php if($row->sts_kerja == "Belum"){ ?> checked=checked <?php } ?>>
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label" for="form-field-1">
                                                            Nama Perusahaan
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <div class="alert alert-info">Jika Ya, isi nama dan alamat perusahaan/instansi tempat Anda bekerja</div>
                                                            <input name="e_nama_perusahaan" type="text" value="<?php echo $row->nama_perusahaan; ?>" id="nama_perusahaan" class="form-control" value="<?php echo set_value('nama_perusahaan'); ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label" for="form-field-1">
                                                            Alamat Perusahaan
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control" name="e_alamat_perusahaan" id="" cols="30" rows="10"><?php echo $row->alamat_perusahaan; ?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label" for="form-field-1">
                                                            Bagian/Posisi Pekerjaan
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="e_job_position" class="form-control" value="<?php echo $row->posisi_kerja; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label" for="form-field-1">
                                                            Bila Ya sudah bekerja, apakah anda telah bekerja sebelum lulus?
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <label class="radio-inline">
                                                                <input type="radio" class="grey" value="Sebelum Kuliah" name="e_mulai_kerja" <?php if($row->mulai_kerja == "Sebelum Kuliah"){ ?> checked=checked <?php } ?>>
                                                                Sebelum Kuliah
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" class="grey" value="Sesudah Kuliah" name="e_mulai_kerja" <?php if($row->mulai_kerja == "Sesudah Kuliah"){ ?> checked=checked <?php } ?>>
                                                                Sesudah Kuliah
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label" for="form-field-1">
                                                        Bila bekerja sesudah kuliah, berapa lama waktu tunggu anda mendapatkan pekerjaan pertama kali
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input name="e_tgl_kerja" type="radio" value="< 6 bulan" <?php if($row->waktu_bfr_kerja == "< 6 bulan"){ ?> checked=checked <?php } ?> > < 6 bulan
                                                            <input name="e_tgl_kerja" type="radio" value="6 - 12 bulan" <?php if($row->waktu_bfr_kerja == "6 - 12 bulan"){ ?> checked=checked <?php } ?> > 6 - 12 bulan
                                                            <input name="e_tgl_kerja" type="radio" value="> 12 bulan" <?php if($row->waktu_bfr_kerja == "> 12 bulan"){ ?> checked=checked <?php } ?> > > 12 bulan
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-sm-9">
                                                            <button id="simpan" class="btn btn-blue" type="submit">Simpan</button> 
                                                            <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_alumni/alumni_tracer_study">
                                                                Batal
                                                            </a>
                                                        </div>
                                                    </div>
                                    <?php
                                            echo form_close(); 
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
    
<?php include "V_alumni_foot.php"; ?>