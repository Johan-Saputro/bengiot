<?php
include ('koneksi.php');
$menu = array();
$query = mysqli_query($koneksi, "SELECT * FROM penjualanbarang"); 
while ($data = mysqli_fetch_assoc($query)) {
$menu[]=$data['jumlah'];}
$a=join(",",$menu);
?>

<html>
<head>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
    <script>
        var chart1;
        $(document).ready(function(){
        chart1 = new Highcharts.chart({
            chart: {
                renderTo: 'grafik',
                type: 'column'
            },
            title:{
                text: 'Grafik Penjualan'
            },
            xAxis:{
                categories:['LimeSDR', 'Ettus', 'BladeRF', 'RaspberryPi', 'VNA']
            },
            yAxis:{
                title:{
                text:'Jumlah Terjual'}
            },
            series:
            [{
                name: 'penjualan hp',
                data: [<?= $a;?>]
            }]
        });
        });

        $(document).ready(function() {
            setInterval(function(){
                console.log("intervalll");
                $.get("http://localhost/prak4/ambil.php", function(data2, status){
                    if(status=="success") {
                        var res = data2.split(",");

                        var re = [];
                        re[0] = parseInt(res[0]);
                        re[1] = parseInt(res[1]);
                        re[2] = parseInt(res[2]);
                        re[3] = parseInt(res[3]);
                        chart1.series[0].update({data: re});
                        console.log(data2);

                    }
                });
            }, 3000);
        });
        </script>
</head>

<body>
<div id='grafik'></div>
</body>
</html>