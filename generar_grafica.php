<?php
session_start(); 
include("link.php");

$fecha_hoy = date("d-m-Y");
$fecha_hoy = strtotime($fecha_hoy);
$anio_ant = date("Y",strtotime("-1 year",$fecha_hoy));
$anio_actual = date("Y",$fecha_hoy);


/*Año Anterior*/

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-01-01' and '".$anio_ant."-01-31'");
   if($select_ant)
   {
       $titulo_ant[] = "Enero";
       $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-01-01' and '".$anio_ant."-01-31'");
           $row = mysqli_num_rows($select);
           if($row > 0)
           {
               while($arr = mysqli_fetch_array($select))
               {
                   $data_ant[] = $arr['id'];
               }
           }
   }
   else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-02-01' and '".$anio_ant."-02-29'");
if($select_ant)
{
    $titulo_ant[] = "Febrero";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-02-01' and '".$anio_ant."-02-29'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-03-01' and '".$anio_ant."-03-31'");
if($select_ant)
{
    $titulo_ant[] = "Marzo";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-03-01' and '".$anio_ant."-03-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-04-01' and '".$anio_ant."-04-30'");
if($select_ant)
{
    $titulo_ant[] = "Abril";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-04-01' and '".$anio_ant."-04-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-05-01' and '".$anio_ant."-05-31'");
if($select_ant)
{
    $titulo_ant[] = "Mayo";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-05-01' and '".$anio_ant."-05-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-06-01' and '".$anio_ant."-06-30'");
if($select_ant)
{
    $titulo_ant[] = "Junio";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-06-01' and '".$anio_ant."-06-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-07-01' and '".$anio_ant."-07-31'");
if($select_ant)
{
    $titulo_ant[] = "Julio";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-07-01' and '".$anio_ant."-07-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-08-01' and '".$anio_ant."-08-30'");
if($select_ant)
{
    $titulo_ant[] = "Agosto";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-08-01' and '".$anio_ant."-08-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-09-01' and '".$anio_ant."-09-30'");
if($select_ant)
{
    $titulo_ant[] = "Septiembre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-09-01' and '".$anio_ant."-09-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-10-01' and '".$anio_ant."-10-31'");
if($select_ant)
{
    $titulo_ant[] = "Octubre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-10-01' and '".$anio_ant."-10-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-11-01' and '".$anio_ant."-11-30'");
if($select_ant)
{
    $titulo_ant[] = "Noviembre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-11-01' and '".$anio_ant."-11-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

$select_ant = mysqli_query($link, "select id from test_general where fecha between '".$anio_ant."-12-01' and '".$anio_ant."-12-31'");
if($select_ant)
{
    $titulo_ant[] = "Diciembre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_ant."-12-01' and '".$anio_ant."-12-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_ant[] = $arr['id'];
            }
        }
}
else { $titulo_ant[] = ""; }

/*Año Actual*/

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-01-01' and '".$anio_actual."-01-31'");
   if($select_actual)
   {
       $titulo_actual[] = "Enero";
       $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-01-01' and '".$anio_actual."-01-31'");
           $row = mysqli_num_rows($select);
           if($row > 0)
           {
               while($arr = mysqli_fetch_array($select))
               {
                   $data_actual[] = $arr['id'];
               }
           }
   }
   else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-02-01' and '".$anio_actual."-02-29'");
if($select_actual)
{
    $titulo_actual[] = "Febrero";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-02-01' and '".$anio_actual."-02-29'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-03-01' and '".$anio_actual."-03-31'");
if($select_actual)
{
    $titulo_actual[] = "Marzo";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-03-01' and '".$anio_actual."-03-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-04-01' and '".$anio_actual."-04-30'");
if($select_actual)
{
    $titulo_actual[] = "Abril";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-04-01' and '".$anio_actual."-04-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-05-01' and '".$anio_actual."-05-31'");
if($select_actual)
{
    $titulo_actual[] = "Mayo";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-05-01' and '".$anio_actual."-05-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-06-01' and '".$anio_actual."-06-30'");
if($select_actual)
{
    $titulo_actual[] = "Junio";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-06-01' and '".$anio_actual."-06-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-07-01' and '".$anio_actual."-07-31'");
if($select_actual)
{
    $titulo_actual[] = "Julio";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-07-01' and '".$anio_actual."-07-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-08-01' and '".$anio_actual."-08-30'");
if($select_actual)
{
    $titulo_actual[] = "Agosto";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-08-01' and '".$anio_actual."-08-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-09-01' and '".$anio_actual."-09-30'");
if($select_actual)
{
    $titulo_actual[] = "Septiembre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-09-01' and '".$anio_actual."-09-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-10-01' and '".$anio_actual."-10-31'");
if($select_actual)
{
    $titulo_actual[] = "Octubre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-10-01' and '".$anio_actual."-10-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-11-01' and '".$anio_actual."-11-30'");
if($select_actual)
{
    $titulo_actual[] = "Noviembre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-11-01' and '".$anio_actual."-11-30'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }

$select_actual = mysqli_query($link, "select id from test_general where fecha between '".$anio_actual."-12-01' and '".$anio_actual."-12-31'");
if($select_actual)
{
    $titulo_actual[] = "Diciembre";
    $select = mysqli_query($link, "select count(id) as id from test_general where fecha between '".$anio_actual."-12-01' and '".$anio_actual."-12-31'");
        $row = mysqli_num_rows($select);
        if($row > 0)
        {
            while($arr = mysqli_fetch_array($select))
            {
                $data_actual[] = $arr['id'];
            }
        }
}
else { $titulo_actual[] = ""; }
    ?>
<script>
$(function () {
        $('#grafica_estudios').highcharts({
            chart: {
                    type: 'line'
            },
            title: {
                text: 'Gráfica de cantidad de estudios'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Ago', 'Sept', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Estudios'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} estudios</b></td></tr>',
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
                    echo "{";
                        echo "name: '".$anio_ant."', ";
                        echo "data: [";
                        $n = count($titulo_ant);
                        $i = 0;
                        while($i < $n)
                        {   
                            echo $data_ant[$i].",";
                            //echo "color: '#ccc'";
                            $i++;
                        }
                        echo "]";
                    echo "},";
                    
                    echo "{";
                        echo "name: '".$anio_actual."', ";
                        echo "data: [";
                        $n = count($titulo_actual);
                        $i = 0;
                        while($i < $n)
                        {   
                            echo $data_actual[$i].",";
                            //echo "color: '#ccc'";
                            $i++;
                        }
                        echo "]";
                    echo "},";
                    
                 ?>
			]
        });
    });
    </script>