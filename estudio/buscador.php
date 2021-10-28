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

if(isset($_POST['nombre'])) {$nombre = $_POST['nombre']; $nombre2 = "and nombre = '$nombre'";} else { $nombre = 0; $nombre2 = ""; }
if(isset($_POST['apellidop'])) {$apellidop = $_POST['apellidop']; $apellidop2 = "and apellidop = '$apellidop'";} else { $apellidop = 0; $apellidop2 = ""; }
if(isset($_POST['apellidom'])) {$apellidom = $_POST['apellidom']; $apellidom2 = "and apellidom = '$apellidom'";} else { $apellidom = 0; $apellidom2 = ""; }


if($user != "")
{   $user2 = "and user = '$user'";  }
else { $user2 = ""; }

if($estado != "")
{   $estado2 = "and estado = '$estado'";  }
else { $estado2 = ""; }

if($nombre != "")
{   $nombre2 = "and nombre = '$nombre'";  }
else { $nombre2 = ""; }

if($apellidop != "")
{   $apellidop2 = "and apellidop = '$apellidop'";  }
else { $apellidop2 = ""; }

if($apellidom != "")
{   $apellidom2 = "and apellidom = '$apellidom'";  }
else { $apellidom2 = ""; }


$explode = explode("/",$fecha_ini);
$fecha_ini = $explode[2]."-".$explode[1]."-".$explode[0];

$explode = explode("/",$fecha_final);
$fecha_final = $explode[2]."-".$explode[1]."-".$explode[0];

?>

<table class="table table-hover table-dynamic table-tools">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th class='text-center'>Agente</th>
            <th class='text-center'>Fecha</th>
            <th class='text-center'>Nombre</th>
            <th class='text-center'>Apellido Paterno</th>
            <th class='text-center'>Apellido Materno</th>
            <th class='text-center'>Empresa</th>
            <?php
                if($tipo === "admin")
                {
            ?>
            <th class='text-center'>Pago Agente</th>
            <th class='text-center'>Pago Cliente</th>
            <?php
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            //echo "select * from test_general where fecha between '$fecha_ini' and '$fecha_final' $estado2 $user2";
            $select = mysqli_query($link, "select * from test_general where fecha between '$fecha_ini' and '$fecha_final' $estado2 $nombre2 $apellidop2 $apellidom2 $user2");
            $row = mysqli_num_rows($select);
            if($row > 0)
            {
                while($arr = mysqli_fetch_array($select))
                {
                    $id             = $arr['id'];
                    $user           = $arr['user'];
                    $fecha          = $arr['fecha'];
                    $fecha          = date("d-m-Y",strtotime($fecha));
                    $nombre         = $arr['nombre'];
                    $apellidop      = $arr['apellidop'];
                    $apellidom      = $arr['apellidom'];
                    $empresa        = $arr['empresa'];
                    
                    $pago_agente    = $arr['pago_agente'];
                    $pago_cliente   = $arr['pago_cliente'];
                    
                    $id2 = base64_encode($id);
        ?>
        <tr>
            <td style='text-align: center;'><a class='btn btn-primary' href="estudio.php?id='<?php echo $id2;?>'" target='blank'><i class='fa fa-eye' style='color:#FFF;'/></a></td>
            <td style='text-align: center;'><a class='btn btn-warning' href="   validacion.php?id='<?php echo $id2;?>'" target='blank'><i class='fa fa-edit' style='color:#FFF;'/></a></td>
            <td style='text-align: center;'><?php echo $user; ?></td>
            <td style='text-align: center;'><?php echo $fecha; ?></td>
            <td style='text-align: center;'><?php echo $nombre; ?></td>
            <td style='text-align: center;'><?php echo $apellidop; ?></td>
            <td style='text-align: center;'><?php echo $apellidom; ?></td>
            <td style='text-align: center;'><?php echo $empresa; ?></td>
            <?php
                if($tipo === "admin")
                {
            ?>
            <td style='text-align: center;'>
                <input id="pago_agente" name="pago_agente" type="checkbox" class="switch" <?php if($pago_agente === "si"){ echo 'checked="checked"';} ?> onchange="pago_agente(<?php echo "'$id'"; ?>);">
            </td>
            <td style='text-align: center;'>
                <input id="pago_cliente" name="pago_cliente" type="checkbox" class="switch" <?php if($pago_cliente === "si"){ echo 'checked="checked"';} ?> onchange="pago_cliente(<?php echo "'$id'"; ?>);">
            </td>
            <?php
                }
            ?>
        </tr>
        <?php
                 }
            }
        ?>
    </tbody>
</table>
                                                