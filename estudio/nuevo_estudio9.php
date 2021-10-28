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
	 //header("Location: index.php"); 
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
                                    <h4><strong>Información Laboral</strong></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (success)</span>80%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12  table-responsive">
                                                <h4>Información por el candidato</h4>
                                                <table class="table table-striped table-hover">
                                                    <thead class="no-bd">
                                                        <tr>
                                                            <th style='text-align: center;'>Historia Laboral</th>
                                                            <th style='text-align: center;'>Empleo Anterior</th>
                                                            <th style='text-align: center;'>Empleo Anterior</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-bd-y">
                                                        <tr>
                                                            <td style='text-align: center;'>Nombre Empresa</td>
                                                            <td style='text-align: center;'><input name="empresa[]" id="empresa1" type="text" class="form-control"><input name="no_estudio" id="no_estudio" type="hidden" value="estudio9"></td>
                                                            <td style='text-align: center;'><input name="empresa[]" id="empresa2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Carta de recomendación</td>
                                                            <td style='text-align: center;'><input name="carta[]" id="carta1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="carta[]" id="carta2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Alguna Demanda</td>
                                                            <td style='text-align: center;'><input name="demanda[]" id="demanda1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="demanda[]" id="demanda2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Teléfono</td>
                                                            <td style='text-align: center;'><input name="telefono[]" id="telefono1" type="text" class="form-control phone-inputmask"></td>
                                                            <td style='text-align: center;'><input name="telefono[]" id="telefono2" type="text" class="form-control phone-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Puesto Inicial - Último</td>
                                                            <td style='text-align: center;'><input name="puestos[]" id="puestos1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="puestos[]" id="puestos2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Departamento</td>
                                                            <td style='text-align: center;'><input name="depto[]" id="depto1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="depto[]" id="depto2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Sueldo Inicial - Último</td>
                                                            <td style='text-align: center;'><input name="sueldo[]" id="sueldo1" type="text" class="form-control currency-inputmask"></td>
                                                            <td style='text-align: center;'><input name="sueldo[]" id="sueldo2" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Domicilio o sucursal</td>
                                                            <td style='text-align: center;'><input name="domicilio[]" id="domicilio1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="domicilio[]" id="domicilio2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Tipo de contrato</td>
                                                            <td style='text-align: center;'><input name="contrato[]" id="contrato1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="contrato[]" id="contrato2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Fecha de ingreso</td>
                                                            <td style='text-align: center;'><input name="fecha_ing[]" id="fecha_ing1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="fecha_ing[]" id="fecha_ing2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Fecha de baja</td>
                                                            <td style='text-align: center;'><input name="fecha_baja[]" id="fecha_baja1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="fecha_baja[]" id="fecha_baja2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Motivo de separación</td>
                                                            <td style='text-align: center;'><input name="motivo[]" id="motivo1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="motivo[]" id="motivo2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Pertenece a un sindicato</td>
                                                            <td style='text-align: center;'><input name="sindicato[]" id="sindicato1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="sindicato[]" id="sindicato2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Jefe inmediato</td>
                                                            <td style='text-align: center;'><input name="jefe[]" id="jefe1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="jefe[]" id="jefe2" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Puesto Jefe inmediato</td>
                                                            <td style='text-align: center;'><input name="jefe_puesto[]" id="jefe_puesto1" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="jefe_puesto[]" id="jefe_puesto2" type="text" class="form-control"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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
    <button type="button" id="alerta_empresa_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#empresaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="empresaVacio" role="dialog">
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
    
    <!-- CARTA -->
    <button type="button" id="alerta_carta_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cartaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="cartaVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Carta de Recomendación" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la carta de recomendación</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- DEMANDA -->
    <button type="button" id="alerta_demanda_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#demandaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="demandaVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Alguna Demanda" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir si existe algunda</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- TELEFONO -->
    <button type="button" id="alerta_telefono_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#telefonoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="telefonoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Teléfono" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el teléfono de contacto</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- PUESTOS -->
    <button type="button" id="alerta_puestos_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#puestosVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="puestosVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Puesto Inicial - Último" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir los puestos inicial y último</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- DEPARTAMENTO -->
    <button type="button" id="alerta_depto_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#deptoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="deptoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Departamento" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el departamento del trabajo escrito anteriormente</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SUELDO -->
    <button type="button" id="alerta_sueldo_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sueldoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="sueldoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Sueldo Inicial - Último" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir los sueldos inicial y último</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- DOMICILIO -->
    <button type="button" id="alerta_domicilio_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#domicilioVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="domicilioVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Domicilio o sucursal" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el domicilio o sucursal del empleo escrito anteriormente</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTRATO -->
    <button type="button" id="alerta_contrato_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contratoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="contratoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Tipo de contrato" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el tipo de contrato que tuvo</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FECHA DE INGRESO -->
    <button type="button" id="alerta_fecha_ing_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fecha_ingVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="fecha_ingVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Fecha de ingreso" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la fecha de ingreso</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- FECHA BAJA -->
    <button type="button" id="alerta_fecha_baja_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fecha_bajaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="fecha_bajaVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Fecha de baja" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la fecha de baja </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MOTIVO -->
    <button type="button" id="alerta_motivo_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#motivoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="motivoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Motivo de separación" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el motivo por el cual se separó de la empresa </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- SINDICATO -->
    <button type="button" id="alerta_sindicato_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sindicatoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="sindicatoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Pertenece a algún sindicato" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir si pertenece a algún sindicato </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JEFE INMEDIATO -->
    <button type="button" id="alerta_jefe_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#jefeVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="jefeVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Jefe inmediato" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el nombre de su jefe inmediato </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- PUESTO JEFE INMEDIATO -->
    <button type="button" id="alerta_jefe_puesto_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#jefe_puestoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="jefe_puestoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Puesto Jefe inmediato" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el puesto de su jefe_puesto inmediato </p>
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
        $('#fecha_ing1').datepicker();
        $('#fecha_ing2').datepicker();
        $('#fecha_baja1').datepicker();
        $('#fecha_baja2').datepicker();
        
        $('#val_fecha_consulta1').datepicker();
        $('#val_fecha_consulta2').datepicker();
        $('#val_fecha_ingreso1').datepicker();
        $('#val_fecha_ingreso2').datepicker();
        $('#val_fecha_baja1').datepicker();
        $('#val_fecha_baja2').datepicker();
    });
    function validar()
{
     var empresa1               = document.form.empresa1.value.length;
     var empresa2               = document.form.empresa2.value.length;
     var carta1                 = document.form.carta1.value.length;
     var carta2                 = document.form.carta2.value.length;
     var demanda1               = document.form.demanda1.value.length;
     var demanda2               = document.form.demanda2.value.length;
     var telefono1              = document.form.telefono1.value.length;
     var telefono2              = document.form.telefono2.value.length;
     var puestos1               = document.form.puestos1.value.length;
     var puestos2               = document.form.puestos2.value.length;
     var depto1                 = document.form.depto1.value.length;
     var depto2                 = document.form.depto2.value.length;
     var sueldo1                = document.form.sueldo1.value.length;
     var sueldo2                = document.form.sueldo2.value.length;
     var domicilio1             = document.form.domicilio1.value.length;
     var domicilio2             = document.form.domicilio2.value.length;
     var contrato1              = document.form.contrato1.value.length;
     var contrato2              = document.form.contrato2.value.length;
     var fecha_ing1             = document.form.fecha_ing1.value.length;
     var fecha_ing2             = document.form.fecha_ing2.value.length;
     var fecha_baja1            = document.form.fecha_baja1.value.length;
     var fecha_baja2            = document.form.fecha_baja2.value.length;
     var motivo1                = document.form.motivo1.value.length;
     var motivo2                = document.form.motivo2.value.length;
     var sindicato1             = document.form.sindicato1.value.length;
     var sindicato2             = document.form.sindicato2.value.length;
     var jefe1                  = document.form.jefe1.value.length;
     var jefe2                  = document.form.jefe2.value.length;
     var jefe_puesto1           = document.form.jefe_puesto1.value.length;
     var jefe_puesto2           = document.form.jefe_puesto2.value.length;
         
     
     if (empresa1 == 0 || empresa2 == 0)
    {
       $("#alerta_empresa_vacio").trigger('click');
        return 0;
       
    }
    else if (carta1 == 0 || carta2 == 0)
    {
       $("#alerta_carta_vacio").trigger('click');
        return 0;
       
    }
    else if (demanda1 == 0 || demanda2 == 0)
    {
       $("#alerta_demanda_vacio").trigger('click');
        return 0;
       
    }
     else if (telefono1 == 0 || telefono2 == 0)
    {
       $("#alerta_telefono_vacio").trigger('click');
        return 0;
       
    }
    else if (puestos1 == 0 || puestos2 == 0)
    {
       $("#alerta_puestos_vacio").trigger('click');
        return 0;
       
    }
    else if (depto1 == 0 || depto2 == 0)
    {
       $("#alerta_depto_vacio").trigger('click');
        return 0;
       
    }
    else if (sueldo1 == 0 || sueldo2 == 0)
    {
       $("#alerta_sueldo_vacio").trigger('click');
        return 0;
       
    }
    else if (domicilio1 == 0 || domicilio2 == 0)
    {
       $("#alerta_domicilio_vacio").trigger('click');
        return 0;
       
    }
    else if (contrato1 == 0 || contrato2 == 0)
    {
       $("#alerta_contrato_vacio").trigger('click');
        return 0;
       
    }
    else if (fecha_ing1 == 0 || fecha_ing2 == 0)
    {
       $("#alerta_fecha_ing_vacio").trigger('click');
        return 0;
       
    }
    else if (fecha_baja1 == 0 || fecha_baja2 == 0)
    {
       $("#alerta_fecha_baja_vacio").trigger('click');
        return 0;
       
    }
    else if (motivo1 == 0 || motivo2 == 0)
    {
       $("#alerta_motivo_vacio").trigger('click');
        return 0;
       
    }
    else if (sindicato1 == 0 || sindicato2 == 0)
    {
       $("#alerta_sindicato_vacio").trigger('click');
        return 0;
       
    }
    else if (jefe1 == 0 || jefe2 == 0)
    {
       $("#alerta_jefe_vacio").trigger('click');
        return 0;
       
    }
    else if (jefe_puesto1 == 0 || jefe_puesto2 == 0)
    {
       $("#alerta_jefe_puesto_vacio").trigger('click');
        return 0;
       
    }
    
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
                if(data == 11)
                {
                    window.location.replace("nuevo_estudio10.php");
                }
                else
                {
                    alert("Error al guardar los datos");
                }
                
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

</html>