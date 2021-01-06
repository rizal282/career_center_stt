<?php
                            if(!$alumni_wanita){
                                echo "Tidak ada data";
                            }else{
                        ?>

                            <script type="text/javascript">
                                var alumniWnt;
                                $(document).ready(function(){
                                    alumniWnt = new Highcharts.Chart(
                                    {
                                        
                                        chart: {
                                            renderTo: 'container2',
                                            plotBackgroundColor: null,
                                            plotBorderWidth: null,
                                            plotShadow: false
                                        },   
                                        title: {
                                            text: 'Data Statistik Alumni Wanita per Tahun'
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
                                            name: 'Data Jumlah Wanita Pertahun',
                                            data: [
                                            <?php
                                                 foreach($alumni_wanita as $awn){
                                                    $arrayAwn = $awn->tahun_lulus;
                                                    $arrayJumlahAwn = $awn->jumlah;                              
                                                
                                                    ?>
                                                    [ 
                                                        '<?php echo $arrayAwn; ?>', <?php echo $arrayJumlahAwn; ?>
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