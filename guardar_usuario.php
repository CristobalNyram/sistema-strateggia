<?php
session_start(); 
include("link.php");
if(isset($_SESSION['nombre']))
{}
else
{
	 header("Location: index.php"); 
}

if(isset($_POST['nombre'])) {$nombre = $_POST['nombre']; } else { $nombre = 0; }
if(isset($_POST['apellidop'])) {$apellidop = $_POST['apellidop']; } else { $apellidop= 0; }
if(isset($_POST['apellidom'])) {$apellidom = $_POST['apellidom']; } else { $apellidom = 0; }
if(isset($_POST['user'])) {$user = $_POST['user']; } else { $user = 0; }
if(isset($_POST['password'])) {$password = $_POST['password']; } else { $password = 0; }
if(isset($_POST['tipo'])) {$tipo = $_POST['tipo']; } else { $tipo = 0; }

$password = base64_encode($password);

echo "insert into usuarios (nombre, apellidop, apellidom, user, password, tipo)values('$nombre', '$apellidop', '$apellidom', '$user', '$password', '$tipo')";
$insert = mysqli_query($link, "insert into usuarios (nombre, apellidop, apellidom, user, password, tipo)values('$nombre', '$apellidop', '$apellidom', '$user', '$password', '$tipo')");
   

if($insert)
    {
       //echo "si se guardó";
    }
    else
    {
       //echo "no se guardó";
    }
 
?>
