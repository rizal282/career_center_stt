<?php include "V_alumni_home_head.php"; ?>
    <script>
        $(document).ready(function(){
            $('#detailpt').hide();
            $('#wktkerja').hide();

            $('#dtl_pt').click(function(){
                $('#detailpt').fadeToggle();
            });

             $('#after').click(function(){
                $('#wktkerja').fadeToggle();
            });
        });
    </script>

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
                                Tracer Study
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Tracer Study Anda</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Tracer Study Anda
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
    
                                    <?php
                                        if($this->session->flashdata('pesan_tracer') <> ''){
                                            echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_tracer').'</div>';
                                        }

                                        if($tracer_check->num_rows() == 0){

                                            echo '<div class="alert alert-info">Anda belum mengisi data Tracer Study. Silahkan isi form dibawah ini.</div>';

                                            $attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                            echo form_open('c_career_center_alumni/process_adding_tracer_study', $attributes); 
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
                                                        <input id="sts_kerja" type="radio" class="grey" value="Sudah" name="sts_kerja">
                                                        Ya
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="sts_kerja" type="radio" class="grey" value="Belum" name="sts_kerja">
                                                        Tidak
                                                    </label>
                                                    <div class="alert alert-info">Jika Ya, <a id="dtl_pt" class="btn btn-primary" href="#">isi</a>  nama dan alamat perusahaan/instansi tempat Anda bekerja</div>
                                                </div>
                                            </div>

                                            <div id="detailpt">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="form-field-1">
                                                        Nama Perusahaan
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input name="nama_perusahaan" type="text" placeholder="Nama Perusahaan" id="nama_perusahaan" class="form-control" value="<?php echo set_value('nama_perusahaan'); ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="form-field-1">
                                                        Alamat Perusahaan
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" name="alamat_perusahaan" id="" cols="30" rows="10"><?php echo set_value('deskripsi'); ?></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="form-field-1">
                                                        Bagian/Posisi Pekerjaan
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="job_position" class="form-control" placeholder="Contoh : HRD">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label" for="form-field-1">
                                                    Bila sudah bekerja, apakah anda telah bekerja sebelum lulus?
                                                </label>
                                                <div class="col-sm-8">
                                                    <label class="radio-inline">
                                                        <input id="mkerja" type="radio" class="grey" value="Sebelum Kuliah" name="mulai_kerja">
                                                        Sebelum Kuliah
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="mkerja" type="radio" class="grey" value="Sesudah kuliah" name="mulai_kerja">
                                                        Sesudah Kuliah
                                                    </label>
                                                    <div class="alert alert-info">Jika <a id="after" class="btn btn-primary" href="#">Sesudah Kuliah</a>, Pilih dibawah ini berapa lama waktu anda mendapatkan kerja</div>
                                                </div>
                                            </div>

                                            <div id="wktkerja">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label" for="form-field-1">
                                                        Bila bekerja sesudah kuliah, berapa lama waktu tunggu anda mendapatkan pekerjaan pertama kali?
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input name="tgl_kerja" type="radio" value="<6 bulan"> < 6 bulan
                                                        <input name="tgl_kerja" type="radio" value="6 - 12 bulan"> 6 - 12 bulan
                                                        <input name="tgl_kerja" type="radio" value=">12 bulan"> > 12 bulan
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <button id="simpan" class="btn btn-blue" type="submit">Simpan</button> 
                                                    <a class="btn btn-red add-row" href="<?php echo site_url(); ?>c_career_center_alumni">
                                                        Batal
                                                    </a>
                                                </div>
                                            </div>
                                        
                                    <?php 
                                            echo form_close(); 
                                        }else{
                                            foreach($tracer_check->result() as $row){
                                    ?>
                                                <img src="<?php echo base_url(); ?>foto_alumni/<?php echo $row->foto_alumni; ?>" alt="<?php echo $row->foto_alumni; ?>" class="img-circle" width="100" height="100">

                                                <table class="table">
                                                    <tr>
                                                        <td>NIM</td>
                                                        <td> : </td>
                                                        <td><b><?php echo $row->id_alumni; ?></b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Alumni</td>
                                                        <td> : </td>
                                                        <td><?php echo ucwords($row->nama_alumni); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->j_kelamin; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td> : </td>
                                                        <td><?php echo date('d M Y', strtotime($row->tgl_lahir)); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prorgam Studi</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->program_studi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Masuk</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->tahun_masuk; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Lulus</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->tahun_lulus; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->email; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Bekerja</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->sts_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Perusahaan</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->nama_perusahaan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Perusahaan</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->alamat_perusahaan; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Posisi Pekerjaan</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->posisi_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mulai Bekerja</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->mulai_kerja; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">
                                                            <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_alumni/edit_tracer_study/<?php echo $row->id_tracerstudy; ?>" title="Edit Tracer Study"><span class="glyphicon glyphicon-pencil"></span></a>
                                                        </td>
                                                    </tr>
                                                </table>

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
    
<?php include "V_alumni_home_footer.php"; ?>