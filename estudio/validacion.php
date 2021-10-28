<?php
session_start(); 
include("../link.php");

if(isset($_GET['id']))
{
	$id = base64_decode($_GET['id']);
        $_SESSION['id'] = $id;
        $sesion_tipo = $_SESSION['tipo'];
}
else
{
    header("Location: ../principal.php");
}
$select = mysqli_query($link, "select * from test_general where id = '$id'");
$row = mysqli_num_rows($select);
if($row > 0)
{
    while($arr = mysqli_fetch_array($select))
    {
        $user               = $arr['user'];
        $fecha              = $arr['fecha'];
        $fecha = date('d-m-Y', strtotime($fecha));
        $nombre             = $arr['nombre'];
        $apellidop          = $arr['apellidop'];
        $apellidom          = $arr['apellidom'];
        $empresa            = $arr['empresa'];
        $area               = $arr['area'];
        $puesto             = $arr['puesto'];
        $email              = $arr['email'];
        $dir_calle          = $arr['dir_calle'];
        $dir_num            = $arr['dir_num'];
        $colonia            = $arr['colonia'];
        $estado             = $arr['estado'];
        $municipio          = $arr['municipio'];
        $cp                 = $arr['cp'];
        $telefono           = $arr['telefono'];
        $celular            = $arr['celular'];
        $tiempo_dom_actual  = $arr['tiempo_dom_actual'];
        $tiempo_dom_anterior = $arr['tiempo_dom_anterior'];
        $lugar_nacimiento   = $arr['lugar_nacimiento'];
        $fecha_nacimiento   = $arr['fecha_nacimiento'];
        $fecha_nacimiento   = date("d-m-Y", strtotime($fecha_nacimiento));
        $edad               = $arr['edad'];
        $curp               = $arr['curp'];
        $estado_civil       = $arr['estado_civil'];
        $sexo               = $arr['sexo'];
        $religion           = $arr['religion'];
        $comprobante_dom    = $arr['comprobante_dom'];
        $imss               = $arr['imss'];
        $id_oficial         = $arr['id_oficial'];
        $familiar           = $arr['familiar'];
        $vacante            = $arr['vacante'];
        $dependiente        = $arr['dependiente'];
        $facebook           = $arr['facebook'];
        $deportes           = $arr['deportes'];
        $grupos             = $arr['grupos'];
        
        
    }
}

$select = mysqli_query($link, "select * from test_documentacion where id_general = '$id'");
$row = mysqli_num_rows($select);
if($row > 0)
{
    while($arr = mysqli_fetch_array($select))
    {
        $maps                = $arr['maps'];
        $perfil              = $arr['perfil'];
        
        $docu1               = $arr['docu1'];
        $docu2               = $arr['docu2'];
        $docu3               = $arr['docu3'];
        $docu4               = $arr['docu4'];
        $docu5               = $arr['docu5'];
        $docu6               = $arr['docu6'];
        $docu7               = $arr['docu7'];
        $docu8               = $arr['docu8'];
        $docu9               = $arr['docu9'];
        $docu10              = $arr['docu10'];
        $docu11              = $arr['docu11'];
        $docu12              = $arr['docu12'];
        
        $const1              = $arr['const1'];
        $const2              = $arr['const2'];
        $const3              = $arr['const3'];
        $const4              = $arr['const4'];
        
        $viv1                = $arr['viv1'];
        $viv2                = $arr['viv2'];
        $viv3                = $arr['viv3'];
        $viv4                = $arr['viv4'];
        
        $face1               = $arr['face1'];
        $face2               = $arr['face2'];
        $face3               = $arr['face3'];
        $face4               = $arr['face4'];
        
        $face_comment        = $arr['face_comment'];
        
        $aviso1              = $arr['aviso1'];
        $aviso2              = $arr['aviso2'];
        
    }
}
else
{
        $maps                = "";
        $perfil              = "";
        
        $docu1               = "";
        $docu2               = "";
        $docu3               = "";
        $docu4               = "";
        $docu5               = "";
        $docu6               = "";
        $docu7               = "";
        $docu8               = "";
        $docu9               = "";
        $docu10              = "";
        $docu11              = "";
        $docu12              = "";
        
        $const1              = "";
        $const2              = "";
        $const3              = "";
        $const4              = "";
        
        $viv1                = "";
        $viv2                = "";
        $viv3                = "";
        $viv4                = "";
        
        $face1               = "";
        $face2               = "";
        $face3               = "";
        $face4               = "";
        
        $face_comment        = "";
        
        $aviso1              = "";
        $aviso2              = "";
}
$select = mysqli_query($link, "select * from test_escolar where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $prim_periodo       = $arr['prim_periodo'];
            $prim_nombre        = $arr['prim_nombre'];
            $prim_gob_priv      = $arr['prim_gob_priv'];
            $prim_colonia       = $arr['prim_colonia'];
            $prim_comprobante   = $arr['prim_comprobante'];
            
            $sec_periodo       = $arr['sec_periodo'];
            $sec_nombre        = $arr['sec_nombre'];
            $sec_gob_priv      = $arr['sec_gob_priv'];
            $sec_colonia       = $arr['sec_colonia'];
            $sec_comprobante   = $arr['sec_comprobante'];

            $prep_periodo       = $arr['prep_periodo'];
            $prep_nombre        = $arr['prep_nombre'];
            $prep_gob_priv      = $arr['prep_gob_priv'];
            $prep_colonia       = $arr['prep_colonia'];
            $prep_comprobante   = $arr['prep_comprobante'];
            
            $tec_periodo       = $arr['tec_periodo'];
            $tec_nombre        = $arr['tec_nombre'];
            $tec_gob_priv      = $arr['tec_gob_priv'];
            $tec_colonia       = $arr['tec_colonia'];
            $tec_comprobante   = $arr['tec_comprobante'];
            
            $pro_periodo       = $arr['pro_periodo'];
            $pro_nombre        = $arr['pro_nombre'];
            $pro_gob_priv      = $arr['pro_gob_priv'];
            $pro_colonia       = $arr['pro_colonia'];
            $pro_comprobante   = $arr['pro_comprobante'];
            
            $ma_periodo       = $arr['ma_periodo'];
            $ma_nombre        = $arr['ma_nombre'];
            $ma_gob_priv      = $arr['ma_gob_priv'];
            $ma_colonia       = $arr['ma_colonia'];
            $ma_comprobante   = $arr['ma_comprobante'];
            
            $dip_periodo       = $arr['dip_periodo'];
            $dip_nombre        = $arr['dip_nombre'];
            $dip_gob_priv      = $arr['dip_gob_priv'];
            $dip_colonia       = $arr['dip_colonia'];
            $dip_comprobante   = $arr['dip_comprobante'];
        }
    }
$select = mysqli_query($link, "select * from test_ingresos where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $ing2_ingreso_pareja       = $arr['ingreso_pareja'];
                $length = strlen($ing2_ingreso_pareja);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_ingreso_pareja = "0".$ing2_ingreso_pareja;
                    $i++;

                }
            
            $ing2_ingreso_renta        = $arr['ingreso_renta'];
                $length = strlen($ing2_ingreso_renta);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_ingreso_renta = "0".$ing2_ingreso_renta;
                    $i++;

                }
            $ing2_ingreso_otros        = $arr['ingreso_otros'];
                $length = strlen($ing2_ingreso_otros);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_ingreso_otros = "0".$ing2_ingreso_otros;
                    $i++;

                }
            $ing2_total_ingresos = $ing2_ingreso_pareja + $ing2_ingreso_renta + $ing2_ingreso_otros;
            
            
            $ing2_alimentacion         = $arr['alimentacion'];
                $length = strlen($ing2_alimentacion);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_alimentacion = "0".$ing2_alimentacion;
                    $i++;

                }
            $ing2_hipoteca             = $arr['hipoteca'];
                $length = strlen($ing2_hipoteca);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_hipoteca = "0".$ing2_hipoteca;
                    $i++;

                }
            $ing2_luz                  = $arr['luz'];
                $length = strlen($ing2_luz);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_luz = "0".$ing2_luz;
                    $i++;

                }
            $ing2_agua                 = $arr['agua'];
                $length = strlen($ing2_agua);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_agua = "0".$ing2_agua;
                    $i++;

                }
            $ing2_gas                  = $arr['gas'];
                $length = strlen($ing2_gas);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_gas = "0".$ing2_gas;
                    $i++;

                }
            $ing2_telefono             = $arr['telefono'];
                $length = strlen($ing2_telefono);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_telefono = "0".$ing2_telefono;
                    $i++;

                }
            $ing2_ropa                 = $arr['ropa'];
                $length = strlen($ing2_ropa);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_ropa = "0".$ing2_ropa;
                    $i++;

                }
            $ing2_transporte           = $arr['transporte'];
                $length = strlen($ing2_transporte);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_transporte = "0".$ing2_transporte;
                    $i++;

                }
            $ing2_escolar              = $arr['escolar'];
                $length = strlen($ing2_escolar);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_escolar = "0".$ing2_escolar;
                    $i++;

                }
            $ing2_medico               = $arr['medico'];
                $length = strlen($ing2_medico);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_medico = "0".$ing2_medico;
                    $i++;

                }
            $ing2_internet             = $arr['internet'];
                $length = strlen($ing2_internet);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_internet = "0".$ing2_internet;
                    $i++;

                }
            $ing2_diversion            = $arr['diversion'];
                $length = strlen($ing2_diversion);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_diversion = "0".$ing2_diversion;
                    $i++;

                }
            $ing2_deudas               = $arr['deudas'];
                $length = strlen($ing2_deudas);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_deudas = "0".$ing2_deudas;
                    $i++;

                }
            $ing2_otros                = $arr['otros'];
                $length = strlen($ing2_otros);
                $length2 = 9 - $length;
                $n = $length2;
                $i = 0;
                while ($i < $n)
                {
                    $ing2_otros = "0".$ing2_otros;
                    $i++;

                }
            
            $ing2_total_egresos = $ing2_alimentacion + $ing2_hipoteca + $ing2_luz + $ing2_agua + $ing2_gas + $ing2_telefono + $ing2_ropa + $ing2_transporte + $ing2_escolar + $ing2_medico + $ing2_internet + $ing2_diversion + $ing2_deudas + $ing2_otros;
            $ing2_saldo = $ing2_total_ingresos - $ing2_total_egresos;
            
        }
    }
$select = mysqli_query($link, "select * from test_estilo where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $est_servicio_medico       = $arr['servicio_medico'];
            $est_alergias             = $arr['alergias'];
            $est_def_vista            = $arr['def_vista'];
            $est_def_oido             = $arr['def_oido'];
            $est_def_fisica           = $arr['def_fisica'];
            $est_int_quirurgica       = $arr['int_quirurgica'];
            $est_accidente            = $arr['accidente'];
            $est_enfermedad           = $arr['enfermedad'];
            $est_vicios               = $arr['vicios'];
            $est_deporte              = $arr['deporte'];
            $est_tiempo_libre         = $arr['tiempo_libre'];
            $est_emergencia           = $arr['emergencia'];            
        }
    }
$select = mysqli_query($link, "select * from test_vivienda where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $viv_nivel                = $arr['nivel'];
            $viv_casa                 = $arr['casa'];
            $viv_casa_pertenece       = $arr['casa_pertenece'];
            $viv_anos_vivir           = $arr['anos_vivir'];
            $viv_personas             = $arr['personas'];
            $viv_personas_quien       = $arr['personas_quien'];
            $viv_decoracion           = $arr['decoracion'];
            $viv_distribucion         = $arr['distribucion'];
            $viv_colonia              = $arr['colonia'];
            $viv_calles               = $arr['calles'];           
        }
    }
$select = mysqli_query($link, "select * from test_referencia where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $ref1_nombre              = $arr['ref1_nombre'];
            $ref1_telefono            = $arr['ref1_telefono'];
            $ref1_tiempo              = $arr['ref1_tiempo'];
            $ref1_referencia          = $arr['ref1_referencia'];
            
            $ref2_nombre              = $arr['ref2_nombre'];
            $ref2_telefono            = $arr['ref2_telefono'];
            $ref2_tiempo              = $arr['ref2_tiempo'];
            $ref2_referencia          = $arr['ref2_referencia'];
            
            $ref3_nombre              = $arr['ref3_nombre'];
            $ref3_tiempo              = $arr['ref3_tiempo'];
            $ref3_comentario          = $arr['ref3_comentario'];
                  
        }
    }

$select = mysqli_query($link, "select * from test_laboral2 where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $lab2_comentario            = $arr['comentario'];
            $lab2_empresa               = $arr['empresa'];
            $lab2_fecha                 = $arr['fecha'];
            if($lab2_fecha === "0000-00-00" || $lab2_fecha === "1969-12-31") { $lab2_fecha = ""; } else { $lab2_fecha = date("d-m-Y", strtotime($lab2_fecha)); }
            
            $lab2_opinion_sindicato     = $arr['opinion_sindicato'];
            
            $lab2_sindicarse            = $arr['sindicarse'];
            $lab2_sindicalizado         = $arr['sindicalizado'];
            $lab2_querer_sindicalizarse = $arr['querer_sindicalizarse'];
        }
    }
 
$select = mysqli_query($link,"select * from test_evaluacion where id_general = '$id'");
$row = mysqli_num_rows($select);
if($row > 0)
{
    while($arr = mysqli_fetch_array($select))
    {
        $eval_a                 = $arr['eval_a'];
        $eval_b                 = $arr['eval_b'];
        $eval_c                 = $arr['eval_c'];
        $eval_d                 = $arr['eval_d'];
        $eval_e                 = $arr['eval_e'];
        $eval_f                 = $arr['eval_f'];
        $eval_g                 = $arr['eval_g'];
        $eval_h                 = $arr['eval_h'];
        $eval_i                 = $arr['eval_i'];
        $eval_obs               = $arr['eval_obs'];
        $eval_recomendable      = $arr['eval_recomendable'];
    }
}
else
{
        $eval_a                 = 0;
        $eval_b                 = 0;
        $eval_c                 = 0;
        $eval_d                 = 0;
        $eval_e                 = 0;
        $eval_f                 = 0;
        $eval_g                 = 0;
        $eval_h                 = 0;
        $eval_i                 = 0;
        $eval_obs               = "";
        $eval_recomendable      = "";
    
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Strateggia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
	<link rel="shortcut icon" href="../imagenes/logo.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="../assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/plugins.min.css" rel="stylesheet">
    <link href="../assets/css/style.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="../assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="../assets/plugins/metrojs/metrojs.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="../assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-page="login">
    <!-- BEGIN TOP MENU -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#FFF;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only"></span>
                    <span class="icon-bar" style="background-color:#4e545a;"></span>
                    <span class="icon-bar" style="background-color:#4e545a;"></span>
                    <span class="icon-bar" style="background-color:#4e545a;"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="../principal.php">
                    <img src="../imagenes/logo.png" alt="logo" width="79" height="26">
                </a>
            </div>
            <div class="navbar-center"></div>
            
        </div>
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <?php
                    if($sesion_tipo!="admin")
                    {
                    ?>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                        </li>
                        <li>
                        <a href="buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                        </li>
                        <li>
                            <a href="../index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                        </li>
                    </ul>
                    <?php

                    }
                    else
                    {
                    ?>
                    <ul class="sidebar-nav">
                        <li class="current">
                            <a href="../principal.php"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="../agregar_usuario.php"><i class="fa fa-user"></i><span class="sidebar-text">Usuarios </span></a>
                        </li>
                        <li>
                            <a href="nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                        </li>
                        <li>
                            <a href="buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-bar-chart-o"></i><span class="sidebar-text">Indicadores</span></a>
                        </li>
                        <li>
                            <a href="../index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="row">
                    <form id="form" name="form" method="post" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3><strong>Estudio sociolaboral <?php echo $id; ?></strong></h3>
                                </div>
                            </div>
                            <!-- DATOS PERSONALES -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Datos Personales</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="nombre" id="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Apellido paterno</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="apellidop" id="apellidop" type="text" class="form-control" value="<?php echo $apellidop; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Apellido materno</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="apellidom" id="apellidom" type="text" class="form-control" value="<?php echo $apellidom; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Empresa</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="empresa" id="empresa" type="text" class="form-control" value="<?php echo $empresa; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Área</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="area" id="area" type="text" class="form-control" value="<?php echo $area; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Puesto</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="puesto" id="puesto" type="text" class="form-control" value="<?php echo $puesto; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>E-mail</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="email" id="email" type="text" class="form-control" value="<?php echo $email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Dirección</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="dir_calle" id="dir_calle" type="text" class="form-control" value="<?php echo $dir_calle; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Número de casa</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="dir_num" id="dir_num" type="text" class="form-control" value="<?php echo $dir_num; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Colonia</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="colonia" id="colonia" type="text" class="form-control" value="<?php echo $colonia; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>CP</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="cp" id="cp" type="text" class="form-control decimal-inputmask" maxlength="5" value="<?php echo $cp; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Estado</strong>
                                                </label>
                                                <div class="controls">
                                                     <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                             <?php
                                                             $select = mysqli_query($link, "select * from estados order by id asc");
                                                                 $row = mysqli_num_rows($select);
                                                                 if($row > 0)
                                                                 {
                                                                     while($arr = mysqli_fetch_array($select))
                                                                     {
                                                                         $id2     = $arr['id'];
                                                                         $estado2 = $arr['estado'];
                                                                         
                                                                         if($id2 == $estado)
                                                                         {
                                                                             echo "<option value='$id2' selected='selected'>$estado2</option>";
                                                                         }
                                                                         else
                                                                         {
                                                                             echo "<option value='$id2'>$estado2</option>";
                                                                         }
                                                                         
                                                                     }
                                                                 }
                                                             ?>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                               <label class="form-label">
                                                   <strong>Municipio</strong>
                                               </label>
                                               <div class="controls">
                                                    <select id="municipio" name="municipio" class="form-control" value="<?php echo $municipio;?>">
                                                        <?php
                                                             $select = mysqli_query($link, "select * from municipios order by id asc");
                                                                 $row = mysqli_num_rows($select);
                                                                 if($row > 0)
                                                                 {
                                                                     while($arr = mysqli_fetch_array($select))
                                                                     {
                                                                         $id3           = $arr['id'];
                                                                         $id_edo        = $arr['id_edo'];
                                                                         $municipio2    = $arr['municipio'];
                                                                         
                                                                         if($id3 == $municipio && $id_edo == $estado)
                                                                         {
                                                                             echo "<option value='$id3' selected='selected'>$municipio2</option>";
                                                                         }
                                                                         else
                                                                         {
                                                                             echo "<option value='$id3'>$municipio2</option>";
                                                                         }
                                                                         
                                                                     }
                                                                 }
                                                             ?>
                                                    </select>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Teléfono</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="telefono" id="telefono" type="text" class="form-control phone-inputmask" value="<?php echo $telefono;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Celular</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="celular" id="celular" type="text" class="form-control phone-inputmask" value="<?php echo $celular;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Fecha de nacimiento</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="fecha_nacimiento" id="fecha_nacimiento" type="text" class="form-control" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento;?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Lugar de nacimiento</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="lugar_nacimiento" id="lugar_nacimiento" type="text" class="form-control" name="lugar_nacimiento" value="<?php echo $lugar_nacimiento;?>" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Tiempo de Radicar en el Domicilio actual</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="tiempo_dom_actual" id="tiempo_dom_actual" type="text" class="form-control" value="<?php echo $tiempo_dom_actual;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Tiempo de Radicar en el Domicilio anterior</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="tiempo_dom_anterior" id="tiempo_dom_anterior" type="text" class="form-control" value="<?php echo $tiempo_dom_anterior;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Edad</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="edad" id="edad" type="text" class="form-control age-inputmask" maxlength="2" value="<?php echo $edad;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>CURP</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="curp" id="curp" type="text" class="form-control" value="<?php echo $curp;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Estado civil</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="estado_civil" name="estado_civil" class="form-control">
                                                        <option value="Soltero/a" <?php if($estado_civil === "Soltero/a") { echo "selected = 'selected'"; } ?>>Soltero/a</option>
                                                        <option value="Casado/a" <?php if($estado_civil === "Casado/a") { echo "selected = 'selected'"; } ?>>Casado/a</option>
                                                        <option value="Viudo/a" <?php if($estado_civil === "Viudo/a") { echo "selected = 'selected'"; } ?>>Viudo/a</option>
                                                        <option value="Divorciado/a" <?php if($estado_civil === "Divorciado/a") { echo "selected = 'selected'"; } ?>>Divorciado/a</option>
                                                        <option value="Unión libre" <?php if($estado_civil === "Unión libre") { echo "selected = 'selected'"; } ?>>Unión libre</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Sexo</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="sexo" name="sexo" class="form-control">
                                                        <option value="Masculino" <?php if($sexo === "Masculino") { echo "selected = 'selected'"; } ?>>Masculino</option>
                                                        <option value="Femenino" <?php if($sexo === "Femenino") { echo "selected = 'selected'"; } ?>>Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Religion</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="religion" id="religion" type="text" class="form-control" value="<?php echo $religion;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Comprobante domicilio presentado</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="comprobante_dom" id="comprobante_dom" type="text" class="form-control" value="<?php echo $comprobante_dom;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>IMSS</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="imss" id="imss" type="text" class="form-control" value="<?php echo $imss;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>ID Oficial</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="id_oficial" id="id_oficial" type="text" class="form-control" value="<?php echo $id_oficial;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Labora algún familiar en la Empresa?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="familiar" name="familiar" class="form-control"">
                                                        <option value="" selected="selected">&nbsp;</option>
                                                        <option value="Si" <?php if($familiar === "Si") { echo "selected = 'selected'"; } ?>>Si</option>
                                                        <option value="No" <?php if($familiar === "No") { echo "selected = 'selected'"; } ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Cómo se enteró de la vacante?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="vacante" id="vacante" type="text" class="form-control" value="<?php echo $vacante;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Dependientes Economicos</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="dependiente" name="dependiente" class="form-control"">
                                                        <option value="" selected="selected">&nbsp;</option>
                                                        <option value="1" <?php if($dependiente === "1") { echo "selected = 'selected'"; } ?>>1</option>
                                                        <option value="2" <?php if($dependiente === "2") { echo "selected = 'selected'"; } ?>>2</option>
                                                        <option value="3" <?php if($dependiente === "3") { echo "selected = 'selected'"; } ?>>3</option>
                                                        <option value="4" <?php if($dependiente === "4") { echo "selected = 'selected'"; } ?>>4</option>
                                                        <option value="5" <?php if($dependiente === "5") { echo "selected = 'selected'"; } ?>>5</option>
                                                        <option value="6" <?php if($dependiente === "6") { echo "selected = 'selected'"; } ?>>6</option>
                                                        <option value="7" <?php if($dependiente === "7") { echo "selected = 'selected'"; } ?>>7</option>
                                                        <option value="8" <?php if($dependiente === "8") { echo "selected = 'selected'"; } ?>>8</option>
                                                        <option value="9" <?php if($dependiente === "9") { echo "selected = 'selected'"; } ?>>9</option>
                                                        <option value="10" <?php if($dependiente === "10") { echo "selected = 'selected'"; } ?>>10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                
                                                <label class="form-label">
                                                <a class="fa fa-facebook-square" href="#"></a><strong>ID Facebook</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="facebook" id="facebook" type="text" class="form-control" value="<?php echo $facebook;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Deportes, Aficiones y Entretenimiento</strong>
                                                </label>
                                                <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"><?php echo $deportes;?></textarea>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Asociaciones o grupos a los que pertenece</strong>
                                                </label>
                                                <div class="controls" >
                                                    <textarea id="grupos" name="grupos" class="form-control" rows="3" style="border-radius: 0.5em;"><?php echo $grupos;?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- DATOS ESCOLARES -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Datos Escolares</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                <table class="table table-hover table-dynamic table-tools">
                                                    <thead>
                                                        <tr>
                                                            <th class='text-center'>Nivel</th>
                                                            <th class='text-center'>Periodo</th>
                                                            <th class='text-center'>Nombre Institución</th>
                                                            <th class='text-center'>Tipo</th>
                                                            <th class='text-center'>Colonia</th>
                                                            <th class='text-center'>Comprobante</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style='text-align: center;'>Primaria</td>
                                                            <td style='text-align: center;'><input name="prim_periodo" id="prim_periodo" type="text" class="form-control" value="<?php echo $prim_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="prim_nombre" id="prim_nombre" type="text" class="form-control" value="<?php echo $prim_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="prim_gob_priv" name="prim_gob_priv" class="form-control"">
                                                                    <option value="" <?php if($prim_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($prim_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($prim_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="prim_colonia" id="prim_colonia" type="text" class="form-control" value="<?php echo $prim_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="prim_comprobante" id="prim_comprobante" type="text" class="form-control" value="<?php echo $prim_comprobante ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Secundaria</td>
                                                            <td style='text-align: center;'><input name="sec_periodo" id="sec_periodo" type="text" class="form-control" value="<?php echo $sec_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="sec_nombre" id="sec_nombre" type="text" class="form-control" value="<?php echo $sec_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="sec_gob_priv" name="sec_gob_priv" class="form-control"">
                                                                    <option value="" <?php if($sec_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($sec_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($sec_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="sec_colonia" id="sec_colonia" type="text" class="form-control" value="<?php echo $sec_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="sec_comprobante" id="sec_comprobante" type="text" class="form-control" value="<?php echo $sec_comprobante ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Preparatoria / Bachiller</td>
                                                            <td style='text-align: center;'><input name="prep_periodo" id="prep_periodo" type="text" class="form-control" value="<?php echo $prep_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="prep_nombre" id="prep_nombre" type="text" class="form-control" value="<?php echo $prep_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="prep_gob_priv" name="prep_gob_priv" class="form-control"">
                                                                    <option value="" <?php if($prep_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($prep_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($prep_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="prep_colonia" id="prep_colonia" type="text" class="form-control" value="<?php echo $prep_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="prep_comprobante" id="prep_comprobante" type="text" class="form-control" value="<?php echo $prep_comprobante ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Técnica</td>
                                                            <td style='text-align: center;'><input name="tec_periodo" id="tec_periodo" type="text" class="form-control" value="<?php echo $tec_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="tec_nombre" id="tec_nombre" type="text" class="form-control" value="<?php echo $tec_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="tec_gob_priv" name="tec_gob_priv" class="form-control"">
                                                                    <option value="" <?php if($tec_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($tec_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($tec_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="tec_colonia" id="tec_colonia" type="text" class="form-control" value="<?php echo $tec_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="tec_comprobante" id="tec_comprobante" type="text" class="form-control" value="<?php echo $tec_comprobante ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Profesional</td>
                                                            <td style='text-align: center;'><input name="pro_periodo" id="pro_periodo" type="text" class="form-control" value="<?php echo $pro_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="pro_nombre" id="pro_nombre" type="text" class="form-control" value="<?php echo $pro_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="pro_gob_priv" name="pro_gob_priv" class="form-control"">
                                                                    <option value="" <?php if($pro_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($pro_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($pro_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="pro_colonia" id="pro_colonia" type="text" class="form-control" value="<?php echo $pro_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="pro_comprobante" id="pro_comprobante" type="text" class="form-control" value="<?php echo $pro_comprobante ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Maestría</td>
                                                            <td style='text-align: center;'><input name="ma_periodo" id="ma_periodo" type="text" class="form-control" value="<?php echo $ma_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="ma_nombre" id="ma_nombre" type="text" class="form-control" value="<?php echo $ma_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="ma_gob_priv" name="ma_gob_priv" class="form-control"">
                                                                    <option value="" <?php if($ma_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($ma_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($ma_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="ma_colonia" id="ma_colonia" type="text" class="form-control" value="<?php echo $ma_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="ma_comprobante" id="ma_comprobante" type="text" class="form-control" value="<?php echo $ma_comprobante ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Cursos o Diplomados</td>
                                                            <td style='text-align: center;'><input name="dip_periodo" id="dip_periodo" type="text" class="form-control" value="<?php echo $dip_periodo ?>"></td>
                                                            <td style='text-align: center;'><input name="dip_nombre" id="dip_nombre" type="text" class="form-control" value="<?php echo $dip_nombre ?>"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="dip_gob_priv" name="dip_gob_priv" class="form-control">
                                                                    <option value="" <?php if($dip_gob_priv === "") { echo "selected = 'selected'"; } ?>></option>
                                                                    <option value="gobierno" <?php if($dip_gob_priv === "gobierno") { echo "selected = 'selected'"; } ?>>Gobierno</option>
                                                                    <option value="privada" <?php if($dip_gob_priv === "privada") { echo "selected = 'selected'"; } ?>>Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="dip_colonia" id="dip_colonia" type="text" class="form-control" value="<?php echo $dip_colonia ?>"></td>
                                                            <td style='text-align: center;'><input name="dip_comprobante" id="dip_comprobante" type="text" class="form-control" value="<?php echo $dip_comprobante ?>"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ENTORNO FAMILIAR -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Entorno familiar</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                <h4>Familiares Directos que <strong style="color:#c75757;">NO viven</strong> con el Candidato</h4>
                                                <table class="table table-hover table-dynamic table-tools">
                                                    <thead>
                                                        <tr>
                                                            <th class='text-center'>Nombre</th>
                                                            <th class='text-center'>Parentesco</th>
                                                            <th class='text-center'>Teléfono</th>
                                                            <th class='text-center'>Edad</th>
                                                            <th class='text-center'>Sexo</th>
                                                            <th class='text-center'>Edo Civil</th>
                                                            <th class='text-center'>Nivel Escolar</th>
                                                            <th class='text-center'>Ocupación</th>
                                                            <th class='text-center'>Empresa / Escuela</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $select = mysqli_query($link, "select * from test_familiar where id_general = '$id' and ingreso is null order by id asc");
                                                            $i = 1;
                                                            $row = mysqli_num_rows($select);
                                                            if($row > 0)
                                                            {
                                                                while($arr = mysqli_fetch_array($select))
                                                                {
                                                                    $no_id         = $arr['id'];
                                                                    $no_viven      = $arr['viven'];
                                                                    $no_nombre     = $arr['nombre'];
                                                                    $no_parentesco = $arr['parentesco'];
                                                                    $no_telefono   = $arr['telefono'];
                                                                    $no_edad       = $arr['edad'];
                                                                    $no_sexo       = $arr['sexo'];
                                                                    $no_estado     = $arr['estado'];
                                                                    $no_nivel      = $arr['nivel'];
                                                                    $no_ocupacion  = $arr['ocupacion'];
                                                                    $no_empresa    = $arr['empresa'];
                                                                    $no_ingreso    = $arr['ingreso'];

                                                                            echo "<tr>";
                                                                                
                                                                                echo "<input type='hidden' name = 'no_id[]' id = 'no_id$i' value ='$no_id'>";
                                                                                echo "<td style='text-align: center;'><input name='no_nombre[]' id='no_nombre$i' type='text' class='form-control' value='$no_nombre'></td>";
                                                                                echo "<td style='text-align: center;'><input name='no_parentesco[]' id='no_parentesco$i' type='text' class='form-control' value='$no_parentesco'></td>";
                                                                                echo "<td style='text-align: center;'><input name='no_telefono[]' id='no_telefono$i' type='text' class='form-control phone-inputmask' value='$no_telefono'></td>";
                                                                                echo "<td style='text-align: center;'><input name='no_edad[]' id='no_edad$i' type='text' class='form-control' value='$no_edad'></td>";
                                                                                echo "<td style='text-align: center;'><select name='no_sexo[]' id='no_sexo$i' class='form-control'>";
                                                                                    echo "<option value='Masculino'";
                                                                                        if($no_sexo === 'Masculino') { echo "selected = 'selected'"; }
                                                                                    echo ">Masculino</option>";
                                                                                    echo "<option value='Femenino'";
                                                                                        if($no_sexo === 'Femenino') { echo "selected = 'selected'"; }
                                                                                    echo ">Femenino</option>";
                                                                                echo "</select> </td>";
                                                                                echo "<td style='text-align: center;'> <select name='no_estado[]' id='no_estado$i' class='form-control'>";
                                                                                    echo "<option value='Soltero/a'";
                                                                                        if($no_estado === 'Soltero/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Soltero/a</option>";
                                                                                    echo "<option value='Casado/a'";
                                                                                        if($no_estado === 'Casado/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Casado/a</option>";
                                                                                    echo "<option value='Viudo/a'";
                                                                                        if($no_estado === 'Viudo/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Viudo/a</option>";
                                                                                    echo "<option value='Divorciado/a'";
                                                                                        if($no_estado === 'Divorciado/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Divorciado/a</option>";
                                                                                    echo "<option value='Unión libre'";
                                                                                        if($no_estado === 'Unión libre') { echo "selected = 'selected'"; }
                                                                                    echo ">Unión libre</option>";
                                                                                echo "</select> </td>";
                                                                                echo "<td style='text-align: center;'> <select name='no_nivel[]' id='no_nivel$i' class='form-control'>";
                                                                                    echo "<option value='Sin escolaridad'";
                                                                                        if($no_nivel=== 'Sin escolaridad') { echo "selected = 'selected'"; }
                                                                                    echo ">Sin escolaridad</option>";
                                                                                    echo "<option value='Primaria'";
                                                                                        if($no_nivel=== 'Primaria') { echo "selected = 'selected'"; }
                                                                                    echo ">Primaria</option>";
                                                                                    echo "<option value='Secundaria'";
                                                                                        if($no_nivel === 'Secundaria') { echo "selected = 'selected'"; }
                                                                                    echo ">Secundaria</option>";
                                                                                    echo "<option value='Preparatoria'";
                                                                                        if($no_nivel === 'Preparatoria') { echo "selected = 'selected'"; }
                                                                                    echo ">Preparatoria</option>";
                                                                                    echo "<option value='Técnico'";
                                                                                        if($no_nivel === 'Técnico') { echo "selected = 'selected'"; }
                                                                                    echo ">Técnico</option>";
                                                                                    echo "<option value='Profesional'";
                                                                                        if($no_nivel === 'Profesional') { echo "selected = 'selected'"; }
                                                                                    echo ">Profesional</option>";
                                                                                    echo "<option value='Maestría'";
                                                                                        if($no_nivel === 'Maestría') { echo "selected = 'selected'"; }
                                                                                    echo ">Maestría</option>";
                                                                                    echo "<option value='Doctorado'";
                                                                                        if($no_nivel === 'Doctorado') { echo "selected = 'selected'"; }
                                                                                    echo ">Doctorado</option>";
                                                                                echo "</select> </td>";
                                                                                echo "<td style='text-align: center;'><input name='no_ocupacion[]' id='no_ocupacion$i' type='text' class='form-control' value='$no_ocupacion'></td>";
                                                                                echo "<td style='text-align: center;'><input name='no_empresa[]' id='no_empresa$i' type='text' class='form-control' value='$no_empresa'></td>";
                                                                                
                                                                            echo "</tr>";
                                                                            $i++;
                                                                }
                                                            }
                                                            ?>
                                                    </tbody>
                                                </table>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                <h4>Familiares Directos que <strong style='color:#00b894;'>SI viven</strong> con el candidato</h4>
                                                <table class="table table-hover table-dynamic table-tools">
                                                    <thead>
                                                        <tr>
                                                            <th class='text-center'>Nombre</th>
                                                            <th class='text-center'>Parentesco</th>
                                                            <th class='text-center'>Teléfono</th>
                                                            <th class='text-center'>Edad</th>
                                                            <th class='text-center'>Sexo</th>
                                                            <th class='text-center'>Edo Civil</th>
                                                            <th class='text-center'>Nivel Escolar</th>
                                                            <th class='text-center'>Ocupación</th>
                                                            <th class='text-center'>Ingreso Mensual</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $select = mysqli_query($link, "select * from test_familiar where id_general = '$id' and empresa is null order by id asc");
                                                            $i = 1;
                                                            $row = mysqli_num_rows($select);
                                                            if($row > 0)
                                                            {
                                                                while($arr = mysqli_fetch_array($select))
                                                                {
                                                                    $si_id         = $arr['id'];
                                                                    $si_viven      = $arr['viven'];
                                                                    $si_nombre     = $arr['nombre'];
                                                                    $si_parentesco = $arr['parentesco'];
                                                                    $si_telefono   = $arr['telefono'];
                                                                    $si_edad       = $arr['edad'];
                                                                    $si_sexo       = $arr['sexo'];
                                                                    $si_estado     = $arr['estado'];
                                                                    $si_nivel      = $arr['nivel'];
                                                                    $si_ocupacion  = $arr['ocupacion'];
                                                                    $si_empresa    = $arr['empresa'];
                                                                    $si_ingreso    = $arr['ingreso'];
                                                                        $length = strlen($si_ingreso);
                                                                        $length2 = 9 - $length;
                                                                        $n = $length2;
                                                                        $a = 0;
                                                                        while ($a < $n)
                                                                        {
                                                                            $si_ingreso = "0".$si_ingreso;
                                                                            $a++;

                                                                        }

                                                                            echo "<tr>";
                                                                            
                                                                                echo "<input type='hidden' name='si_id[]' id='si_id$i' value ='$si_id'>";
                                                                                echo "<td style='text-align: center;'><input name='si_nombre[]' id='si_nombre$i' type='text' class='form-control' value='$si_nombre'></td>";
                                                                                echo "<td style='text-align: center;'><input name='si_parentesco[]' id='si_parentesco$i' type='text' class='form-control' value='$si_parentesco'></td>";
                                                                                echo "<td style='text-align: center;'><input name='si_telefono[]' id='si_telefono$i' type='text' class='form-control phone-inputmask' value='$si_telefono'></td>";
                                                                                echo "<td style='text-align: center;'><input name='si_edad[]' id='si_edad$i' type='text' class='form-control' value='$si_edad'></td>";
                                                                                echo "<td style='text-align: center;'><select name='si_sexo[]' id='si_sexo$i' class='form-control'>";
                                                                                    echo "<option value='Masculino'";
                                                                                        if($si_sexo === 'Masculino') { echo "selected = 'selected'"; }
                                                                                    echo ">Masculino</option>";
                                                                                    echo "<option value='Femenino'";
                                                                                        if($si_sexo === 'Femenino') { echo "selected = 'selected'"; }
                                                                                    echo ">Femenino</option>";
                                                                                echo "</select> </td>";
                                                                                echo "<td style='text-align: center;'> <select name='si_estado[]' id='si_estado$i' class='form-control'>";
                                                                                    echo "<option value='Soltero/a'";
                                                                                        if($si_estado === 'Soltero/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Soltero/a</option>";
                                                                                    echo "<option value='Casado/a'";
                                                                                        if($si_estado === 'Casado/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Casado/a</option>";
                                                                                    echo "<option value='Viudo/a'";
                                                                                        if($si_estado === 'Viudo/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Viudo/a</option>";
                                                                                    echo "<option value='Divorciado/a'";
                                                                                        if($si_estado === 'Divorciado/a') { echo "selected = 'selected'"; }
                                                                                    echo ">Divorciado/a</option>";
                                                                                    echo "<option value='Unión libre'";
                                                                                        if($si_estado === 'Unión libre') { echo "selected = 'selected'"; }
                                                                                    echo ">Unión libre</option>";
                                                                                echo "</select> </td>";
                                                                                echo "<td style='text-align: center;'> <select name='si_nivel[]' id='si_nivel$i' class='form-control'>";
                                                                                    echo "<option value='Primaria'";
                                                                                        if($si_nivel=== 'Primaria') { echo "selected = 'selected'"; }
                                                                                    echo ">Primaria</option>";
                                                                                    echo "<option value='Secundaria'";
                                                                                        if($si_nivel === 'Secundaria') { echo "selected = 'selected'"; }
                                                                                    echo ">Secundaria</option>";
                                                                                    echo "<option value='Preparatoria'";
                                                                                        if($si_nivel === 'Preparatoria') { echo "selected = 'selected'"; }
                                                                                    echo ">Preparatoria</option>";
                                                                                    echo "<option value='Técnico'";
                                                                                        if($si_nivel === 'Técnico') { echo "selected = 'selected'"; }
                                                                                    echo ">Técnico</option>";
                                                                                    echo "<option value='Profesional'";
                                                                                        if($si_nivel === 'Profesional') { echo "selected = 'selected'"; }
                                                                                    echo ">Profesional</option>";
                                                                                    echo "<option value='Maestría'";
                                                                                        if($si_nivel === 'Maestría') { echo "selected = 'selected'"; }
                                                                                    echo ">Maestría</option>";
                                                                                    echo "<option value='Doctorado'";
                                                                                        if($si_nivel === 'Doctorado') { echo "selected = 'selected'"; }
                                                                                    echo ">Doctorado</option>";
                                                                                echo "</select> </td>";
                                                                                echo "<td style='text-align: center;'><input name='si_ocupacion[]' id='si_ocupacion$i' type='text' class='form-control' value='$si_ocupacion'></td>";
                                                                                echo "<td style='text-align: center;'><input name='si_ingreso[]' id='si_ingreso$i' type='text' class='form-control currency-inputmask' value='$si_ingreso'></td>";
                                                                                
                                                                            echo "</tr>";
                                                                            $i++;
                                                                }
                                                            }
                                                            ?>
                                                    </tbody>
                                                </table>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- GASTOS BIENES Y ADEUDOS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Gastos, bienes y adeudos</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <?php
                                        $select = mysqli_query($link, "select * from test_ingresos_familiar where id_general = '$id' and tipo_gral = 'auto' order by id asc");
                                        if($select)
                                        {
                                            echo "<div class='col-md-12 col-sm12 col-xs-12 table-responsive' >";
                                                echo "<h4 class='text-center' style='color: #FFF !important; background-color: #f5a340 !important;'><i class = 'fa fa-truck'></i><strong> Autos</strong></h4>";

                                                echo "<table class='table table-striped table-hover table-dynamic table-tools'>";
                                                    echo "<thead>";
                                                        echo "<tr>";
                                                            echo "<th class='text-center'>Propietario</th>";
                                                            echo "<th class='text-center'>Año</th>";
                                                            echo "<th class='text-center'>Tipo</th>";
                                                            echo "<th class='text-center'>Marca</th>";
                                                        echo "</tr>";
                                                    echo "</thead>";

                                                    echo "<tbody>";
                                                        $row = mysqli_num_rows($select);
                                            if($row > 0)
                                            {
                                                $i=1;
                                                while($arr = mysqli_fetch_array($select))
                                                {

                                                    $auto_id             = $arr['id'];
                                                    $auto_tipo_gral      = $arr['tipo_gral'];
                                                    $auto_propietario    = $arr['propietario'];
                                                    $auto_ano            = $arr['ano'];
                                                    $auto_tipo           = $arr['tipo'];
                                                    $auto_marca          = $arr['marca'];

                                                        echo "<tr>";
                                                            echo "<input type='hidden' name='auto_id[]' id='auto_id$i' value='$auto_id'>";
                                                            echo "<input type='hidden' name='auto_tipo_gral[]' id='auto_tipo_gral$i' value='$auto_tipo_gral'>";
                                                            echo "<td style='text-align: center;'><input name='auto_propietario[]' id='auto_propietario$i' type='text' class='form-control' value='$auto_propietario'></td>";
                                                            echo "<td style='text-align: center;'><input name='auto_ano[]' id='auto_ano$i' type='text' class='form-control year-inputmask' value='$auto_ano'></td>";
                                                            echo "<td style='text-align: center;'><input name='auto_tipo[]' id='auto_tipo$i' type='text' class='form-control' value='$auto_tipo'></td>";
                                                            echo "<td style='text-align: center;'><input name='auto_marca[]' id='auto_marca$i' type='text' class='form-control' value='$auto_marca'></td>";
                                                        echo "</tr>";
                                                $i++;

                                                }
                                            }
                                                    echo "</tbody>";
                                                echo "</table>";
                                            echo "</div>";
                                        }
                                        $select = mysqli_query($link, "select * from test_ingresos_familiar where id_general = '$id' and tipo_gral = 'inmueble' order by id asc");
                                            if($select)
                                            {
                                                echo "<div class='col-md-12 col-sm-12 col-xs-12 table-responsive'>";
                                                    echo "<h4 class='text-center' style='color: #FFF !important; background-color: #f5a340 !important;'><i class = 'fa fa-home'></i><strong> Inmuebles (Casas, Terrenos, propiedades)</strong></h4>";
                                                
                                                    echo "<table class='table table-hover table-dynamic table-tools'>";
                                                        echo "<thead>";
                                                            echo "<tr>";
                                                                echo "<th class='text-center'>Propietario</th>";
                                                                echo "<th class='text-center'>Tipo</th>";
                                                                echo "<th class='text-center'>Valor Comercial</th>";
                                                            echo "</tr>";
                                                        echo "</thead>";                                                                
                                                        echo "<tbody>";
                                                            $row = mysqli_num_rows($select);
                                                            if($row > 0)
                                                            {
                                                                $i=1;
                                                                while($arr = mysqli_fetch_array($select))
                                                                {
                                                                    $inmueble_id                = $arr['id'];
                                                                    $inmueble_tipo_gral         = $arr['tipo_gral'];
                                                                    $inmueble_propietario       = $arr['propietario'];
                                                                    $inmueble_tipo              = $arr['tipo'];
                                                                    $inmueble_valor_comercial   = $arr['valor_comercial'];
                                                                        $length = strlen($inmueble_valor_comercial);
                                                                        $length2 = 10 - $length;
                                                                        $n = $length2;
                                                                        $a = 0;
                                                                        while ($a < $n)
                                                                        {
                                                                            $inmueble_valor_comercial = "0".$inmueble_valor_comercial;
                                                                            $a++;

                                                                        }

                                                                echo "<tr>";
                                                                    echo "<input type='hidden' name='inmueble_id[]' id='inmueble_id$i' value='$inmueble_id'>";
                                                                    echo "<input type='hidden' name='inmueble_tipo_gral[]' id='inmueble_tipo_gral$i' value='$inmueble_tipo_gral'>";
                                                                    echo "<td style='text-align: center;'><input name='inmueble_propietario[]' id='inmueble_propietario$i' type='text' class='form-control' value='$inmueble_propietario'></td>";
                                                                    echo "<td style='text-align: center;'><input name='inmueble_tipo[]' id='inmueble_tipo$i' type='text' class='form-control' value='$inmueble_tipo'></td>";
                                                                    echo "<td style='text-align: center;'><input name='inmueble_valor_comercial[]' id='inmueble_valor_comercial$i' type='text' class='form-control currency-inputmask2' value='$inmueble_valor_comercial'></td>";
                                                                echo "</tr>";
                                                                $i++;
                                                                }
                                                            }
                                                        echo "</tbody>";
                                                    echo "</table>";
                                                echo "</div>";
                                            }
                                        $select = mysqli_query($link, "select * from test_ingresos_familiar where id_general = '$id' and tipo_gral = 'banco' order by id asc");
                                            if($select)
                                            {
                                                echo "<div class='col-md-12 col-sm-12 col-xs-12 table-responsive' style='border:1px solid #dddddd'>";
                                                    echo "<h4 class='text-center' style='color: #FFF !important; background-color: #f5a340 !important;'><i class = 'fa fa-money'></i><strong> Bancos (Inversión, Crédito, Departamental o Débito)</strong></h4>";
                                                    
                                                    echo "<table class='table table-hover table-dynamic table-tools'>";
                                                        echo "<thead>";
                                                            echo "<tr>";
                                                                echo "<th class='text-center'>Titular</th>";
                                                                echo "<th class='text-center'>Tipo</th>";
                                                                echo "<th class='text-center'>Saldo actual</th>";
                                                                echo "<th class='text-center'>Límite</th>";
                                                            echo "</tr>";
                                                        echo "</thead>";

                                                    echo "<tbody>";                     
                                                            $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    $i=1;
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $banco_id                = $arr['id'];
                                                        $banco_tipo_gral         = $arr['tipo_gral'];
                                                        $banco_propietario       = $arr['propietario'];
                                                        $banco_tipo              = $arr['tipo'];
                                                        $banco_saldo_actual      = $arr['saldo_actual'];
                                                            $length = strlen($banco_saldo_actual);
                                                            $length2 = 9 - $length;
                                                            $n = $length2;
                                                            $a = 0;
                                                            while ($a < $n)
                                                            {
                                                                $banco_saldo_actual = "0".$banco_saldo_actual;
                                                                $a++;

                                                            }
                                                        
                                                        $banco_limite      = $arr['limite'];
                                                            $length = strlen($banco_limite);
                                                            $length2 = 9 - $length;
                                                            $n = $length2;
                                                            $a = 0;
                                                            while ($a < $n)
                                                            {
                                                                $banco_limite = "0".$banco_limite;
                                                                $a++;

                                                            }
                                                            echo "<tr>";
                                                                echo "<input type='hidden' name='banco_id[]' id='banco_id$i' value='$banco_id'>";
                                                                echo "<input type='hidden' name='banco_tipo_gral[]' id='banco_tipo_gral$i' value='$banco_tipo_gral'>";
                                                                echo "<td style='text-align: center;'><input name='banco_propietario[]' id='banco_propietario$i' type='text' class='form-control' value='$banco_propietario'></td>";
                                                                echo "<td style='text-align: center;'><input name='banco_tipo[]' id='banco_tipo$i' type='text' class='form-control' value='$banco_tipo'></td>";
                                                                echo "<td style='text-align: center;'><input name='banco_saldo_actual[]' id='banco_saldo_actual$i' type='text' class='form-control currency-inputmask' value='$banco_saldo_actual'></td>";
                                                                echo "<td style='text-align: center;'><input name='banco_limite[]' id='banco_limite$i' type='text' class='form-control currency-inputmask' value='$banco_limite'></td>";
                                                            echo "</tr>";
                                                            $i++;

                                                    }
                                                }
                                                        echo "</tbody>";
                                                    echo "</table>";
                                                echo "</div>";
                                            }
                                    ?>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <h4>Ingresos mensuales</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Pareja/Esposa/Familiares</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_ingreso_pareja" id="ing2_ingreso_pareja" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_ingreso_pareja;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Por rentas</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_ingreso_renta" id="ing2_ingreso_renta" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_ingreso_renta;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Otros ingresos</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_ingreso_otros" id="ing2_ingreso_otros" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_ingreso_otros;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <h4>Gastos mensuales</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Alimentación</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_alimentacion" id="ing2_alimentacion" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_alimentacion;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Pago Renta / Hipoteca</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_hipoteca" id="ing2_hipoteca" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_hipoteca;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Luz</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_luz" id="ing2_luz" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_luz;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Agua</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_agua" id="ing2_agua" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_agua;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Gas</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_gas" id="ing2_gas" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_gas;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Teléfono / Celular</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_telefono" id="ing2_telefono" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_telefono;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Ropa / Calzado</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_ropa" id="ing2_ropa" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_ropa;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Transporte / Gasolina</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_transporte" id="ing2_transporte" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_transporte;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Gastos Escolares</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_escolar" id="ing2_escolar" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_escolar;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Servicio Médico</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_medico" id="ing2_medico" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_medico;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Internet / Cable</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_internet" id="ing2_internet" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_internet;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Diversión (Cine, salidas)</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_diversion" id="ing2_diversion" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_diversion;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Créditos / Deudas</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_deudas" id="ing2_deudas" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_deudas;?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Otros</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ing2_otros" id="ing2_otros" type="text" class="form-control currency-inputmask" value="<?php echo $ing2_otros;?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ESTILO DE VIDA -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Estilo de vida</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Tipo de servicio médico</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_servicio_medico" id="est_servicio_medico" type="text" class="form-control" value="<?php echo "$est_servicio_medico"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Alergias</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_alergias" id="est_alergias" type="text" class="form-control" value="<?php echo "$est_alergias"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Deficiencia en Vista</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_def_vista" id="est_def_vista" type="text" class="form-control" value="<?php echo "$est_def_vista"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Deficiencia en Oído</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_def_oido" id="est_def_oido" type="text" class="form-control" value="<?php echo "$est_def_oido"; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Deficiencia Física</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_def_fisica" id="est_def_fisica" type="text" class="form-control" value="<?php echo "$est_def_fisica"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Ha tenido intervenciones quirúrgicas?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_int_quirurgica" id="est_int_quirurgica" type="text" class="form-control" value="<?php echo "$est_int_quirurgica"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Ha sufrido accidentes?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_accidente" id="est_accidente" type="text" class="form-control" value="<?php echo "$est_accidente"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Enfermedades crónicas o recurrentes</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_enfermedad" id="est_enfermedad" type="text" class="form-control" value="<?php echo "$est_enfermedad"; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Consumo de cigarro o bebidas alcohólicas</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_vicios" id="est_vicios" type="text" class="form-control" value="<?php echo "$est_vicios"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Deporte que practica, Lugar y Frecuencia</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_deporte" id="est_deporte" type="text" class="form-control" value="<?php echo "$est_deporte"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Utilización del Tiempo Libre</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_tiempo_libre" id="est_tiempo_libre" type="text" class="form-control" value="<?php echo "$est_tiempo_libre"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>En caso de emergencia favor de avisar a:</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="est_emergencia" id="est_emergencia" type="text" class="form-control" value="<?php echo "$est_emergencia"; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CONDICIONES DE VIVIENDA Y ECONOMÍA -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Condiciones de vivienda y economía</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nivel Socioeconómico</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_nivel" id="viv_nivel" type="text" class="form-control" value="<?php echo $viv_nivel; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>La Casa Habitación es</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="viv_casa" name="viv_casa" class="form-control">
                                                         <option value="" selected="selected">&nbsp;</option>
                                                         <option value="propia" <?php if($viv_casa === "propia") { echo "selected='selected'"; }?>>Propia</option>
                                                         <option value="rentada" <?php if($viv_casa === "rentada") { echo "selected='selected'"; }?>>Rentada</option>
                                                         <option value="hipoteca_corriente" <?php if($viv_casa === "hipoteca_corriente") { echo "selected='selected'"; }?>>Hipoteca al corriente</option>
                                                         <option value="hipoteca_problemas" <?php if($viv_casa === "hipoteca_problemas") { echo "selected='selected'"; }?>>Hipoteca con problemas</option>
                                                         <option value="credito_infonavit_corriente" <?php if($viv_casa === "credito_infonavit_corriente") { echo "selected='selected'"; }?>>Crédito Infonavit al corriente</option>
                                                         <option value="credito_infonavit_prorroga" <?php if($viv_casa === "credito_infonavit_prorroga") { echo "selected='selected'"; }?>>Crédito Infonavit con prórroga</option>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>A quien pertenece</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_casa_pertenece" id="viv_casa_pertenece" type="text" class="form-control" value="<?php echo $viv_casa_pertenece; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Años de vivir en el domicilio</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_anos_vivir" id="viv_anos_vivir" type="text" class="form-control" value="<?php echo $viv_anos_vivir; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Num de personas Habitándola</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_personas" id="viv_personas" type="text" class="form-control age-inputmask" value="<?php echo $viv_personas; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Descripción de quienes son</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_personas_quien" id="viv_personas_quien" type="text" class="form-control" value="<?php echo $viv_personas_quien; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Tipo de decoración</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_decoracion" id="viv_decoracion" type="text" class="form-control" value="<?php echo $viv_decoracion; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Distribución</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_distribucion" id="viv_distribucion" type="text" class="form-control" value="<?php echo $viv_distribucion; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Colonia con las que colinda</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_colonia" id="viv_colonia" type="text" class="form-control" value="<?php echo $colonia; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Calles con las que colinda</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="viv_calles" id="viv_calles" type="text" class="form-control" value="<?php echo $viv_calles; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- REFERENCIAS -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Referencias</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <h4>Referencia personal 1</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref1_nombre" id="ref1_nombre" type="text" class="form-control" value="<?php echo $ref1_nombre; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Teléfono</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref1_telefono" id="ref1_telefono" type="text" class="form-control phone-inputmask" value="<?php echo $ref1_telefono; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Tiempo de conocerlo</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref1_tiempo" id="ref1_tiempo" type="text" class="form-control" value="<?php echo $ref1_tiempo; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Referencia</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref1_referencia" id="ref1_referencia" type="text" class="form-control" value="<?php echo $ref1_referencia; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <h4>Referencia personal 2</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref2_nombre" id="ref2_nombre" type="text" class="form-control" value="<?php echo $ref2_nombre; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Teléfono</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref2_telefono" id="ref2_telefono" type="text" class="form-control phone-inputmask" value="<?php echo $ref2_telefono; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Tiempo de conocerlo</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref2_tiempo" id="ref2_tiempo" type="text" class="form-control" value="<?php echo $ref2_tiempo; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Referencia</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref2_referencia" id="ref2_referencia" type="text" class="form-control" value="<?php echo $ref2_referencia; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <h4>Referencia vecinal</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre del informante</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref3_nombre" id="ref3_nombre" type="text" class="form-control" value="<?php echo $ref3_nombre; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Cuánto tiempo viviendo el candidato en el domicilio?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref3_tiempo" id="ref3_tiempo" type="text" class="form-control" value="<?php echo $ref3_tiempo; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Comentarios</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="ref3_comentario" id="ref3_comentario" type="text" class="form-control" value="<?php echo $ref3_comentario; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- INFORMACION LABORAL -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Información laboral</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <?php
                                        $select = mysqli_query($link, "select * from test_laboral where id_general = '$id' order by id asc");
                                        $row = mysqli_num_rows($select);
                                        if($row > 0)
                                        {
                                            $i= 1;
                                            while($arr = mysqli_fetch_array($select))
                                            {
                                                $lab_id                   = $arr['id'];
                                                $lab_empresa              = $arr['empresa'];
                                                $lab_carta                = $arr['carta'];
                                                $lab_demanda              = $arr['demanda'];
                                                $lab_telefono             = $arr['telefono'];
                                                $lab_puestos              = $arr['puestos'];
                                                $lab_depto                = $arr['depto'];
                                                $lab_sueldo               = $arr['sueldo'];
                                                    $length = strlen($lab_sueldo);
                                                    $length2 = 9 - $length;
                                                    $n = $length2;
                                                    $a = 0;
                                                    while ($a < $n)
                                                    {
                                                        $lab_sueldo = "0".$lab_sueldo;
                                                        $a++;

                                                    }
                                                $lab_domicilio            = $arr['domicilio'];
                                                $lab_contrato             = $arr['contrato'];
                                                $lab_fecha_ing            = $arr['fecha_ing'];
                                                $lab_fecha_ing  = date("d-m-Y",strtotime($lab_fecha_ing));
                                                $lab_fecha_baja           = $arr['fecha_baja'];
                                                $lab_fecha_baja = date("d-m-Y",strtotime($lab_fecha_baja));
                                                $lab_motivo               = $arr['motivo'];
                                                $lab_sindicato            = $arr['sindicato'];
                                                $lab_jefe                 = $arr['jefe'];
                                                $lab_jefe_puesto          = $arr['jefe_puesto'];
                                                
                                                $val_fecha_consulta         = $arr['val_fecha_consulta'];
                                                if($val_fecha_consulta === "0000-00-00") { $val_fecha_consulta = "1900-01-01"; } else { $val_fecha_consulta = date("d-m-Y", strtotime($val_fecha_consulta)); }
                                                $val_fecha_ingreso         = $arr['val_fecha_ingreso'];
                                                if($val_fecha_ingreso === "0000-00-00") { $val_fecha_ingreso = "1900-01-01"; } else { $val_fecha_ingreso = date("d-m-Y", strtotime($val_fecha_ingreso)); }
                                                $val_fecha_baja         = $arr['val_fecha_baja'];
                                                if($val_fecha_baja === "0000-00-00") { $val_fecha_baja = "1900-01-01"; } else { $val_fecha_baja = date("d-m-Y", strtotime($val_fecha_baja)); }
                                                
                                                $val_puesto_inicial         = $arr['val_puesto_inicial'];
                                                $val_sueldo_inicial         = $arr['val_sueldo_inicial'];
                                                $val_contrato               = $arr['val_contrato'];
                                                $val_iniciativa             = $arr['val_iniciativa'];
                                                $val_metas                  = $arr['val_metas'];
                                                $val_responsabilidad        = $arr['val_responsabilidad'];
                                                $val_puntualidad            = $arr['val_puntualidad'];
                                                $val_personal               = $arr['val_personal'];
                                                $val_salida                 = $arr['val_salida'];
                                                $val_recontratable          = $arr['val_recontratable'];
                                                $val_nombre_info            = $arr['val_nombre_info'];
                                                $val_puesto_infor           = $arr['val_puesto_infor'];
                                                $val_observacion            = $arr['val_observacion'];
                                                
                                                
                                                
                                                echo "<input type='hidden' name='lab_id[]' id='lab_id$i' value='$lab_id'>";
                                                echo '<div class="col-md-6 col-sm-12 col-xs-12">';
                                                    echo '<p class="form-label text-center" style="color: #FFF !important; background-color: #f5a340 !important; ">';
                                                        echo '<strong>Empleo Anterior</strong>';
                                                    echo '</p>';
                                                
                                                    echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Nombre de la Empresa: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_empresa[]' id='lab_empresa$i' type='text' class='form-control' value='$lab_empresa'>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Carta de recomendación: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_carta[]' id='lab_carta$i' type='text' class='form-control' value='$lab_carta'>";                                                               
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Alguna Demanda: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_demanda[]' id='lab_demanda$i' type='text' class='form-control' value='$lab_demanda'>";   
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Teléfono: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_telefono[]' id='lab_telefono$i' type='text' class='form-control phone-inputmask' value='$lab_telefono'>";   
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto Inicial - Último: </strong></p>";
                                                            echo "</div>";
                                                             echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_puestos[]' id='lab_puestos$i' type='text' class='form-control' value='$lab_puestos'>";   
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Departamento: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_depto[]' id='lab_depto$i' type='text' class='form-control' value='$lab_depto'>";   
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Sueldo Inicial - Último: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_sueldo[]' id='lab_sueldo$i' type='text' class='form-control currency-inputmask' value='$lab_sueldo'>";   
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Domicilio o sucursal: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_domicilio[]' id='lab_domicilio$i' type='text' class='form-control' value='$lab_domicilio'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Tipo de contrato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_contrato[]' id='lab_contrato$i' type='text' class='form-control' value='$lab_contrato'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de ingreso: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_fecha_ing[]' id='lab_fecha_ing$i' type='text' class='form-control' value='$lab_fecha_ing'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de baja: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_fecha_baja[]' id='lab_fecha_baja$i' type='text' class='form-control' value='$lab_fecha_baja'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Motivo de separación: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_motivo[]' id='lab_motivo$i' type='text' class='form-control' value='$lab_motivo'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Pertenece a un Sindicato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_sindicato[]' id='lab_sindicato$i' type='text' class='form-control' value='$lab_sindicato'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Jefe Inmediato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_jefe[]' id='lab_jefe$i' type='text' class='form-control' value='$lab_jefe'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto Jefe Inmediato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<input name='lab_jefe_puesto[]' id='lab_jefe_puesto$i' type='text' class='form-control' value='$lab_jefe_puesto'>";  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        
                                                        /*VALIDACION*/
                                                        echo "<hr>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-12 col-sm-12 col-xs-12 text-center" >';
                                                                echo "<p style = 'background-color:#ddd;'><strong>Validación</strong></p>";
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de Consulta: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_fecha_consulta[]" id="val_fecha_consulta'.$i.'" type="text" class="form-control" value="'.$val_fecha_consulta.'">';  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de Ingreso: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_fecha_ingreso[]" id="val_fecha_ingreso'.$i.'" type="text" class="form-control" value="'.$val_fecha_ingreso.'"> ';  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de baja: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_fecha_baja[]" id="val_fecha_baja'.$i.'" type="text" class="form-control" value="'.$val_fecha_baja.'">' ;  
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto inicial - último: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_puesto_inicial[]" id="val_puesto_inicial'.$i.'" type="text" class="form-control" value="'.$val_puesto_inicial.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Sueldo inicial: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_sueldo_inicial[]" id="val_sueldo_inicial'.$i.'" type="text" class="form-control currency-inputmask" value="'.$val_sueldo_inicial.'" >';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Tipo de contrato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_contrato[]" id="val_contrato'.$i.'" type="text" class="form-control" value="'.$val_contrato.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Iniciativa: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_iniciativa[]" id="val_iniciativa'.$i.'" type="text" class="form-control" value="'.$val_iniciativa.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Logro de metas: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_metas[]" id="val_metas'.$i.'" type="text" class="form-control" value="'.$val_metas.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Grado de responsabilidad: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_responsabilidad[]" id="val_responsabilidad'.$i.'" type="text" class="form-control" value="'.$val_responsabilidad.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puntualidad y asistencia: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_puntualidad[]" id="val_puntualidad'.$i.'" type="text" class="form-control" value="'.$val_puntualidad.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Personal a cargo: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_personal[]" id="val_personal'.$i.'" type="text" class="form-control" value="'.$val_personal.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Motivo de salida: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_salida[]" id="val_salida'.$i.'" type="text" class="form-control" value="'.$val_salida.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>¿Es recontratable? </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_recontratable[]" id="val_recontratable'.$i.'" type="text" class="form-control" value="'.$val_recontratable.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Nombre del informante: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_nombre_info[]" id="val_nombre_info'.$i.'" type="text" class="form-control" value="'.$val_nombre_info.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto del informante: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_puesto_infor[]" id="val_puesto_infor'.$i.'" type="text" class="form-control" value="'.$val_puesto_infor.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Observaciones: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo '<input name="val_observacion[]" id="val_observacion'.$i.'" type="text" class="form-control" value="'.$val_observacion.'">';
                                                            echo "</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                            $i++;
                                            }
                                        }
                                        ?> 
                                </div>
                            </div>
                            
                            <!-- DEMANDA LABORAL -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <h4>Demanda laboral</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Comentarios Generales</strong>
                                                </label>
                                                <div class="controls" >
                                                    <textarea id="lab2_comentario" name="lab2_comentario" class="form-control" rows="3" style="border-radius: 0.5em;"><?php echo "$lab2_comentario"; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Empresa</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="lab2_empresa" id="lab2_empresa" type="text" class="form-control" value="<?php echo "$lab2_empresa"; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Fecha</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="lab2_fecha" id="lab2_fecha" type="text" class="form-control" value="<?php echo "$lab2_fecha"; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <h4>Relativa a Cuestiones Laborales</h4>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Qué opinión tiene sobre los sindicatos?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <textarea id="lab2_opinion_sindicato" name="lab2_opinion_sindicato" class="form-control" rows="3" style="border-radius: 0.5em;"><?php echo $lab2_opinion_sindicato; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Cree que vale la pena sindicalizarse?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="lab2_sindicarse" name="lab2_sindicarse" class="form-control"">
                                                        <option value="Si"<?php if($lab2_sindicarse === "Si"){ echo "selected='selected'";} ?>>Si</option>
                                                        <option value="No"<?php if($lab2_sindicarse === "No"){ echo "selected='selected'";} ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Lo ha estado alguna vez?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="lab2_sindicalizado" name="lab2_sindicalizado" class="form-control"">
                                                        <option value="Si" <?php if($lab2_sindicalizado === "Si"){ echo "selected='selected'";} ?>>Si</option>
                                                        <option value="No" <?php if($lab2_sindicalizado === "No"){ echo "selected='selected'";} ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Si NO lo ha estado … ¿Contempla la posibilidad de estarlo?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="lab2_querer_sindicalizarse" name="lab2_querer_sindicalizarse" class="form-control"">
                                                        <option value="Si" <?php if($lab2_querer_sindicalizarse === "Si"){ echo "selected='selected'";} ?>>Si</option>
                                                        <option value="No" <?php if($lab2_querer_sindicalizarse === "No"){ echo "selected='selected'";} ?>>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EVUALUACIÓN FINAL -->                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Evaluación</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Evaluación de Entrevista Domiciliaria</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_a" name="eval_a" class="form-control"">
                                                        <option value="0"<?php if($eval_a === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1"<?php if($eval_a === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2"<?php if($eval_a === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3"<?php if($eval_a === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4"<?php if($eval_a === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5"<?php if($eval_a === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Situación Económica</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_b" name="eval_b" class="form-control"">
                                                        <option value="0" <?php if($eval_b === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_b === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_b === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_b === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_b === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_b === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Entorno Familiar y Social</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_c" name="eval_c" class="form-control"">
                                                        <option value="0" <?php if($eval_c === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_c === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_c === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_c === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_c === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_c === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Antecedentes de Ética y Honestidad</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_d" name="eval_d" class="form-control"">
                                                        <option value="0" <?php if($eval_d === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_d === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_d === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_d === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_d === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_d === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Referencias Personales y Familiares</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_e" name="eval_e" class="form-control"">
                                                        <option value="0" <?php if($eval_e === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_e === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_e === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_e === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_e === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_e === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Referencias Laborales</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_f" name="eval_f" class="form-control"">
                                                        <option value="0" <?php if($eval_f === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_f === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_f === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_f === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_f === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_f === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Experiencia en el Puesto</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_g" name="eval_g" class="form-control"">
                                                        <option value="0" <?php if($eval_g === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_g === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_g === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_g === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_g === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_g === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Estabilidad Laboral</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_h" name="eval_h" class="form-control"">
                                                        <option value="0" <?php if($eval_h === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_h === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_h === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_h === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_h === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_h === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Veracidad de la información</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_i" name="eval_i" class="form-control"">
                                                        <option value="0" <?php if($eval_i === "0"){ echo 'selected= "selected"'; }?>>0</option>
                                                        <option value="1" <?php if($eval_i === "1"){ echo 'selected= "selected"'; }?>>1</option>
                                                        <option value="2" <?php if($eval_i === "2"){ echo 'selected= "selected"'; }?>>2</option>
                                                        <option value="3" <?php if($eval_i === "3"){ echo 'selected= "selected"'; }?>>3</option>
                                                        <option value="4" <?php if($eval_i === "4"){ echo 'selected= "selected"'; }?>>4</option>
                                                        <option value="5" <?php if($eval_i === "5"){ echo 'selected= "selected"'; }?>>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Recomendable?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="eval_i" name="eval_recomendable" class="form-control"">
                                                        <option value="" <?php if($eval_recomendable === ""){ echo 'selected= "selected"'; }?>></option>
                                                        <option value="recomendable" <?php if($eval_recomendable === "recomendable"){ echo 'selected= "selected"'; }?>>Recomendable</option>
                                                        <option value="no recomendable" <?php if($eval_recomendable === "no recomendable"){ echo 'selected= "selected"'; }?>>No recomendable</option>
                                                        <option value="con reservas" <?php if($eval_recomendable === "con reservas"){ echo 'selected= "selected"'; }?>>Con reservas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Observaciones</strong>
                                                </label>
                                                <input name="eval_obs" id="eval_obs" type="text" class="form-control" value="<?php echo $eval_obs; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- DOCUMENTACIÓN -->                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><strong>Documentación</strong></h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-map-marker"></i><strong>&nbsp;&nbsp;Link Google Maps</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="maps" id="maps" type="text" class="form-control" value = "<?php echo $maps; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-camera-retro"></i><strong>&nbsp;&nbsp;Foto de perfil</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="perfil" id="perfil" value="<?php echo $perfil;?>">                                     
                                                    <img class="img-responsive img-rounded" id="prev_perfil" name="prev_perfil" src="<?php echo "../archivos/$id/$perfil";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('perfil')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu1" id="docu1" value="">
                                                    <img class="img-responsive img-rounded" id="prev_docu1" name="prev_docu1" src="<?php echo "../archivos/$id/$docu1";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu1')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu2" id="docu2" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu2" name="prev_docu2" src="<?php echo "../archivos/$id/$docu2";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu2')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu3" id="docu3" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu3" name="prev_docu3" src="<?php echo "../archivos/$id/$docu3";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu3')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu4" id="docu4" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu4" name="prev_docu4" src="<?php echo "../archivos/$id/$docu4";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu4')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 5</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu5" id="docu5" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu5" name="prev_docu5" src="<?php echo "../archivos/$id/$docu5";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu5')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 6</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu6" id="docu6" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu6" name="prev_docu6" src="<?php echo "../archivos/$id/$docu6";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu6')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 7</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu7" id="docu7" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu7" name="prev_docu7" src="<?php echo "../archivos/$id/$docu7";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu7')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 8</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu8" id="docu8" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu8" name="prev_docu8" src="<?php echo "../archivos/$id/$docu8";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu8')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 9</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu9" id="docu9" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu9" name="prev_docu9" src="<?php echo "../archivos/$id/$docu9";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu9')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 10</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu10" id="docu10" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu10" name="prev_docu10" src="<?php echo "../archivos/$id/$docu10";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu10')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 11</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu11" id="docu11" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu11" name="prev_docu11" src="<?php echo "../archivos/$id/$docu11";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu11')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 12</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu12" id="docu12" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu12" name="prev_docu12" src="<?php echo "../archivos/$id/$docu12";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('docu12')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const1" id="const1">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const1" name="prev_const1" src="<?php echo "../archivos/$id/$const1";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('const1')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const2" id="const2">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const2" name="prev_const2" src="<?php echo "../archivos/$id/$const2";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('const2')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const3" id="const3">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const3" name="prev_const3" src="<?php echo "../archivos/$id/$const3";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('const3')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const4" id="const4">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const4" name="prev_const4" src="<?php echo "../archivos/$id/$const4";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('const4')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivienda 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv1" id="viv1" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv1" name="prev_viv1" src="<?php echo "../archivos/$id/$viv1";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('viv1')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivienda 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv2" id="viv2" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv2" name="prev_viv2" src="<?php echo "../archivos/$id/$viv2";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('viv2')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivienda 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv3" id="viv3" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv3" name="prev_viv3" src="<?php echo "../archivos/$id/$viv3";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('viv3')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivienda 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv4" id="viv4" value="<?php echo $viv4;?>">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv4" name="prev_viv4" src="<?php echo "../archivos/$id/$viv4";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('viv4')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face1" id="face1" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face1" name="prev_face1" src="<?php echo "../archivos/$id/$face1";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('face1')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face2" id="face2" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face2" name="prev_face2" src="<?php echo "../archivos/$id/$face2";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('face2')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face3" id="face3" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face3" name="prev_face3" src="<?php echo "../archivos/$id/$face3";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('face3')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face4" id="face4" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face4" name="prev_face4" src="<?php echo "../archivos/$id/$face4";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('face4')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Comentarios de Facebook</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="face_comment" id="face_comment" type="text" class="form-control" value="<?php echo "$face_comment"; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Aviso de Privacidad 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="aviso1" id="aviso1" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_aviso1" name="prev_aviso1" src="<?php echo "../archivos/$id/$aviso1";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('aviso1')">borrar</button>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Aviso de Privacidad 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="aviso2" id="aviso2" value="">                                     
                                                    <img class="img-responsive img-rounded" id="prev_aviso2" name="prev_aviso2" src="<?php echo "../archivos/$id/$aviso2";?>" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                    <button type="button" class="btn dropdown-toggle selectpicker btn-danger" onclick="borrar_imagen('aviso2')">borrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                            <div class="controls">
                                                <a class="btn btn-primary btn-rounded" onClick="validar();">Actualizar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN MODALS -->
    
    <!-- END MODALS -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="../assets/plugins/jquery-1.11.js"></script>
    <script src="../assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <!-- <script src="../assets/plugins/bootstrap-select/bootstrap-select.js"></script> -->
    <script src="../assets/plugins/icheck/icheck.js"></script>
    <script src="../assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="../assets/plugins/nprogress/nprogress.js"></script>
    <script src="../assets/plugins/charts-sparkline/sparkline.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="../assets/plugins/inputmask/js/jquery.inputmask.bundle.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="../assets/js/application.js"></script>
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
    <script>
    $(document).ready(function(){
        $('#fecha_nacimiento').datepicker();
        
        $('#fecha_ing1').datepicker();
        $('#fecha_ing2').datepicker();
        $('#fecha_baja1').datepicker();
        $('#fecha_baja2').datepicker();
        
        $('#lab_fecha_ing1').datepicker();
        $('#lab_fecha_ing2').datepicker();
        
        $('#lab_fecha_baja1').datepicker();
        $('#lab_fecha_baja2').datepicker();
        
        $('#lab2_fecha').datepicker();
        
        $('#val_fecha_consulta1').datepicker();
        $('#val_fecha_consulta2').datepicker();
        $('#val_fecha_ingreso1').datepicker();
        $('#val_fecha_ingreso2').datepicker();
        $('#val_fecha_baja1').datepicker();
        $('#val_fecha_baja2').datepicker();
    });
    function validar()
    {
        //el formulario se envia
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "actualizar_estudio.php",
            data : formData,
            async: false,
            success : function(data)
            {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                alert("Datos actualizados con éxito");
                //window.location.replace("../principal.php");
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
}
/*Cambiar municipio al escoger un estado*/
function change_estado()
    {
        var estado = $("#estado").val();
        $('#municipio').empty();
        $.ajax({
            type : "POST",
            url : "salidasID.php" ,
            traditional : true,
            data : {estado:estado},
            success : function(data)
            {
                $("#municipio").html(data);
            }            
        });
    }

/* Funcion para bloquear tipo de campo */
        $(function(e) {
            "use strict";
            $(".date-inputmask").inputmask("dd/mm/yyyy"),
                $(".phone-inputmask").inputmask("(999) 999-9999"),
                $(".international-inputmask").inputmask("+9(999)999-9999"),
                $(".xphone-inputmask").inputmask("(999) 999-9999 / x999999"),
                $(".purchase-inputmask").inputmask("999-999-999"),
                $(".cc-inputmask").inputmask("9999 9999 9999 9999"),
                $(".ssn-inputmask").inputmask("999-99-9999"),
                $(".isbn-inputmask").inputmask("999-99-999-9999-9"),
                $(".currency-inputmask").inputmask("$999,999.99"),
                $(".currency-inputmask2").inputmask("$9,999,999.99"),
                $(".percentage-inputmask").inputmask("99%"),
                $(".age-inputmask").inputmask("99"),
                $(".year-inputmask").inputmask("9999"),
                $(".decimal-inputmask").inputmask({
                    alias: "decimal",
                    radixPoint: "."
                }),

                $(".email-inputmask").inputmask({
                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                    greedy: !1,
                    onBeforePaste: function(n, a) {
                        return (e = e.toLowerCase()).replace("mailto:", "")
                    },
                    definitions: {
                        "*": {
                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                            cardinality: 1,
                            casing: "lower"
                        }
                    }
                })
        });

    //Prev Perfil
    function Perfil(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_perfil').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
                
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#perfil").change(function() {
        Perfil(this);
    });
//Prev Docu1
    function Docu1(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu1').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
                
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu1").change(function() {
        Docu1(this);
    });
//Prev Docu2
    function Docu2(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu2').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu2").change(function() {
        Docu2(this);
    });
//Prev Docu3
    function Docu3(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu3').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu3").change(function() {
        Docu3(this);
    });
//Prev Docu4
    function Docu4(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu4').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu4").change(function() {
        Docu4(this);
    });
//Prev Docu5
    function Docu5(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu5').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu5").change(function() {
        Docu5(this);
    });
//Prev Docu6
    function Docu6(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu6').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu6").change(function() {
        Docu6(this);
    });
//Prev Docu7
    function Docu7(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu7').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu7").change(function() {
        Docu7(this);
    });
//Prev Docu8
    function Docu8(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu8').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu8").change(function() {
        Docu8(this);
    });
//Prev Docu9
    function Docu9(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu9').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu9").change(function() {
        Docu9(this);
    });
//Prev Docu10
    function Docu10(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu10').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu10").change(function() {
        Docu10(this);
    });
//Prev Docu11
    function Docu11(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu11').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu11").change(function() {
        Docu11(this);
    });
//Prev Docu12
    function Docu12(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_docu12').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#docu12").change(function() {
        Docu12(this);
    });
//Prev Constancia 1
    function const1(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_const1').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#const1").change(function() {
        const1(this);
    });
 
 //Prev Constancia 2
    function const2(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_const2').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#const2").change(function() {
        const2(this);
    });
 
 //Prev Constancia 3
    function const3(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_const3').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#const3").change(function() {
        const3(this);
    });
 
 //Prev Constancia 4
    function const4(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_const4').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#const4").change(function() {
        const4(this);
    });
    
 //Prev Vivenda 1
    function Viv1(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_viv1').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#viv1").change(function() {
        Viv1(this);
    });
//Prev Vivenda 2
    function Viv2(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_viv2').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#viv2").change(function() {
        Viv2(this);
    });
//Prev Vivenda 3
    function Viv3(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_viv3').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#viv3").change(function() {
        Viv3(this);
    });
//Prev Vivenda 4
    function Viv4(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_viv4').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#viv4").change(function() {
        Viv4(this);
    });

//Prev Facebook 1
    function Face1(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_face1').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#face1").change(function() {
        Face1(this);
    });
//Prev Facebook 2
    function Face2(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_face2').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#face2").change(function() {
        Face2(this);
    });
//Prev Facebook 3
    function Face3(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_face3').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#face3").change(function() {
        Face3(this);
    });
//Prev Facebook 4
    function Face4(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_face4').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#face4").change(function() {
        Face4(this);
    });

//Prev Aviso 1
    function Aviso1(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_aviso1').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#aviso1").change(function() {
        Aviso1(this);
    });

//Prev Aviso 2
    function Aviso2(input) 
    {
        if (input.files && input.files[0]) 
        {
            var reader = new FileReader();
            reader.onload = function(e) 
            {                
                $('#prev_aviso2').attr('src', e.target.result);
                var formData = new FormData($('#form')[0]);
                $.ajax(
                {
                    type : "POST",
                    url : "guardar_imagen.php",
                    data : formData,
                    async: false,
                    success : function(data)
                    {
                        //window.location.replace("nuevo_estudio11.php");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }
            reader.readAsDataURL(input.files[0]);
        }
     }

      $("#aviso2").change(function() {
        Aviso2(this);
    });
    
//Funcion para borrar imagen previamente cargada
    function borrar_imagen(data)
    {
        var data = data;
        $.ajax({
            type : "POST",
            url : "borrar_imagen.php" ,
            traditional : true,
            data : {data:data},
            success : function(data)
            {
                var result = $.trim(data);
                switch(result)
                {
                    case"perfil":
                        $('#prev_perfil').attr('src', ''); 
                        break;
                    case"docu1":
                        $('#prev_docu1').attr('src', ''); 
                        break;
                    case"docu2":
                        $('#prev_docu2').attr('src', ''); 
                        break;
                    case"docu3":
                        $('#prev_docu3').attr('src', ''); 
                        break;
                    case"docu4":
                        $('#prev_docu4').attr('src', ''); 
                        break;
                    case"docu5":
                        $('#prev_docu5').attr('src', ''); 
                        break;
                    case"docu6":
                        $('#prev_docu6').attr('src', ''); 
                        break;
                    case"docu7":
                        $('#prev_docu7').attr('src', ''); 
                        break;
                    case"docu8":
                        $('#prev_docu8').attr('src', ''); 
                        break;
                    case"docu9":
                        $('#prev_docu9').attr('src', ''); 
                        break;
                    case"docu10":
                        $('#prev_docu10').attr('src', ''); 
                        break;
                    case"docu11":
                        $('#prev_docu11').attr('src', ''); 
                        break;
                    case"docu12":
                        $('#prev_docu12').attr('src', ''); 
                        break;
                    case"const1":
                        $('#prev_const1').attr('src', ''); 
                        break;
                    case"const2":
                        $('#prev_const2').attr('src', ''); 
                        break;
                    case"const3":
                        $('#prev_const3').attr('src', ''); 
                        break;
                    case"const4":
                        $('#prev_const4').attr('src', ''); 
                        break;
                    case"viv1":
                        $('#prev_viv1').attr('src', ''); 
                        break;
                    case"viv2":
                        $('#prev_viv2').attr('src', ''); 
                        break;
                    case"viv3":
                        $('#prev_viv3').attr('src', ''); 
                        break;
                    case"viv4":
                        $('#prev_viv4').attr('src', ''); 
                        break;
                    case"face1":
                        $('#prev_face1').attr('src', ''); 
                        break;
                    case"face2":
                        $('#prev_face2').attr('src', ''); 
                        break;
                    case"face3":
                        $('#prev_face3').attr('src', ''); 
                        break;
                    case"face4":
                        $('#prev_face4').attr('src', ''); 
                        break;
                    case"aviso1":
                        $('#prev_aviso1').attr('src', ''); 
                        break;
                    case"aviso2":
                        $('#prev_aviso2').attr('src', ''); 
                        break;
                                           
                }
            }
        });	
    }
    
    
    
 </script>
</body>

</html>