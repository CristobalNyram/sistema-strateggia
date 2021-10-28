<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['nombre']))
{
	$tipo = $_SESSION['tipo'];
}
else
{
	 header("Location: ../index.php"); 
}
if(isset($_GET['id']))
{
	$id = base64_decode($_GET['id']);
}
else
{
	 header("Location: ../index.php"); 
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
        $id_estado          = $arr['estado'];
        $id_municipio          = $arr['municipio'];
        $cp                 = $arr['cp'];
        $telefono           = $arr['telefono'];
        $celular            = $arr['celular'];
        $tiempo_dom_actual  = $arr['tiempo_dom_actual'];
        $tiempo_dom_anterior = $arr['tiempo_dom_anterior'];
        $lugar_nacimiento   = $arr['lugar_nacimiento'];
        $fecha_nacimiento   = $arr['fecha_nacimiento'];
        $fecha_nacimiento = date('d-m-Y', strtotime($fecha_nacimiento));
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
        
        
        $sel_edo = mysqli_query($link, "select * from estados where id = '$id_estado'");
            $row2 = mysqli_num_rows($sel_edo);
            if($row2 > 0)
            {
                while($arr2 = mysqli_fetch_array($sel_edo))
                {
                    $estado = $arr2['estado'];
                    
                }
            }
        $sel_mun = mysqli_query($link, "select * from municipios where id = '$id_municipio' and id_edo = '$id_estado'");
            $row3 = mysqli_num_rows($sel_mun);
            if($row3 > 0)
            {
                while($arr3 = mysqli_fetch_array($sel_mun))
                {
                    $municipio = $arr3['municipio'];
                    
                }
            }
        
    }
}

$select = mysqli_query($link, "select * from test_documentacion where id_general = '$id'");
$row = mysqli_num_rows($select);
if($row > 0)
{
    while($arr = mysqli_fetch_array($select))
    {
        $firma               = $arr['firma'];
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
        $firma               = "";
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
            $ing2_ingreso_renta        = $arr['ingreso_renta'];
            $ing2_ingreso_otros        = $arr['ingreso_otros'];
            $ing2_total_ingresos = $ing2_ingreso_pareja + $ing2_ingreso_renta + $ing2_ingreso_otros;
            
            
            $ing2_alimentacion         = $arr['alimentacion'];
            $ing2_hipoteca             = $arr['hipoteca'];
            $ing2_luz                  = $arr['luz'];
            $ing2_agua                 = $arr['agua'];
            $ing2_gas                  = $arr['gas'];
            $ing2_telefono             = $arr['telefono'];
            $ing2_ropa                 = $arr['ropa'];
            $ing2_transporte           = $arr['transporte'];
            $ing2_escolar              = $arr['escolar'];
            $ing2_medico               = $arr['medico'];
            $ing2_internet             = $arr['internet'];
            $ing2_diversion            = $arr['diversion'];
            $ing2_deudas               = $arr['deudas'];
            $ing2_otros                = $arr['otros'];
            
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
            $lab2_opinion_sindicato     = $arr['opinion_sindicato'];
            
            $lab2_sindicarse            = $arr['sindicarse'];
            $lab2_sindicalizado         = $arr['sindicalizado'];
            $lab2_querer_sindicalizarse = $arr['querer_sindicalizarse'];
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
$select = mysqli_query($link, "select * from test_evaluacion where id_general = '$id' order by id asc");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $eval_a            = $arr['eval_a'];
            $eval_b            = $arr['eval_b'];
            $eval_c            = $arr['eval_c'];
            $eval_d            = $arr['eval_d'];
            $eval_e            = $arr['eval_e'];
            $eval_f            = $arr['eval_f'];
            $eval_g            = $arr['eval_g'];
            $eval_h            = $arr['eval_h'];
            $eval_i            = $arr['eval_i'];
            $eval_obs          = $arr['eval_obs'];
            $eval_recomendable = $arr['eval_recomendable'];
            
        }
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
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.css">
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.tableTools.css">
    <!-- END PAGE LEVEL STYLE -->
    <script src="../assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <!-- BEGIN TOP MENU -->
    <style>
        @media all{.saltopagina{display:none !important;}}
        @media print{.saltopagina{display:block !important; page-break-before: always !important; }#main-content{font-size:12px !important; margin-top:-3em;}}
        
    </style>    
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
  
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
            <div class="row">
                <form id="form" name="form" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <img src="../imagenes/logo.png" alt="logo" style = "max-width:100%;">
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-4 text-center">
                                        <h4><strong>Estudio sociolaboral</strong></h4>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-4 text-center">
                                        <h4><strong>Fecha: </strong><?php echo $fecha; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="panel-body">
                                <!--INICIO -->
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-2 col-sm-4 col-xs-4" style="margin-bottom: 1em;">
                                                <?php echo "<img src='../archivos/$id/$perfil' style='max-width:100%; max-height:300px;'>"; ?>
                                        </div>
                                        <div class="col-md-7 col-sm-4 col-xs-4">
                                            <p><?php echo "<strong>Nombre: </strong> $nombre $apellidop $apellidom"; ?></p>
                                            <p><?php echo "<strong>Empresa: </strong> $empresa"; ?></p>
                                            <p><?php echo "<strong>Área: </strong> $area"; ?></p>
                                            <p><?php echo "<strong>Puesto: </strong> $puesto"; ?></p>
                                            <p><?php echo "<strong>E-mail: </strong> $email"; ?></p>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-xs-4">
                                                <?php 
                                                if($eval_recomendable === "recomendable")
                                                {
                                                  echo "<button class='btn btn-sm btn-primary' style='background-color:#428bca !important;' type='button'><i class='fa fa-thumbs-up'></i> Recomendable</button>";  
                                                }
                                                else if ($eval_recomendable === "no recomendable")
                                                {
                                                 echo "<button class='btn btn-sm btn-danger' style='background-color:#c75757 !important;' type='button'><i class='fa fa-thumbs-down'></i> No Recomendable</button>";
                                                }
                                                else
                                                {
                                                 echo "<button class='btn btn-sm btn-warning' style='background-color:#f0ad4e !important;' type='button'><i class='fa fa-hand-o-right'></i> Con Reservas</button>";   
                                                }
                                                
                                                ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-4">
                                            <table class="table table-hover table-dynamic table-tools">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">A</td>
                                                        <td>Evaluación de Entrevista Domiciliaria</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_a;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">B</td>
                                                        <td>Situación Económica</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_b;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">C</td>
                                                        <td>Entorno Familiar y Social</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_c;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">D</td>
                                                        <td>Antecedentes de Ética y Honestidad</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_d;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">E</td>
                                                        <td>Referencias Personales y Familiares</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_e;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">F</td>
                                                        <td>Referencias Laborales</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_f;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">G</td>
                                                        <td>Experiencia en el Puesto</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_g;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">H</td>
                                                        <td>Estabilidad Laboral</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_h;?></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">I</td>
                                                        <td>Veracidad de la Información</td>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong><?php echo $eval_i;?></strong></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <table class="table table-hover table-dynamic table-tools">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong>5</strong></td>
                                                        <td>Excelente</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong>4</strong></td>
                                                        <td>Muy Bien</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong>3</strong></td>
                                                        <td>Bien</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong>2</strong></td>
                                                        <td>Regular</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong>1</strong></td>
                                                        <td>Malo</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="background-color:#f5a340 !important;"><strong>0</strong></td>
                                                        <td>Pésimo</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div id="grafica_evaluacion" style="margin: 0 auto; border: 1px solid #ccc; width: 300px !important; height:300px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Observaciones</strong>
                                            </p>
                                            <p class="text-center"><?php echo $eval_obs; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="saltopagina"></div>
                                <!--DATOS GENERALES -->
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Datos personales</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Nombre: </strong> $nombre $apellidop $apellidom"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Telefono: </strong> $telefono"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Celular: </strong> $celular"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Dirección: </strong> $dir_calle"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>No: </strong> $dir_num"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Colonia: </strong> $colonia"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Estado: </strong> $estado"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Municipio: </strong> $municipio"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>CP: </strong> $cp"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <p><?php echo "<strong>Tiempo de Radicar en el Domicilio actual: </strong> $tiempo_dom_actual"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <p><?php echo "<strong>Tiempo de Radicar en el Domicilio anterior: </strong> $tiempo_dom_anterior"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Fecha y lugar de nacimiento: </strong> $fecha_nacimiento , $lugar_nacimiento"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Edad: </strong> $edad años"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>CURP: </strong> $curp"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Estado Civil: </strong> $estado_civil"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Sexo: </strong> $sexo"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Religión: </strong> $religion"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>Comprobante Domicilio Presentado: </strong> $comprobante_dom"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>IMSS: </strong> $imss"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <p><?php echo "<strong>ID Oficial: </strong> $id_oficial"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <p><?php echo "<strong>Labora algún familiar en la Empresa: </strong> $familiar"; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <p><?php echo "<strong>¿Cómo se enteró de la vacante?: </strong> $vacante"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <p><?php echo "<strong>Dependientes Económicos: </strong> $dependiente"; ?></p>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                            <i class="fa fa-facebook-square"></i><label><?php echo " <strong>&nbsp;&nbsp;Id Facebook:</strong> $facebook"; ?></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--ESTILO DE VIDA -->
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Estilo de Vida</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="form-label">
                                                <strong>Deportes, Aficiones, Entretenimiento...</strong>
                                            </label>
                                            <p><?php echo $deportes; ?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label class="form-label">
                                                <strong>Asociaciones o grupos a los que pertenece... </strong>
                                            </label>
                                            <p><?php echo $grupos; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!--DATOS ESCOLARES -->
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Datos escolares</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
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
                                                    <?php 
                                                    if($prim_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Primaria</td>
                                                    <td style='text-align: center;'><?php echo $prim_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $prim_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $prim_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $prim_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $prim_comprobante; ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    if($sec_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Secundaria</td>
                                                    <td style='text-align: center;'><?php echo $sec_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $sec_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $sec_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $sec_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $sec_comprobante; ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    if($prep_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Preparatoria / Bachiller</td>
                                                    <td style='text-align: center;'><?php echo $prep_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $prep_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $prep_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $prep_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $prep_comprobante; ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    if($tec_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Técnica</td>
                                                    <td style='text-align: center;'><?php echo $tec_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $tec_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $tec_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $tec_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $tec_comprobante; ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    if($pro_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Profesional</td>
                                                    <td style='text-align: center;'><?php echo $pro_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $pro_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $pro_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $pro_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $pro_comprobante; ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    if($ma_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Maestría</td>
                                                    <td style='text-align: center;'><?php echo $ma_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $ma_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $ma_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $ma_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $ma_comprobante; ?></td>
                                                </tr>
                                                <?php 
                                                    }
                                                    if($dip_periodo != "")
                                                    {  
                                                    ?>
                                                <tr>
                                                    <td style='text-align: center;'>Cursos o Diplomados</td>
                                                    <td style='text-align: center;'><?php echo $dip_periodo; ?></td>
                                                    <td style='text-align: center;'><?php echo $dip_nombre; ?></td>
                                                    <td style='text-align: center;'><?php echo $dip_gob_priv; ?></td>
                                                    <td style='text-align: center;'><?php echo $dip_colonia; ?></td>
                                                    <td style='text-align: center;'><?php echo $dip_comprobante; ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>
                                            </tbody>
                                            </table>   
                                        </div>
                                    </div>
                                </div>
                                <div class="saltopagina"></div>
                                <!--ENTORNO FAMILIAR-->
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Entorno familiar</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class='col-md-12 col-sm-12 col-xs-12'>
                                            <h4>Familiares Directos que <strong style='color:#c75757;'>NO viven</strong> con el candidato</h4>
                                        </div>
                                        <div class='col-md-12 col-sm-12 col-xs-12 table-responsive'>
                                            <table class='table table-hover table-dynamic table-tools'>
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
                                            
                                            $row = mysqli_num_rows($select);
                                            if($row > 0)
                                            {
                                                while($arr = mysqli_fetch_array($select))
                                                {
                                                    $fam_viven      = $arr['viven'];
                                                    $fam_nombre     = $arr['nombre'];
                                                    $fam_parentesco = $arr['parentesco'];
                                                    $fam_telefono   = $arr['telefono'];
                                                    $fam_edad       = $arr['edad'];
                                                    $fam_sexo       = $arr['sexo'];
                                                    $fam_estado     = $arr['estado'];
                                                    $fam_nivel      = $arr['nivel'];
                                                    $fam_ocupacion  = $arr['ocupacion'];
                                                    $fam_empresa    = $arr['empresa'];
                                                    $fam_ingreso    = $arr['ingreso'];

                                                            echo "<tr>";
                                                                echo "<td style='text-align: center;'>$fam_nombre</td>";
                                                                echo "<td style='text-align: center;'>$fam_parentesco</td>";
                                                                echo "<td style='text-align: center;'>$fam_telefono</td>";
                                                                echo "<td style='text-align: center;'>$fam_edad</td>";
                                                                echo "<td style='text-align: center;'>$fam_sexo</td>";
                                                                echo "<td style='text-align: center;'>$fam_estado</td>";
                                                                echo "<td style='text-align: center;'>$fam_nivel</td>";
                                                                echo "<td style='text-align: center;'>$fam_ocupacion</td>";
                                                                echo "<td style='text-align: center;'>$fam_empresa</td>";
                                                            echo "</tr>";
                                                }
                                            }
                                            ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class='col-md-12 col-sm-12 col-xs-12'>
                                            <h4>Familiares Directos que <strong style='color:#00b894;'>SI viven</strong> con el candidato</h4>
                                        </div>
                                        <div class='col-md-12 col-sm-12 col-xs-12 table-responsive'>
                                            <table class='table table-hover table-dynamic table-tools'>
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
                                                        <th class='text-center'>Ingreso</th>
                                                    </tr>
                                                </thead>

                                                <tbody>   
                                        
                                            <?php
                                            $select = mysqli_query($link, "select * from test_familiar where id_general = '$id' and empresa is null order by id asc");
                                           
                                                $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $fam_viven      = $arr['viven'];
                                                        $fam_nombre     = $arr['nombre'];
                                                        $fam_parentesco = $arr['parentesco'];
                                                        $fam_telefono   = $arr['telefono'];
                                                        $fam_edad       = $arr['edad'];
                                                        $fam_sexo       = $arr['sexo'];
                                                        $fam_estado     = $arr['estado'];
                                                        $fam_nivel      = $arr['nivel'];
                                                        $fam_ocupacion  = $arr['ocupacion'];
                                                        $fam_empresa    = $arr['empresa'];
                                                        $fam_ingreso    = $arr['ingreso'];

                                                                echo "<tr>";
                                                                    echo "<td style='text-align: center;'>$fam_nombre</td>";
                                                                    echo "<td style='text-align: center;'>$fam_parentesco</td>";
                                                                    echo "<td style='text-align: center;'>$fam_telefono</td>";
                                                                    echo "<td style='text-align: center;'>$fam_edad</td>";
                                                                    echo "<td style='text-align: center;'>$fam_sexo</td>";
                                                                    echo "<td style='text-align: center;'>$fam_estado</td>";
                                                                    echo "<td style='text-align: center;'>$fam_nivel</td>";
                                                                    echo "<td style='text-align: center;'>$fam_ocupacion</td>";
                                                                    echo "<td style='text-align: center;'>$".number_format($fam_ingreso,2)."</td>";
                                                                echo "</tr>";
                                                    }
                                                }
                                               ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                               <div class="saltopagina"></div>
                                <!--GASTOS BIENES Y ADEUDOS -->
                                <div class="row" style="margin-bottom: 1em;">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Gastos, Bienes y Adeudos</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <?php
                                            $select = mysqli_query($link, "select * from test_ingresos_familiar where id_general = '$id' and tipo_gral = 'auto' order by id asc");
                                            if($select)
                                            {
                                                echo "<div class='col-md-4 col-sm-6 col-xs-6 table-responsive' >";
                                                    echo "<p class='text-center' style='color: #FFF !important; background-color: #f5a340 !important;'><i class = 'fa fa-truck'></i><strong> Autos</strong></p>";
                                                
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
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        
                                                        $ing1_propietario    = $arr['propietario'];
                                                        $ing1_ano            = $arr['ano'];
                                                        $ing1_tipo           = $arr['tipo'];
                                                        $ing1_marca          = $arr['marca'];
                                                        
                                                            echo "<tr>";
                                                                echo "<td style='text-align: center;'>$ing1_propietario</td>";
                                                                echo "<td style='text-align: center;'>$ing1_ano</td>";
                                                                echo "<td style='text-align: center;'>$ing1_tipo</td>";
                                                                echo "<td style='text-align: center;'>$ing1_marca</td>";
                                                            echo "</tr>";

                                                    }
                                                }
                                                        echo "</tbody>";
                                                    echo "</table>";
                                                echo "</div>";
                                            }
                                        ?>
                                        <?php
                                            $select = mysqli_query($link, "select * from test_ingresos_familiar where id_general = '$id' and tipo_gral = 'inmueble' order by id asc");
                                            if($select)
                                            {
                                                echo "<div class='col-md-4 col-sm-6 col-xs-6 table-responsive' >";
                                                    echo "<p class='text-center' style='color: #FFF !important; background-color: #f5a340 !important;'><i class = 'fa fa-home'></i><strong> Inmuebles (Casas, Terrenos, propiedades)</strong></p>";
                                                
                                                    echo "<table class='table table-striped table-hover table-dynamic table-tools'>";
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
                                                                while($arr = mysqli_fetch_array($select))
                                                                {

                                                                    $ing1_propietario       = $arr['propietario'];
                                                                    $ing1_tipo              = $arr['tipo'];
                                                                    $ing1_valor_comercial   = $arr['valor_comercial'];


                                                            echo "<tr>";
                                                                echo "<td style='text-align: center;'>$ing1_propietario</td>";
                                                                echo "<td style='text-align: center;'>$ing1_tipo</td>";
                                                                echo "<td style='text-align: center;'>$ ".number_format($ing1_valor_comercial,2)."</td>";
                                                            echo "</tr>";

                                                                }
                                                            }
                                                        echo "</tbody>";
                                                    echo "</table>";
                                                echo "</div>";
                                            }
                                        ?>
                                        <?php
                                            $select = mysqli_query($link, "select * from test_ingresos_familiar where id_general = '$id' and tipo_gral = 'banco' order by id asc");
                                            if($select)
                                            {
                                                echo "<div class='col-md-4 col-sm-6 col-xs-6 table-responsive' >";
                                                    echo "<p class='text-center' style='color: #FFF !important; background-color: #f5a340 !important;'><i class = 'fa fa-money'></i><strong> Bancos (Inversión, Crédito, Departamental o Débito)</strong></p>";
                                                    
                                                    echo "<table class='table table-striped table-hover table-dynamic table-tools'>";
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
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        
                                                        $ing1_propietario       = $arr['propietario'];
                                                        $ing1_tipo              = $arr['tipo'];
                                                        $ing1_saldo_actual      = $arr['saldo_actual'];
                                                        $ing1_limite      = $arr['limite'];
                                                       

                                                            echo "<tr>";
                                                                echo "<td style='text-align: center;'>$ing1_propietario</td>";
                                                                echo "<td style='text-align: center;'>$ing1_tipo</td>";
                                                                echo "<td style='text-align: center;'>$ ".number_format($ing1_saldo_actual,2)."</td>";
                                                                echo "<td style='text-align: center;'>$ ".number_format($ing1_limite,2)."</td>";
                                                            echo "</tr>";

                                                    }
                                                }
                                                        echo "</tbody>";
                                                    echo "</table>";
                                                echo "</div>";
                                            }
                                        ?>
                                    </div>
                                </div>
                                 
                                <div class="row">
                                    <div class="form-group">
                                        <!-- INGRESOS -->
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                            <p class='text-center' style='color: #FFF !important; background-color: #428bca !important;'><i class = 'fa fa-money'></i><strong> Ingresos Mensuales</strong></p>
                                            <table class='table table-striped table-hover table-dynamic table-tools'>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Pareja / Esposa / Familiares</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_ingreso_pareja,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Rentas</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_ingreso_renta,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Otros Ingresos</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_ingreso_otros,2);?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <p class='text-center' style='color: #FFF !important; background-color: #00b894 !important;'><i class = 'fa fa-money'></i><strong> Totales </strong></p>
                                                <table class='table table-striped table-hover table-dynamic table-tools'>
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Ingresos</strong></td>
                                                            <td><?php echo "$ ".number_format($ing2_total_ingresos,2);?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Gastos</strong></td>
                                                            <td><?php echo "$ ".number_format($ing2_total_egresos,2);?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total</strong></td>
                                                            <td><strong><?php echo "$ ".number_format($ing2_saldo,2);?></strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="row">
                                                <div id="grafica" style="margin: 0 auto; border: 1px solid #ccc; width: 300px !important; height: 300px;"></div>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <!-- GASTOS -->
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-center">
                                            <p class='text-center' style='color: #FFF !important; background-color: #c75757 !important;'><i class = 'fa fa-money'></i><strong> Gastos Mensuales</strong></p>
                                            <table class='table table-striped table-hover table-dynamic table-tools'>
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Alimentación</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_alimentacion,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Hipoteca</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_hipoteca,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Luz</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_luz,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Agua</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_agua,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Gas</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_gas,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Teléfono</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_telefono,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Ropa</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_ropa,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Transporte</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_transporte,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Escolar</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_escolar,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Médico</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_medico,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Internet</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_internet,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Diversion</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_diversion,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Deudas</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_deudas,2);?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Otros</strong></td>
                                                        <td><?php echo "$ ".number_format($ing2_otros,2);?></td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                        </div>
                                    </div>
                                </div>
                                 <div class="saltopagina"></div>
                                <!-- ESTILO DE VIDA -->
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Estilo de Vida</strong>
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Tipo de Servicio Médico </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_servicio_medico;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Alergias </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_alergias;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Deficiencia en Vista </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_def_vista;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Deficiencia en Oído </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_def_oido;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Deficiencia en Física </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_def_fisica;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>¿Ha tenido Intervenciones Quirúrgicas? </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_int_quirurgica;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>¿Ha sufrido accidentes? </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_accidente;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Enfermedades crónicas o recurrentes </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_enfermedad;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Consumo de Cigarro o Bebidas Alcohólicas </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_vicios;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Deporte que practica: Lugar y Frecuencia</strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_deporte;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Utilización del tiempo libre </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_tiempo_libre;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>En caso de emergencia favor de avisar a: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $est_emergencia;?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Condiciones de Vivienda y Economía</strong>
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Nivel Socioeconómico: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_nivel;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Casa habitación: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_casa;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>A quién pertenece: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_casa_pertenece;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Años de vivir en el Domicilio: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_anos_vivir;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>No. Personas habitándola: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_personas;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Descripción de quienes son: </strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_personas_quien;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Tipo de decoración</strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_decoracion;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Distribución</strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_distribucion;?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Colonias con las que colinda</strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_colonia;?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Calles con las que colinda</strong> ";?></p>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-xs-6">
                                                    <p><?php echo $viv_calles;?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Referencias personales</strong>
                                            </p>
                                        </div>
                                        <div class='col-md-12 col-sm-12 col-xs-12 table-responsive'>
                                            <table class='table table-hover table-dynamic table-tools'>
                                                <thead>
                                                    <tr>
                                                        <th class='text-center'></th>
                                                        <th class='text-center'>Nombre</th>
                                                        <th class='text-center'>Teléfono</th>
                                                        <th class='text-center'>Tiempo de conocerlo</th>
                                                        <th class='text-center'>Referencia</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style='text-align: center; background-color:#dddddd;'><strong>Referencia Personal 1</strong></td>
                                                        <td style='text-align: center;'><?php echo $ref1_nombre; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref1_telefono; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref1_tiempo; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref1_referencia; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style='text-align: center; background-color:#dddddd;'><strong>Referencia Personal 2</strong></td>
                                                        <td style='text-align: center;'><?php echo $ref2_nombre; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref2_telefono; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref2_tiempo; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref2_referencia; ?></td>
                                                    </tr> 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Referencia vecinal</strong>
                                            </p>
                                        </div>
                                        <div class='col-md-12 col-sm-12 col-xs-12 table-responsive'>
                                            <table class='table table-hover table-dynamic table-tools'>
                                                <thead>
                                                    <tr>
                                                        <th class='text-center'>Nombre</th>
                                                        <th class='text-center'>Tiempo de conocerlo</th>
                                                        <th class='text-center'>Comentarios</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style='text-align: center;'><?php echo $ref3_nombre; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref3_tiempo; ?></td>
                                                        <td style='text-align: center;'><?php echo $ref3_comentario; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="saltopagina"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Información por el Candidato</strong>
                                            </p>
                                        </div>
                                        <?php
                                        $select = mysqli_query($link, "select * from test_laboral where id_general = '$id' order by id asc");
                                        $row = mysqli_num_rows($select);
                                        if($row > 0)
                                        {
                                            while($arr = mysqli_fetch_array($select))
                                            {
                                                $lab_empresa              = $arr['empresa'];
                                                $lab_carta                = $arr['carta'];
                                                $lab_demanda              = $arr['demanda'];
                                                $lab_telefono             = $arr['telefono'];
                                                $lab_puestos              = $arr['puestos'];
                                                $lab_depto                = $arr['depto'];
                                                $lab_sueldo               = $arr['sueldo'];
                                                $lab_domicilio            = $arr['domicilio'];
                                                $lab_contrato             = $arr['contrato'];
                                                $lab_fecha_ing            = $arr['fecha_ing'];
                                                $lab_fecha_ing = date("d-m-Y",strtotime($lab_fecha_ing));
                                                $lab_fecha_baja           = $arr['fecha_baja'];
                                                $lab_fecha_baja = date("d-m-Y",strtotime($lab_fecha_baja));
                                                $lab_motivo               = $arr['motivo'];
                                                $lab_sindicato            = $arr['sindicato'];
                                                $lab_jefe                 = $arr['jefe'];
                                                $lab_jefe_puesto          = $arr['jefe_puesto'];
                                                
                                                echo '<div class="col-md-6 col-sm-6 col-xs-12">';
                                                    echo '<p class="form-label text-center" style="color: #FFF !important; background-color: #f5a340 !important; ">';
                                                        echo '<strong>Empleo Anterior</strong>';
                                                    echo '</p>';
                                                
                                                    echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Nombre de la Empresa: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_empresa;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Carta de recomendación: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_carta;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Alguna Demanda: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_demanda;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Teléfono: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_telefono;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto Inicial - Último: </strong></p>";
                                                            echo "</div>";
                                                             echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_puestos;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Departamento: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_depto;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Sueldo Inicial - Último: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "$ ".number_format($lab_sueldo,2);
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Domicilio o sucursal: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_domicilio;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Tipo de contrato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_contrato;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de ingreso: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_fecha_ing;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de baja: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_fecha_baja;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Motivo de separación: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_motivo;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Pertenece a un Sindicato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_sindicato;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Jefe Inmediato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_jefe;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto Jefe Inmediato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $lab_jefe_puesto;
                                                            echo "</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                            }
                                        }
                                        ?> 
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Validación laboral</strong>
                                            </p>
                                        </div>
                                        <?php
                                        $select = mysqli_query($link, "select * from test_laboral where id_general = '$id' order by id asc");
                                        $row = mysqli_num_rows($select);
                                        if($row > 0)
                                        {
                                            while($arr = mysqli_fetch_array($select))
                                            {
                                                $val_fecha_consulta     = $arr['val_fecha_consulta'];
                                                    if($val_fecha_consulta === '0000-00-00')
                                                    { $val_fecha_consulta = ""; } else { $val_fecha_consulta = date("d-m-Y", strtotime($val_fecha_consulta)); }
                                                    
                                                $val_fecha_ingreso      = $arr['val_fecha_ingreso'];
                                                    if($val_fecha_ingreso === '0000-00-00')
                                                    { $val_fecha_ingreso = ""; } else { $val_fecha_ingreso = date("d-m-Y", strtotime($val_fecha_ingreso)); }
                                                
                                                $val_fecha_baja      = $arr['val_fecha_baja'];
                                                    if($val_fecha_baja === '0000-00-00')
                                                    { $val_fecha_baja = ""; } else { $val_fecha_baja = date("d-m-Y", strtotime($val_fecha_baja)); }
                                                    
                                                $val_puesto_inicial     = $arr['val_puesto_inicial'];
                                                $val_sueldo_inicial     = $arr['val_sueldo_inicial'];
                                                $val_contrato           = $arr['val_contrato'];
                                                $val_iniciativa         = $arr['val_iniciativa'];
                                                $val_metas              = $arr['val_metas'];
                                                $val_responsabilidad    = $arr['val_responsabilidad'];
                                                $val_puntualidad        = $arr['val_puntualidad'];
                                                $val_personal           = $arr['val_personal'];
                                                $val_salida             = $arr['val_salida'];
                                                $val_recontratable      = $arr['val_recontratable'];
                                                $val_nombre_info        = $arr['val_nombre_info'];
                                                $val_puesto_infor       = $arr['val_puesto_infor'];
                                                $val_observacion        = $arr['val_observacion'];
                                                
                                                echo '<div class="col-md-6 col-sm-6 col-xs-12">';
                                                    echo '<p class="form-label text-center" style="color: #FFF !important; background-color: #f5a340 !important; ">';
                                                        echo '<strong>Empleo Anterior</strong>';
                                                    echo '</p>';
                                                
                                                    echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha Consulta: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_fecha_consulta;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de Ingreso: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_fecha_ingreso;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Fecha de Baja: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_fecha_baja;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto Inicial - Último: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_puesto_inicial;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Sueldo Inicial - Último: </strong></p>";
                                                            echo "</div>";
                                                             echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "$ ".number_format($val_sueldo_inicial,2);
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Tipo de contrato: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_contrato;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Iniciativa: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_metas;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Grado de responsabilidad: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_responsabilidad;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puntualidad y Asistencia: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_puntualidad;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Personal a Cargo - Cantidad: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_personal;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Motivo de Salida: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_salida;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>¿Es recontratable?: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_recontratable;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Nombre del informante: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_nombre_info;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Puesto del informante: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_puesto_infor;
                                                            echo "</div>";
                                                        echo "</div>";
                                                        echo '<div class="row">';
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo "<p><strong>Observaciones: </strong></p>";
                                                            echo "</div>";
                                                            echo '<div class="col-md-6 col-sm-6 col-xs-6">';
                                                                echo $val_observacion;
                                                            echo "</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Demandas Laborales</strong>
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <p><?php echo "<strong>Comentarios Generales: </strong>$lab2_comentario";?></p>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Empresas: </strong>$lab2_empresa";?></p>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <p><?php echo "<strong>Fecha: </strong>$lab2_fecha";?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Relativas a cuestiones laborales</strong>
                                            </p>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <label class="form-label">
                                                        <strong>¿Qué opinión tiene sobre los Sindicatos?</strong>
                                                    </label>
                                                    <div class="controls">
                                                        <p><?php echo $lab2_opinion_sindicato;?></p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <label class="form-label">
                                                        <strong>¿Cree que vale la pena Sindicalizarse?</strong>
                                                    </label>
                                                    <div class="controls">
                                                        <p><?php echo $lab2_sindicarse;?></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-6">
                                                    <label class="form-label">
                                                        <strong>¿Lo ha estado alguna vez?</strong>
                                                    </label>
                                                    <div class="controls">
                                                        <p><?php echo $lab2_sindicalizado;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: left !important;">
                                                    <label class="form-label">
                                                        <strong>Si no lo ha estado...¿Contempla la posibilidad de estarlo?:</strong>
                                                    </label>
                                                    <div class="controls">
                                                        <p><?php echo $lab2_querer_sindicalizarse;?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="saltopagina"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Documentación</strong>
                                            </p>
                                            <div class="row">
                                                <?php 
                                                    if($docu1 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu1' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu2 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu2' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu3 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu3' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu4 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu4' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu5 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu5' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu6 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu6' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu7 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu7' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu8 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu8' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu9 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu9' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu10 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu10' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu11 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu11' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($docu12 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$docu12' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="saltopagina"></div>
                                <?php if($const1 != "" || $const2 != "" || $const3 != "" || $const4 != "") {?>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Constancia</strong>
                                            </p>
                                            <div class="row">
                                                <?php 
                                                    if($const1 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$const1' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($const2 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$const2' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($const3 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$const3' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($const4 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$const4' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="saltopagina"></div>
                                <?php if($viv1 != "" || $viv2 != "" || $viv3 != "" || $viv4 != "") {?>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Vivienda</strong>
                                            </p>
                                            <div class="row">
                                                <?php 
                                                    if($viv1 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$viv1' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($viv2 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$viv2' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($viv3 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$viv3' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($viv4 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$viv4' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="saltopagina"></div>
                                <?php if($face1 != "" || $face2 != "" || $face3 != "" || $face4 != "") {?>
                                <div class="saltopagina"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Facebook</strong>
                                            </p>
                                            <div class="row">
                                                <?php 
                                                    if($face1 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$face1' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($face2 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$face2' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($face3 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$face3' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($face4 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$face4' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($face_comment != "")
                                                    {
                                                        echo '<div class="col-md-12 col-sm-12 col-xs-12">';
                                                            echo "$face_comment";
                                                        echo "</div>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                
                                if($aviso1 != "" || $aviso2 != ""){ 
                                ?>
                                <div class="saltopagina"
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Aviso de privacidad</strong>
                                            </p>
                                            <div class="row">
                                                <?php 
                                                    if($aviso1 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$aviso1' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                    if($aviso2 != "")
                                                    {
                                                        echo '<div class="col-md-4 col-sm-6 col-xs-12">';
                                                            echo "<img src='../archivos/$id/$aviso2' style='max-width:100%;'>";
                                                        echo "</div>";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="saltopagina"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Mapa de ubicación</strong>
                                            </p>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <?php 
                                                    if($maps != "")
                                                    {
                                                        echo "<iframe src='$maps' style='width:100%; height:600px' frameborder='0' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if($aviso1 === "" && $aviso2 === "") 
                                {
                                ?>
                                <div class="saltopagina"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="form-label text-center" style="color: #FFF !important; background-color: #151f30 !important; ">
                                                <strong>Aviso de privacidad</strong>
                                            </p>
                                            <div class="row"  style="padding:1em;">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <p style="text-align:justify !important;">
                                                        Es responsabilidad absoluta la fidelidad de la información personal proporcionada a <strong>Strateggia Consultores</strong> 
                                                        de quien la emite, relacionada con una solicitud o consulta de empleo, antecedentes educativos, penales, resumen o currículum, 
                                                        incluso de origen étnico, estado civil, entre otras; información personal donde la ley así lo exija o permita. 
                                                        Por medio del presente se faculta a <strong>Strateggia Consultores</strong> para que dicha información sea divulgada 
                                                        para la contratación o no contratación del recurso de aquellas empresas subsidiarias, afiliadas, empresas conjuntas o 
                                                        todas aquellas que requieran el servicio directo de proporcionar personal a la empresa por parte de <strong>Strateggia Consultores</strong>.
                                                    </p>
                                                    <p style="text-align:justify;">
                                                        En caso de no contar con esta información personal del postulante no estaríamos en la posibilidad de promoverlo para la vacante solicitada.
                                                    </p>
                                                    <p style="text-align:justify;">
                                                        <strong>Strateggia Consultores</strong> no se obliga a garantizar la contratación de la persona que emite la información.
                                                    </p>
                                                    <p style="text-align:justify;">
                                                        <strong>Strateggia Consultores</strong> podría divulgar los datos personales si así lo exigiese la ley o de buena fe si tal 
                                                        acción fuese necesaria para cumplir con los requisitos judiciales o con el proceso judicial que se le notifique, para proteger 
                                                        y defender sus derechos o propiedad, o en casos de urgencia, para proteger la seguridad personal del individuo.
                                                    </p>
                                                    <p style="text-align:justify;">
                                                        Queda entendido que se considera que quien firma autoriza el uso de sus datos personales conforme a este aviso de privacidad, salvo comunicación en contrario.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <?php echo "<img src='$firma' style='max-width:100%;'>"; ?>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php } ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
 
    <!-- END WRAPPER -->
    <!-- BEGIN CHAT MENU -->

    <!-- END CHAT MENU -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="../assets/plugins/jquery-1.11.js"></script>
    <script src="../assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="../assets/plugins/icheck/icheck.js"></script>
    <script src="../assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="../assets/plugins/nprogress/nprogress.js"></script>
    <script src="../assets/plugins/charts-sparkline/sparkline.min.js"></script>
    
    
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="../assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="../assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="../assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="../assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
    <script src="../assets/plugins/Highcharts-3.0.4/js/highcharts.js"></script>
    <script src="../assets/plugins/Highcharts-3.0.4/js/modules/exporting.js"></script>
    
    
    
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="../assets/js/application.js"></script>
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
</body>
<script>
$(document).ready(function(){
    $('#fecha_ini').datepicker();
    $('#fecha_final').datepicker();
});

function buscar()
    {
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "buscador.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#tabla_estudios").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
$(function () {
        $('#grafica').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Gráfica de Gastos'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [""]
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
                {
                    name: 'Ingresos',
                    data:[<?php echo $ing2_total_ingresos;?>],
                    color: "#428bca"
                },
                {
                    name: 'Gastos',
                    data:[<?php echo $ing2_total_egresos;?>],
                    color: "#c75757"
                },
                {
                    name: 'Saldo',
                    data:[<?php echo $ing2_saldo;?>],
                    color:"#00b894"
                }
            ]
        });
    });

$(function () {
        $('#grafica_evaluacion').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Evaluación cualitativa del Candidato'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [""]
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
                {
                    name: 'A',
                    data:[<?php echo $eval_a;?>]  
                },
                {
                    name: 'B',
                    data:[<?php echo $eval_b;?>]  
                },
                {
                    name: 'C',
                    data:[<?php echo $eval_c;?>]  
                },
                {
                    name: 'D',
                    data:[<?php echo $eval_d;?>]  
                },
                {
                    name: 'E',
                    data:[<?php echo $eval_e;?>]  
                },
                {
                    name: 'F',
                    data:[<?php echo $eval_f;?>]  
                },
                {
                    name: 'G',
                    data:[<?php echo $eval_g;?>]  
                },
                {
                    name: 'H',
                    data:[<?php echo $eval_h;?>]  
                },
                {
                    name: 'I',
                    data:[<?php echo $eval_i;?>]  
                },
            ]
        });
    });
</script>
    
</html>