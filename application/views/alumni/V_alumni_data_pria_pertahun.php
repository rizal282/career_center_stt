<?php
    if(!$alumni_pria){
        echo "Tidak ada data";
    }else{
?>

        <script type="text/javascript">
                            var alumniPria;
                            $(document).ready(function(){
                                alumniPria = new Highcharts.Chart(
                                {
                                    
                                    chart: {
                                        renderTo: 'container1',
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },   
                                    title: {
                                        text: 'Data Statistik Alumni Pria per Tahun'
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
                                        name: 'Data Alumni Pria per Tahun',
                                        data: [
                                        <?php
                                            foreach($alumni_pria as $apr){
                                                $arrayApr = $apr->tahun_lulus;
                                                $arrayJumlahApr = $apr->jumlah;                              
                                            
                                                ?>
                                                [ 
                                                    '<?php echo $arrayApr; ?>', <?php echo $arrayJumlahApr; ?>
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