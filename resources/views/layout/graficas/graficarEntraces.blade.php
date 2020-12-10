<body>
    <div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var entraces = <?php echo json_encode($entraces) ?>;
    Highcharts.chart('container'), {
        title: {
            text: 'Nuevas entradas en el sistema'
        },
        subtitle: {
            text: 'Gráfica'
        },
        
        xAxis{
            categories: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre']
        },

        yAxis{
            title: {
                text: 'Nuevas entradas'
                } 
        },

        legend:{
            layout:'vertical',
            align: 'right',
            verticalAlign: 'middle' 
            },

            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },

            series: [ 
                { 
                    name: 'Nuevas entradas', 
                    data: entraces
                     } 
            ],

            responsive: {
                rules:[ 
                   { 
                       condition: 
                    {               
                        maxWidth: 500
                   }, 
                   chartOptions{
                       legend: {
                           layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'botton'
                   }
                }
          ] 
          }
    }
} );

 </script>  
