<?php include "V_login_admin_head.php"; ?>

    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
        <div class="navbar-content">
           <?php include "V_sidebar_admin.php"; ?>
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
                                <a href="<?php echo site_url(); ?>c_career_center_admin">
                                    Dashboard
                                </a>
                            </li>
                            <li class="active">
                                Career Center
                            </li>
                            <li class="active">
                                MoU
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>MoU</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start chart Lowongan Kerja sesuai MoU -->

                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Grafik Lowongan Menurut Perusahaan yang ada MoU
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <?php
                                    //ambil data Lowongan Mou
                                    $chartMoU = $this->db->query('select nama_perusahaan, count(nama_perusahaan) as jumlah from lowongan_kerja group by nama_perusahaan')->result();

                                    if(count($chartMoU) == 0){
                                        echo "Tidak ada data";
                                    }else{
                                ?>
                                            <script type="text/javascript">
                                                    var chartMou;
                                                    $(document).ready(function(){
                                                        chartMou = new Highcharts.Chart(
                                            {
                                                
                                                chart: {
                                                    renderTo: 'grafik_mou',
                                                    plotBackgroundColor: null,
                                                    plotBorderWidth: null,
                                                    plotShadow: false
                                                },   
                                                title: {
                                                    text: 'Data Statistik Lowongan Menurut Mou Perusahaan'
                                                },
                                                tooltip: {
                                                    formatter: function() {
                                                        return '<b>'+
                                                        this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' % ';
                                                    }
                                                },
                                                
                                                
                                                plotOptions: {
                                                    pie: {
                                                        allowPointSelect: true,
                                                        cursor: 'pointer',
                                                        dataLabels: {
                                                            enabled: true,
                                                            color: '#000000',
                                                            connectorColor: 'green',
                                                            formatter: function() 
                                                            {
                                                                return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) +' % ';
                                                            }
                                                        }
                                                    }
                                                },
                                    
                                                    series: [{
                                                    type: 'pie',
                                                    name: 'Data MoU Perusahaan',
                                                    data: [
                                                    <?php
                                                        foreach($chartMoU as $lk){
                                                            $arrayNamaPerusahaan = $lk->nama_perusahaan;
                                                            $arrayJumlah = $lk->jumlah;                             
                                                        
                                                            ?>
                                                            [ 
                                                                '<?php echo $arrayNamaPerusahaan; ?>', <?php echo $arrayJumlah; ?>
                                                            ],
                                                            <?php
                                                        }
                                                        ?>
                                            
                                                    ]
                                                }]
                                            });
                                        });
                                    </script>

                                <?php
                                    }
                                ?>
                                
                                <div id="grafik_mou"></div>
                            </div>
                        </div>

                <!-- End chart lowongan kerja sesuai MoU -->

                        <!-- start content MoU -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Daftar MoU
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">
                               <div class="row">
                                    <div class="col-md-12 space20">
                                        <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_admin/add_mou"><i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <?php
                                        //pesan jika mou berhasil ditambah
                                        if($this->session->flashdata('pesan_mou') <> ''){
                                            echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_mou').'</div>';
                                        }

                                        //jika artikel tidak ada
                                        if($mou->num_rows() == 0){
                                    ?>
                                        <div class="alert alert-warning">Tidak Ada MOU</div>
                                        
                                    <?php
                                        }else{
                                    ?>
                                        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto</th>
                                                    <th>Nama Perusahaan</th>
                                                    <th>Alamat</th>
                                                    <th>Deskripsi</th>
                                                    <th>File PDF</th>
                                                    <th>Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    //jika artikel ada
                                                    $no = 1;
                                                    foreach($mou->result() as $row){
                                                ?>

                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><img src="<?php echo base_url(); ?>foto_mou/<?php echo $row->foto_mou; ?>" alt="<?php echo $row->foto_mou; ?>" width="100" height="100"></td>
                                                    <td><?php echo $row->nama_perusahaan; ?></td>
                                                    <td><?php echo $row->alamat; ?></td>
                                                    <td><?php echo $row->desk_perusahaan; ?></td>
                                                    <td><a class="media" href="<?php echo site_url(); ?>c_career_center_admin/file_pdf_mou/<?php echo $row->file_mou; ?>"><?php echo $row->file_mou; ?></a></td>
                                                    <td><a class="btn btn-xs btn-green" href="<?php echo site_url(); ?>c_career_center_admin/edit_mou/<?php echo $row->id_mou; ?>" class="edit-row"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-xs btn-bricky" href="<?php echo site_url(); ?>c_career_center_admin/delete_mou/<?php echo $row->id_mou; ?>" class="delete-row"><i class="fa fa-trash"></i></a></td>
                                                </tr>

                                                <?php
                                                        $no ++;
                                                    }
                                                ?>
                                            </tbody>
                                        </table>

                                    <?php
                                        }
                                   
                                    ?>
                                </div>
                            </div>
                        </div>
                <!-- end content MoU -->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    
<?php include "V_login_admin_foot.php"; ?>