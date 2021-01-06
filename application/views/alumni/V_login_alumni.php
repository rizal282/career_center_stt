<?php include "V_alumni_front_head.php"; ?>

    <div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="logo">
            PUSAT KARIR <p> STT WASTUKANCANA </p>
        </div>
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3>Masuk ke Akun Alumni</h3>
            <?php
                //jika berhasil memasukkan data ke table akun alumni, tampilkan pesan ini
                if($this->session->flashdata('pesan_login') <> ''){
                    echo '<div class="alert alert-success">'.$this->session->flashdata('pesan_login').'</div>';
                }else{
                    echo '<p>Masukkan NIM dan Password Anda untuk Log in.</p>';
                }
            ?>
            
                
            <?php 
                $attributes = array('class' => 'form-login', 'id' => 'myform');
                echo form_open('c_main_career_center/processing_login_alumni', $attributes);
            ?>
            <!-- <form class="" action="index.html" method="post"> -->
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <?php echo form_error('username'); ?>
                        <span class="input-icon">
                            <input type="text" class="form-control" name="nim" placeholder="NIM Anda">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group form-actions">
                        <?php echo form_error('password'); ?>
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-bricky pull-right">
                            Login <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                    <div class="new-account">
                        Don't have an account yet?
                        <a href="<?php echo site_url(); ?>c_main_career_center/create_new_account" class="register">
                            Create an account
                        </a>
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