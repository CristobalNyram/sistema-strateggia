<?php
session_start(); 
include("link.php");
if(isset($_SESSION['nombre']))
{
	$tipo = $_SESSION['tipo'];
        if($_SESSION['tipo'] != "admin")
        {
            header("Location: index.php"); 
        }
}
else
{
	 header("Location: index.php"); 
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
	<link rel="shortcut icon" href="imagenes/logo.png">
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                <a class="navbar-brand" href="">
                    <img src="imagenes/logo.png" alt="logo" width="79" height="26">
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
                        <a href="principal.php"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li class="current">
                        <a href="agregar_usuario.php"><i class="fa fa-user"></i><span class="sidebar-text">Usuarios </span></a>
                    </li>
                    <li>
                        <a href="estudio/nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="estudio/buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                    </li>

                    <!-- modulo de validacion -->
                    <li>
                        <a href="./validacion/agregar_validacion_laboral.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nueva validacion laboral</span></a>

                    </li>

                    <li>
                        <a href="./validacion/buscar_validacion_laboral.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar validacion laboral</span></a>

                    </li>
                    <!-- modulo de validicion -->

                    <li>
                        <a href="kpis/kpis.php"><i class="fa fa-bar-chart-o"></i><span class="sidebar-text">Indicadores</span></a>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <div class="row">
                    <form id="form_venta" name="form_venta" method="post" enctype="multipart/form-data">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Agregar usuarios</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="nombre" id="nombre" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Apellido paterno</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="apellidop" id="apellidop" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Apellido materno</strong>
                                                </label>
                                                <div class="controls">
                                                    <input name="apellidom" id="apellidom" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 1em;">
                                        <div class="form-group">
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Nombre de usuario</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="user" id="user" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Contraseña</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="password" id="password" type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <label class="form-label">
                                                    <strong>Confirmar Contraseña</strong>
                                                </label>
                                                <div class="controls" >
                                                    <input name="password2" id="password2" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                           <label class="form-label">
                                               <strong>Tipo de usuario</strong>
                                           </label>
                                           <div class="controls">
                                               <select id="tipo" name="tipo" class="form-control" style="display: none;">
                                                   <option value="" selected="selected">&nbsp;</option>
                                                   <option value="admin">Admin</option>
                                                   <option value="agente">Agente</option>

                                               </select>
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
        <div id="main-content">
            <div class="row">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12  table-responsive">
                                                <table class="table table-striped table-hover">
                                                    <thead class="no-bd">
                                                        <tr>
                                                            <th style='text-align: center;'></th>
                                                            <th style='text-align: center;'>Nombre</th>
                                                            <th style='text-align: center;'>Apellido paterno</th>
                                                            <th style='text-align: center;'>Apellido materno</th>
                                                            <th style='text-align: center;'>Nombre de usuario</th>
                                                            <th style='text-align: center;'>Tipo de usuario</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-bd-y">
                                                        <?php
                                                            $select = mysqli_query($link, "select * from usuarios");
                                                            $row = mysqli_num_rows($select);
                                                            if($row > 0)
                                                            {
                                                                while($arr = mysqli_fetch_array($select))
                                                                {
                                                                    $nombre     = $arr['nombre'];
                                                                    $apellidop  = $arr['apellidop'];
                                                                    $apellidom  = $arr['apellidom'];
                                                                    $user       = $arr['user'];
                                                                    $tipo       = $arr['tipo'];
                                                        ?>
                                                        <tr>
                                                            <td style='text-align: center;'><a class='btn btn-danger' onclick='borrar_usuario("<?php echo $user; ?>")')><i class='fa fa-times' style='color:#FFF;'/></a></td>
                                                            <td style='text-align: center;'><?php echo $nombre; ?></td>
                                                            <td style='text-align: center;'><?php echo $apellidop; ?></td>
                                                            <td style='text-align: center;'><?php echo $apellidom; ?></td>
                                                            <td style='text-align: center;'><?php echo $user; ?></td>
                                                            <td style='text-align: center;'><?php echo $tipo; ?></td>
                                                        </tr>
                                                        <?php
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN MODALS -->
    
    <!-- ID -->
    <button type="button" id="alerta_nombre_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#nombreVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="nombreVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Nombre" Vacío</h4>
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
    
    <!-- LARGO -->
    <button type="button" id="alerta_apellidop_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#apellidopVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="apellidopVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Apellido paterno" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe capturar el apellido de la persona</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ALTO -->
    <button type="button" id="alerta_apellidom_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#apellidomVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="apellidomVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Apellido materno" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el apellido materno</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ANCHO -->
    <button type="button" id="alerta_user_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#userVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="userVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Nombre de usuario" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el nombre de usuario</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PRECIO M3 -->
    <button type="button" id="alerta_password_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#passwordVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="passwordVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Contraseña" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la contraseña</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CLIENTE -->
    <button type="button" id="alerta_tipo_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tipoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="tipoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Tipo" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe seleccionar el tipo de usuario</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal_borrar_exito" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                  <p>El usuario se borró con éxito</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_borrar_error" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                  <p>El usuario no se borró con éxito</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
     <!-- END MODALS -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="assets/plugins/icheck/icheck.js"></script>
    <script src="assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="assets/plugins/nprogress/nprogress.js"></script>
    <script src="assets/plugins/charts-sparkline/sparkline.min.js"></script>
   
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    
    <script src="assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
    
    <script>
    
    function validar()
{
    var nombre       	= document.form_venta.nombre.value.length;
    var apellidop      	= document.form_venta.apellidop.value.length;
    var apellidom      	= document.form_venta.apellidom.value.length;
    var user       	= document.form_venta.user.value.length;
    var password     	= document.form_venta.password.value.length;
    var password2     	= document.form_venta.password2.value.length;
    var tipo      	= document.form_venta.tipo.value.length;
 
    if (nombre == 0)
    {
       $("#alerta_nombre_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.nombre.focus();},2000);
        return 0;
       
    }
    else if (apellidop == 0)
    {
        $("#alerta_apellidop_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.apellidop.focus();},2000);
        return 0;
    }
    else if (apellidom == 0)
    {
        $("#alerta_apellidom_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.apellidom.focus();},2000);
        return 0;
    }
    else if (user == 0)
    {
        $("#alerta_user_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.user.focus();},2000);
        return 0;
    }
    else if (password == 0)
    {
        $("#alerta_password_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.password.focus();},2000);
        return 0;
    }
    else if (password2 != password)
    {
        $("#alerta_password2_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.password.focus();},2000);
        return 0;
    }
    else if (tipo == 0)
    {
        $("#alerta_tipo_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form_venta.tipo.focus();},2000);
        return 0;
    }
    else
    {
    
        //el formulario se envia
        var formData = new FormData($('#form_venta')[0]);
        $.ajax(
        {
            type : "POST",
            url : "guardar_usuario.php",
            data : formData,
            async: false,
            success : function(data)
            {
                 location.reload();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
    
}
function borrar_usuario(a)
{   
    //alert(a);
    var user = a;
    $.ajax({
            type : "POST",
            url : "borrar_usuario.php" ,
            traditional : true,
            data : {user:user},
            success : function(data)
            {                
                 location.reload();
            }
    });	
    
}
 </script>
</body>

</html>