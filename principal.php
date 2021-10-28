<?php
session_start(); 
include("link.php");
if(isset($_SESSION['tipo']))
{
	$tipo = $_SESSION['tipo'];
        if($tipo != "admin")
        {
            header("Location: estudio/nuevo_estudio.php");
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
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.css">
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.tableTools.css">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                    <li class="current">
                        <a href="principal.php"><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
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
			<!--
            <div class="footer-widget">
			
                <img src="assets/img/gradient.png" alt="gradient effet" class="sidebar-gradient-img" />
                <div id="sidebar-charts">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Orders</div>
                            <div class="sidebar-chart-number">1,256</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar1"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Income</div>
                            <div class="sidebar-chart-number">$47,564</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar2"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Visits</div>
                            <div class="sidebar-chart-number" id="number-visits">147,687</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar3"></span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-footer clearfix">
                    <a class="pull-left" href="profil.html" rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>
                    <a class="pull-left toggle_fullscreen" href="#" rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                    <a class="pull-left" href="lockscreen.html" rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                    <a class="pull-left" href="login.html" rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
                </div> 
            </div>
			-->
        </nav>
        
        <!-- END MAIN SIDEBAR -->


        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-12 panel-stat">
                        <div class="panel-body bg-dark p-15">
                            <div class="row m-b-20">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-forms"></i>
                                </div>
                                <div class="col-xs-9" style="text-align:right; padding-right:1em;">
                                    
                                    <?php
                                            $mes = date("m");
                                            
                                            switch ($mes)
                                            {
                                                case 1:
                                                    $mes2 = "Enero";
                                                    break;
                                                case 2:
                                                    $mes2 = "Febrero";
                                                    break;
                                                case 3:
                                                    $mes2 = "Marzo";
                                                    break; 
                                                case 4:
                                                    $mes2 = "Abril";
                                                    break;
                                                case 5:
                                                    $mes2 = "Mayo";
                                                    break;
                                                case 6:
                                                    $mes2 = "Junio";
                                                    break;
                                                case 7:
                                                    $mes2 = "Julio";
                                                    break;
                                                case 8:
                                                    $mes2 = "Agosto";
                                                    break;
                                                case 9:
                                                    $mes2 = "Septiembre";
                                                    break;
                                                case 10:
                                                    $mes2 = "Octubre";
                                                    break;
                                                case 11:
                                                    $mes2 = "Noviembre";
                                                    break;
                                                case 12:
                                                    $mes2 = "Diciembre";
                                                    break;
                                            }
                                            
                                            
                                            $anio = date("Y");
                                            $ini = $anio."/".$mes."/01";
                                            $fin = $anio."/".$mes."/30";
                                            echo '<small class="stat-title">Estudios realizados en el mes de '.$mes2.'</small>';
                                            //echo "select count(id)as id from test_general where fecha between '$ini' and '$fin'";
                                                $select = mysqli_query($link, "select count(id)as id from test_general where fecha between '$ini' and '$fin'");
                                                $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $id             =$arr['id'];
                                                    }
                                                }
                                             
                                             
                                            ?>
                                    <h1 class="m-0 w-500"><?php echo $id; ?></h1>
                                </div> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-12 panel-stat">
                        <div class="panel-body bg-green p-15">
                            <div class="row m-b-20">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-forms"></i>
                                </div>
                                <div class="col-xs-9" style="text-align:right; padding-right:1em;">
                                    
                                    <?php
                                            $mes = date("d-m-Y");
                                            $mes4 = strtotime($mes);
                                            $mes_ant = date("m",strtotime("-1 month",$mes4)); 
                                            
                                            switch ($mes_ant)
                                            {
                                                case 1:
                                                    $mes3 = "Enero";
                                                    break;
                                                case 2:
                                                    $mes3 = "Febrero";
                                                    break;
                                                case 3:
                                                    $mes3 = "Marzo";
                                                    break; 
                                                case 4:
                                                    $mes3 = "Abril";
                                                    break;
                                                case 5:
                                                    $mes3 = "Mayo";
                                                    break;
                                                case 6:
                                                    $mes3 = "Junio";
                                                    break;
                                                case 7:
                                                    $mes3 = "Julio";
                                                    break;
                                                case 8:
                                                    $mes3 = "Agosto";
                                                    break;
                                                case 9:
                                                    $mes3 = "Septiembre";
                                                    break;
                                                case 10:
                                                    $mes3 = "Octubre";
                                                    break;
                                                case 11:
                                                    $mes3 = "Noviembre";
                                                    break;
                                                case 12:
                                                    $mes3 = "Diciembre";
                                                    break;
                                            }
                                            
                                            
                                            $anio = date("Y");
                                            $ini = $anio."/".$mes_ant."/01";
                                            $fin = $anio."/".$mes_ant."/30";
                                            echo '<small class="stat-title">Estudios realizados en el mes de '.$mes3.'</small>';
                                            //echo "select count(id)as id from test_general where fecha between '$ini' and '$fin'";
                                                $select = mysqli_query($link, "select count(id)as id from test_general where fecha between '$ini' and '$fin'");
                                                $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $id             =$arr['id'];
                                                    }
                                                }
                                             
                                             
                                            ?>
                                    <h1 class="m-0 w-500"><?php echo $id; ?></h1>
                                </div> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-12 panel-stat">
                        <div class="panel-body bg-blue p-15">
                            <div class="row m-b-20">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-forms"></i>
                                </div>
                                <div class="col-xs-9" style="text-align:right; padding-right:1em;">
                                    
                                    <?php
                                            
                                            $anio = date("Y");
                                            $ini = $anio."/01/01";
                                            $fin = $anio."/12/31";
                                            echo '<small class="stat-title">Estudios realizados en el '.$anio.'</small>';
                                            //echo "select count(id)as id from test_general where fecha between '$ini' and '$fin'";
                                                $select = mysqli_query($link, "select count(id)as id from test_general where fecha between '$ini' and '$fin'");
                                                $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $id             =$arr['id'];
                                                    }
                                                }
                                             
                                             
                                            ?>
                                    <h1 class="m-0 w-500"><?php echo $id; ?></h1>
                                </div> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="panel no-bd bd-12 panel-stat">
                        <div class="panel-body bg-purple p-15">
                            <div class="row m-b-20">
                                <div class="col-xs-3">
                                    <i class="glyph-icon flaticon-forms"></i>
                                </div>
                                <div class="col-xs-9" style="text-align:right; padding-right:1em;">
                                    
                                    <?php
                                            
                                            $anio = date("d-m-Y");
                                            $anio2 = strtotime($anio);
                                            $anio_ant = date("Y",strtotime("-1 year",$anio2)); 
                                            $ini = $anio_ant."/01/01";
                                            $fin = $anio_ant."/12/31";
                                            echo '<small class="stat-title">Estudios realizados en el '.$anio_ant.'</small>';
                                            //echo "select count(id)as id from test_general where fecha between '$ini' and '$fin'";
                                                $select = mysqli_query($link, "select count(id)as id from test_general where fecha between '$ini' and '$fin'");
                                                $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $id             =$arr['id'];
                                                    }
                                                }
                                             
                                             
                                            ?>
                                    <h1 class="m-0 w-500"><?php echo $id; ?></h1>
                                </div> 
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                                        <div id="grafica_estudios" style="margin: 0 auto; border: 1px solid #ccc;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-red" style='background-color:#151f30 !important;'>
                            <h3 class="panel-title">Estudios no terminados</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                    <table class="table table-hover table-dynamic table-tools">
                                        <thead>
                                            <tr>
                                                <th class='text-center'>No. Estudio</th>
                                                <th class='text-center'>Usuario</th>
                                                <th class='text-center'>Fecha</th>
                                                <th class='text-center'>Nombre del Entrevistado</th>
                                                <th class='text-center'>Dirección</th>
                                                <th class='text-center'>Lugar de Nacimiento</th>
                                                <th class='text-center'>Teléfono / Celular</th>
                                                <th class='text-center'>Status</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $select = mysqli_query($link, "select agente_status.id_estudio, agente_status.user, agente_status.status, test_general.fecha, test_general.nombre, test_general.apellidop, test_general.apellidom, test_general.dir_calle, test_general.lugar_nacimiento, test_general.telefono, test_general.celular from agente_status LEFT JOIN test_general ON agente_status.id_estudio = test_general.id where agente_status.status != 'estudio11'");
                                                $row = mysqli_num_rows($select);
                                                if($row > 0)
                                                {
                                                    while($arr = mysqli_fetch_array($select))
                                                    {
                                                        $usuario            = $arr['user'];
                                                        $id_estudio         = $arr['id_estudio'];
                                                        $status             = $arr['status'];
                                                        $fecha              = date("d-m-Y", strtotime($arr['fecha']));
                                                        $nombre             = $arr['nombre']." ".$arr['apellidop']." ".$arr['apellidom'];
                                                        $direccion          = $arr['dir_calle'];
                                                        $lugar_nacimiento   = $arr['lugar_nacimiento'];
                                                        $telefono           = $arr['telefono'];
                                                        $celular            = $arr['celular'];

                                                        switch ($status) 
                                                        {
                                                            case "general":
                                                                $status = "nuevo_estudio2.php"; 
                                                                $status_nombre = "Estudios no terminados";
                                                                break;
                                                            case "estudio2";
                                                                $status = "nuevo_estudio3.php"; 
                                                                $status_nombre = "Estudio sociolaboral";
                                                                break;
                                                            case "estudio3";
                                                                $status = "nuevo_estudio4.php"; 
                                                                $status_nombre = "Gastos, Bienes y Adeudos";
                                                                break;
                                                            case "estudio4";
                                                                $status = "nuevo_estudio5.php"; 
                                                                $status_nombre = "Gastos, Bienes y Adeudos";
                                                                break;
                                                            case "estudio5";
                                                                $status = "nuevo_estudio6.php"; 
                                                                $status_nombre = "Estilo de Vida";
                                                                break;
                                                            case "estudio6";
                                                                $status = "nuevo_estudio7.php"; 
                                                                $status_nombre = "Condiciones de vivienda y economía";
                                                                break;
                                                            case "estudio7";
                                                                $status = "nuevo_estudio8.php"; 
                                                                $status_nombre = "Referencias";
                                                                break;
                                                            case "estudio8";
                                                                $status = "nuevo_estudio9.php"; 
                                                                $status_nombre = "Información Laboral";
                                                                break;
                                                            case "estudio9";
                                                                $status = "nuevo_estudio10.php"; 
                                                                $status_nombre = "Demandas y cuestiones Laborales";
                                                                break;
                                                            case "estudio10";
                                                                $status = "nuevo_estudio11.php"; 
                                                                $status_nombre = "Aviso de Privacidad";
                                                                break;
                                                        }

                                                        $status2 = "$status|$id_estudio";

                                            ?>
                                            <tr>
                                                <td style='text-align: center;'><?php echo $id_estudio; ?></td>
                                                <td style='text-align: center;'><?php echo $usuario; ?></td>
                                                <td style='text-align: center;'><?php echo $fecha; ?></td>
                                                <td style='text-align: center;'><?php echo $nombre; ?></td>
                                                <td style='text-align: center;'><?php echo $direccion; ?></td>
                                                <td style='text-align: center;'><?php echo $lugar_nacimiento; ?></td>
                                                <td style='text-align: center;'><?php echo "Tel: ".$telefono." <br> Cel: ".$celular;; ?></td>
                                                <td style='text-align: center;'><?php echo $status_nombre; ?></td>
                                                <td style='text-align: center;'><a class='btn btn-warning' onclick="ver_estudio('<?php echo $status2;?>')"><i class='fa fa-edit' style='color:#FFF;'/></a></td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading bg-red" style='background-color:#151f30 !important;'>
                                            <h3 class="panel-title">Estudios no validados</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                                                    <table class="table table-hover table-dynamic table-tools">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th class='text-center'>Agente</th>
                                                                <th class='text-center'>Fecha</th>
                                                                <th class='text-center'>Nombre</th>
                                                                <th class='text-center'>Apellido Paterno</th>
                                                                <th class='text-center'>Apellido Materno</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $select = mysqli_query($link, "select * from test_general where validado !='si'");
                                                                $row = mysqli_num_rows($select);
                                                                if($row > 0)
                                                                {
                                                                    while($arr = mysqli_fetch_array($select))
                                                                    {
                                                                        $id         = $arr['id'];
                                                                        $id = base64_encode($id);
                                                                        $user       = $arr['user'];
                                                                        $fecha      = $arr['fecha'];
                                                                        $fecha      = date("d-m-Y",strtotime($fecha));
                                                                        $nombre     = $arr['nombre'];
                                                                        $apellidop  = $arr['apellidop'];
                                                                        $apellidom  = $arr['apellidom'];
                                                            ?>
                                                            <tr>
                                                                <td style='text-align: center;'><a class='btn btn-warning' href="estudio/validacion.php?id='<?php echo $id;?>'"><i class='fa fa-edit' style='color:#FFF;'/></a></td>
                                                                <td style='text-align: center;'><?php echo $user; ?></td>
                                                                <td style='text-align: center;'><?php echo $fecha; ?></td>
                                                                <td style='text-align: center;'><?php echo $nombre; ?></td>
                                                                <td style='text-align: center;'><?php echo $apellidop; ?></td>
                                                                <td style='text-align: center;'><?php echo $apellidom; ?></td>
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
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN CHAT MENU -->

    <!-- END CHAT MENU -->
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
 
    <script src="assets/plugins/Highcharts-3.0.4/js/highcharts.js"></script>
    <script src="assets/plugins/Highcharts-3.0.4/js/modules/exporting.js"></script>
    <script src="assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/table.editable.html"></script>
    <script src="assets/js/table_dynamic.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
</body>
<script>
$(document).ready(function() {
    $.ajax({
            
            url : "generar_grafica.php" ,
            traditional : true,
            data : {},
            success : function(data)
            {
                $("#grafica_estudios").html(data);
            }
    });	
});

function ver_estudio(a){
    var status = a.split("|")[0];
    var id_estudio = a.split("|")[1];
    
    window.open('status.php?status='+status+'&id_estudio='+id_estudio);
}
</script>
    
</html>