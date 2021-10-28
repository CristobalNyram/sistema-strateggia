<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['nombre']))
{
	$tipo = $_SESSION['tipo'];
}
else
{
	 header("Location: index.php"); 
}

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

$select_mes = mysqli_query($link, "SELECT distinct(empresa) as empresa FROM test_general where fecha between '$fecha_ini' and '$fecha_final'");
$row = mysqli_num_rows($select_mes);
if($row > 0)
{
    while($arr = mysqli_fetch_array($select_mes))
    {
       
        $empresa = $arr['empresa'];
        

        $titulo_mes[] = $empresa;

        $select2 = mysqli_query($link, "select count(id) as id from test_general where empresa = '$empresa'");
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

<table class="table table-hover table-dynamic table-tools">
    <thead>
        <tr>
            <th class='text-center'>Mes</th>
            <th class='text-center'>Cantidad de Estudios</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $n = count($titulo_mes);
        $i = 0;
        while($i < $n)
        {   
            echo "<tr>";
            echo "<td style='text-align: center;'>$titulo_mes[$i]</td>";
            echo "<td style='text-align: center;'>$m3l[$i]</td>";
            echo "</tr>";
            $i++;
        }
        ?>
        
        
    </tbody>
</table>
                                                