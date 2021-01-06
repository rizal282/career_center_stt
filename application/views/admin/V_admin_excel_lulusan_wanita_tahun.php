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
        <h2>Data Lulusan Alumni Pria per Tahun</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Alumni</td>
                    <td>Program Studi</td>
                    <td>Tahun Lulus</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $hitung_tahun = $this->db->query("select tahun_lulus from akun_alumni group by tahun_lulus")->result();
                    
                    $nomor = 1;  
                    foreach($hitung_tahun as $ht){
                        $tl = $ht->tahun_lulus;
                        
                        $tahun_lulus = $this->db->query("select * from akun_alumni where j_kelamin = 'Wanita' and tahun_lulus = '".$tl."'")->result();
                        
                        foreach($tahun_lulus as $tl){
                ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $tl->nama_alumni; ?></td>
                                <td><?php echo $tl->program_studi; ?></td>
                                <td><?php echo $tl->tahun_lulus; ?></td>
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