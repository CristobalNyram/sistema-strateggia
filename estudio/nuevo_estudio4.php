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
                                    <h4><strong>Gastos, Bienes y Adeudos</strong></h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (success)</span>30%
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12  table-responsive">
                                                <h4><strong>Autos</strong></h4>
                                                <table class="table table-striped table-hover">
                                                    <thead class="no-bd">
                                                        <tr>
                                                            <th style='text-align: center;'>No.</th>
                                                            <th style='text-align: center;'>Propietario</th>
                                                            <th style='text-align: center;'>Año</th>
                                                            <th style='text-align: center;'>Tipo</th>
                                                            <th style='text-align: center;'>Marca</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-bd-y">
                                                        <tr>
                                                            <td style='text-align: center;'>1</td>
                                                            <td style='text-align: center;'><input name="propietario[]" id="propietario[]" type="text" class="form-control"><input name="no_estudio" id="no_estudio" type="hidden" value="estudio4"></td>
                                                            <td style='text-align: center;'><input name="ano[]" id="ano[]" type="text" class="form-control year-inputmask"></td>
                                                            <td style='text-align: center;'><input name="tipo[]" id="tipo[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="marca[]" id="marca[]" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>2</td>
                                                            <td style='text-align: center;'><input name="propietario[]" id="propietario[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="ano[]" id="ano[]" type="text" class="form-control year-inputmask"></td>
                                                            <td style='text-align: center;'><input name="tipo[]" id="tipo[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="marca[]" id="marca[]" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>3</td>
                                                            <td style='text-align: center;'><input name="propietario[]" id="propietario[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="ano[]" id="ano[]" type="text" class="form-control year-inputmask"></td>
                                                            <td style='text-align: center;'><input name="tipo[]" id="tipo[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="marca[]" id="marca[]" type="text" class="form-control"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>4</td>
                                                            <td style='text-align: center;'><input name="propietario[]" id="propietario[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="ano[]" id="ano[]" type="text" class="form-control year-inputmask"></td>
                                                            <td style='text-align: center;'><input name="tipo[]" id="tipo[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="marca[]" id="marca[]" type="text" class="form-control"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12  table-responsive">
                                                <h4><strong>Inmuebles (Casas, Terrenos, propiedades)</strong></h4>
                                                <table class="table table-striped table-hover">
                                                    <thead class="no-bd">
                                                        <tr>
                                                            <th style='text-align: center;'>No.</th>
                                                            <th style='text-align: center;'>Propietario</th>
                                                            <th style='text-align: center;'>Tipo</th>
                                                            <th style='text-align: center;'>Valor Comercial</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-bd-y">
                                                        <tr>
                                                            <td style='text-align: center;'>1</td>
                                                            <td style='text-align: center;'><input name="propietario2[]" id="propietario2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo2[]" id="tipo2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="valor_comercial[]" id="valor_comercial[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>2</td>
                                                            <td style='text-align: center;'><input name="propietario2[]" id="propietario2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo2[]" id="tipo2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="valor_comercial[]" id="valor_comercial[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>3</td>
                                                            <td style='text-align: center;'><input name="propietario2[]" id="propietario2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo2[]" id="tipo2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="valor_comercial[]" id="valor_comercial[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>3</td>
                                                            <td style='text-align: center;'><input name="propietario2[]" id="propietario2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo2[]" id="tipo2[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="valor_comercial[]" id="valor_comercial[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12  table-responsive">
                                                <h4><strong>Bancos (Inversión, Crédito, Departamental o Débito)</strong></h4>
                                                <table class="table table-striped table-hover">
                                                    <thead class="no-bd">
                                                        <tr>
                                                            <th style='text-align: center;'>No.</th>
                                                            <th style='text-align: center;'>Titular</th>
                                                            <th style='text-align: center;'>Tipo</th>
                                                            <th style='text-align: center;'>Saldo actual</th>
                                                            <th style='text-align: center;'>Límite</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="no-bd-y">
                                                        <tr>
                                                            <td style='text-align: center;'>1</td>
                                                            <td style='text-align: center;'><input name="propietario3[]" id="propietario3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo3[]" id="tipo3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="saldo_actual[]" id="saldo_actual[]" type="text" class="form-control currency-inputmask"></td>
                                                            <td style='text-align: center;'><input name="limite[]" id="limite[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>2</td>
                                                            <td style='text-align: center;'><input name="propietario3[]" id="propietario3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo3[]" id="tipo3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="saldo_actual[]" id="saldo_actual[]" type="text" class="form-control currency-inputmask"></td>
                                                            <td style='text-align: center;'><input name="limite[]" id="limite[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>3</td>
                                                            <td style='text-align: center;'><input name="propietario3[]" id="propietario3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo3[]" id="tipo3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="saldo_actual[]" id="saldo_actual[]" type="text" class="form-control currency-inputmask"></td>
                                                            <td style='text-align: center;'><input name="limite[]" id="limite[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='text-align: center;'>4</td>
                                                            <td style='text-align: center;'><input name="propietario3[]" id="propietario3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="tipo3[]" id="tipo3[]" type="text" class="form-control"></td>
                                                            <td style='text-align: center;'><input name="saldo_actual[]" id="saldo_actual[]" type="text" class="form-control currency-inputmask"></td>
                                                            <td style='text-align: center;'><input name="limite[]" id="limite[]" type="text" class="form-control currency-inputmask"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                                                <div class="controls">
                                                    <a class="btn btn-primary btn-rounded" onClick="validar();">Guardar</a>
                                                </div>
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
                window.location.replace("nuevo_estudio5.php");
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
                $(".currency-inputmask").inputmask("$9,999,999.99"),
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