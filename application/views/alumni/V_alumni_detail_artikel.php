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
                            <a href="<?php echo site_url(); ?>c_career_center_alumni/article">
                                Artikel
                            </a>
                            </li>
                            <li class="active">
                                Detail Artikel
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Detail Artikel</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Detail Artikel
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php
                                        if(count($detail_artikel) == 1){
                                            foreach($detail_artikel as $row){
                                    ?>
                                                <!--
                                                <div class="media">
                                                    
                                                    <div class="media-body">
                                                        <h5 class="mt-0"></h5>
                                                        
                                                        <p>&nbsp;</p>
                                                        <a class="btn btn-danger" href="<?php echo site_url(); ?>c_career_center_alumni/article">Kembali</a>
                                                    </div>
                                                </div>-->

                                                <section class="wrapper wrapper-grey padding50">
                                                <!-- start: PORTFOLIO CONTAINER -->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <img src="<?php echo base_url(); ?>foto_artikel/<?php echo $row->foto_artikel; ?>" width="350" height="350" />
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="section-content">
                                                                <h2><?php echo $row->nama_artikel; ?></h2>
                                                                <hr class="fade-right">
                                                                <p>
                                                                    <?php echo $row->deskripsi; ?>
                                                                </p>
                                                                <hr class="fade-right">
                                                                <a href="<?php echo site_url(); ?>c_career_center_alumni/article" class="btn btn-primary"><i class="fa fa-info"></i> Kembali</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end: PORTFOLIO CONTAINER -->
                                            </section>

                                    <?php
                                            }
                                        }else{
                                            echo '<div class="alert alert-info">Tidak ada artikel</div>';
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