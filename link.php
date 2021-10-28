<?php
/*
	$link = mysqli_connect('localhost','boa_drake','B04dr4k3','strateggia')or die("no hay conexion de bd");
	if ($link) 
	{
		mysqli_query($link,"SET NAMES 'utf8'");
		//echo "Connected successfully";
		date_default_timezone_set("America/Mexico_City");
	}
*/

/*
conexion remota

	$link = mysqli_connect('localhost','strategg_gilbert','T4{%xPP87Cbw','strategg_strateggia')or die("no furula la cosa");
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn) 
	{
		mysqli_query($link,"SET NAMES 'utf8'");
		//echo "Connected successfully";
		date_default_timezone_set("America/Mexico_City");

	}

*/	

	$link = mysqli_connect('localhost','root','','strategg_strateggia')or die("no furula la cosa");
	//$conn = new mysqli($servername, $username, $password, $dbname);
	if ($link) 
	{
		mysqli_query($link,"SET NAMES 'utf8'");
		//echo "Connected successfully";
		date_default_timezone_set("America/Mexico_City");

	}

?> 
