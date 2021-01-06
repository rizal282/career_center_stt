<?php
                    if(empty($count_wnt)){
                        echo "Tidak ada data";
                    }else{
                ?>
                        <script type="text/javascript">
                            var chart3;
                            $(document).ready(function(){
                                chart3 = new Highcharts.Chart(
                                {
                                    
                                    chart: {
                                        renderTo: 'container8',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },   
                                    title: {
                                        text: 'Data Statistik Lulusan Wanita per Tahun'
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
                                        name: 'Data Lulusan Wanita per Tahun',
                                        data: [
                                        <?php
                                            foreach($count_wnt as $wnt){
                                                $arrayTahunWnt = $wnt->tahun_lulus;
                                                $arrayJumlahWnt = $wnt->jumlah;                               
                                            
                                                ?>
                                                [ 
                                                    '<?php echo $arrayTahunWnt; ?>', <?php echo $arrayJumlahWnt; ?>
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

                <div id="container8"></div>
                
                <a href="<?php echo site_url(); ?>c_career_center_admin/export_excel_lulusan_wanita_tahun" class="btn btn-primary">Export Excel</a>