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
                                    <h4><strong>Datos escolares</strong></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                            <span class="sr-only">10% Complete (success)</span>10%
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12  table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead class="no-bd">
                                                        <tr>
                                                            <th style='text-align: center;'>Nivel</th>
                                                            <th style='text-align: center;'>Periodo</th>
                                                            <th style='text-align: center;'>Nombre Institución</th>
                                                            <th style='text-align: center;'>Tipo</th>
                                                            <th style='text-align: center;'>Colonia</th>
                                                            <th style='text-align: center;'>Comprobante</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-bd-y">
                                                        <tr>
                                                            <td style='text-align: center;'>Primaria</td>
                                                            <td style='text-align: center;'><input name="prim_periodo" id="prim_periodo" type="text" class="form-control"><input name="no_estudio" id="no_estudio" type="hidden" value="estudio2"></td>
                                                            <td style='text-align: center;'><input name="prim_nombre" id="prim_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="prim_gob_priv" name="prim_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="prim_colonia" id="prim_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="prim_comprobante" id="prim_comprobante" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Secundaria</td>
                                                            <td style='text-align: center;'><input name="sec_periodo" id="sec_periodo" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="sec_nombre" id="sec_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="sec_gob_priv" name="sec_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="sec_colonia" id="sec_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="sec_comprobante" id="sec_comprobante" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Preparatoria / Bachiller</td>
                                                            <td style='text-align: center;'><input name="prep_periodo" id="prep_periodo" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="prep_nombre" id="prep_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="prep_gob_priv" name="prep_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="prep_colonia" id="prep_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="prep_comprobante" id="prep_comprobante" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Técnico</td>
                                                            <td style='text-align: center;'><input name="tec_periodo" id="tec_periodo" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tec_nombre" id="tec_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="tec_gob_priv" name="tec_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="tec_colonia" id="tec_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tec_comprobante" id="tec_comprobante" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Profesional</td>
                                                            <td style='text-align: center;'><input name="pro_periodo" id="pro_periodo" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="pro_nombre" id="pro_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="pro_gob_priv" name="pro_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="pro_colonia" id="pro_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="pro_comprobante" id="pro_comprobante" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Maestría</td>
                                                            <td style='text-align: center;'><input name="ma_periodo" id="ma_periodo" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="ma_nombre" id="ma_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="ma_gob_priv" name="ma_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="ma_colonia" id="ma_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="ma_comprobante" id="ma_comprobante" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>Cursos / Diplomados</td>
                                                            <td style='text-align: center;'><input name="dip_periodo" id="dip_periodo" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="dip_nombre" id="dip_nombre" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'>
                                                                <select id="dip_gob_priv" name="dip_gob_priv" class="form-control"">
                                                                    <option value=""></option>
                                                                    <option value="gobierno">Gobierno</option>
                                                                    <option value="privada">Privada</option>
                                                                </select>
                                                            </td>
                                                            <td style='text-align: center;'><input name="dip_colonia" id="dip_colonia" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="dip_comprobante" id="dip_comprobante" type="text" class="form-control"></td>
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
                    window.location.replace("nuevo_estudio3.php");;
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

 </script>
</body>

</html>