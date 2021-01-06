<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <div class="row">
    <div class="col-lg-12">
         <table class="table">
             <thead>
                 <tr>
                     <td>Data Alumni Pria</td>
                 </tr>
             </thead>
         </table>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <td>No</td>
                     <td>Nama Alumni</td>
                     <td>Jenis Kelamin</td>
                     <td>Tagl Lahir</td>
                     <td>Prg. Studi</td>
                     <td>Tahun Masuk</td>
                     <td>Tahun Lulus</td>
                     <td>Email</td>
                     <td>No HP</td>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    $nomor = 1;
                    foreach($data_pria as $dp){
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $dp->nama_alumni; ?></td>
                        <td><?php echo $dp->j_kelamin; ?></td>
                        <td><?php echo date("d-M-Y", strtotime($dp->tgl_lahir)); ?></td>
                        <td><?php echo $dp->program_studi; ?></td>
                        <td><?php echo $dp->tahun_masuk; ?></td>
                        <td><?php echo $dp->tahun_lulus; ?></td>
                        <td><?php echo $dp->email; ?></td>
                        <td><?php echo $dp->no_hp; ?></td>
                    </tr>
                
                <?php
                    $nomor ++;
                    }
                 ?>
             </tbody>
         </table>
     </div>
     <div class="col-lg-12">
         <table class="table">
             <thead>
                 <tr>
                     <td>Data Alumni Wanita</td>
                 </tr>
             </thead>
         </table>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <td>No</td>
                     <td>Nama Alumni</td>
                     <td>Jenis Kelamin</td>
                     <td>Tagl Lahir</td>
                     <td>Prg. Studi</td>
                     <td>Tahun Masuk</td>
                     <td>Tahun Lulus</td>
                     <td>Email</td>
                     <td>No HP</td>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    $nomor = 1;
                    foreach($data_wanita as $dp){
                ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $dp->nama_alumni; ?></td>
                        <td><?php echo $dp->j_kelamin; ?></td>
                        <td><?php echo date("d-M-Y", strtotime($dp->tgl_lahir)); ?></td>
                        <td><?php echo $dp->program_studi; ?></td>
                        <td><?php echo $dp->tahun_masuk; ?></td>
                        <td><?php echo $dp->tahun_lulus; ?></td>
                        <td><?php echo $dp->email; ?></td>
                        <td><?php echo $dp->no_hp; ?></td>
                    </tr>
                
                <?php
                    $nomor ++;
                    }
                 ?>
             </tbody>
         </table>
     </div>
 </div