<?php
                                if(empty($count_wkt_kerja)){
                                    echo "Tidak Ada Data";
                                }else{
                            ?>
                                        <script type="text/javascript">
                                            var chartWktKerja;
                                            $(document).ready(function(){
                                                chartWktKerja = new Highcharts.Chart(
                                                {
                                                    
                                                    chart: {
                                                        renderTo: 'container6',
                                                        plotBackgroundColor: null,
                                                        plotBorderWidth: null,
                                                        plotShadow: false
                                                    },   
                                                    title: {
                                                        text: 'Data Statistik Waktu Mendapatkan Kerja'
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
                                                        name: 'Data Waktu Medapatkan Kerja',
                                                        data: [
                                                        <?php
                                                            foreach($count_wkt_kerja as $wkt){
                                                                $arrayWkt = $wkt->waktu_bfr_kerja;
                                                                $arrayWktJumlah = $wkt->jumlah;                                
                                                            
                                                                ?>
                                                                [ 
                                                                    '<?php echo $arrayWkt ?>', <?php echo $arrayWktJumlah; ?>
                                                                ],
                                                                <?php
                                                            }
                                                            ?>
                                                
                                                        ]
                                                    }]
                                                });
                                            });
                                        </script>
                                        <div id="container6"></div>
                                        <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_admin/export_excel_waktu_kerja">Export Excel</a>
                            <?php
                                }
                            ?>