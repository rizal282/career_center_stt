<?php
                                if (empty($count_prodi_pria)) {
                                    echo "Tidak ada data";
                                } else {
                            ?>
                                    <script type="text/javascript">
                                        var chartPriaProdi;
                                        $(document).ready(function(){
                                            chartPriaProdi = new Highcharts.Chart(
                                {
                                    
                                    chart: {
                                        renderTo: 'container4',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },   
                                    title: {
                                        text: 'Data Statistik Lulusan Pria / Prodi'
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
                                        name: 'Lulusan Pria per Prodi',
                                        data: [
                                        <?php
                                            foreach($count_prodi_pria as $prdp){
                                                $arrayPgrStdp = $prdp->program_studi;
                                                $arrayPgrStdJ = $prdp->jumlah;                             
                                            
                                                ?>
                                                [ 
                                                    '<?php echo $arrayPgrStdp; ?>', <?php echo $arrayPgrStdJ; ?>
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
                        <div id="container4"></div>
                        
                        <a href="<?php echo site_url(); ?>c_career_center_admin/export_excel_lulusankerja_priaprodi" class="btn btn-primary">Export Excel</a>