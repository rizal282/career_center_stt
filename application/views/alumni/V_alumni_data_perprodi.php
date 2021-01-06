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
                                            renderTo: 'container3',
                                            plotBackgroundColor: null,
                                            plotBorderWidth: null,
                                            plotShadow: false
                                        },   
                                        title: {
                                            text: 'Data Statistik Alumni per Prodi'
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
                                            name: 'Data Jumlah Alumni per Prodi',
                                            data: [
                                            <?php
                                                 foreach($prodi_alumni as $prd){
                                                    $arrayPrd = $prd->program_studi;
                                                    $arrayJumlahPrd = $prd->jumlah;                              
                                                
                                                    ?>
                                                    [ 
                                                        '<?php echo $arrayPrd; ?>', <?php echo $arrayJumlahPrd; ?>
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