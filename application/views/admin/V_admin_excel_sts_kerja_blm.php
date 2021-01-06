<?php
    /*header("Content-type: application/vnd-ms-excel");
 
    header("Content-Disposition: attachment; filename=$title.xls");
     
    header("Pragma: no-cache");
     
    header("Expires: 0");*/

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="row">
    <div class="col-lg-12">
        <h2>Data Lulusan Alumni yang Sudah Bekerja</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Alumni</td>
                    <td>Tahun Lulus</td>
                    <td>Posisi Kerja</td>
                    <td>Perusahaan</td>
                    <td>Mulai Kerja</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    $data_sudah_bekerja = $this->db->query("select * from akun_alumni inner join tracer_study on akun_alumni.id_alumni = tracer_study.id_alumni where tracer_study.sts_kerja = 'Sudah' order by akun_alumni.tahun_lulus asc")->result();
                    
                    foreach($data_sudah_bekerja as $dsb){
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $dsb->nama_alumni; ?></td>
                        <td><?php echo $dsb->tahun_lulus; ?></td>
                        <td><?php echo $dsb->posisi_kerja; ?></td>
                        <td><?php echo $dsb->nama_perusahaan; ?></td>
                        <td><?php echo $dsb->mulai_kerja; ?></td>
                    </tr>
                <?php
                        $nomor ++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-12">
        <h2>Data Lulusan Alumni yang Belum Bekerja</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Alumni</td>
                    <td>Tahun Lulus</td>
                    <td>Posisi Kerja</td>
                    <td>Perusahaan</td>
                    <td>Mulai Kerja</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    $data_sudah_bekerja = $this->db->query("select * from akun_alumni inner join tracer_study on akun_alumni.id_alumni = tracer_study.id_alumni where tracer_study.sts_kerja = 'Belum' order by akun_alumni.tahun_lulus asc")->result();
                    
                    foreach($data_sudah_bekerja as $dsb){
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $dsb->nama_alumni; ?></td>
                        <td><?php echo $dsb->tahun_lulus; ?></td>
                        <td><?php echo $dsb->posisi_kerja; ?></td>
                        <td><?php echo $dsb->nama_perusahaan; ?></td>
                        <td><?php echo $dsb->mulai_kerja; ?></td>
                    </tr>
                <?php
                        $nomor ++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>