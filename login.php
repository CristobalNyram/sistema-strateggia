<?php
include "link.php";

$user       = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$password   = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
$password = base64_encode($password);

echo "select * from usuarios where user = '$user' and password ='$password'";
$select = mysqli_query($link, "select * from usuarios where user = '$user' and password ='$password'");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($array = mysqli_fetch_array($select))
        {
            session_start();
            $_SESSION['nombre']       = $array['nombre'];
            $_SESSION['apellidop']    = $array['apellidop'];
            $_SESSION['apellidom']    = $array['apellidom'];
            $_SESSION['tipo']         = $array['tipo'];
            $_SESSION['user']         = $array['user'];

            if($_SESSION["tipo"] === "admin")
            {
                header("Location: principal.php"); 
            }
            else 
            {
                header("Location: principal2.php"); 
            }
        }
    }
    else
    {
        header("Location: index.php?error=1"); 
    }
?>
