<?php
session_start(); 
include("../link.php");

$id_general = $_SESSION['id'];

/*validar si existe el registro de este estudio, sino crearlo*/
$data = $_POST['data'];

switch ($data){
    case "perfil":
        $update = mysqli_query($link,"update test_documentacion set perfil = '' where id_general = '$id_general'");
        if($update)
        {
            echo "perfil";
        }
        break;
    case "docu1":
        $update = mysqli_query($link,"update test_documentacion set docu1 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu1";
        }
        break;
    case "docu2":
        $update = mysqli_query($link,"update test_documentacion set docu2 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu2";
        }
        break;
    case "docu3":
        $update = mysqli_query($link,"update test_documentacion set docu3 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu3";
        }
        break;
    case "docu4":
        $update = mysqli_query($link,"update test_documentacion set docu4 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu4";
        }
        break;
    case "docu5":
        $update = mysqli_query($link,"update test_documentacion set docu5 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu5";
        }
        break;
    case "docu6":
        $update = mysqli_query($link,"update test_documentacion set docu6 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu6";
        }
        break;
    case "docu7":
        $update = mysqli_query($link,"update test_documentacion set docu7 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu7";
        }
        break;
    case "docu8":
        $update = mysqli_query($link,"update test_documentacion set docu8 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu8";
        }
        break;
    case "docu9":
        $update = mysqli_query($link,"update test_documentacion set docu9 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu9";
        }
        break;
    case "docu10":
        $update = mysqli_query($link,"update test_documentacion set docu10 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu10";
        }
        break;
    case "docu11":
        $update = mysqli_query($link,"update test_documentacion set docu11 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu11";
        }
        break;
    case "docu12":
        $update = mysqli_query($link,"update test_documentacion set docu12 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "docu12";
        }
        break;
    case "const1":
        $update = mysqli_query($link,"update test_documentacion set const1 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "const1";
        }
        break;
    case "const2":
        $update = mysqli_query($link,"update test_documentacion set const2 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "const2";
        }
        break;
    case "const3":
        $update = mysqli_query($link,"update test_documentacion set const3 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "const3";
        }
        break;
    case "const4":
        $update = mysqli_query($link,"update test_documentacion set const4 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "const4";
        }
        break;
    case "viv1":
        $update = mysqli_query($link,"update test_documentacion set viv1 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "viv1";
        }
        break;
    case "viv2":
        $update = mysqli_query($link,"update test_documentacion set viv2 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "viv2";
        }
        break;
    case "viv3":
        $update = mysqli_query($link,"update test_documentacion set viv3 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "viv3";
        }
        break;
    case "viv4":
        $update = mysqli_query($link,"update test_documentacion set viv4 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "viv4";
        }
        break;
    case "face1":
        $update = mysqli_query($link,"update test_documentacion set face1 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "face1";
        }
        break;
    case "face2":
        $update = mysqli_query($link,"update test_documentacion set face2 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "face2";
        }
        break;
    case "face3":
        $update = mysqli_query($link,"update test_documentacion set face3 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "face3";
        }
        break;
    case "face4":
        $update = mysqli_query($link,"update test_documentacion set face4 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "face4";
        }
        break;
    case "aviso1":
        $update = mysqli_query($link,"update test_documentacion set aviso1 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "aviso1";
        }
        break;
    case "aviso2":
        $update = mysqli_query($link,"update test_documentacion set aviso2 = '' where id_general = '$id_general'");
        if($update)
        {
            echo "aviso2";
        }
        break;
    
}

?>