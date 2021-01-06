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
                                Konsultasi Alumni
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Konsultasi Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Konsultasi Anda
                    </div>
                    <div class="panel-body">
                        <?php
                            if($this->session->flashdata('pesan_consulting') <> ''){
                                echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_consulting').'</div>';
                            }

                            if(count($alumni_consulting) >= 1){
                                foreach($alumni_consulting as $cs){
                                    if($cs->jadwal_consult != "" && $cs->jadwal_consult != "0000-00-00"){
                                        echo '<div class="alert alert-info">Jadwal Anda Sudah Ditentukan</div>';
                                    }
                        ?>

                                    <table class="table">
                                        <thead>
                                            <th>Hari</th>
                                            <th>Tanggal</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <?php
                                                        if($cs->jadwal_consult == ""){
                                                            echo "Jadwal belum ditentukan";
                                                        }else{
                                                            echo $cs->jadwal_consult;
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        if($cs->tgl_consult == "0000-00-00"){
                                                            echo "-";
                                                        }else{
                                                            $format_date = date('d-m-Y', strtotime($cs->tgl_consult));
                                                            echo $format_date;
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                        <?php
                                }
                            }else{
                        ?>
                                <div class="alert alert-info">Anda Belum Mengajukan Konsultasi </div>
                                
                                <form action="<?php echo site_url(); ?>c_career_center_alumni/add_consulting" method="post">
                                    <div class="form-group">
                                        <label>Alasan Konsultasi (Opsional)</label>
                                        <input class="form-control" type="text" name="a_kons">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Ajukan Konsultasi</button>
                                </form>

                        <?php
                            }
                        ?>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->

<?php include "V_alumni_home_footer.php"; ?>