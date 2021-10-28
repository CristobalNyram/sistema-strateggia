<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['nombre']))
{}
else
{
	 header("Location: ../index.php"); 
}
if(isset($_POST['estado'])) {$estado = $_POST['estado']; } else { $estado = 0; }

//echo "<option value=''></option>";

//echo "select * from municipios where id_edo = '$estado'";
$select = mysqli_query($link, "select * from municipios where id_edo = '$estado'");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        while($arr = mysqli_fetch_array($select))
        {
            $id          = $arr['id'];
            $municipio   = $arr['municipio'];
            
            echo "<option value='$id'>$municipio</option>";
        }
    }
    
?>
