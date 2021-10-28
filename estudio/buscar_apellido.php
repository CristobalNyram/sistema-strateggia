<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['nombre']))
{}
else
{
	 header("Location: ../index.php"); 
}
if(isset($_POST['nombre'])) {$nombre = $_POST['nombre']; } else { $nombre = 0; }
if(isset($_POST['apellidop']))
{
    $apellidop = $_POST['apellidop'];
    $select = mysqli_query($link, "select apellidom from test_general where nombre = '$nombre' and apellidop = '$apellidop'");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $apellidom         = $arr['apellidom'];
                       
            echo "<option value='$apellidom'>$apellidom</option>";
        }
    }
}
else
{
    $select = mysqli_query($link, "select apellidop from test_general where nombre = '$nombre'");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $apellidop         = $arr['apellidop'];
            echo "<option value='$apellidop'>$apellidop</option>";
        }
    }
    
}


    
?>
