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
    <link href="../assets/plugins/signature-pad-master/assets/jquery.signaturepad.css" rel="stylesheet">
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
                                    <h4><strong>Documentación</strong></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                                            <span class="sr-only">99% Complete (success)</span>99%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <h4 class="text-center">AVISO DE PRIVACIDAD</h4>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input name="no_estudio" id="no_estudio" type="hidden" value="estudio11">
                                            <p style="text-align:justify;">
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
                                         <div class="form-group">
                                             <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                                 <div class="controls">
                                                    <input name="firma2" id="firma2" type="hidden">
                                                    <canvas id="firma" name="firma" width="500px" style="border:1px solid #ccc; max-width:100%;"></canvas>
                                                    <input type="hidden" name="output" class="output">
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
                                                <a class="btn btn-primary btn-rounded" onClick="validar();">Acepto los términos y condiciones</a>
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
    <!-- MODAL DOCU 1 -->
    
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
    <script src="../assets/plugins/signature-pad-master/jquery.signaturepad.js"></script>
    <script src="../assets/plugins/signature-pad-master/assets/json2.min.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="../assets/js/application.js"></script>
    <script src="../assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
    <script>
    $(document).ready(function() {
      $('#form').signaturePad({drawOnly:true});
    });

function validar()
{
    //el formulario se envia
    var firma2 = document.getElementById('firma2')
    var canvas = document.getElementById('firma');
    var no_estudio = $("#no_estudio").val();
    var firma = canvas.toDataURL("image/png");

    $.ajax({
        type : "POST",
        url : "guardar_estudio.php" ,
        traditional : true,
        data : {firma:firma, firma2:firma2, no_estudio:no_estudio},
        success : function(data)
        {
            if(data == 1)
            {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                alert("Datos guardados con éxito");
                window.location.replace("../principal.php");
            }
            else
            {
                alert("Error al guardar los datos");
            }
            
        }
    });
}
 </script>
</body>

</html>