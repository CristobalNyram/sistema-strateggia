<?php
session_start(); 
include("../link.php");

$id_general = $_SESSION['id'];

/*validar si existe el registro de este estudio, sino crearlo*/
$select = mysqli_query($link,"select id from test_documentacion where id_general = '$id_general'");
if (mysqli_num_rows($select)>0) 
{
    echo "Sí se encontró el registro para el id_general: $id_general <br>";
    
}
else
{
    $insert = mysqli_query($link,"insert into test_documentacion (id_general) values ('$id_general')");
    if($insert)
    {
        echo "registro creado para el id_general: $id_general <br>";
    }
    else
    {
        echo "no se creó el registro para el id_general: $id_general <br>";
    }
}

$sel = mysqli_query($link,"select id from test_documentacion where id_general = '$id_general'");
$row = mysqli_num_rows($sel);
if($row <= 0)
{
    $insert = mysqli_query($link,"insert into test_documentacion (id_general) values ('$id_general')");
    if($insert)
    {
        echo "Registro $id_general actualizado <br>";
    }
    else
    {
        echo "insert into test_documentacion (id_general) values ('$id_general') <br>";
    }
}


if(is_dir("../archivos/".$id_general)){} 
else {mkdir("../archivos/".$id_general,0777);}

 if(isset($_FILES['perfil']['name']) && $_FILES['perfil']['name']!= "") 
{
    $perfil = $_FILES['perfil']['name'];
    $select = mysqli_query($link,"select perfil from test_documentacion where id_general = '$id_general' and perfil ='$perfil'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para perfil en la base de datos <br>";
    }
    else
    {
        move_uploaded_file($_FILES['perfil']['tmp_name'],"../archivos/".$id_general."/".$perfil);

        $update = mysqli_query($link,"update test_documentacion set perfil = '$perfil' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en perfil <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en perfil <br>";
            echo "update test_documentacion set perfil = '$perfil' where id_general = '$id_general'<br>";
        }    
    }
} 
else 
{ 
    $perfil = ""; 
    echo "no existe el archivo de perfil";
}

 if(isset($_FILES['docu1']['name']) && $_FILES['docu1']['name']!= "") 
{
    $docu1 = $_FILES['docu1']['name'];
    $select = mysqli_query($link,"select docu1 from test_documentacion where id_general = '$id_general' and docu1 ='$docu1'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu1 en la base de datos<br>";
    }
    else
    {
        move_uploaded_file($_FILES['docu1']['tmp_name'],"../archivos/".$id_general."/".$docu1);

        $update = mysqli_query($link,"update test_documentacion set docu1 = '$docu1' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu1 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu1 <br>";
            echo "update test_documentacion set docu1 = '$docu1' where id_general = '$id_general'<br>";
        }    
    }
} 
else 
{ 
    $docu1 = ""; 
    echo "no existe el archivo de docu1<br>";
}

 if(isset($_FILES['docu2']['name']) && $_FILES['docu2']['name']!= "") 
{
    $docu2 = $_FILES['docu2']['name'];
    $select = mysqli_query($link,"select docu2 from test_documentacion where id_general = '$id_general' and docu2 ='$docu2'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu2 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu2']['tmp_name'],"../archivos/".$id_general."/".$docu2);

        $update = mysqli_query($link,"update test_documentacion set docu2 = '$docu2' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu2 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu2 <br>";
            echo "update test_documentacion set docu2 = '$docu2' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu2 = ""; 
    echo "no existe el archivo de docu2<br>";
}

 if(isset($_FILES['docu3']['name']) && $_FILES['docu3']['name']!= "") 
{
    $docu3 = $_FILES['docu3']['name'];
    $select = mysqli_query($link,"select docu3 from test_documentacion where id_general = '$id_general' and docu3 ='$docu3'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu3 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu3']['tmp_name'],"../archivos/".$id_general."/".$docu3);

        $update = mysqli_query($link,"update test_documentacion set docu3 = '$docu3' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu3 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu3 <br>";
            echo "update test_documentacion set docu3 = '$docu3' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu3 = ""; 
    echo "no existe el archivo de docu3<br>";
}

 if(isset($_FILES['docu4']['name']) && $_FILES['docu4']['name']!= "") 
{
    $docu4 = $_FILES['docu4']['name'];
    $select = mysqli_query($link,"select docu4 from test_documentacion where id_general = '$id_general' and docu4 ='$docu4'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu4 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu4']['tmp_name'],"../archivos/".$id_general."/".$docu4);

        $update = mysqli_query($link,"update test_documentacion set docu4 = '$docu4' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu4 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu4 <br>";
            echo "update test_documentacion set docu4 = '$docu4' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu4 = ""; 
    echo "no existe el archivo de docu4<br>";
}

 if(isset($_FILES['docu5']['name']) && $_FILES['docu5']['name']!= "") 
{
    $docu5 = $_FILES['docu5']['name'];
    $select = mysqli_query($link,"select docu5 from test_documentacion where id_general = '$id_general' and docu5 ='$docu5'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu5 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu5']['tmp_name'],"../archivos/".$id_general."/".$docu5);

        $update = mysqli_query($link,"update test_documentacion set docu5 = '$docu5' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu5 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu5 <br>";
            echo "update test_documentacion set docu5 = '$docu5' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu5 = ""; 
    echo "no existe el archivo de docu5<br>";
}

 if(isset($_FILES['docu6']['name']) && $_FILES['docu6']['name']!= "") 
{
    $docu6 = $_FILES['docu6']['name'];
    $select = mysqli_query($link,"select docu6 from test_documentacion where id_general = '$id_general' and docu6 ='$docu6'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu6 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu6']['tmp_name'],"../archivos/".$id_general."/".$docu6);

        $update = mysqli_query($link,"update test_documentacion set docu6 = '$docu6' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu6 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu6 <br>";
            echo "update test_documentacion set docu6 = '$docu6' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu6 = ""; 
    echo "no existe el archivo de docu6<br>";
}

 if(isset($_FILES['docu7']['name']) && $_FILES['docu7']['name']!= "") 
{
    $docu7 = $_FILES['docu7']['name'];
    $select = mysqli_query($link,"select docu7 from test_documentacion where id_general = '$id_general' and docu7 ='$docu7'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu7 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu7']['tmp_name'],"../archivos/".$id_general."/".$docu7);

        $update = mysqli_query($link,"update test_documentacion set docu7 = '$docu7' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu7 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu7 <br>";
            echo "update test_documentacion set docu7 = '$docu7' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu7 = ""; 
    echo "no existe el archivo de docu7<br>";
}

 if(isset($_FILES['docu8']['name']) && $_FILES['docu8']['name']!= "") 
{
    $docu8 = $_FILES['docu8']['name'];
    $select = mysqli_query($link,"select docu8 from test_documentacion where id_general = '$id_general' and docu8 ='$docu8'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu8 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu8']['tmp_name'],"../archivos/".$id_general."/".$docu8);

        $update = mysqli_query($link,"update test_documentacion set docu8 = '$docu8' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu8 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu8 <br>";
            echo "update test_documentacion set docu8 = '$docu8' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu8 = ""; 
    echo "no existe el archivo de docu8<br>";
}

 if(isset($_FILES['docu9']['name']) && $_FILES['docu9']['name']!= "") 
{
    $docu9 = $_FILES['docu9']['name'];
    $select = mysqli_query($link,"select docu9 from test_documentacion where id_general = '$id_general' and docu9 ='$docu9'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu9 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu9']['tmp_name'],"../archivos/".$id_general."/".$docu9);

        $update = mysqli_query($link,"update test_documentacion set docu9 = '$docu9' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu9 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu9 <br>";
            echo "update test_documentacion set docu9 = '$docu9' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu9 = ""; 
    echo "no existe el archivo de docu9<br>";
}

 if(isset($_FILES['docu10']['name']) && $_FILES['docu10']['name']!= "") 
{
    $docu10 = $_FILES['docu10']['name'];
    $select = mysqli_query($link,"select docu10 from test_documentacion where id_general = '$id_general' and docu10 ='$docu10'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu10 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu10']['tmp_name'],"../archivos/".$id_general."/".$docu10);

        $update = mysqli_query($link,"update test_documentacion set docu10 = '$docu10' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu10 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu10 <br>";
            echo "update test_documentacion set docu10 = '$docu10' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu10 = ""; 
    echo "no existe el archivo de docu10<br>";
}

 if(isset($_FILES['docu11']['name']) && $_FILES['docu11']['name']!= "") 
{
    $docu11 = $_FILES['docu11']['name'];
    $select = mysqli_query($link,"select docu11 from test_documentacion where id_general = '$id_general' and docu11 ='$docu11'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu11 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu11']['tmp_name'],"../archivos/".$id_general."/".$docu11);

        $update = mysqli_query($link,"update test_documentacion set docu11 = '$docu11' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu11 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu11 <br>";
            echo "update test_documentacion set docu11 = '$docu11' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu11 = ""; 
    echo "no existe el archivo de docu11<br>";
}

 if(isset($_FILES['docu12']['name']) && $_FILES['docu12']['name']!= "") 
{
    $docu12 = $_FILES['docu12']['name'];
    $select = mysqli_query($link,"select docu12 from test_documentacion where id_general = '$id_general' and docu12 ='$docu12'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para docu12 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['docu12']['tmp_name'],"../archivos/".$id_general."/".$docu12);

        $update = mysqli_query($link,"update test_documentacion set docu12 = '$docu12' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en docu12 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en docu12 <br>";
            echo "update test_documentacion set docu12 = '$docu12' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $docu12 = ""; 
    echo "no existe el archivo de docu12<br>";
}

if(isset($_FILES['const1']['name']) && $_FILES['const1']['name']!= "") 
{
    $const1 = $_FILES['const1']['name'];
    $select = mysqli_query($link,"select const1 from test_documentacion where id_general = '$id_general' and const1 ='$const1'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para const1 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['const1']['tmp_name'],"../archivos/".$id_general."/".$const1);

        $update = mysqli_query($link,"update test_documentacion set const1 = '$const1' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en const1 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en const1 <br>";
            echo "update test_documentacion set const1 = '$const1' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $const1 = ""; 
    echo "no existe el archivo de const1<br>";
}

if(isset($_FILES['const2']['name']) && $_FILES['const2']['name']!= "") 
{
    $const2 = $_FILES['const2']['name'];
    $select = mysqli_query($link,"select const2 from test_documentacion where id_general = '$id_general' and const2 ='$const2'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para const2 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['const2']['tmp_name'],"../archivos/".$id_general."/".$const2);

        $update = mysqli_query($link,"update test_documentacion set const2 = '$const2' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en const2 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en const2 <br>";
            echo "update test_documentacion set const2 = '$const2' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $const2 = ""; 
    echo "no existe el archivo de const2<br>";
}

if(isset($_FILES['const3']['name']) && $_FILES['const3']['name']!= "") 
{
    $const3 = $_FILES['const3']['name'];
    $select = mysqli_query($link,"select const3 from test_documentacion where id_general = '$id_general' and const3 ='$const3'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para const3 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['const3']['tmp_name'],"../archivos/".$id_general."/".$const3);

        $update = mysqli_query($link,"update test_documentacion set const3 = '$const3' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en const3 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en const3 <br>";
            echo "update test_documentacion set const3 = '$const3' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $const3 = ""; 
    echo "no existe el archivo de const3<br>";
}

if(isset($_FILES['const4']['name']) && $_FILES['const4']['name']!= "") 
{
    $const4 = $_FILES['const4']['name'];
    $select = mysqli_query($link,"select const4 from test_documentacion where id_general = '$id_general' and const4 ='$const4'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para const4 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['const4']['tmp_name'],"../archivos/".$id_general."/".$const4);

        $update = mysqli_query($link,"update test_documentacion set const4 = '$const4' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en const4 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en const4 <br>";
            echo "update test_documentacion set const4 = '$const4' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $const4 = ""; 
    echo "no existe el archivo de const4<br>";
}

 if(isset($_FILES['viv1']['name']) && $_FILES['viv1']['name']!= "") 
{
    $viv1 = $_FILES['viv1']['name'];
    $select = mysqli_query($link,"select viv1 from test_documentacion where id_general = '$id_general' and viv1 ='$viv1'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para viv1 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['viv1']['tmp_name'],"../archivos/".$id_general."/".$viv1);

        $update = mysqli_query($link,"update test_documentacion set viv1 = '$viv1' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en viv1 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en viv1 <br>";
            echo "update test_documentacion set viv1 = '$viv1' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $viv1 = ""; 
    echo "no existe el archivo de viv1<br>";
}

 if(isset($_FILES['viv2']['name']) && $_FILES['viv2']['name']!= "") 
{
    $viv2 = $_FILES['viv2']['name'];
    $select = mysqli_query($link,"select viv2 from test_documentacion where id_general = '$id_general' and viv2 ='$viv2'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para viv2 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['viv2']['tmp_name'],"../archivos/".$id_general."/".$viv2);

        $update = mysqli_query($link,"update test_documentacion set viv2 = '$viv2' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en viv2 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en viv2 <br>";
            echo "update test_documentacion set viv2 = '$viv2' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $viv2 = ""; 
    echo "no existe el archivo de viv2<br>";
}

 if(isset($_FILES['viv3']['name']) && $_FILES['viv3']['name']!= "") 
{
    $viv3 = $_FILES['viv3']['name'];
    $select = mysqli_query($link,"select viv3 from test_documentacion where id_general = '$id_general' and viv3 ='$viv3'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para viv3 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['viv3']['tmp_name'],"../archivos/".$id_general."/".$viv3);

        $update = mysqli_query($link,"update test_documentacion set viv3 = '$viv3' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en viv3 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en viv3 <br>";
            echo "update test_documentacion set viv3 = '$viv3' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $viv3 = ""; 
    echo "no existe el archivo de viv3<br>";
}

 if(isset($_FILES['viv4']['name']) && $_FILES['viv4']['name']!= "") 
{
    $viv4 = $_FILES['viv4']['name'];
    $select = mysqli_query($link,"select viv4 from test_documentacion where id_general = '$id_general' and viv4 ='$viv4'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para viv4 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['viv4']['tmp_name'],"../archivos/".$id_general."/".$viv4);

        $update = mysqli_query($link,"update test_documentacion set viv4 = '$viv4' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en viv4 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en viv4 <br>";
            echo "update test_documentacion set viv4 = '$viv4' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $viv4 = ""; 
    echo "no existe el archivo de viv4<br>";
}

 if(isset($_FILES['face1']['name']) && $_FILES['face1']['name']!= "") 
{
    $face1 = $_FILES['face1']['name'];
    $select = mysqli_query($link,"select face1 from test_documentacion where id_general = '$id_general' and face1 ='$face1'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para face1 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['face1']['tmp_name'],"../archivos/".$id_general."/".$face1);

        $update = mysqli_query($link,"update test_documentacion set face1 = '$face1' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en face1 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en face1 <br>";
            echo "update test_documentacion set face1 = '$face1' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $face1 = ""; 
    echo "no existe el archivo de face1<br>";
}

 if(isset($_FILES['face2']['name']) && $_FILES['face2']['name']!= "") 
{
    $face2 = $_FILES['face2']['name'];
    $select = mysqli_query($link,"select face2 from test_documentacion where id_general = '$id_general' and face2 ='$face2'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para face2 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['face2']['tmp_name'],"../archivos/".$id_general."/".$face2);

        $update = mysqli_query($link,"update test_documentacion set face2 = '$face2' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en face2 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en face2 <br>";
            echo "update test_documentacion set face2 = '$face2' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $face2 = ""; 
    echo "no existe el archivo de face2<br>";
}

 if(isset($_FILES['face3']['name']) && $_FILES['face3']['name']!= "") 
{
    $face3 = $_FILES['face3']['name'];
    $select = mysqli_query($link,"select face3 from test_documentacion where id_general = '$id_general' and face3 ='$face3'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para face3 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['face3']['tmp_name'],"../archivos/".$id_general."/".$face3);

        $update = mysqli_query($link,"update test_documentacion set face3 = '$face3' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en face3 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en face3 <br>";
            echo "update test_documentacion set face3 = '$face3' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $face3 = ""; 
    echo "no existe el archivo de face3<br>";
}

 if(isset($_FILES['face4']['name']) && $_FILES['face4']['name']!= "") 
{
    $face4 = $_FILES['face4']['name'];
    $select = mysqli_query($link,"select face4 from test_documentacion where id_general = '$id_general' and face4 ='$face4'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para face4 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['face4']['tmp_name'],"../archivos/".$id_general."/".$face4);

        $update = mysqli_query($link,"update test_documentacion set face4 = '$face4' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en face4 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en face4 <br>";
            echo "update test_documentacion set face4 = '$face4' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $face4 = ""; 
    echo "no existe el archivo de face4<br>";
}

 if(isset($_FILES['aviso1']['name']) && $_FILES['aviso1']['name']!= "") 
{
    $aviso1 = $_FILES['aviso1']['name'];
    $select = mysqli_query($link,"select aviso1 from test_documentacion where id_general = '$id_general' and aviso1 ='$aviso1'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para aviso1 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['aviso1']['tmp_name'],"../archivos/".$id_general."/".$aviso1);

        $update = mysqli_query($link,"update test_documentacion set aviso1 = '$aviso1' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en aviso1 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en aviso1 <br>";
            echo "update test_documentacion set aviso1 = '$aviso1' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $aviso1 = ""; 
    echo "no existe el archivo de aviso1<br>";
}

 if(isset($_FILES['aviso2']['name']) && $_FILES['aviso2']['name']!= "") 
{
    $aviso2 = $_FILES['aviso2']['name'];
    $select = mysqli_query($link,"select aviso2 from test_documentacion where id_general = '$id_general' and aviso2 ='$aviso2'");
    if (mysqli_num_rows($select)>0)
    {
        echo "Ya existe la imagen para aviso2 en la base de datos";
    }
    else
    {
        move_uploaded_file($_FILES['aviso2']['tmp_name'],"../archivos/".$id_general."/".$aviso2);

        $update = mysqli_query($link,"update test_documentacion set aviso2 = '$aviso2' where id_general = '$id_general'");
        if($update)
        {
            echo "Se actualizó registro del id_general: $id_general en aviso2 <br>";
        }
        else
        {
            echo "No se actualizó el registro del id_general: $id_general en aviso2 <br>";
            echo "update test_documentacion set aviso2 = '$aviso2' where id_general = '$id_general'";
        }    
    }
} 
else 
{ 
    $aviso2 = ""; 
    echo "no existe el archivo de aviso2<br>";
}
?>