<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['nombre']))
{
	$tipo = $_SESSION['tipo'];
        $session_user = $_SESSION['user'];
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
                    <?php
                    if($tipo ==="admin")
                    {
                    ?>
                    <li class="current">
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
                    <li>
                        <a href="../kpis/kpis.php"><i class="fa fa-bar-chart-o"></i><span class="sidebar-text">Indicadores</span></a>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                    </li>
                    <?php
                    }
                    else
                    {
                    ?>
                    }
                    <li>
                        <a href="nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                    </li>
                    <?php
                    }
                    ?>
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
                                    <h3><strong>Buscador de estudios sociolaborales</strong></h3>
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
                                                             if($tipo === "admin")
                                                             {
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
                                                             }
                                                             else
                                                             {
                                                                 echo "<option value='$session_user' selected='selected'>$session_user</option>";
                                                             }
                                                             ?>
                                                     </select>
                                                </div>
                                            </div>
                                            <?php
                                            if($tipo === "admin")
                                            {

                                            ?>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Estado</strong>
                                                </label>
                                                <div class="controls">
                                                    <select id="estado" name="estado" class="form-control" onchange="change_estado()">
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
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                    if($tipo === "admin")
                                    {
                                        
                                    ?>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre</strong>
                                                </label>
                                                <div class="controls">
                                                     <select id="nombre" name="nombre" class="form-control" onchange="change_nombre()">
                                                         <option value="" selected="selected">&nbsp;</option>
                                                             <?php
                                                             $select = mysqli_query($link, "select distinct(nombre) as nombre from test_general order by nombre asc");
                                                                 $row = mysqli_num_rows($select);
                                                                 if($row > 0)
                                                                 {
                                                                     while($arr = mysqli_fetch_array($select))
                                                                     {
                                                                         $nombre = $arr['nombre'];

                                                                         echo "<option value='$nombre'>$nombre</option>";
                                                                     }
                                                                 }
                                                             ?>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                               <label class="form-label">
                                                   <strong>Apellido Paterno</strong>
                                               </label>
                                               <div class="controls">
                                                   <select id="apellidop" name="apellido" class="form-control" onchange="change_apellidop()">
                                                        <option value="">&nbsp;</option>
                                                    </select>
                                               </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Apellido Materno</strong>
                                                </label>
                                                <div class="controls">
                                                   <select id="apellidom" name="apellidom" class="form-control">
                                                        <option value="">&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    } 
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                            <div class="controls">
                                                <a class="btn btn-primary btn-rounded" onClick="buscar();">Buscar</a>
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
                                            <h3 class="panel-title">Estudios</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <div id="tabla_estudios"></div>
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
<!-- FECHA INICIAL -->
    <button type="button" id="alerta_fecha_ini_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fecha_iniVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="fecha_iniVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Fecha Inicial" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe elegir una fecha de inicio para la búsqueda</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
<!-- FECHA FINAL -->
    <button type="button" id="alerta_fecha_fin_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fecha_finVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="fecha_finVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Fecha Inicial" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe elegir una fecha de inicio para la búsqueda</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END CHAT MENU -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="../assets/plugins/jquery-1.11.js"></script>
    <script src="../assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="../assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
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
    <script src="../assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
    <script src="../assets/js/form.js"></script>
    
    <!-- END  PAGE LEVEL SCRIPTS -->
    
</body>
<script>
$(document).ready(function(){
    $('#fecha_ini').datepicker();
    $('#fecha_final').datepicker();
    
});


function buscar()
    {
        var fecha_ini    = document.form.fecha_ini.value.length;
        var fecha_fin    = document.form.fecha_final.value.length;
        
        if (fecha_ini == 0)
        {
           $("#alerta_fecha_ini_vacio").trigger('click');
            setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.fecha_ini.focus();},2000);
            return 0;

        }
        else if (fecha_fin == 0)
        {
            $("#alerta_fecha_fin_vacio").trigger('click');
            setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.fecha_fin.focus();},2000);
            return 0;
        }
        else
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
    }

function pago_agente(e)
{
    var checkbox = this.document.getElementById("pago_agente");
    var id   = e;
    
    if(checkbox.checked == true)
    { var pago_agente = "si"; }
    else
    { var pago_agente = "no"; }
    
    $.ajax({
            type : "POST",
            url : "actualizar_estudio.php" ,
            traditional : true,
            data : {id:id, pago_agente:pago_agente},
            success : function(data)
            {                
                alert("pago agente actualizado");
            }
    });	
    
}

function pago_cliente(e)
{
    var checkbox = this.document.getElementById("pago_cliente");
    var id   = e;
    
    if(checkbox.checked == true)
    { var pago_cliente = "si"; }
    else
    { var pago_cliente = "no"; }
    
    $.ajax({
            type : "POST",
            url : "actualizar_estudio.php" ,
            traditional : true,
            data : {id:id, pago_cliente:pago_cliente},
            success : function(data)
            {                
                alert("pago cliente actualizado");
            }
    });	
    
}

function change_nombre()
    {
        var nombre = $("#nombre").val();
        $('#apellidop').empty();
        $.ajax({
            type : "POST",
            url : "buscar_apellido.php" ,
            traditional : true,
            data : {nombre:nombre},
            success : function(data)
            {
                $("#apellidop").html(data);
                
            }            
        });
    }

function change_apellidop()
    {
        var nombre = $("#nombre").val();
        var apellidop = $("#apellidop").val();
        $('#apellidom').empty();
        $.ajax({
            type : "POST",
            url : "buscar_apellido.php" ,
            traditional : true,
            data : {nombre:nombre, apellidop:apellidop},
            success : function(data)
            {
                $("#apellidom").html(data);
            }            
        });
    }
 


</script>
    
</html>