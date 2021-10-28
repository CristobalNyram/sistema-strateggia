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

$status     = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
$id_estudio = filter_input(INPUT_GET, 'id_estudio', FILTER_SANITIZE_SPECIAL_CHARS);

echo "$status | $id_estudio";

$_SESSION['id'] = $id_estudio;

header("Location: estudio/".$status); 
?>
