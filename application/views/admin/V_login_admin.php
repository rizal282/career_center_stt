<?php include "V_login_admin_front_head.php"; ?>

    <div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="logo">
            PUSAT KARIR <p>STT WASTUKANCANA</p>
        </div>
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3>Masuk ke Akun Administrator</h3>
            <p>
                Please enter your name and password to log in.
            </p>
            <?php 
                $attributes = array('class' => 'form-login', 'id' => 'myform');
                echo form_open('c_main_career_center/proses_login_admin', $attributes);
            ?>
            <!-- <form class="" action="index.html" method="post"> -->
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <i class="fa fa-user"></i>
                        </span>
                        <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                        <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                    </div>
                    <div class="form-group form-actions">
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
                </fieldset>
            <!-- </form> -->
            <?php echo form_close(); ?>
        </div>
        <!-- end: LOGIN BOX -->
        <!-- start: FORGOT BOX -->
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
        </div>
        <!-- end: FORGOT BOX -->
        <!-- start: REGISTER BOX -->
        <!--<div class="box-register">
            <h3>Sign Up</h3>
            <p>
                Enter your personal details below:
            </p>
            <form class="form-register">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="F" name="gender">
                                Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="M" name="gender">
                                Male
                            </label>
                        </div>
                    </div>
                    <p>
                        Enter your account details below:
                    </p>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="password" class="form-control" name="password_again" placeholder="Password Again">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="agree" class="checkbox-inline">
                                <input type="checkbox" class="grey agree" id="agree" name="agree">
                                I agree to the Terms of Service and Privacy Policy
                            </label>
                        </div>
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
        </div> -->
        <!-- end: REGISTER BOX -->

<?php include "V_admin_home_foot.php"; ?>