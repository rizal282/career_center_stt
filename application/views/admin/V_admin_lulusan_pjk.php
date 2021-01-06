<?php
                    if(empty($count_jk)){
                        echo "Tidak ada data";
                    }else{
                ?>
                        <script type="text/javascript">
                            var chart;
                            $(document).ready(function(){
                                chart = new Highcharts.Chart(
                                {
                                    data: {
                                        table: 'tableJk'
                                    },
                                    chart: {
                                        renderTo: 'container1',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },   
                                    title: {
                                        text: 'Data Statistik Lulusan per Jenis Kelamin'
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
                                        name: 'Lulusan per Jenis Kelamin',
                                        data: [
                                        <?php
                                            foreach($count_jk as $jk){
                                                $arrayJkelamin = $jk->j_kelamin;
                                                $arrayJumlah = $jk->jumlah;
                                            
                                                ?>
                                                [ 
                                                    '<?php echo $arrayJkelamin ?> : <?php  ?>', <?php echo $arrayJumlah; ?>
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
            <div id="container1"></div>
            
            <a href="<?php echo site_url(); ?>C_career_center_admin/export_excel_jk" class="btn btn-primary">Export Excel</a>
            
            <div id="data_jk">
                <div class="row">
                    <div class="col-lg-6">
                        <table id="tableJk" >
                            <thead>
                                <tr>
                                    <?php 
                                        $jk_p = $this->db->query("select j_kelamin from akun_alumni where j_kelamin = 'Pria'")->result();
                                        foreach($jk_p as $qjk){
                                            $p = $qjk->j_kelamin;
                                        }
                                    ?>
                                    <th><?php //echo $p; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table> 
                    </div>
                    <div class="col-lg-6">
                        <table>
                            <thead>
                                <tr>
                                    <?php 
                                        $jk_w = $this->db->query("select j_kelamin from akun_alumni where j_kelamin = 'Wanita'")->result();
                                        foreach($jk_w as $qjk){
                                            $w = $qjk->j_kelamin;
                                        }
                                    ?>
                                    <th><?php //echo $w; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>