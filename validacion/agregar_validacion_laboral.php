<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['nombre']))
{
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
                
                <?php
                if($sesion_tipo !="admin")
                {
                ?>
                <ul class="sidebar-nav">
                    <li>
                        <a href="../principal2.php"><i class="fa fa-edit"></i><span class="sidebar-text">Principal</span></a>
                    </li>currencurren
                    <li class="current">
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
                    <li class="">
                        <a href="../estudio/nuevo_estudio.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nuevo Estudio sociolaboral</span></a>
                    </li>
                    <li>
                        <a href="../estudio/buscar_estudio.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar Estudio sociolaboral</span></a>
                    </li>

                    <!-- modulo de validacion -->
                    <li class="current">
                                <a href="../validacion/agregar_validacion_laboral.php"><i class="glyph-icon flaticon-forms"></i><span class="sidebar-text">Nueva validacion laboral</span></a>

                    </li>

                    <li class="">
                        <a href="../validacion/buscar_validacion_laboral.php"><i class="fa fa-search"></i><span class="sidebar-text">Buscar validacion laboral</span></a>

                    </li>
                    <!-- modulo de validicion -->

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
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->
        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
            <div class="row">
                <dicurrentv class="row">
                        <!-- INCIO DE FOMULARIO -->
                        <form id="form" name="form" method="post" enctype="multipart/form-data">

                        <form method="post" name="form" id="form"  enctype="multipart/form-data">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                            <div class="panel panel-dafault">
                                                    <div class="panel-heading">
                                                            <h3><strong>Validacion laboral </strong></h3>


                                                            <div class="progress">
                                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                                        <span class="sr-only">0% Complete (success)</span>0%
                                                                    </div>
                                                                </div>
                                                    </div>




                                                    <div class="panel-body">
                                                        <div class="row">
                                                                    <div class="form-group">
                                                                            <div class="col-md-3 col-sm-2 col-xs-12">
                                                                                    <label class="form-label">
                                                                                        <strong>Homonimia</strong>
                                                                                    </label>
                                                                                    <div class="controls">
                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                        
                                                                                    </div>


                                                                            </div>
                                                                           
                                                                           
                                                                            <div class="col-md-3 col-sm-6 col-xs-12">               
                                                                                    <label class="form-label">
                                                                                        <strong>Fecha de solicitud</strong>
                                                                                    </label>
                                                                                    <div class="controls">
                                                                                        <input name="nombre" id="nombre" type="text" class="form-control">
                                                                                        
                                                                                    </div>
                                                                                    

                                                                            </div>


                                                                    </div>

                                                        </div>

                                                        <div class="row">

                                                                    <div class="form-group">

                                                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>Laboral</strong>
                                                                                            </label>
                                                                                            <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                  <option value="" selected="selected">&nbsp;</option>
                                                                                                      <option value="">SI</option>
                                                                                                      <option value="">NO</option>
                                                                                            </select>    

                                                                                          

                                                                            </div>

                                                                            <div class="col-md-3 col-sm-7 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>Comentarios</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                                <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>
                                                                                                    </div>



                                                                            </div>


                                                                                
                                                                                    


                                                                    </div>


                                                        </div>





                                                        <div class="row">

                                                                <div class="form-group">

                                                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>Legal</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                                <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                                    <option value="" selected="selected">&nbsp;</option>
                                                                                                                                        <option value="">SI</option>
                                                                                                                                        <option value="">NO</option>
                                                                                                                  </select>                            
                                                                                                    </div>



                                                                                    </div>


                                                                                    <div class="col-md-3 col-sm-7 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>Comentarios</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                                <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>
                                                                                                    </div>



                                                                                    </div>
                                                                                        
                


                                                                </div>


                                                        </div>


                                                        
                                                         <div class="row">

                                                                    <div class="form-group">
                                                                                <div class="col-md-12 col-sm-12 panel-primary">
                                                                                        <div class="">
                                                                                        <h4 class="text-center bg-info"> 
                                                                                          <strong> Datos generales</strong>  </h4>

                                                                                        </div>

                                                                                </div>
                                                                    </div>
                                                         </div>

                                                                 

                                                        <div class="row">

                                                                    <div class="form-group">
                                                
                                                                        

                                                                            <div class="col-md-8 col-sm-12 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>Nombre del candidato</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                <input name="nombre" id="nombre" type="text" class="form-control">
                                                                                                
                                                                                            </div>



                                                                            </div>


              
                                                                                
                                                                                    


                                                                    </div>


                                                        </div>



                                                        <div class="row">

                                                                                  <div class="form-group">

                                                                                      

                                                                                          <div class="col-md-8 col-sm-12 col-xs-12">
                                                                                                          <label class="form-label">
                                                                                                              <strong>Apellido Paterno del candidato</strong>
                                                                                                          </label>
                                                                                                          <div class="controls">
                                                                                                              <input name="nombre" id="nombre" type="text" class="form-control">
                                                                                                              
                                                                                                          </div>



                                                                                          </div>



                                                                                              
                                                                                                  


                                                                                  </div>


                                                        </div>







                                                        <div class="row">

                                                                                  <div class="form-group">

                                                                                      

                                                                                          <div class="col-md-8 col-sm-12 col-xs-12">
                                                                                                          <label class="form-label">
                                                                                                              <strong>Apellido Materno del candidato</strong>
                                                                                                          </label>
                                                                                                          <div class="controls">
                                                                                                              <input name="nombre" id="nombre" type="text" class="form-control">
                                                                                                              
                                                                                                          </div>



                                                                                          </div>



                                                                                              
                                                                                                  


                                                                                  </div>


                                                        </div>



                                                      





                                                        <div class="row">

                                                               <div class="form-group">
                                                
                                                                        

                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>CURP</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                <input name="nombre" id="nombre" type="text" class="form-control">
                                                                                                
                                                                                            </div>



                                                                            </div>


                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>No. IMSS</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                
                                                                                            </div>



                                                                            </div>
                                                                                
                                                                                    


                                                             </div>

                                                        

                                                        </div>



                                                        <div class="row">

                                                                              <div class="form-group">

                                                                                      

                                                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                          <label class="form-label">
                                                                                                              <strong>Fecha de nacimiento</strong>
                                                                                                          </label>
                                                                                                          <div class="controls">
                                                                                                                <input name="fecha_nacimiento" id="fecha_nacimiento" type="text" class="form-control" name="fecha_nacimiento" >
                                                                                                              
                                                                                                          </div>



                                                                                          </div>


                                                                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                          <label class="form-label">
                                                                                                              <strong>Lugar de nacimiento</strong>
                                                                                                          </label>
                                                                                                          <div class="controls">
                                                                                                              <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                              
                                                                                                          </div>



                                                                                          </div>
                                                                                              
                                                                                                  


                                                                              </div>



                                                        </div>


                                                        <div class="row">

                                                                        <div class="form-group">

                                                                                

                                                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>Nacionalidad</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="text" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>


                                                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>Telefono de casa</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>


                                                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>Celular</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>



                                                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>E-mail</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="email" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>
                                                                                        
                                                                                            


                                                                        </div>



                                                         </div>


                                                         <div class="row ">
                                                                          <div class="form-group">
                                                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                          <label class="form-label">
                                                                                                          
                                                                                                          
                                                                                                            <strong>Promedio de estabilidad laboral</strong>
                                                                                                         
                                                                                                           
                                                                                                          </label>
                                                                                                          <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                <option value="" selected="selected">&nbsp;</option>
                                                                                                                    <option value="">1 a 3 meses</option>
                                                                                                                    <option value="">3 a 6 meses</option>
                                                                                                                    <option value="">6 a 12 meses</option>
                                                                                                                    <option value="">mas de 12 meses</option>


                                                                                                          </select>    



                                                                                          </div>
                                                                          </div>
                                                         </div>



                                                                                                    
                                                         <div class="row">

                                                                    <div class="form-group">
                                                                                <div class="col-md-12 col-sm-12 panel-primary">
                                                                                        
                                                                                        <h4 class="text-center bg-info"> 
                                                                                          <strong> Investigacion legal</strong>  </h4>

                                                                                     
                                                                                </div>
                                                                    </div>
                                                         </div>




                                                         <div class="row">

                                                                    <div class="form-group">


                                                                          <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                  <h5>
                                                                                   <strong> 
                                                                                     Demandas
                                                                                   </strong>
                                                                                  </h5>


                                                                           </div>


                                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                                            <label class="form-label">
                                                                                                                <strong>Civiles</strong>
                                                                                                            </label>
                                                                                                            <div class="controls">
                                                                                                                        <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                                            <option value="" selected="selected">&nbsp;</option>
                                                                                                                                                <option value="">SI</option>
                                                                                                                                                <option value="">NO</option>
                                                                                                                          </select>                            
                                                                                                            </div>



                                                                            </div>
                                                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>No.</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>


                                                                            <div class="col-md-6 col-sm-7 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>Comentarios</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                   <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>    
                                                                                            </div>



                                                                            </div>
                                                                    </div>
                                                        </div>

                                                         <div class="row">

                                                                    <div class="form-group">


                                                                          <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                  <h5>
                                                                                   <strong> 
                                                                                     Demandas
                                                                                   </strong>
                                                                                  </h5>


                                                                           </div>


                                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                                            <label class="form-label">
                                                                                                                <strong>Penales</strong>
                                                                                                            </label>
                                                                                                            <div class="controls">
                                                                                                                        <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                                            <option value="" selected="selected">&nbsp;</option>
                                                                                                                                                <option value="">SI</option>
                                                                                                                                                <option value="">NO</option>
                                                                                                                          </select>                            
                                                                                                            </div>



                                                                            </div>
                                                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>No.</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>


                                                                            <div class="col-md-6 col-sm-7 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>Comentarios</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                   <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>    
                                                                                            </div>



                                                                            </div>
                                                                    </div>
                                                        </div>






                                                         <div class="row">

                                                                    <div class="form-group">


                                                                          <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                  <h5>
                                                                                   <strong> 
                                                                                     Demandas
                                                                                   </strong>
                                                                                  </h5>


                                                                           </div>


                                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                                            <label class="form-label">
                                                                                                                <strong>Laborales</strong>
                                                                                                            </label>
                                                                                                            <div class="controls">
                                                                                                                        <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                                            <option value="" selected="selected">&nbsp;</option>
                                                                                                                                                <option value="">SI</option>
                                                                                                                                                <option value="">NO</option>
                                                                                                                          </select>                            
                                                                                                            </div>



                                                                            </div>
                                                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>No.</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>


                                                                            <div class="col-md-6 col-sm-7 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>Comentarios</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                   <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>    
                                                                                            </div>



                                                                            </div>
                                                                    </div>
                                                        </div>



                                                        <div class="row">

                                                                    <div class="form-group">


                                                                          <div class="col-md-12 col-sm-12 col-xs-12">

                                                                                  <h5>
                                                                                   <strong> 
                                                                                     Demandas
                                                                                   </strong>
                                                                                  </h5>


                                                                           </div>


                                                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                                            <label class="form-label">
                                                                                                                <strong>Familiares</strong>
                                                                                                            </label>
                                                                                                            <div class="controls">
                                                                                                                        <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                                            <option value="" selected="selected">&nbsp;</option>
                                                                                                                                                <option value="">SI</option>
                                                                                                                                                <option value="">NO</option>
                                                                                                                          </select>                            
                                                                                                            </div>



                                                                            </div>
                                                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                                                                    <label class="form-label">
                                                                                                        <strong>No.</strong>
                                                                                                    </label>
                                                                                                    <div class="controls">
                                                                                                        <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                        
                                                                                                    </div>



                                                                                    </div>


                                                                            <div class="col-md-6 col-sm-7 col-xs-12">
                                                                                            <label class="form-label">
                                                                                                <strong>Comentarios</strong>
                                                                                            </label>
                                                                                            <div class="controls">
                                                                                                   <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>    
                                                                                            </div>



                                                                            </div>
                                                                    </div>
                                                        </div>


                                                        <div class="row">

                                                              <div class="form-group">


                                                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                                                            <h5>
                                                                            <strong> 
                                                                              Demandas
                                                                            </strong>
                                                                            </h5>


                                                                    </div>


                                                                      <div class="col-md-3 col-sm-3 col-xs-12">
                                                                                                      <label class="form-label">
                                                                                                          <strong>Mercantiles</strong>
                                                                                                      </label>
                                                                                                      <div class="controls">
                                                                                                                  <select id="estado" name="estado" class="form-control" onchange="change_estado()">
                                                                                                                                      <option value="" selected="selected">&nbsp;</option>
                                                                                                                                          <option value="">SI</option>
                                                                                                                                          <option value="">NO</option>
                                                                                                                    </select>                            
                                                                                                      </div>



                                                                      </div>
                                                                      <div class="col-md-2 col-sm-2 col-xs-12">
                                                                                              <label class="form-label">
                                                                                                  <strong>No.</strong>
                                                                                              </label>
                                                                                              <div class="controls">
                                                                                                  <input name="nombre" id="nombre" type="number" class="form-control">
                                                                                                  
                                                                                              </div>



                                                                              </div>


                                                                      <div class="col-md-6 col-sm-7 col-xs-12">
                                                                                      <label class="form-label">
                                                                                          <strong>Comentarios</strong>
                                                                                      </label>
                                                                                      <div class="controls">
                                                                                            <textarea id="deportes" name="deportes" class="form-control" rows="3" style="border-radius: 0.5em;"></textarea>    
                                                                                      </div>



                                                                      </div>
                                                              </div>
                                                       </div>



                                                        <div class="row">

                                                                    <div class="form-group">
                                                                                <div class="col-md-12 col-sm-12 panel-primary">
                                                                                        
                                                                                        <h4 class="text-center bg-info"> 
                                                                                          <strong> Anexos</strong>  </h4>

                                                                                     
                                                                                </div>


                                                                                
                                                                    </div>


                                                                    
                                                         </div>




                                                      <div class="row">

                                                              <div class="form-group">


                                                                   



                                                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                      <label class="form-label">
                                                                                          <strong>Semanas cotizadas en el IMSS</strong>
                                                                                      </label>
                                                                                      <div class="controls">
                                                                                          <input type="file">
                                                                                    </div>



                                                                      </div>


                                                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                      <label class="form-label">
                                                                                          <strong>Validacion web</strong>
                                                                                      </label>
                                                                                      <div class="controls">
                                                                                          <input type="file">
                                                                                    </div>



                                                                      </div>
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


                        </form>

                        <!-- FIN DE FORMULARIO -->
                </div>
            </div>
        </div>
       
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN MODALS -->
    
    <!-- NOMBRE -->
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
    
    <!-- APELLIDO PATERNO -->
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
    
    <!-- APELLIDO MATERNO -->
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
    
    <!-- EMPRESA -->
    <button type="button" id="alerta_empresa_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#empresaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="empresaVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Empresa" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el nombre de la empresa</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AREA -->
    <button type="button" id="alerta_area_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#areaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="areaVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Área" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el área</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- PUESTO -->
    <button type="button" id="alerta_puesto_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#puestoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="puestoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Puesto actual" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el Puesto Actual</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- E-MAIL -->
    <button type="button" id="alerta_email_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#emailVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="emailVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "E-mail" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el correo electrónico de la persona</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- DIRECCIÓN -->
    <button type="button" id="alerta_dir_calle_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#dir_calleVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="dir_calleVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Dirección" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la dirección</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NUMERO DE CASA -->
    <button type="button" id="alerta_dir_num_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#dir_numVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="dir_numVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Número de casa" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el número de la casa</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- COLONIA -->
    <button type="button" id="alerta_colonia_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#coloniaVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="coloniaVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Colonia" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la colonia</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ESTADO -->
    <button type="button" id="alerta_estado_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#estadoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="estadoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Estado" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe seleccionar el estado donde radica</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- MUNICIPIO -->
    <button type="button" id="alerta_municipio_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#municipioVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="municipioVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Municipio" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe seleccionar el municipio donde radica</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CP -->
    <button type="button" id="alerta_cp_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cpVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="cpVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "CP" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el CP</p>
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
                <h4 class="modal-title">Campo "Telefono" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el teléfono</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CELULAR -->
    <button type="button" id="alerta_celular_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#celularVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="celularVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Celular" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el número de celular</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- tiempo_dom_actual -->
    <button type="button" id="alerta_tiempo_dom_actual_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tiempo_dom_actualVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="tiempo_dom_actualVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Tiempo de Radicar en el Domicilio Actual" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la duración que lleva en el domicilio actual</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- tiempo_dom_anterior -->
    <button type="button" id="alerta_tiempo_dom_anterior_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#tiempo_dom_anteriorVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="tiempo_dom_anteriorVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Tiempo de Radicar en el Domicilio Anterior" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la duración que lleva en el domicilio anterior</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- LUGAR DE NACIMIENTO -->
    <button type="button" id="alerta_lugar_nacimiento_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lugar_nacimientoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="lugar_nacimientoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Lugar de Nacimiento" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el lugar de nacimiento</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FECHA DE NACIMIENTO -->
    <button type="button" id="alerta_fecha_nacimiento_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#fecha_nacimientoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="fecha_nacimientoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Fecha de Nacimiento" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la fecha de nacimiento</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- EDAD -->
    <button type="button" id="alerta_edad_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#edadVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="edadVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Edad" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir la edad del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CURP -->
    <button type="button" id="alerta_curp_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#curpVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="curpVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "CURP" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el CURP del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ESTADO CIVIL -->
    <button type="button" id="alerta_estado_civil_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#estado_civilVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="estado_civilVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Estado Civil" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe seleccionar el estado civil del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- SEXO -->
    <button type="button" id="alerta_sexo_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#sexoVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="sexoVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Sexo" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe seleccionar el sexo del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- RELIGION -->
    <button type="button" id="alerta_religion_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#religionVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="religionVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Religion" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe seleccionar la religion del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- COMPROBANTE DOMICILIARIO -->
    <button type="button" id="alerta_comprobante_dom_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#comprobante_domVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="comprobante_domVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Comprobante domicilio presentado" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el comprobante de domicilio presentado</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- IMSS -->
    <button type="button" id="alerta_imss_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#imssVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="imssVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "IMSS" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el número de imss</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ID OFICIAL -->
    <button type="button" id="alerta_id_oficial_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#id_oficialVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="id_oficialVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "ID oficial" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el ID oficial</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FAMILIAR -->
    <button type="button" id="alerta_familiar_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#familiarVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="familiarVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "¿Labora algún familiar en la Empresa?" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe Seleccionar si algún familiar labora en la empresa</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- VACANTE -->
    <button type="button" id="alerta_vacante_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#vacanteVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="vacanteVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "¿Cómo se enteró de la Vacante?" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir cómo se enteró de la vacante el solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FACEBOOK -->
    <button type="button" id="alerta_facebook_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#facebookVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="facebookVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Facebook" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir el ID de facebook del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- DEPORTES -->
    <button type="button" id="alerta_deportes_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#deportesVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="deportesVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Deportes, Aficiones y Entretenimiento" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir los deportes, aficiones y entretenimiento del solicitante</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- GRUPOS -->
    <button type="button" id="alerta_grupos_vacio" class="btn btn-info btn-lg" data-toggle="modal" data-target="#gruposVacio" style="display:none;">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="gruposVacio" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Campo "Asociaciones o grupos a los que pertenece" Vacío</h4>
                </div>
                <div class="modal-body">
                  <p>Debe escribir las asociaciones o grupos a los que pertenece el solicitante</p>
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
        $('#fecha_nacimiento').datepicker();
    });
    function validar()
{
    var nombre                  = document.form.nombre.value.length;
    var apellidop               = document.form.apellidop.value.length;
    var apellidom               = document.form.apellidom.value.length;
    var empresa                 = document.form.empresa.value.length;
    var area                    = document.form.area.value.length;
    var puesto                  = document.form.puesto.value.length;
    var email                   = document.form.email.value.length;
    var dir_calle               = document.form.dir_calle.value.length;
    var dir_num                 = document.form.dir_num.value.length;
    var colonia                 = document.form.colonia.value.length;
    var estado                  = document.form.estado.value.length;
    var municipio               = document.form.municipio.value.length;
    var cp                      = document.form.cp.value.length;
    var telefono                = document.form.telefono.value.length;
    var celular                 = document.form.celular.value.length;
    var tiempo_dom_actual      	= document.form.tiempo_dom_actual.value.length;
    var tiempo_dom_anterior     = document.form.tiempo_dom_anterior.value.length;
    var lugar_nacimiento        = document.form.lugar_nacimiento.value.length;
    var fecha_nacimiento        = document.form.fecha_nacimiento.value.length;
    var edad                    = document.form.edad.value.length;
    var curp                    = document.form.curp.value.length;
    var estado_civil            = document.form.estado_civil.value.length;
    var sexo                    = document.form.sexo.value.length;
    var religion                = document.form.religion.value.length;
    var comprobante_dom         = document.form.comprobante_dom.value.length;
    var imss                    = document.form.imss.value.length;
    var id_oficial              = document.form.id_oficial.value.length;
    var familiar                = document.form.familiar.value.length;
    var vacante                 = document.form.vacante.value.length;
    var facebook                = document.form.facebook.value.length;
    var deportes                = document.form.deportes.value.length;
    var grupos                  = document.form.grupos.value.length;
    
 
    if (nombre == 0)
    {
       $("#alerta_nombre_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.nombre.focus();},2000);
        return 0;
       
    }
    else if (apellidop == 0)
    {
        $("#alerta_apellidop_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.apellidop.focus();},2000);
        return 0;
    }
    else if (apellidom == 0)
    {
        $("#alerta_apellidom_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.apellidom.focus();},2000);
        return 0;
    }
    else if (empresa == 0)
    {
        $("#alerta_empresa_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.empresa.focus();},2000);
        return 0;
    }
    else if (area == 0)
    {
        $("#alerta_area_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.area.focus();},2000);
        return 0;
    }
    else if (puesto == 0)
    {
        $("#alerta_puesto_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.puesto.focus();},2000);
        return 0;
    }
    else if (email == 0)
    {
        $("#alerta_email_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.email.focus();},2000);
        return 0;
    }
    else if (dir_calle == 0)
    {
        $("#alerta_dir_calle_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.dir_calle.focus();},2000);
        return 0;
    }
    else if (dir_num == 0)
    {
        $("#alerta_dir_num_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.dir_num.focus();},2000);
        return 0;
    }
    else if (colonia == 0)
    {
        $("#alerta_colonia_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.colonia.focus();},2000);
        return 0;
    }
    else if (cp == 0)
    {
        $("#alerta_cp_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.cp.focus();},2000);
        return 0;
    }else if (estado == 0)
    {
        $("#alerta_estado_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.estado.focus();},2000);
        return 0;
    }
    else if (municipio == 0)
    {
        $("#alerta_municipio_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.municipio.focus();},2000);
        return 0;
    }
    else if (cp == 0)
    {
        $("#alerta_cp_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.cp.focus();},2000);
        return 0;
    }
    else if (telefono == 0)
    {
        $("#alerta_telefono_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.telefono.focus();},2000);
        return 0;
    }
    else if (celular == 0)
    {
        $("#alerta_celular_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.celular.focus();},2000);
        return 0;
    }
    else if (tiempo_dom_actual == 0)
    {
        $("#alerta_tiempo_dom_actual_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.tiempo_dom_actual.focus();},2000);
        return 0;
    }
    else if (tiempo_dom_actual == 0)
    {
        $("#alerta_tiempo_dom_actual_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.tiempo_dom_actual.focus();},2000);
        return 0;
    }
    else if (tiempo_dom_anterior == 0)
    {
        $("#alerta_tiempo_dom_anterior_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.tiempo_dom_anterior.focus();},2000);
        return 0;
    }
    else if (lugar_nacimiento == 0)
    {
        $("#alerta_lugar_nacimiento_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.lugar_nacimiento.focus();},2000);
        return 0;
    }
    else if (fecha_nacimiento == 0)
    {
        $("#alerta_fecha_nacimiento_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.fecha_nacimiento.focus();},2000);
        return 0;
    }
    else if (edad == 0)
    {
        $("#alerta_edad_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.edad.focus();},2000);
        return 0;
    }
    else if (curp == 0)
    {
        $("#alerta_curp_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.curp.focus();},2000);
        return 0;
    }
    else if (estado_civil == 0)
    {
        $("#alerta_estado_civil_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.estado_civil.focus();},2000);
        return 0;
    }
    else if (sexo == 0)
    {
        $("#alerta_sexo_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.sexo.focus();},2000);
        return 0;
    }
    else if (religion == 0)
    {
        $("#alerta_religion_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.religion.focus();},2000);
        return 0;
    }
    else if (comprobante_dom == 0)
    {
        $("#alerta_comprobante_dom_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.comprobante_dom.focus();},2000);
        return 0;
    }
    else if (imss == 0)
    {
        $("#alerta_imss_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.imss.focus();},2000);
        return 0;
    }
    else if (id_oficial == 0)
    {
        $("#alerta_id_oficial_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.id_oficial.focus();},2000);
        return 0;
    }
    else if (familiar == 0)
    {
        $("#alerta_familiar_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.familiar.focus();},2000);
        return 0;
    }
    else if (vacante == 0)
    {
        $("#alerta_vacante_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.vacante.focus();},2000);
        return 0;
    }
    else if (facebook == 0)
    {
        $("#alerta_facebook_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.facebook.focus();},2000);
        return 0;
    }
    else if (deportes == 0)
    {
        $("#alerta_deportes_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.deportes.focus();},2000);
        return 0;
    }
    else if (grupos == 0)
    {
        $("#alerta_grupos_vacio").trigger('click');
        setTimeout(function(){$("html, body").animate({ scrollTop: 0 }, "slow"); document.form.grupos.focus();},2000);
        return 0;
    }
    else
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
                    window.location.replace("nuevo_estudio2.php");
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
    
}
/*Funcion de cambio de bloque*/
function change_estado()
    {
        var estado = $("#estado").val();
        $('#municipio').empty();
        $.ajax({
            type : "POST",
            url : "salidasID.php" ,
            traditional : true,
            data : {estado:estado},
            success : function(data)
            {
                $("#municipio").html(data);
            }            
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
                $(".currency-inputmask").inputmask("$999,999,999.99"),
                $(".percentage-inputmask").inputmask("99%"),
                $(".age-inputmask").inputmask("99"),
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