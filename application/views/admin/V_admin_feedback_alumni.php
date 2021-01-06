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
                            Alumni Center
                        </li>
                        <li class="active">
                            <a href="<?php echo site_url(); ?>c_career_center_admin/tracer_study_alumni">
                                Tracer Study Alumni
                            </a>
                        </li>
                        <li class="active">
                            Feedback Alumni
                        </li>
                    </ol>
                    <div class="page-header">
                        <h1>Feedback Alumni</h1>
                        
                       
                    </div>
                    <!-- end: PAGE TITLE & BREADCRUMB -->
                </div>
            </div>
            <!-- end: PAGE HEADER -->

            <!-- start content article -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-external-link-square"></i> Detail Tracer Study
                    <div class="panel-tools">
                        <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                        <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                        <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <?php
                                        //jika artikel tidak ada
                        if (count($detail_tracer) == 0) {
                            ?>
                        <div class="alert alert-warning">Tidak Ada Tracer Study</div>

                        <?php

                    } else {
                        foreach ($detail_tracer as $row) { 
                        ?>
                        <img src="<?php echo base_url(); ?>foto_alumni/<?php echo $row->foto_alumni; ?>" alt="<?php echo $row->foto_alumni; ?>" width="100" height="100" class="img-circle">
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
                                <td>No. HP</td>
                                <td> : </td>
                                <td><?php echo $row->no_hp; ?></td>
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
                                <td>Mulai Bekerja</td>
                                <td> : </td>
                                <td><?php echo date("d M Y", strtotime($row->tb_kerja)); ?></td>
                            </tr>
                            <tr>
                                <td>Kritik & Saran</td>
                                <td> : </td>
                                <td><?php echo $row->kritik_saran; ?></td>
                            </tr>
                        </table>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-reply"></i> Data Kemampuan Lulusan
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <p>
                                        Sejumlah pernyataan dalam tabel di bawah ini merupakan sejumlah komponen kemampuan lulusan STT Wastukancana yang bekerja di Instansi Bapak/Ibu. Pilihlah salah satu dibawah ini yang sesuai dengan penilaian Bapak/ ibu terhadap kemampuan lulusan yang bersangkutan selama bekerja di Instansi ini.
                                    </p>

                                    <form action="<?php echo site_url(); ?>c_career_center_admin/input_feedback" method="post">
                                    <div class="form-group">
                                        <label>1. Integritas (etika dan moral) Memegang teguh etika dan moral dalam tindakannya dan tanggung jawab sosialnya sebagai profesional dan warga negara</label><br>
                                        <input type="hidden" name="nim_alumni" value="<?php echo $row->id_alumni; ?>">
                                        <input type="radio" name="no_1" value="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_1" value="Baik"> Baik
                                        <input type="radio" name="no_1" value="Cukup"> Cukup
                                        <input type="radio" name="no_1" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>2. Profesionalisme Dengan efektif dapat mempergunakan pengetahuan dan keahliannya berdasarkan bidang ilmunya</label><br>
                                        <input type="radio" name="no_2" value="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_2" value="Baik"> Baik
                                        <input type="radio" name="no_2" value="Cukup"> Cukup
                                        <input type="radio" name="no_2" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>3. Bahasa Inggris Menunjukkan perspektif internasionalnya dalam mengembangkan kemampuan berbahasa Inggris</label><br>
                                        <input type="radio" name="no_3" value="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_3" value="Baik"> Baik
                                        <input type="radio" name="no_3" value="Cukup"> Cukup
                                        <input type="radio" name="no_3" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>4. Teknologi Informasi Mempraktekkan keprofesiannya dengan menggunakan Teknologi Informasi</label><br>
                                        <input type="radio" name="no_4" vvalue="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_4" value="Baik"> Baik
                                        <input type="radio" name="no_4" value="Cukup"> Cukup
                                        <input type="radio" name="no_4" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>5. Komunikasi Berkomunikasi secara efektif dalam praktek profesinya dan sebagai anggota masyarakat</label><br>
                                        <input type="radio" name="no_5" value="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_5" value="Baik"> Baik
                                        <input type="radio" name="no_5" value="Cukup"> Cukup
                                        <input type="radio" name="no_5" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>6. Kerjasama tim Sebagai profesional sanggup bekerja mandiri maupun bersama orang lain/Tim</label><br>
                                        <input type="radio" name="no_6" value="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_6" value="Baik"> Baik
                                        <input type="radio" name="no_6" value="Cukup"> Cukup
                                        <input type="radio" name="no_6" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>7. Pengembangan diri Kesiapan dan berupaya dalam mengembangkan kemampuan dan potensi dirinya setiap saat</label><br>
                                        <input type="radio" name="no_7" value="Sangat Baik"> Sangat Baik
                                        <input type="radio" name="no_7" value="Baik"> Baik
                                        <input type="radio" name="no_7" value="Cukup"> Cukup
                                        <input type="radio" name="no_7" value="Kurang"> Kurang
                                    </div>

                                    <div class="form-group">
                                        <label>Saran dan masukan dari Bapak/Ibu tentang penyelenggaraan pembelajaran di STT Wastukancana untuk peningkatan kompetensi Lulusan yang dibutuhkan di dunia Kerja.</label>
                                        <textarea name="ks_feedback" class="form-control"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>

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