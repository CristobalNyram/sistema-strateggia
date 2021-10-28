<?php
session_start(); 
include("link.php");
if(isset($_SESSION['tipo']))
{
	$tipo = $_SESSION['tipo'];
        if($tipo === "agente")
        {
            $user = $_SESSION['user'];
        }
        else
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
                        <a href="principal2.php"><i class="fa fa-edit"></i><span class="sidebar-text">Principal</span></a>
                    </li>
                    <li>
                        <a href="estudio/nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="estudio/buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="index.php"><i class="fa fa-sign-out"></i><span class="sidebar-text">Salir del sistema</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
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
                                                                $select = mysqli_query($link, "select agente_status.id_estudio, agente_status.status, test_general.fecha, test_general.nombre, test_general.apellidop, test_general.apellidom, test_general.dir_calle, test_general.lugar_nacimiento, test_general.telefono, test_general.celular from agente_status LEFT JOIN test_general ON agente_status.id_estudio = test_general.id where agente_status.user = '$user' and agente_status.status != 'estudio11'");
                                                                $row = mysqli_num_rows($select);
                                                                if($row > 0)
                                                                {
                                                                    while($arr = mysqli_fetch_array($select))
                                                                    {
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
                                                                <td style='text-align: center;'><?php echo $fecha; ?></td>
                                                                <td style='text-align: center;'><?php echo $nombre; ?></td>
                                                                <td style='text-align: center;'><?php echo $direccion; ?></td>
                                                                <td style='text-align: center;'><?php echo $lugar_nacimiento; ?></td>
                                                                <td style='text-align: center;'><?php echo "Tel: ".$telefono." <br> Cel: ".$celular;; ?></td>
                                                                <td style='text-align: center;'><?php echo $status_nombre; ?></td>
                                                                <td style='text-align: center;'><a class='btn btn-warning' onclick="ver('<?php echo $status2;?>')"><i class='fa fa-edit' style='color:#FFF;'/></a></td>
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
function ver(a){
    var status = a.split("|")[0];
    var id_estudio = a.split("|")[1];
    
    window.open('status.php?status='+status+'&id_estudio='+id_estudio);
}
</script>
    
</html>