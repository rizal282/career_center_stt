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
                                Lowongan Kerja
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Lowongan Kerja</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar Lowongan Kerja Perusahaan
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php 
                                        if($this->session->flashdata('pesan_upload') <> ''){
                                             echo '<div class="alert alert-warning">'.$this->session->flashdata('pesan_upload').'</div>';
                                        } 
                                        
                                    ?>
                                    <?php
                                        if(!$lowongan){
                                            echo '<div class="alert alert-info">Tidak Ada Lowongan</div>';
                                        }else{
                                            $no = 1;
                                            foreach($lowongan->result() as $row){
                                    ?>

                                                <div class="media">
                                                    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><?php echo $no; ?>. <?php echo strtoupper($row->nama_lowongan); ?></h5>
                                                        <?php echo $row->tgl_post; ?>
                                                        <p>&nbsp;</p>

                                                        <?php 
                                                            //ambil data apply lowongan sesuaikan dengan id alumni dan id lowongan
                                                            $id_alumni_cek = $this->session->userdata('id_alumni');

                                                            $query = $this->db->query("select * from apply_lowongan where id_alumni = '".$id_alumni_cek."' and id_lowongan_kerja = '".$row->id_lowongan."'")->result();
                                                            
                                                            if(count($query) == 1){
                                                        ?>
                                                                <div class="alert alert-info">Lowongan ini sudah anda apply</div>
                                                        <?php
                                                            }else{
                                                        ?>

                                                                <a class="btn btn-primary add-row" href="<?php echo site_url(); ?>c_career_center_alumni/show_job/<?php echo $row->id_lowongan; ?>">Lihat</a>

                                                        <?php
                                                            }
                                                        ?>

                                                    </div>
                                                </div>


                                    <?php
                                            $no++;
                                            }
                                        }
                                    ?>

                                    <div class="row">
                                        <div class="col">
                                            <!--Tampilkan pagination-->
                                            <?php echo $pagination; ?>
                                        </div>
                                    </div>
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