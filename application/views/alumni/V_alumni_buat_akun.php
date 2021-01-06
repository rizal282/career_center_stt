<?php include "V_alumni_front_head.php"; ?>

   <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="logo">
            PUSAT KARIR
        </div>

        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3>Buat Akun Alumni</h3>

            <?php
                //jika berhasil memasukkan data ke table akun alumni, tampilkan pesan ini
                if($this->session->flashdata('pesan_tambah_alumni') <> ''){
                    echo '<div class="alert alert-success">'.$this->session->flashdata('pesan_tambah_alumni').'</div>';
                }else{
                    echo '<p>Mohon lengkapi data dibawah ini.</p>';
                }
            ?>
            
            <?php 
                $attributes = array('class' => 'form-login', 'id' => 'myform');
                echo form_open_multipart('c_main_career_center/add_new_alumni', $attributes);
            ?>
            <!-- <form class="" action="index.html" method="post"> -->
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> Anda tidak melengkapi pengisian form. Mohon periksa kembali dibawah ini.
                </div>

                <fieldset>
                    <div class="form-group">
                        <?php echo form_error('nim'); ?>
                        <label>NIM</label>
                        <span class="input-icon">
                            <input type="text" class="form-control" name="nim" placeholder="NIM Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('nama_lengkap'); ?>
                        <label>Nama Lengkap</label>
                        <span class="input-icon">
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('gender'); ?>
                        <label>Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="Wanita" name="gender">
                                Wanita
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="Pria" name="gender">
                                Pria
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo form_error('tgl_lahir'); ?>
                        <label>Tanggal Lahir</label>
                        <span class="input-icon">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('pgr_study'); ?>
                        <label>Program Studi</label>
                        <span class="input-icon">
                            <select name="pgr_study" class="form-control">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Textile">Teknik Textile</option>
                                <option value="Management Industri">Management Industri</option>
                            </select>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('thn_masuk'); ?>
                        <label>Tahun Masuk</label>
                        <span class="input-icon">
                            <input type="date" class="form-control" name="thn_masuk" placeholder="Tahun Masuk Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('thn_lulus'); ?>
                        <label>Tahun Lulus</label>
                        <span class="input-icon">
                            <input type="date" class="form-control" name="thn_lulus" placeholder="Tahun Lulus Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('email'); ?>
                        <label>Email</label>
                        <span class="input-icon">
                            <input type="email" class="form-control" name="email" placeholder="Email Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group">
                        <?php echo form_error('no_hp'); ?>
                        <label>No HP</label>
                        <span class="input-icon">
                            <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    
                    <div class="form-group form-actions">
                        <?php echo form_error('password'); ?>
                        <label>Password</label>
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <label>Foto</label>
                        <span class="input-icon">
                            <input name="foto_alumni" type="file">
                        </span>
                    </div>
                    <div class="form-actions">
                        <a href="<?php echo site_url(); ?>c_main_career_center" class="btn btn-light-grey go-back">
                            <i class="fa fa-circle-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-bricky pull-right">
                            Buat Akun <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            <!-- </form> -->
            <?php echo form_close(); ?>
        </div>
        <!-- end: LOGIN BOX -->
        <!-- start: FORGOT BOX 
        <div class="box-forgot">
            <h3>Forget Password?</h3>
            <p>
                Enter your e-mail address below to reset your password.
            </p>
            <form class="form-forgot">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="form-actions">
                        <a href="?box=login" class="btn btn-light-grey go-back">
                            <i class="fa fa-circle-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-bricky pull-right">
                            Submit <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>-->
        <!-- end: FORGOT BOX -->
 
<?php include "V_alumni_foot.php"; ?>