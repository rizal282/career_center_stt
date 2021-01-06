<?php
    header("Content-type: application/vnd-ms-excel");
 
    header("Content-Disposition: attachment; filename=$title.xls");
     
    header("Pragma: no-cache");
     
    header("Expires: 0");

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="row">
    <div class="col-lg-12">
        <h2>Data Lulusan Alumni Pria yang Bekerja per Prodi</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Alumni</td>
                    <td>Program Studi</td>
                    <td>Tahun Lulus</td>
                    <td>Status Bekerja</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hitung_prodi = $this->db->query("select program_studi from akun_alumni group by program_studi")->result();
                    
                    $nomor = 1;  
                    foreach($hitung_prodi as $hp){
                        $tl = $hp->program_studi;
                        
                        $tahun_lulus = $this->db->query("select * from akun_alumni inner join tracer_study on akun_alumni.id_alumni = tracer_study.id_alumni where akun_alumni.j_kelamin = 'Pria' and akun_alumni.program_studi = '".$tl."' and tracer_study.sts_kerja = 'Sudah' order by akun_alumni.tahun_lulus asc")->result();
                        
                        foreach($tahun_lulus as $tl){
                ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $tl->nama_alumni; ?></td>
                                <td><?php echo $tl->program_studi; ?></td>
                                <td><?php echo $tl->tahun_lulus; ?></td>
                                <td><?php echo $tl->sts_kerja; ?></td>
                            </tr>
                
                <?php
                            $nomor ++;
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>