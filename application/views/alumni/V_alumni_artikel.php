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
                                Artikel
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Artikel</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar Artikel
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <?php
                                        if($article->num_rows() >= 1){
                                            foreach($article->result() as $row){
                                    ?>

                                                <div class="media">
                                                    <!-- <img class="mr-3" src=".../64x64" alt="Generic placeholder image"> -->
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><?php echo $row->nama_artikel; ?></h5>
                                                        <?php echo word_limiter($row->deskripsi, 10); ?>
                                                        <p>&nbsp;</p>
                                                        <a class="btn btn-success" href="<?php echo site_url(); ?>c_career_center_alumni/article/<?php echo $row->id_artikel; ?>">Selengkapnya...</a>
                                                    </div>
                                                </div>

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