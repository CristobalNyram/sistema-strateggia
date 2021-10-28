<?php
session_start(); 
include("link.php");

if(isset($_SESSION['nombre']))
{}
else
{
	 header("Location: index.php"); 
}

if(isset($_POST['user'])) {$user = $_POST['user']; } else { $user= 0; }

 $select = mysqli_query($link, "delete from usuarios where user ='$user'");
 if($select)
 {
        $delete = 1;
 }
?>
