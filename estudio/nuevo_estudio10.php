<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['id']))
{
	$id = $_SESSION['id'];
        $sesion_tipo = $_SESSION['tipo'];
        
}
else
{
	 header("Location: ../index.php"); 
         /*
         $id = 99;
         $_SESSION['id']= 99;
         $sesion_tipo = "admin";
         */
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
                            <a href="../principal2.php"><i class="fa fa-edit"></i><span class="sidebar-text">Principal</span></a>
                        </li>
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
                        <li>
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
                            <a href="../kpis/kpis.php"><i class="fa fa-bar-chart-o"></i><span class="sidebar-text">Indicadores</span></a>
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
                                    <h3><strong>Estudio sociolaboral</strong></h3>
                                    <h4><strong>Demandas y cuestiones Laborales</strong></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                            <span class="sr-only">95% Complete (success)</span>95%
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <textarea id="comentario10" name="comentario10" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>
                                                    <input name="no_estudio" id="no_estudio" type="hidden" value="estudio10">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Empresa</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="empresa10" id="empresa10" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Fecha</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="fecha10" id="fecha10" type="text" class="form-control">
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
                                                    <textarea id="opinion_sindicato10" name="opinion_sindicato10" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>¿Cree que vale la pena sindicalizarse?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="sindicarse10" name="sindicarse10" class="form-control"">
                                                        <option value="" selected="selected">&nbsp;</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
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
                                                    <select id="sindicalizado10" name="sindicalizado10" class="form-control"">
                                                        <option value="" selected="selected">&nbsp;</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Si NO lo ha estado … ¿Contempla la posibilidad de estarlo?</strong>
                                                </label>
                                                <div class="controls" >
                                                    <select id="querer_sindicalizarse10" name="querer_sindicalizarse10" class="form-control"">
                                                        <option value="" selected="selected">&nbsp;</option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <input name="maps" id="maps" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-camera-retro"></i><strong>&nbsp;&nbsp;Foto de perfil</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="perfil" id="perfil">                                     
                                                    <img class="img-responsive img-rounded" id="prev_perfil" name="prev_perfil" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
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
                                                    <input class="form-control" type="file" name="docu1" id="docu1">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu1" name="prev_docu1" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu2" id="docu2">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu2" name="prev_docu2" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu3" id="docu3">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu3" name="prev_docu3" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu4" id="docu4">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu4" name="prev_docu4" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
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
                                                    <input class="form-control" type="file" name="docu5" id="docu5">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu5" name="prev_docu5" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 6</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu6" id="docu6">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu6" name="prev_docu6" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 7</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu7" id="docu7">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu7" name="prev_docu7" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 8</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu8" id="docu8">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu8" name="prev_docu8" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
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
                                                    <input class="form-control" type="file" name="docu9" id="docu9">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu9" name="prev_docu9" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 10</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu10" id="docu10">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu10" name="prev_docu10" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 11</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu11" id="docu11">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu11" name="prev_docu11" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Documento 12</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="docu12" id="docu12">                                     
                                                    <img class="img-responsive img-rounded" id="prev_docu12" name="prev_docu12" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
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
                                                    <img class="img-responsive img-rounded" id="prev_const1" name="prev_const1" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const2" id="const2">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const2" name="prev_const2" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const3" id="const3">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const3" name="prev_const3" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Constancia 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="const4" id="const4">                                     
                                                    <img class="img-responsive img-rounded" id="prev_const4" name="prev_const4" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivenda 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv1" id="viv1">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv1" name="prev_viv1" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivenda 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv2" id="viv2">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv2" name="prev_viv2" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivenda 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv3" id="viv3">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv3" name="prev_viv3" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Vivenda 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="viv4" id="viv4">                                     
                                                    <img class="img-responsive img-rounded" id="prev_viv4" name="prev_viv4" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
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
                                                    <input class="form-control" type="file" name="face1" id="face1">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face1" name="prev_face1" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face2" id="face2">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face2" name="prev_face2" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 3</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face3" id="face3">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face3" name="prev_face3" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Facebook 4</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="face4" id="face4">                                     
                                                    <img class="img-responsive img-rounded" id="prev_face4" name="prev_face4" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Aviso 1</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="aviso1" id="aviso1">                                     
                                                    <img class="img-responsive img-rounded" id="prev_aviso1" name="prev_aviso1" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <i class="fa fa-file-o"></i><strong>&nbsp;&nbsp;Aviso 2</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input class="form-control" type="file" name="aviso2" id="aviso2">                                     
                                                    <img class="img-responsive img-rounded" id="prev_aviso2" name="prev_aviso2" src="#" alt=" " style="margin-top: 1em; margin-bottom:1em; max-width: 100%;" />
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
                                                <a class="btn btn-primary btn-rounded" onClick="validar();">Guardar</a>
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
    <!-- EMPRESA -->
    <button type="button" id="alerta_empresa10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#empresa10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="empresa10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Nombre Empresa" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el nombre de la persona</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- COMENTARIO -->
    <button type="button" id="alerta_comentario10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#comentario10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="comentario10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Comentarios Generales" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir sus comentarios</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FECHA -->
    <button type="button" id="alerta_fecha10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fecha10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="fecha10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Fecha" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la fecha</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SINDICATOS -->
    <button type="button" id="alerta_opinion_sindicato10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#opinion_sindicato10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="opinion_sindicato10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "¿Qué opinión tiene sobre Sindicatos?" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir su opinión sobre los sindicatos</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SINDICARSE -->
    <button type="button" id="alerta_sindicarse10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sindicarse10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="sindicarse10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "¿Cree que vale la pena sindicarse?" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe elegir si vale la pena sindicarse</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SINDICALIZADO -->
    <button type="button" id="alerta_sindicalizado10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sindicalizado10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="sindicalizado10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "¿Lo ha estado alguna vez?" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe elegir si ha estado sindicalizado</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- QUERER SINDICALIZARSE -->
    <button type="button" id="alerta_querer_sindicalizarse10_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#querer_sindicalizarse10Vacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="querer_sindicalizarse10Vacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Si NO lo ha estado … ¿Contempla la posibilidad de estarlo?" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe elegir si contempla la posiblidad de estar sindicalizado</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
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
        $('#fecha10').datepicker();
        
    });
    function validar()
    {
        //el formulario se envia
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "guardar_estudio.php",
            data : formData,
            async: false,
            success : function(data)
            {
                if(data == 1)
                {
                    window.location.replace("nuevo_estudio11.php");
                }
                else
                {
                    alert("Error al guardar los datos");
                }
                //$("html, body").animate({ scrollTop: 0 }, "slow");
                //alert("Datos guardados con éxito");
                //window.location.replace("../principal.php");
            },
            cache: false,
            contentType: false,
            processData: false
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

 </script>
</body>
<script>
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
                       window.location.replace("nuevo_estudio11.php");
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
    
</script>
    
</html>