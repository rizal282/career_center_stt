<?php
                                if(count($masa_jeda) == 0){
                                    echo "Tidak ada data";
                                }else{
                            ?>

                                <script type="text/javascript">
                                var alumniWnt;
                                $(document).ready(function(){
                                    alumniWnt = new Highcharts.Chart(
                                    {
                                        
                                        chart: {
                                            renderTo: 'container4',
                                            plotBackgroundColor: null,
                                            plotBorderWidth: null,
                                            plotShadow: false
                                        },   
                                        title: {
                                            text: 'Data Statistik Masa Jeda Alumni '
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
                                            name: 'Data Masa Jeda Alumni',
                                            data: [
                                            <?php
                                                 foreach($masa_jeda as $jeda){
                                                    $arrayJeda = $jeda->waktu_bfr_kerja;
                                                    $arrayJmlJeda = $jeda->jumlah;                              
                                                
                                                    ?>
                                                    [ 
                                                        '<?php echo $arrayJeda; ?>', <?php echo $arrayJmlJeda; ?>
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
