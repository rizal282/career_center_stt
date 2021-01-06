<?php
                    if(empty($count_kerja)){
                        echo "Tidak ada data";
                    }else{
                ?>
                        <script type="text/javascript">
                            var chartKerjaBelum;
                            $(document).ready(function(){
                                chartKerjaBelum = new Highcharts.Chart(
                                {
                                    
                                    chart: {
                                        renderTo: 'container3',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },   
                                    title: {
                                        text: 'Data Statistik yang Kerja dan Belum '
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
                                        name: 'Data yang Kerja dan Belum',
                                        data: [
                                        <?php
                                            foreach($count_kerja as $krj){
                                                $arraystsKerja = $krj->sts_kerja;
                                                $arrayJumlahKrj = $krj->jumlah;                              
                                            
                                                ?>
                                                [ 
                                                    '<?php echo $arraystsKerja; ?>', <?php echo $arrayJumlahKrj; ?>
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


<div id="container3"></div>

<a href="<?php echo site_url(); ?>c_career_center_admin/export_excel_kerja_vs_belum" class="btn btn-primary">Export Excel</a>