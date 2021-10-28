<?php
session_start();
session_destroy();
date_default_timezone_set("America/Mexico_City");
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
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link rel=”shortcut icon” type=”image/png” href=”/imagenes/logo.png”/>
</head>
<body style="background-color: #ffa32b;"  class="login fade-in" data-page="login">
    <!-- BEGIN LOGIN BOX -->
    
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4 col-xs-12">
                <div class="login-box clearfix animated flipInY">
                    <div class="login-logo" style="padding:1px 1px 1px 1px !important;">
                        <a href="#?login-theme-3">
                            <img style="max-width:100%; border-radius:2px" src="imagenes/logo.png" alt="Company Logo">
                            <h1></h1>
                        </a>
                    </div>
                    
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <div class="alert alert-danger hide">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Error!</h4>
                            Your Error Message goes here
                        </div>
                        <!-- END ERROR BOX -->
                        <form action="login.php" method="post">
                            <input id="user" name="user" type="text" placeholder="Username" class="input-field form-control user" />
                            <input id="password" name="password" type="password" placeholder="Password" class="input-field form-control password" />
                            <button style="background-color: #ddb288"type="submit" class="btn btn-login">Login</button>
                        </form>
                        <?php
                        session_start();
                        if(isset($_GET['error']))
                        {
                            $error = $_GET['error'];
                            if($error === "1")
                            {
                        ?>
                            <div class="alert alert-danger" style="text-align: center;">
                                Usuario o Contraseña equivocado
                            </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
     
    </div>
    <!-- END LOCKSCREEN BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="assets/js/account.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
