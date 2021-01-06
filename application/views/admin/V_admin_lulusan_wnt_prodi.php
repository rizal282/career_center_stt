<?php
                            if(empty($count_prodi_wnt)){
                                echo "Tidak ada data";
                            }else{
                        ?>
                                <script type="text/javascript">
                                    var wntProdi;
                                    $(document).ready(function(){
                                        wntProdi = new Highcharts.Chart(
                                                {
                                                    
                                                    chart: {
                                                        renderTo: 'container5',
                                                        plotBackgroundColor: null,
                                                        plotBorderWidth: null,
                                                        plotShadow: false
                                                    },   
                                                    title: {
                                                        text: 'Data Statistik Wanita tiap Prodi yang kerja'
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
                                                        name: 'Browser share',
                                                        data: [
                                                        <?php
                                                            foreach($count_prodi_wnt as $prdw){
                                                                $arrayPgrStdw = $prdw->program_studi;
                                                                $arrayPgrStdJumlah = $prdw->jumlah;                                
                                                            
                                                                ?>
                                                                [ 
                                                                    '<?php echo $arrayPgrStdw ?>', <?php echo $arrayPgrStdJumlah; ?>
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

                    
                        <div id="container5"></div>
                        
                        <a class="btn btn-primary" href="<?php echo site_url(); ?>c_career_center_admin/export_excel_lulusankerja_wanitaprodi">Export Excel</a>