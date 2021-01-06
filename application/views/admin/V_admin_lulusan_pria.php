<?php
                    if(empty($count_pria)){
                        echo "Tidak ada data";
                    }else{
                ?>

                        <script type="text/javascript">
                            var chart2;
                            $(document).ready(function(){
                                chart2 = new Highcharts.Chart(
                                {
                                    
                                    chart: {
                                        renderTo: 'container2',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },   
                                    title: {
                                        text: 'Data Statistik Lulusan Pria per Tahun'
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
                                        name: 'Lulusan Pria',
                                        data: [
                                        <?php
                                            foreach($count_pria as $pria){
                                                $arrayTahun = $pria->tahun_lulus;
                                                $arrayJumlahPria = $pria->jumlah;                                
                                            
                                                ?>
                                                [ 
                                                    '<?php echo $arrayTahun ?>', <?php echo $arrayJumlahPria; ?>
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

                <div id="container2"></div>
                 
                <a href="<?php echo site_url(); ?>C_career_center_admin/export_excel_lulusan_pria_tahun" class="btn btn-primary">Export Excel</a>