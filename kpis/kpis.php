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

<body data-page="dashboard">
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
                <a class="navbar-brand" href="">
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
                    <li class="">
                        <a href="../principal.php"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="../agregar_usuario.php"><i class="fa fa-user"></i><span class="sidebar-text">Usuarios </span></a>
                    </li>
                    <li>
                        <a href="../estudio/nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="../estudio/buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                    </li>

                    <!-- modulo de validacion -->
                    <li>
                        <a href="../validacion/agregar_validacion_laboral.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nueva validacion laboral</span></a>

                    </li>

                    <li>
                        <a href="../validacion/buscar_validacion_laboral.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar validacion laboral</span></a>

                    </li>
                    <!-- modulo de validicion -->


                    <li class="current">
                        <a href="../kpis/kpis.php"><i class="fa fa-bar-chart-o"></i><span class="sidebar-text">Indicadores</span></a>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                    </li>
                </ul>
            </div>
			
        </nav>
        
        <!-- END MAIN SIDEBAR -->


        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
            <div class="row">
                <form id="form" name="form" method="post" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3><strong>Indicadores</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Fecha Inicial</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="fecha_ini" id="fecha_ini" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Fecha Final</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="fecha_final" id="fecha_final" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Usuario</strong>
                                                </label>
                                                <div class="controls">
                                                    <select id="user" name="user" class="form-control">
                                                         <option value="" selected="selected">&nbsp;</option>
                                                             <?php
                                                             $select = mysqli_query($link, "select distinct(user) as user from test_general order by id asc");
                                                                 $row = mysqli_num_rows($select);
                                                                 if($row > 0)
                                                                 {
                                                                     while($arr = mysqli_fetch_array($select))
                                                                     {
                                                                         $user     = $arr['user'];
                                                                         echo "<option value='$user'>$user</option>";
                                                                     }
                                                                 }
                                                             ?>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Estado</strong>
                                                </label>
                                                <div class="controls">
                                                    <select id="estado" name="estado" class="form-control">
                                                         <option value="" selected="selected">&nbsp;</option>
                                                             <?php
                                                             $select = mysqli_query($link, "select * from estados order by id asc");
                                                                 $row = mysqli_num_rows($select);
                                                                 if($row > 0)
                                                                 {
                                                                     while($arr = mysqli_fetch_array($select))
                                                                     {
                                                                         $id     = $arr['id'];
                                                                         $estado = $arr['estado'];

                                                                         echo "<option value='$id'>$estado</option>";
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
                                                    <strong>Empresa</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="empresa" id="empresa" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                            <div class="controls">
                                                <a class="btn btn-primary btn-rounded" onClick="buscar();">Guardar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading bg-red" style='background-color:#151f30 !important;'>
                                            <h3 class="panel-title">Indicadores</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="grafica_estudios"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="tabla_estudios"></div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="grafica_empresa"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="tabla_empresa"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="grafica_usuario"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="tabla_usuario"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="grafica_estados"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="tabla_estados"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
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
    <script src="../assets/plugins/breakpoints/breakpoints.js"></script>
    <script src="../assets/plugins/numerator/jquery-numerator.js"></script>
    
    <!-- END MANDATORY SCRIPTS -->
        
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="../assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="../assets/js/table_dynamic.js"></script>
    <script src="../assets/js/application.js"></script>
    <script src="../assets/plugins/icheck/custom.js"></script>
    <script src="../assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../assets/js/form.js"></script>
    <script src="../assets/js/application.js"></script>
    
    <script src="../assets/plugins/datetimepicker/jquery.datetimepicker.js"></script>
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="../assets/plugins/pickadate/picker.js"></script>
    <script src="../assets/plugins/pickadate/picker.date.js"></script>
    <script src="../assets/plugins/pickadate/picker.time.js"></script>
    <script src="../assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <script src="../assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
    
    <script src="../assets/plugins/Highcharts-3.0.4/js/highcharts.js"></script>
    <script src="../assets/plugins/Highcharts-3.0.4/js/modules/exporting.js"></script>
    <script src="../assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="../assets/js/table_dynamic.js"></script>
    <script src="../assets/js/form.js"></script>
    
    <!-- END  PAGE LEVEL SCRIPTS -->
    
</body>
<script>
$(document).ready(function(){
    $('#fecha_ini').datepicker();
    $('#fecha_final').datepicker();
    $('#pago_agente').bootstrapSwitch();
});

function buscar()
    {
        /* GRAFICA ESTUDIOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "grafica_estudios.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#grafica_estudios").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
        /* TABLA ESTUDIOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "tabla_estudios.php",
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
        
        /* GRAFICA EMPRESA*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "grafica_empresa.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#grafica_empresa").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
        /* TABLA ESTUDIOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "tabla_empresa.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#tabla_empresa").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
        /* GRAFICA USUARIOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "grafica_usuario.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#grafica_usuario").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
        /* TABLA USUARIOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "tabla_usuario.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#tabla_usuario").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
        /* GRAFICA ESTADOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "grafica_estados.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#grafica_estados").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
        
        /* TABLA ESTADOS*/
        var formData = new FormData($('#form')[0]);
        $.ajax(
        {
            type : "POST",
            url : "tabla_estados.php",
            data : formData,
            async: false,
            success : function(data)
            {                 
                 $("#tabla_estados").html(data);                 
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }


</script>
    
</html>