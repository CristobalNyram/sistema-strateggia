<?php
session_start(); 
include("../link.php");


if(isset($_POST['fecha_ini'])) {$fecha_ini = $_POST['fecha_ini']; } else { $fecha_ini = 0; }
if(isset($_POST['fecha_final'])) {$fecha_final = $_POST['fecha_final']; } else { $fecha_final = 0; }
if(isset($_POST['user'])) {$user = $_POST['user'];} else { $user = 0; $user2 = "";}
if(isset($_POST['estado'])) {$estado = $_POST['estado']; $estado2 = "and estado = '$estado'";} else { $estado = 0; $estado2 = ""; }
if(isset($_POST['empresa'])) {$empresa = $_POST['empresa']; $empresa2 = "and empresa = '$empresa'";} else { $empresa = 0; $empresa2 = ""; }

if($user != "")
{   $user2 = "and user = '$user'";  }
else { $user2 = ""; }

if($estado != "")
{   $estado2 = "and estado = '$estado'";  }
else { $estado2 = ""; }

if($empresa != "")
{   $empresa2 = "and empresa = '$empresa'";  }
else { $empresa2 = ""; }

$explode = explode("/",$fecha_ini);
$fecha_ini = $explode[2]."-".$explode[1]."-".$explode[0];

$explode = explode("/",$fecha_final);
$fecha_final = $explode[2]."-".$explode[1]."-".$explode[0];

$select_mes = mysqli_query($link, "SELECT distinct(estado) as estado FROM test_general where fecha between '$fecha_ini' and '$fecha_final'");
$row = mysqli_num_rows($select_mes);
if($row > 0)
{
    while($arr = mysqli_fetch_array($select_mes))
    {
       
        $id_estado = $arr['estado'];
        
        $sel_edo = mysqli_query($link, "select estado from estados where id = '$id_estado'");
        while($arr_edo = mysqli_fetch_array($sel_edo))
        {
            $estado = $arr_edo['estado'];
        }
        
        $titulo_mes[] = $estado;

        $select2 = mysqli_query($link, "select count(id) as id from test_general where estado = '$id_estado'");
        $row = mysqli_num_rows($select2);
        if($row > 0)
        {
            while($arr2 = mysqli_fetch_array($select2))
            {
                $count = $arr2['id'];
                $arraym3[] = $count;
            }
        }
        $arraysum = array_sum($arraym3);
        $m3l[] = $arraysum;
        unset($arraym3);
    }
}
else
{
    $titulo_mes[] = "";
    $m3l[] = 0;
}

    

    ?>
<script>
$(function () {
        $('#grafica_estados').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Gráfica de Cantidad de Estudios por Estado'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ["Estado"]
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                },
                series: 
                {
                    dataLabels: 
                    {
                        enabled: true,
                        align: 'center',
                        
                    },
                },
                
            },
            series: [
                <?php
                    $n = count($titulo_mes);
                    $i = 0;
                    while($i < $n)
                    {                        
                        echo "{";
                        echo "name:'".$titulo_mes[$i]."',";
                        
                        echo "data:[".$m3l[$i]."],";
                        //echo "color: '#ccc'";
                        echo "},";
                        $i++;
                    }
                 ?>
            
            
                    ]
        });
    });
    </script>