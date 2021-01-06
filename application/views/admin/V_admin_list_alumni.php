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
                                Alumnni Center
                            </li>
                            <li class="active">
                                Data Alumni
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Data Alumni</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->

                <!-- start content article -->
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i> Detail Alumni
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                                    <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <?php
                                    //tampilkan pesan jika artikel sudah dihapus
                                    if($this->session->flashdata('pesan_hapus') <> ''){
                                        echo '<div class="alert alert-info">'.$this->session->flashdata('pesan_hapus').'</div>';
                                    }

                                    if(isset($id_see)){
                                        foreach($detail_alumni as $row){
                                ?>
                                            <img class="img-circle" src="<?php echo base_url(); ?>foto_alumni/<?php echo $row->foto_alumni; ?>" alt="<?php echo $row->foto_alumni; ?>" width="100" height="100">
                                            <p>&nbsp;</p>
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
                                                        <td>No HP</td>
                                                        <td> : </td>
                                                        <td><?php echo $row->no_hp; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ganti Status</td>
                                                        <td> : </td>
                                                        <td>
                                                                <form class="form-inline" method="post" action="<?php echo site_url(); ?>c_career_center_admin/ubah_aktifasi/<?php echo $row->id_alumni; ?>">
                                                                    <div class="form-group">
                                                                        <select name="sts_aktif" class="form-control">
                                                                            <option value="1">Non Aktif</option>
                                                                            <option value="0">Aktif</option>
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <button type="submit" class="btn btn-primary">Ubah Status</button>
                                                                </form>
                                                        </td>
                                                        <!--<td>
                                                            <?php 
                                                                if($row->status == 0){
                                                                    echo "Aktif";
                                                                }else{
                                                                    echo "Non Aktif";
                                                                }
                                                            ?>
                                                        </td>-->
                                                    </tr>
                                                </table>

                                <?php

                                        }
                                    }else{
                                ?>

                                        <div class="table-responsive">
                                            <?php
                                                //jika artikel tidak ada
                                                if(count($list_alumni) == 0){
                                            ?>
                                                <div class="alert alert-warning">Tidak Ada Data Alumni</div>
                                                
                                            <?php
                                                }else{
                                            ?>
                                                <table class="table table-striped table-hover" id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Jenis Kelamin</th>
                                                            <th>Angkatan</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            //jika artikel ada
                                                            $no = 1;
                                                            foreach($list_alumni as $row){
                                                        ?>

                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $row->nama_alumni; ?></td>
                                                            <td><?php echo $row->j_kelamin; ?></td>
                                                            <td><?php echo $row->tahun_masuk; ?></td>
                                                            <td>
                                                                <?php 
                                                                    if($row->status == 0){
                                                                        echo "Aktif";
                                                                    }else{
                                                                        echo "Non Aktif";
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td><a class="btn btn-xs btn-green" href="<?php echo site_url(); ?>c_career_center_admin/list_alumni/show_detail/<?php echo $row->id_alumni; ?>"><i class="fa fa-eye"></i></a>
                                                                <a class="btn btn-xs btn-red delete-row" href="<?php echo site_url(); ?>c_career_center_admin/delete_alumni/<?php echo $row->id_alumni; ?>"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                                $no ++;
                                                            }
                                                        ?>
                                                    </tbody>
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
    
<?php include "V_login_admin_foot.php"; ?>