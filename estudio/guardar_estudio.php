<?php
session_start(); 
include("../link.php");

$no_estudio = filter_input(INPUT_POST, 'no_estudio', FILTER_SANITIZE_SPECIAL_CHARS);

if($no_estudio === "estudio1") 
{
    
    /* DATOS GENERALES */
    $user = $_SESSION['user'];
    $fecha = date("Y-m-d");
    if(isset($_POST['nombre'])) {$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); } else { $nombre = 0; }
    if(isset($_POST['apellidop'])) {$apellidop = filter_input(INPUT_POST, 'apellidop', FILTER_SANITIZE_SPECIAL_CHARS); } else { $apellidop = 0; }
    if(isset($_POST['apellidom'])) {$apellidom = filter_input(INPUT_POST, 'apellidom', FILTER_SANITIZE_SPECIAL_CHARS); } else { $apellidom = 0; }
    if(isset($_POST['empresa'])) {$empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_SPECIAL_CHARS); } else { $empresa = 0; }
    if(isset($_POST['area'])) {$area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS); } else { $area = 0; }
    if(isset($_POST['puesto'])) {$puesto = filter_input(INPUT_POST, 'puesto', FILTER_SANITIZE_SPECIAL_CHARS); } else { $puesto = 0; }
    if(isset($_POST['email'])) {$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS); } else { $email = 0; }
    if(isset($_POST['dir_calle'])) {$dir_calle = filter_input(INPUT_POST, 'dir_calle', FILTER_SANITIZE_SPECIAL_CHARS); } else { $dir_calle = 0; }
    if(isset($_POST['dir_num'])) {$dir_num = filter_input(INPUT_POST, 'dir_num', FILTER_SANITIZE_SPECIAL_CHARS); } else { $dir_num = 0; }
    if(isset($_POST['colonia'])) {$colonia = filter_input(INPUT_POST, 'colonia', FILTER_SANITIZE_SPECIAL_CHARS); } else { $colonia = 0; }
    if(isset($_POST['estado'])) {$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS); } else { $estado = 0; }
    if(isset($_POST['municipio'])) {$municipio = filter_input(INPUT_POST, 'municipio', FILTER_SANITIZE_SPECIAL_CHARS); } else { $municipio = 0; }
    if(isset($_POST['cp'])) {$cp = filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_SPECIAL_CHARS); } else { $cp = 0; }
    if(isset($_POST['telefono'])) {$telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_SPECIAL_CHARS); } else { $telefono = 0; }
    if(isset($_POST['celular'])) {$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS); } else { $celular = 0; }
    if(isset($_POST['tiempo_dom_actual'])) {$tiempo_dom_actual = filter_input(INPUT_POST, 'tiempo_dom_actual', FILTER_SANITIZE_SPECIAL_CHARS); } else { $tiempo_dom_actual = 0; }
    if(isset($_POST['tiempo_dom_anterior'])) {$tiempo_dom_anterior = filter_input(INPUT_POST, 'tiempo_dom_anterior', FILTER_SANITIZE_SPECIAL_CHARS); } else { $tiempo_dom_anterior = 0; }
    if(isset($_POST['lugar_nacimiento'])) {$lugar_nacimiento = filter_input(INPUT_POST, 'lugar_nacimiento', FILTER_SANITIZE_SPECIAL_CHARS); } else { $lugar_nacimiento = 0; }
    if(isset($_POST['fecha_nacimiento'])) {$fecha_nacimiento = filter_input(INPUT_POST, 'fecha_nacimiento', FILTER_SANITIZE_SPECIAL_CHARS); } else { $fecha_nacimiento = 0; }
    if(isset($_POST['edad'])) {$edad = filter_input(INPUT_POST, 'edad', FILTER_SANITIZE_SPECIAL_CHARS); } else { $edad = 0; }
    if(isset($_POST['curp'])) {$curp = filter_input(INPUT_POST, 'curp', FILTER_SANITIZE_SPECIAL_CHARS); } else { $curp = 0; }
    if(isset($_POST['estado_civil'])) {$estado_civil = filter_input(INPUT_POST, 'estado_civil', FILTER_SANITIZE_SPECIAL_CHARS); } else { $estado_civil = 0; }
    if(isset($_POST['sexo'])) {$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS); } else { $sexo = 0; }
    if(isset($_POST['religion'])) {$religion = filter_input(INPUT_POST, 'religion', FILTER_SANITIZE_SPECIAL_CHARS); } else { $religion = 0; }
    if(isset($_POST['comprobante_dom'])) {$comprobante_dom = filter_input(INPUT_POST, 'comprobante_dom', FILTER_SANITIZE_SPECIAL_CHARS); } else { $comprobante_dom = 0; }
    if(isset($_POST['imss'])) {$imss = filter_input(INPUT_POST, 'imss', FILTER_SANITIZE_SPECIAL_CHARS); } else { $imss = 0; }
    if(isset($_POST['id_oficial'])) {$id_oficial = filter_input(INPUT_POST, 'id_oficial', FILTER_SANITIZE_SPECIAL_CHARS); } else { $id_oficial = 0; }
    if(isset($_POST['familiar'])) {$familiar = filter_input(INPUT_POST, 'familiar', FILTER_SANITIZE_SPECIAL_CHARS); } else { $familiar = 0; }
    if(isset($_POST['vacante'])) {$vacante = filter_input(INPUT_POST, 'vacante', FILTER_SANITIZE_SPECIAL_CHARS); } else { $vacante = 0; }
    if(isset($_POST['dependiente'])) {$dependiente = filter_input(INPUT_POST, 'dependiente', FILTER_SANITIZE_SPECIAL_CHARS); } else { $dependiente = 0; }
    if(isset($_POST['facebook'])) {$facebook = filter_input(INPUT_POST, 'facebook', FILTER_SANITIZE_SPECIAL_CHARS); } else { $facebook = 0; }
    if(isset($_POST['deportes'])) {$deportes = filter_input(INPUT_POST, 'deportes', FILTER_SANITIZE_SPECIAL_CHARS); } else { $deportes = 0; }
    if(isset($_POST['grupos'])) {$grupos = filter_input(INPUT_POST, 'grupos', FILTER_SANITIZE_SPECIAL_CHARS); } else { $grupos = 0; }
    
    $edad = str_replace("_","",$edad);
    $tiempo_dom_actual = str_replace("'","\'",$tiempo_dom_actual);
    $tiempo_dom_anterior = str_replace("'","\'",$tiempo_dom_anterior);
    

    $explode = explode("/",$fecha_nacimiento);
    $fecha_nacimiento = $explode[2]."-".$explode[1]."-".$explode[0];
           
    $insert = mysqli_query($link, "insert into test_general (user, fecha, nombre, apellidop, apellidom, empresa, area, puesto, email, dir_calle, dir_num, colonia, estado, municipio, cp, telefono, celular, tiempo_dom_actual, tiempo_dom_anterior, lugar_nacimiento,fecha_nacimiento, edad, curp, estado_civil, sexo, religion, comprobante_dom, imss, id_oficial, familiar, vacante, dependiente, facebook, deportes, grupos, validado) values ('$user', '$fecha', '$nombre', '$apellidop', '$apellidom', '$empresa', '$area', '$puesto', '$email', '$dir_calle', '$dir_num', '$colonia', '$estado', '$municipio', '$cp', '$telefono', '$celular', '$tiempo_dom_actual', '$tiempo_dom_anterior', '$lugar_nacimiento', '$fecha_nacimiento', '$edad', '$curp', '$estado_civil', '$sexo', '$religion', '$comprobante_dom', '$imss', '$id_oficial', '$familiar', '$vacante', '$dependiente','$facebook', '$deportes', '$grupos', 'no')");
        if($insert)
        {
             $select2 = mysqli_query($link, "select id from test_general order by id Desc limit 1");
                $row2 = mysqli_num_rows($select2);
                if($row2 > 0)
                {
                    while($arr2 = mysqli_fetch_array($select2))
                    {
                       $id3 = $arr2['id'];
                       $_SESSION['id'] = $id3;
                       $insert2 = mysqli_query($link,"insert into agente_status (user, id_estudio, status) values ('$user', '$id3', 'general')");
                       if($insert2)
                       {
                           echo 1;
                       }
                       else
                       {
                        echo "insert into agente_status (user, id_estudio, status) values ('$user', '$id3', 'general')";   
                       }
                    }
                }
        }
        else
        {
            echo 'Datos no guardados <br>';
            echo "insert into test_general (user, fecha, nombre, apellidop, apellidom, empresa, area, puesto, email, dir_calle, dir_num, colonia, estado, municipio, cp, telefono, celular, tiempo_dom_actual, tiempo_dom_anterior, lugar_nacimiento,fecha_nacimiento, edad, curp, estado_civil, sexo, religion, comprobante_dom, imss, id_oficial, familiar, vacante, dependiente, facebook, deportes, grupos, validado) values ('$user', '$fecha', '$nombre', '$apellidop', '$apellidom', '$empresa', '$area', '$puesto', '$email', '$dir_calle', '$dir_num', '$colonia', '$estado', '$municipio', '$cp', '$telefono', '$celular', '$tiempo_dom_actual', '$tiempo_dom_anterior', '$lugar_nacimiento', '$fecha_nacimiento', '$edad', '$curp', '$estado_civil', '$sexo', '$religion', '$comprobante_dom', '$imss', '$id_oficial', '$familiar', '$vacante', '$dependiente','$facebook', '$deportes', '$grupos', 'no') <br>";
            echo "<br>";
        }
    
}
else if($no_estudio === "estudio2") 
{
    /*DATOS ESCOLARES*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    if(isset($_POST['prim_periodo'])) {$prim_periodo = $_POST['prim_periodo']; } else { $prim_periodo = 0; }
    if(isset($_POST['prim_nombre'])) {$prim_nombre = $_POST['prim_nombre']; } else { $prim_nombre = 0; }
    if(isset($_POST['prim_gob_priv'])) {$prim_gob_priv = $_POST['prim_gob_priv']; } else { $prim_gob_priv = 0; }
    if(isset($_POST['prim_colonia'])) {$prim_colonia = $_POST['prim_colonia']; } else { $prim_colonia = 0; }
    if(isset($_POST['prim_comprobante'])) {$prim_comprobante = $_POST['prim_comprobante']; } else { $prim_comprobante = 0; }

    if(isset($_POST['sec_periodo'])) {$sec_periodo = $_POST['sec_periodo']; } else { $sec_periodo = 0; }
    if(isset($_POST['sec_nombre'])) {$sec_nombre = $_POST['sec_nombre']; } else { $sec_nombre = 0; }
    if(isset($_POST['sec_gob_priv'])) {$sec_gob_priv = $_POST['sec_gob_priv']; } else { $sec_gob_priv = 0; }
    if(isset($_POST['sec_colonia'])) {$sec_colonia = $_POST['sec_colonia']; } else { $sec_colonia = 0; }
    if(isset($_POST['sec_comprobante'])) {$sec_comprobante = $_POST['sec_comprobante']; } else { $sec_comprobante = 0; }

    if(isset($_POST['prep_periodo'])) {$prep_periodo = $_POST['prep_periodo']; } else { $prep_periodo = 0; }
    if(isset($_POST['prep_nombre'])) {$prep_nombre = $_POST['prep_nombre']; } else { $prep_nombre = 0; }
    if(isset($_POST['prep_gob_priv'])) {$prep_gob_priv = $_POST['prep_gob_priv']; } else { $prep_gob_priv = 0; }
    if(isset($_POST['prep_colonia'])) {$prep_colonia = $_POST['prep_colonia']; } else { $prep_colonia = 0; }
    if(isset($_POST['prep_comprobante'])) {$prep_comprobante = $_POST['prep_comprobante']; } else { $prep_comprobante = 0; }

    if(isset($_POST['tec_periodo'])) {$tec_periodo = $_POST['tec_periodo']; } else { $tec_periodo = 0; }
    if(isset($_POST['tec_nombre'])) {$tec_nombre = $_POST['tec_nombre']; } else { $tec_nombre = 0; }
    if(isset($_POST['tec_gob_priv'])) {$tec_gob_priv = $_POST['tec_gob_priv']; } else { $tec_gob_priv = 0; }
    if(isset($_POST['tec_colonia'])) {$tec_colonia = $_POST['tec_colonia']; } else { $tec_colonia = 0; }
    if(isset($_POST['tec_comprobante'])) {$tec_comprobante = $_POST['tec_comprobante']; } else { $tec_comprobante = 0; }

    if(isset($_POST['pro_periodo'])) {$pro_periodo = $_POST['pro_periodo']; } else { $pro_periodo = 0; }
    if(isset($_POST['pro_nombre'])) {$pro_nombre = $_POST['pro_nombre']; } else { $pro_nombre = 0; }
    if(isset($_POST['pro_gob_priv'])) {$pro_gob_priv = $_POST['pro_gob_priv']; } else { $pro_gob_priv = 0; }
    if(isset($_POST['pro_colonia'])) {$pro_colonia = $_POST['pro_colonia']; } else { $pro_colonia = 0; }
    if(isset($_POST['pro_comprobante'])) {$pro_comprobante = $_POST['pro_comprobante']; } else { $pro_comprobante = 0; }

    if(isset($_POST['ma_periodo'])) {$ma_periodo = $_POST['ma_periodo']; } else { $ma_periodo = 0; }
    if(isset($_POST['ma_nombre'])) {$ma_nombre = $_POST['ma_nombre']; } else { $ma_nombre = 0; }
    if(isset($_POST['ma_gob_priv'])) {$ma_gob_priv = $_POST['ma_gob_priv']; } else { $ma_gob_priv = 0; }
    if(isset($_POST['ma_colonia'])) {$ma_colonia = $_POST['ma_colonia']; } else { $ma_colonia = 0; }
    if(isset($_POST['ma_comprobante'])) {$ma_comprobante = $_POST['ma_comprobante']; } else { $ma_comprobante = 0; }

    if(isset($_POST['dip_periodo'])) {$dip_periodo = $_POST['dip_periodo']; } else { $dip_periodo = 0; }
    if(isset($_POST['dip_nombre'])) {$dip_nombre = $_POST['dip_nombre']; } else { $dip_nombre = 0; }
    if(isset($_POST['dip_gob_priv'])) {$dip_gob_priv = $_POST['dip_gob_priv']; } else { $dip_gob_priv = 0; }
    if(isset($_POST['dip_colonia'])) {$dip_colonia = $_POST['dip_colonia']; } else { $dip_colonia = 0; }
    if(isset($_POST['dip_comprobante'])) {$dip_comprobante = $_POST['dip_comprobante']; } else { $dip_comprobante = 0; }

    
    $insert = mysqli_query($link, "insert into test_escolar (id_general, prim_periodo, prim_nombre, prim_gob_priv, prim_colonia, prim_comprobante, sec_periodo, sec_nombre, sec_gob_priv, sec_colonia, sec_comprobante, prep_periodo, prep_nombre, prep_gob_priv, prep_colonia, prep_comprobante, tec_periodo, tec_nombre, tec_gob_priv, tec_colonia, tec_comprobante, pro_periodo, pro_nombre, pro_gob_priv, pro_colonia, pro_comprobante, ma_periodo, ma_nombre, ma_gob_priv, ma_colonia, ma_comprobante, dip_periodo, dip_nombre, dip_gob_priv, dip_colonia, dip_comprobante) values ('$id_general', '$prim_periodo', '$prim_nombre', '$prim_gob_priv', '$prim_colonia', '$prim_comprobante', '$sec_periodo', '$sec_nombre', '$sec_gob_priv', '$sec_colonia', '$sec_comprobante', '$prep_periodo', '$prep_nombre', '$prep_gob_priv', '$prep_colonia', '$prep_comprobante', '$tec_periodo', '$tec_nombre', '$tec_gob_priv', '$tec_colonia', '$tec_comprobante', '$pro_periodo', '$pro_nombre', '$pro_gob_priv', '$pro_colonia', '$pro_comprobante', '$ma_periodo', '$ma_nombre', '$ma_gob_priv', '$ma_colonia', '$ma_comprobante', '$dip_periodo', '$dip_nombre', '$dip_gob_priv', '$dip_colonia', '$dip_comprobante')");
   
    if($insert)
        {
            $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
            if($update)
            {
                echo 1;
            }
            else
            {
             echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
            }
             
        }
        else
        {
            echo 'Datos no guardados';
        }
        
}

else if($no_estudio === "estudio3") 
{
    /*ENTORNO FAMILIAR*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    if(isset($_POST['no_nombre'])) {$no_nombre = $_POST['no_nombre']; } else { $no_nombre = 0; }
    if(isset($_POST['no_parentesco'])) {$no_parentesco = $_POST['no_parentesco']; } else { $no_parentesco = 0; }
    if(isset($_POST['no_telefono'])) {$no_telefono = $_POST['no_telefono']; } else { $no_telefono = 0; }
    if(isset($_POST['no_edad'])) {$no_edad = $_POST['no_edad']; } else { $no_edad = 0; }
    if(isset($_POST['no_sexo'])) {$no_sexo = $_POST['no_sexo']; } else { $no_sexo = 0; }
    if(isset($_POST['no_estado'])) {$no_estado = $_POST['no_estado']; } else { $no_estado = 0; }
    if(isset($_POST['no_nivel'])) {$no_nivel = $_POST['no_nivel']; } else { $no_nivel = 0; }
    if(isset($_POST['no_ocupacion'])) {$no_ocupacion = $_POST['no_ocupacion']; } else { $no_ocupacion = 0; }
    if(isset($_POST['no_empresa'])) {$no_empresa = $_POST['no_empresa']; } else { $no_empresa = 0; }
    
    
    
    if(isset($_POST['si_nombre'])) {$si_nombre = $_POST['si_nombre']; } else { $si_nombre = 0; }
    if(isset($_POST['si_parentesco'])) {$si_parentesco = $_POST['si_parentesco']; } else { $si_parentesco = 0; }
    if(isset($_POST['si_telefono'])) {$si_telefono = $_POST['si_telefono']; } else { $si_telefono = 0; }
    if(isset($_POST['si_edad'])) {$si_edad = $_POST['si_edad']; } else { $si_edad = 0; }
    if(isset($_POST['si_sexo'])) {$si_sexo = $_POST['si_sexo']; } else { $si_sexo = 0; }
    if(isset($_POST['si_estado'])) {$si_estado = $_POST['si_estado']; } else { $si_estado = 0; }
    if(isset($_POST['si_nivel'])) {$si_nivel = $_POST['si_nivel']; } else { $si_nivel = 0; }
    if(isset($_POST['si_ocupacion'])) {$si_ocupacion = $_POST['si_ocupacion']; } else { $si_ocupacion = 0; }
    if(isset($_POST['si_ingreso'])) {$si_ingreso = $_POST['si_ingreso']; } else { $si_ingreso = 0; }
    
   
    $resultado = 0;
    $n = count($no_nombre);
    $i = 0;
    
    while ($i < $n)
    {
        
        if(isset($no_nombre[$i]))
        {  
            if($no_nombre[$i] != "")
            {
                
                $no_edad2 = str_replace("_","",$no_edad[$i]);
                
                $insert = mysqli_query($link, "insert into test_familiar (id_general, viven, nombre, parentesco, telefono, edad, sexo, estado, nivel, ocupacion, empresa) values ('$id_general', 'no', '$no_nombre[$i]', '$no_parentesco[$i]', '$no_telefono[$i]', '$no_edad2', '$no_sexo[$i]', '$no_estado[$i]', '$no_nivel[$i]', '$no_ocupacion[$i]', '$no_empresa[$i]')");
        
                if($insert)
                {
                    $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
                    if($update)
                    {
                        $resultado = 1;
                    }
                    else
                    {
                     echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
                    }
                }
                else
                {
                    echo 'Datos no guardados NO viven<br>';
                    echo "insert into test_familiar (id_general, viven, nombre, parentesco, telefono, edad, sexo, estado, nivel, ocupacion, empresa) values ('$id_general', 'no', '$no_nombre[$i]', '$no_parentesco[$i]', '$no_telefono[$i]', '$no_edad2', '$no_sexo[$i]', '$no_estado[$i]', '$no_nivel[$i]', '$no_ocupacion[$i]', '$no_empresa[$i]')";            
                }
            }
            
        }
        if(isset($si_ingreso[$i]))
        {
            
            if($si_ingreso[$i] != "")
            {
                $si_ingreso2 = $si_ingreso[$i];
                $si_ingreso2 = str_replace("$","",$si_ingreso2);
                $si_ingreso2 = str_replace(",","",$si_ingreso2);
                $si_ingreso2 = str_replace("_","",$si_ingreso2);
                
                $si_edad2 = str_replace("_","",$si_edad[$i]);
                $insert2 = mysqli_query($link, "insert into test_familiar (id_general, viven, nombre, parentesco, telefono, edad, sexo, estado, nivel, ocupacion, ingreso) values ('$id_general', 'si', '$si_nombre[$i]', '$si_parentesco[$i]', '$si_telefono[$i]', '$si_edad2', '$si_sexo[$i]', '$si_estado[$i]', '$si_nivel[$i]', '$si_ocupacion[$i]', '$si_ingreso2')");
                if($insert2)
                {
                    $resultado = 1;
                }
                else 
                {
                    echo 'Datos no guardados SI viven <br>';
                    echo "insert into test_familiar (id_general, viven, nombre, parentesco, telefono, edad, sexo, estado, nivel, ocupacion, ingreso) values ('$id_general', 'si', '$si_nombre[$i]', '$si_parentesco[$i]', '$si_telefono[$i]', '$si_edad2', '$si_sexo[$i]', '$si_estado[$i]', '$si_nivel[$i]', '$si_ocupacion[$i]', '$si_ingreso2')";
                }
            }
            
        }           
        $i++;
    }
    
    echo $resultado;
}

else if($no_estudio === "estudio4") 
{
    /*GASTOS, BIENES Y ADEUDOS*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    if(isset($_POST['propietario'])) {$propietario = $_POST['propietario']; } else { $propietario = 0; }
    if(isset($_POST['propietario2'])) {$propietario2 = $_POST['propietario2']; } else { $propietario2 = 0; }
    if(isset($_POST['propietario3'])) {$propietario3 = $_POST['propietario3']; } else { $propietario3 = 0; }
    if(isset($_POST['ano'])) {$ano = $_POST['ano']; } else { $ano = 0; }
    if(isset($_POST['tipo'])) {$tipo = $_POST['tipo']; } else { $tipo = 0; }
    if(isset($_POST['tipo2'])) {$tipo2 = $_POST['tipo2']; } else { $tipo2 = 0; }
    if(isset($_POST['tipo3'])) {$tipo3 = $_POST['tipo3']; } else { $tipo3 = 0; }
    if(isset($_POST['marca'])) {$marca = $_POST['marca']; } else { $marca = 0; }
    
    if(isset($_POST['valor_comercial'])) {$valor_comercial = $_POST['valor_comercial']; } else { $valor_comercial = 0; }
    
    if(isset($_POST['saldo_actual'])) {$saldo_actual = $_POST['saldo_actual']; } else { $saldo_actual = 0; }
    if(isset($_POST['limite'])) {$limite = $_POST['limite']; } else { $limite = 0; }
    
    $n = count($propietario);
    $i = 0;
    
    $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
    if($update)
    {
        
    }
    else
    {
     echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
    }
    while ($i < $n)
    {
        
        if(isset($marca[$i]))
        {  
            if($marca[$i] == "")
            {
                
            }
            else
            {
                $tipo_general = "auto";
                $insert = mysqli_query($link, "insert into test_ingresos_familiar (id_general, tipo_gral, propietario, ano, tipo, marca) values ('$id_general', '$tipo_general', '$propietario[$i]', '$ano[$i]', '$tipo[$i]', '$marca[$i]')");
        
                if($insert)
                {
                    echo "Datos guardados AUTOS <br>";
                }
                else
                {
                    echo 'Datos no guardados AUTOS<br>';
                    echo "insert into test_ingresos_familiar (id_general, tipo_ral, propietario, ano, tipo, marca) values ('$id_general', '$tipo_general', '$propietario[$i]', '$ano[$i]', '$tipo[$i]', '$marca[$i]')";            
                    echo "<br>";
                    
                }
            }
            
        }
        if(isset($valor_comercial[$i]))
        {
            //echo $si_ingreso[$i]."<br>";
        
            if($valor_comercial[$i] == "")
            {
                $valor_comercial2 = $valor_comercial[$i];

            }
            else 
            {
                $valor_comercial2 = $valor_comercial[$i];
                $valor_comercial2 = str_replace("$","",$valor_comercial2);
                $valor_comercial2 = str_replace(",","",$valor_comercial2);
                $valor_comercial2 = str_replace("_","",$valor_comercial2);
                //echo $si_ingreso2."<br>";
            }
            $tipo_general = "inmueble";
            $insert2 = mysqli_query($link, "insert into test_ingresos_familiar (id_general, tipo_gral, propietario, tipo, valor_comercial) values ('$id_general', '$tipo_general', '$propietario2[$i]', '$tipo2[$i]', '$valor_comercial2')");
            if($insert2)
            {
                echo 'Datos guardados INMUEBLES';
            }
            else 
            {
                echo 'Datos no guardados INMUEBLES <br>';
                echo "insert into test_ingresos_familiar (id_general, tipo_gral, propietario, tipo, valor_comercial) values ('$id_general', '$tipo_general', '$propietario2[$i]', '$tipo2[$i]', '$valor_comercial2')";
                echo "<br>";
                
            }
        }
        if(isset($saldo_actual[$i]))
        {
            //echo $si_ingreso[$i]."<br>";
        
            if($saldo_actual[$i] == "")
            {
                $saldo_actual2 = $saldo_actual[$i];
                $limite2 = $limite[$i];

            }
            else 
            {
                $saldo_actual2 = $saldo_actual[$i];
                $saldo_actual2 = str_replace("$","",$saldo_actual2);
                $saldo_actual2 = str_replace(",","",$saldo_actual2);
                $saldo_actual2 = str_replace("_","",$saldo_actual2);
                //echo $saldo_actual2."<br>";
                
                $limite2 = $limite[$i];
                $limite2 = str_replace("$","",$limite2);
                $limite2 = str_replace(",","",$limite2);
                $limite2 = str_replace("_","",$limite2);
                //echo $si_ingreso2."<br>";
            }
            $tipo_general = "banco";
            $insert2 = mysqli_query($link, "insert into test_ingresos_familiar (id_general, tipo_gral, propietario, tipo, saldo_actual, limite) values ('$id_general', '$tipo_general', '$propietario3[$i]', '$tipo3[$i]', '$saldo_actual2', '$limite2')");
            if($insert2)
            {
                echo 'Datos guardados BANCO';
            }
            else 
            {
                echo 'Datos no guardados BANCO <br>';
                echo "insert into test_ingresos_familiar (id_general, tipo_gral, propietario, tipo, saldo_actual, limite) values ('$id_general', '$tipo_general', '$propietario3[$i]', '$tipo3[$i]', '$saldo_actual2', '$limite2')";
                echo "<br>";
                
            }
        }
        $i++;
    }
}


else if($no_estudio === "estudio5") 
{
    /*INGRESOS Y GASTOS*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    
    if(($_POST['ingreso_pareja']) != "") {$ing2_ingreso_pareja = $_POST['ingreso_pareja'];} else { $ing2_ingreso_pareja = 0; }
        $ing2_ingreso_pareja = str_replace("$","",$ing2_ingreso_pareja);
        $ing2_ingreso_pareja = str_replace(",","",$ing2_ingreso_pareja);
        $ing2_ingreso_pareja = str_replace("_","",$ing2_ingreso_pareja);
    
    if(($_POST['ingreso_renta']) != "") {$ing2_ingreso_renta = $_POST['ingreso_renta']; } else { $ing2_ingreso_renta = 0; }
        $ing2_ingreso_renta = str_replace("$","",$ing2_ingreso_renta);
        $ing2_ingreso_renta = str_replace(",","",$ing2_ingreso_renta);
        $ing2_ingreso_renta = str_replace("_","",$ing2_ingreso_renta);
        
    if(($_POST['ingreso_otros'])!= "") {$ing2_ingreso_otros = $_POST['ingreso_otros']; } else { $ing2_ingreso_otros = 0; }
        $ing2_ingreso_otros = str_replace("$","",$ing2_ingreso_otros);
        $ing2_ingreso_otros = str_replace(",","",$ing2_ingreso_otros);
        $ing2_ingreso_otros = str_replace("_","",$ing2_ingreso_otros);
        
    if(($_POST['alimentacion'])!= "") {$ing2_alimentacion = $_POST['alimentacion']; } else { $ing2_alimentacion = 0; }
        $ing2_alimentacion = str_replace("$","",$ing2_alimentacion);
        $ing2_alimentacion = str_replace(",","",$ing2_alimentacion);
        $ing2_alimentacion = str_replace("_","",$ing2_alimentacion);
        
    if(($_POST['hipoteca'])!= "") {$ing2_hipoteca = $_POST['hipoteca']; } else { $ing2_hipoteca = 0; }
        $ing2_hipoteca = str_replace("$","",$ing2_hipoteca);
        $ing2_hipoteca = str_replace(",","",$ing2_hipoteca);
        $ing2_hipoteca = str_replace("_","",$ing2_hipoteca);
        
    if(($_POST['luz'])!= "") {$ing2_luz = $_POST['luz']; } else { $ing2_luz = 0; }
        $ing2_luz = str_replace("$","",$ing2_luz);
        $ing2_luz = str_replace(",","",$ing2_luz);
        $ing2_luz = str_replace("_","",$ing2_luz);
        
    if(($_POST['agua'])!= "") {$ing2_agua = $_POST['agua']; } else { $ing2_agua = 0; }
        $ing2_agua = str_replace("$","",$ing2_agua);
        $ing2_agua = str_replace(",","",$ing2_agua);
        $ing2_agua = str_replace("_","",$ing2_agua);
        
    if(($_POST['gas'])!= "") {$ing2_gas = $_POST['gas']; } else { $ing2_gas = 0; }
        $ing2_gas = str_replace("$","",$ing2_gas);
        $ing2_gas = str_replace(",","",$ing2_gas);
        $ing2_gas = str_replace("_","",$ing2_gas);
        
    if(($_POST['telefono'])!= "") {$ing2_telefono = $_POST['telefono']; } else { $ing2_telefono = 0; }
        $ing2_telefono = str_replace("$","",$ing2_telefono);
        $ing2_telefono = str_replace(",","",$ing2_telefono);
        $ing2_telefono = str_replace("_","",$ing2_telefono);
        
    if(($_POST['ropa'])!= "") {$ing2_ropa = $_POST['ropa']; } else { $ing2_ropa = 0; }
        $ing2_ropa = str_replace("$","",$ing2_ropa);
        $ing2_ropa = str_replace(",","",$ing2_ropa);
        $ing2_ropa = str_replace("_","",$ing2_ropa);
        
    if(($_POST['transporte'])!= "") {$ing2_transporte = $_POST['transporte']; } else { $ing2_transporte = 0; }
        $ing2_transporte = str_replace("$","",$ing2_transporte);
        $ing2_transporte = str_replace(",","",$ing2_transporte);
        $ing2_transporte = str_replace("_","",$ing2_transporte);
        
    if(($_POST['escolar'])!= "") {$ing2_escolar = $_POST['escolar']; } else { $ing2_escolar = 0; }
        $ing2_escolar = str_replace("$","",$ing2_escolar);
        $ing2_escolar = str_replace(",","",$ing2_escolar);
        $ing2_escolar = str_replace("_","",$ing2_escolar);
        
    if(($_POST['medico'])!= "") {$ing2_medico = $_POST['medico']; } else { $ing2_medico = 0; }
        $ing2_medico = str_replace("$","",$ing2_medico);
        $ing2_medico = str_replace(",","",$ing2_medico);
        $ing2_medico = str_replace("_","",$ing2_medico);
        
    if(($_POST['internet'])!= "") {$ing2_internet = $_POST['internet']; } else { $ing2_internet = 0; }
        $ing2_internet = str_replace("$","",$ing2_internet);
        $ing2_internet = str_replace(",","",$ing2_internet);
        $ing2_internet = str_replace("_","",$ing2_internet);
        
    if(($_POST['diversion'])!= "") {$ing2_diversion = $_POST['diversion']; } else { $ing2_diversion = 0; }
        $ing2_diversion = str_replace("$","",$ing2_diversion);
        $ing2_diversion = str_replace(",","",$ing2_diversion);
        $ing2_diversion = str_replace("_","",$ing2_diversion);
        
    if(($_POST['deudas'])!= "") {$ing2_deudas = $_POST['deudas']; } else { $ing2_deudas = 0; }
        $ing2_deudas = str_replace("$","",$ing2_deudas);
        $ing2_deudas = str_replace(",","",$ing2_deudas);
        $ing2_deudas = str_replace("_","",$ing2_deudas);
        
    if(($_POST['otros'])!= "") {$ing2_otros = $_POST['otros']; } else { $ing2_otros = 0; }
        $ing2_otros = str_replace("$","",$ing2_otros);
        $ing2_otros = str_replace(",","",$ing2_otros);
        $ing2_otros = str_replace("_","",$ing2_otros);
    
    $insert = mysqli_query($link, "insert into test_ingresos (id_general, ingreso_pareja, ingreso_renta, ingreso_otros, alimentacion, hipoteca, luz, agua, gas, telefono, ropa, transporte, escolar, medico, internet, diversion, deudas, otros) values ('$id_general', '$ing2_ingreso_pareja', '$ing2_ingreso_renta', '$ing2_ingreso_otros', '$ing2_alimentacion', '$ing2_hipoteca', '$ing2_luz', '$ing2_agua', '$ing2_gas', '$ing2_telefono', '$ing2_ropa', '$ing2_transporte', '$ing2_escolar', '$ing2_medico', '$ing2_internet', '$ing2_diversion', '$ing2_deudas', '$ing2_otros')");
    
    if($insert)
    {
        $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
        if($update)
        {
            echo 1;
        }
        else
        {
         echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
        }
    }
    else
    {
        echo "Datos no guardados <br>";
        echo "insert into test_ingresos (id_general, ingreso_pareja, ingreso_renta, ingreso_otros, alimentacion, hipoteca, luz, agua, gas, telefono, ropa, transporte, escolar, medico, internet, diversion, deudas, otros) values ('$id_general', '$ing2_ingreso_pareja', '$ing2_ingreso_renta', '$ing2_ingreso_otros', '$ing2_alimentacion', '$ing2_hipoteca', '$ing2_luz', '$ing2_agua', '$ing2_gas', '$ing2_telefono', '$ing2_ropa', '$ing2_transporte', '$ing2_escolar', '$ing2_medico', '$ing2_internet', '$ing2_diversion', '$ing2_deudas', '$ing2_otros')";
        echo "<br>";
    }
    
}
else if($no_estudio === "estudio6") 
{
    /*ESTILO DE VIDA*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    if(isset($_POST['servicio_medico'])) {$servicio_medico = $_POST['servicio_medico']; } else { $servicio_medico = 0; }
    if(isset($_POST['alergias'])) {$alergias = $_POST['alergias']; } else { $alergias = 0; }
    if(isset($_POST['def_vista'])) {$def_vista = $_POST['def_vista']; } else { $def_vista = 0; }
    if(isset($_POST['def_oido'])) {$def_oido = $_POST['def_oido']; } else { $def_oido = 0; }
    if(isset($_POST['def_fisica'])) {$def_fisica = $_POST['def_fisica']; } else { $def_fisica = 0; }
    if(isset($_POST['int_quirurgica'])) {$int_quirurgica = $_POST['int_quirurgica']; } else { $int_quirurgica = 0; }
    if(isset($_POST['accidente'])) {$accidente = $_POST['accidente']; } else { $accidente = 0; }
    if(isset($_POST['enfermedad'])) {$enfermedad = $_POST['enfermedad']; } else { $enfermedad = 0; }
    if(isset($_POST['vicios'])) {$vicios = $_POST['vicios']; } else { $vicios = 0; }
    if(isset($_POST['deporte'])) {$deporte = $_POST['deporte']; } else { $deporte = 0; }
    if(isset($_POST['tiempo_libre'])) {$tiempo_libre = $_POST['tiempo_libre']; } else { $tiempo_libre = 0; }
    if(isset($_POST['emergencia'])) {$emergencia = $_POST['emergencia']; } else { $emergencia = 0; }
    
    $insert = mysqli_query($link, "insert into test_estilo (id_general, servicio_medico, alergias, def_vista, def_oido, def_fisica, int_quirurgica, accidente, enfermedad, vicios, deporte, tiempo_libre, emergencia) values ('$id_general', '$servicio_medico', '$alergias', '$def_vista', '$def_oido', '$def_fisica', '$int_quirurgica', '$accidente', '$enfermedad', '$vicios', '$deporte', '$tiempo_libre', '$emergencia')");
    
    if($insert)
    {
        $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
        if($update)
        {
            echo 1;
        }
        else
        {
         echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
        }
    }
    else
    {
        echo "Datos no guardados <br>";
        echo "insert into test_estilo (id_general, servicio_medico, alergias, def_vista, def_oido, def_fisica, int_quirurgica, accidente, enfermedad, vicios, deporte, tiempo_libre, emergencia) values ('$id_general', '$servicio_medico', '$alergias', '$def_vista', '$def_oido', '$def_fisica', '$int_quirurgica', '$accidente', '$enfermedad', '$vicios', '$deporte', '$tiempo_libre', '$emergencia')";
        echo "<br>";
    }
    
}
else if($no_estudio === "estudio7") 
{
    /*CONDICIONES DE VIVIENDA Y ECONOMÍA*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    if(isset($_POST['nivel'])) {$nivel = $_POST['nivel']; } else { $nivel = 0; }
    if(isset($_POST['casa'])) {$casa = $_POST['casa']; } else { $casa = 0; }
    if(isset($_POST['casa_pertenece'])) {$casa_pertenece = $_POST['casa_pertenece']; } else { $casa_pertenece = 0; }
    if(isset($_POST['anos_vivir'])) {$anos_vivir = $_POST['anos_vivir']; } else { $anos_vivir = 0; }
    if(isset($_POST['personas'])) {$personas = $_POST['personas']; } else { $personas = 0; }
    if(isset($_POST['personas_quien'])) {$personas_quien = $_POST['personas_quien']; } else { $personas_quien = 0; }
    if(isset($_POST['decoracion'])) {$decoracion = $_POST['decoracion']; } else { $decoracion = 0; }
    if(isset($_POST['distribucion'])) {$distribucion = $_POST['distribucion']; } else { $distribucion = 0; }
    if(isset($_POST['colonia'])) {$colonia = $_POST['colonia']; } else { $colonia = 0; }
    if(isset($_POST['calles'])) {$calles = $_POST['calles']; } else { $calles = 0; }
        
    $insert = mysqli_query($link, "insert into test_vivienda (id_general, nivel, casa, casa_pertenece, anos_vivir, personas, personas_quien, decoracion, distribucion, colonia, calles) values ('$id_general', '$nivel', '$casa', '$casa_pertenece', '$anos_vivir', '$personas', '$personas_quien', '$decoracion', '$distribucion', '$colonia', '$calles')");
    
    if($insert)
    {
        $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
        if($update)
        {
            echo 1;
        }
        else
        {
         echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
        }
    }
    else
    {
        echo "Datos no guardados <br>";
        echo "insert into test_vivienda (id_general, nivel, casa, casa_pertenece, anos_vivir, personas, personas_quien, decoracion, distribucion, colonia, calles) values ('$id_general', '$nivel', '$casa', '$casa_pertenece', '$anos_vivir', '$personas', '$personas_quien', '$decoracion', '$distribucion', '$colonia', '$calles')";
        echo "<br>";
    }
    
}
else if($no_estudio === "estudio8") 
{
    /*datos de referencia*/
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    if(isset($_POST['ref1_nombre'])) {$ref1_nombre = $_POST['ref1_nombre']; } else { $ref1_nombre = 0; }
    if(isset($_POST['ref1_telefono'])) {$ref1_telefono = $_POST['ref1_telefono']; } else { $ref1_telefono = 0; }
    if(isset($_POST['ref1_tiempo'])) {$ref1_tiempo = $_POST['ref1_tiempo']; } else { $ref1_tiempo = 0; }
    if(isset($_POST['ref1_referencia'])) {$ref1_referencia = $_POST['ref1_referencia']; } else { $ref1_referencia = 0; }
    
    if(isset($_POST['ref2_nombre'])) {$ref2_nombre = $_POST['ref2_nombre']; } else { $ref2_nombre = 0; }
    if(isset($_POST['ref2_telefono'])) {$ref2_telefono = $_POST['ref2_telefono']; } else { $ref2_telefono = 0; }
    if(isset($_POST['ref2_tiempo'])) {$ref2_tiempo = $_POST['ref2_tiempo']; } else { $ref2_tiempo = 0; }
    if(isset($_POST['ref2_referencia'])) {$ref2_referencia = $_POST['ref2_referencia']; } else { $ref2_referencia = 0; }
    
    if(isset($_POST['ref3_nombre'])) {$ref3_nombre = $_POST['ref3_nombre']; } else { $ref3_nombre = 0; }
    if(isset($_POST['ref3_tiempo'])) {$ref3_tiempo = $_POST['ref3_tiempo']; } else { $ref3_tiempo = 0; }
    if(isset($_POST['ref3_comentario'])) {$ref3_comentario = $_POST['ref3_comentario']; } else { $ref3_comentario = 0; }
    
    $insert = mysqli_query($link, "insert into test_referencia (id_general, ref1_nombre, ref1_telefono, ref1_tiempo, ref1_referencia, ref2_nombre, ref2_telefono, ref2_tiempo, ref2_referencia, ref3_nombre, ref3_tiempo, ref3_comentario) values ('$id_general', '$ref1_nombre', '$ref1_telefono', '$ref1_tiempo', '$ref1_referencia', '$ref2_nombre', '$ref2_telefono', '$ref2_tiempo', '$ref2_referencia', '$ref3_nombre', '$ref3_tiempo', '$ref3_comentario')");
    
    if($insert)
    {
        $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
        if($update)
        {
            echo 1;
        }
        else
        {
         echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
        }
    }
    else
    {
        echo "Datos no guardados <br>";
        echo "insert into test_referencia (id_general, ref1_nombre, ref1_telefono, ref1_tiempo, ref1_referencia, ref2_nombre, ref2_telefono, ref2_tiempo, ref2_referencia, ref3_nombre, ref3_tiempo, ref3_comentario) values ('$id_general', '$ref1_nombre', '$ref1_telefono', '$ref1_tiempo', '$ref1_referencia', '$ref2_nombre', '$ref2_telefono', '$ref2_tiempo', '$ref2_referencia', '$ref3_nombre', '$ref3_tiempo', '$ref3_comentario')";
        echo "<br>";
    }
    
}
else if($no_estudio === "estudio9") 
{
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    /*Datos laborales*/
    if(isset($_SESSION['id'])){$id_general = $_SESSION['id'];} else {$id_general = 0;}
    if(isset($_POST['empresa'])) {$empresa = $_POST['empresa']; } else { $empresa = 0; }
    if(isset($_POST['carta'])) {$carta = $_POST['carta']; } else { $carta = 0; }
    if(isset($_POST['demanda'])) {$demanda = $_POST['demanda']; } else { $demanda = 0; }
    if(isset($_POST['telefono'])) {$telefono = $_POST['telefono']; } else { $telefono = 0; }
    if(isset($_POST['puestos'])) {$puestos = $_POST['puestos']; } else { $puestos = 0; }
    if(isset($_POST['depto'])) {$depto = $_POST['depto']; } else { $depto = 0; }
    if(isset($_POST['sueldo'])) {$sueldo = $_POST['sueldo']; } else { $sueldo = 0; }
    if(isset($_POST['domicilio'])) {$domicilio = $_POST['domicilio']; } else { $domicilio = 0; }
    if(isset($_POST['contrato'])) {$contrato = $_POST['contrato']; } else { $contrato = 0; }
    if(isset($_POST['fecha_ing'])) {$fecha_ing = $_POST['fecha_ing']; } else { $fecha_ing = 0; }
    if(isset($_POST['fecha_baja'])) {$fecha_baja = $_POST['fecha_baja']; } else { $fecha_baja = 0; }
    if(isset($_POST['motivo'])) {$motivo = $_POST['motivo']; } else { $motivo = 0; } 
    if(isset($_POST['sindicato'])) {$sindicato = $_POST['sindicato']; } else { $sindicato = 0; } 
    if(isset($_POST['jefe'])) {$jefe = $_POST['jefe']; } else { $jefe = 0; } 
    if(isset($_POST['jefe_puesto'])) {$jefe_puesto = $_POST['jefe_puesto']; } else { $jefe_puesto = 0; } 
    
    /*
    if(isset($_POST['val_fecha_consulta'])) {$val_fecha_consulta = $_POST['val_fecha_consulta']; } else { $val_fecha_consulta = 0; } 
    if(isset($_POST['val_fecha_ingreso'])) {$val_fecha_ingreso = $_POST['val_fecha_ingreso']; } else { $val_fecha_ingreso = 0; } 
    if(isset($_POST['val_fecha_baja'])) {$val_fecha_baja = $_POST['val_fecha_baja']; } else { $val_fecha_baja = 0; } 
    if(isset($_POST['val_puesto_inicial'])) {$val_puesto_inicial = $_POST['val_puesto_inicial']; } else { $val_puesto_inicial = 0; } 
    if(isset($_POST['val_sueldo_inicial'])) {$val_sueldo_inicial = $_POST['val_sueldo_inicial']; } else { $val_sueldo_inicial = 0; } 
    if(isset($_POST['val_contrato'])) {$val_contrato = $_POST['val_contrato']; } else { $val_contrato = 0; } 
    if(isset($_POST['val_iniciativa'])) {$val_iniciativa = $_POST['val_iniciativa']; } else { $val_iniciativa = 0; } 
    if(isset($_POST['val_metas'])) {$val_metas = $_POST['val_metas']; } else { $val_metas = 0; } 
    if(isset($_POST['val_responsabilidad'])) {$val_responsabilidad = $_POST['val_responsabilidad']; } else { $val_responsabilidad = 0; } 
    if(isset($_POST['val_puntualidad '])) {$val_puntualidad  = $_POST['val_puntualidad ']; } else { $val_puntualidad  = 0; } 
    if(isset($_POST['val_personal'])) {$val_personal = $_POST['val_personal']; } else { $val_personal = 0; } 
    if(isset($_POST['val_salida'])) {$val_salida = $_POST['val_salida']; } else { $val_salida = 0; } 
    if(isset($_POST['val_recontratable'])) {$val_recontratable = $_POST['val_recontratable']; } else { $val_recontratable = 0; } 
    if(isset($_POST['val_nombre_info'])) {$val_nombre_info = $_POST['val_nombre_info']; } else { $val_nombre_info = 0; } 
    if(isset($_POST['val_puesto_infor'])) {$val_puesto_infor = $_POST['val_puesto_infor']; } else { $val_puesto_infor = 0; } 
    if(isset($_POST['val_observacion'])) {$val_observacion = $_POST['val_observacion']; } else { $val_observacion = 0; } 
    */
    
    $n = count($empresa);
    $i = 0;
    
    while ($i < $n)
    {
        
         
        $explode = explode("/",$fecha_ing[$i]);
        $fecha_ing2 = $explode[2]."-".$explode[1]."-".$explode[0];
       
        $explode = explode("/",$fecha_baja[$i]);
        $fecha_baja2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $sueldo2 = $sueldo[$i];
        $sueldo2 = str_replace("$","",$sueldo2);
        $sueldo2 = str_replace(",","",$sueldo2);
        $sueldo2 = str_replace("_","",$sueldo2);
        /*
        $explode = explode("/",$val_fecha_ingreso[$i]);
        $val_fecha_ingreso2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $explode = explode("/",$val_fecha_consulta[$i]);
        $val_fecha_consulta2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $explode = explode("/",$val_fecha_ingreso[$i]);
        $val_fecha_ingreso2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $explode = explode("/",$val_fecha_baja[$i]);
        $val_fecha_baja2 = $explode[2]."-".$explode[1]."-".$explode[0];
        */
        if($empresa[$i] == ""){} else
        {
            
            $insert = mysqli_query($link, "insert into test_laboral (id_general, empresa, carta, demanda, telefono, puestos, depto, sueldo, domicilio, contrato, fecha_ing, fecha_baja, motivo, sindicato, jefe, jefe_puesto) values ('$id_general', '$empresa[$i]', '$carta[$i]', '$demanda[$i]', '$telefono[$i]', '$puestos[$i]', '$depto[$i]', '$sueldo2', '$domicilio[$i]', '$contrato[$i]', '$fecha_ing2', '$fecha_baja2', '$motivo[$i]', '$sindicato[$i]', '$jefe[$i]', '$jefe_puesto[$i]')");    
            if($insert)
            {
                $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
                if($update)
                {
                    echo 1;
                }
                else
                {
                 echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
                }
                
                /*
                $select = mysql_query($link, "select id from test_laboral order by id desc limit 1");
                $row = mysqli_num_rows($select);
                if($row > 0)
                {
                    while($arr = mysqli_fetch_array($select))
                    {
                        $id_update     = $arr['id'];
                    }
                }
                 
                if(isset($_POST['val_fecha_consulta']))
                {
                    $update = mysql_query($link, "update test_laboral SET val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial[$i]', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]'  where id= $id_update");
                    if($update)
                    {
                        echo "Datos guardados de update";
                    }
                    else
                    {
                        echo "Datos no guardados de update";
                        echo "update test_laboral SET val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial[$i]', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]'  where id= $id_update";
                        echo "<br>";
                        
                    }
                }
                 */
            }
            else
            {
                echo "Datos no guardados <br>";
                echo "insert into test_laboral (id_general, empresa, carta, demanda, telefono, puestos, depto, sueldo, domicilio, contrato, fecha_ing, fecha_baja, motivo, sindicato, jefe, jefe_puesto) values ('$id_general', '$empresa[$i]', '$carta[$i]', '$demanda[$i]', '$telefono[$i]', '$puestos[$i]', '$depto[$i]', '$sueldo[$i]', '$domicilio[$i]', '$contrato[$i]', '$fecha_ing2', '$fecha_baja2', '$motivo[$i]', '$sindicato[$i]', '$jefe[$i]', '$jefe_puesto[$i]')";
                echo "<br>";
            } 
        }
                 
        $i++;
    }
    
}
else if($no_estudio === "estudio10") 
{
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    /*Datos de sindicalizados*/
    $id_general = $_SESSION['id'];
    if(isset($_POST['comentario10'])) {$comentario = $_POST['comentario10']; } else { $comentario = 0; }
    if(isset($_POST['empresa10'])) {$empresa = $_POST['empresa10']; } else { $empresa = 0; }
    if(($_POST['fecha10']) != "") 
    {
        $fecha = $_POST['fecha10']; 
        $explode = explode("/",$fecha);
        $fecha = $explode[2]."-".$explode[1]."-".$explode[0];
    } 
    else 
    { 
        $fecha = "0000-00-00"; 
    }
    if(isset($_POST['opinion_sindicato10'])) {$opinion_sindicato = $_POST['opinion_sindicato10']; } else { $opinion_sindicato = 0; }
    if(isset($_POST['sindicarse10'])) {$sindicarse = $_POST['sindicarse10']; } else { $sindicarse = 0; }
    if(isset($_POST['sindicalizado10'])) {$sindicalizado = $_POST['sindicalizado10']; } else { $sindicalizado = 0; }
    if(isset($_POST['querer_sindicalizarse10'])) {$querer_sindicalizarse = $_POST['querer_sindicalizarse10']; } else { $querer_sindicalizarse = 0; }
    
    $insert = mysqli_query($link, "insert into test_laboral2 (id_general, comentario, empresa, fecha, opinion_sindicato, sindicarse, sindicalizado, querer_sindicalizarse) values ('$id_general', '$comentario', '$empresa', '$fecha', '$opinion_sindicato', '$sindicarse', '$sindicalizado', '$querer_sindicalizarse')");
    
    if($insert)
    {
        $update = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
        if($update)
        {
            echo 1;
        }
        else
        {
         echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
        }
    }
    else
    {
        echo "Datos no guardados";
        echo "insert into test_laboral2 (id_general, comentario, empresa, fecha, opinion_sindicato, sindicarse, sindicalizado, querer_sindicalizarse) values ('$id_general', '$comentario', '$empresa', '$fecha', '$opinion_sindicato', '$sindicarse', '$sindicalizado', '$querer_sindicalizarse')";
        echo "<br>";
    }     
    
    if(isset($_POST['maps'])) 
    {
        $maps = $_POST['maps']; 
        $maps = str_replace('<iframe src="','', $maps);
        $maps = str_replace('" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', $maps);
        $maps = str_replace('" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', $maps);
        $maps = str_replace('" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', $maps);

    } else { $maps = ""; }

    $update = mysqli_query($link, "update test_documentacion set maps = '$maps' where id_general = '$id_general'");
    if($update)
    {
        //echo "Datos actualizados test documentacion <br>";
    }
    else
    {
        echo "Datos no actualizados test documentacion <br>";
        echo "update test_documentacion set maps = '$maps where id_general = '$id_general'";
        echo "<br>";
    }
} 

else if($no_estudio === "estudio11") 
{
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    
    if(isset($_POST['firma'])) {$img = $_POST['firma']; } else { $img = 0; }
    
    $dir = "../archivos/".$id_general;
    if(opendir($dir)){}
    else {mkdir("../archivos/".$id_general,0777);}
    

//FOTO FIRMA
    if (strpos($img, 'data:image/png;base64') === 0) 
    {
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
    }
    $file = "../archivos/".$id_general."/firma.png";
    
    if (file_put_contents($file, $data)) {
        //echo "canvas saved <br>";
    } else {
       echo 'The canvas could not be saved <br>';
    }	
    
    
    $insert = mysqli_query($link, "update test_documentacion set firma = '$file' where id_general = '$id_general'");
    
    if($insert)
    {
        $update2 = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
        if($update2)
        {
            echo 1;
        }
        else
        {
         echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
        }
    }
    else
    {
        echo "Datos no guardados";
        echo "update test_documentacion set firma = '$file' where id_general = '$id_general'";
        echo "<br>";
    }
}
else if($no_estudio === "estudio11") 
{
    /*VALIDACION DE DATOS*/
    
    $id_general = $_SESSION['id'];
    $user       = $_SESSION['user'];
    
    if(isset($_POST['id'])) {$id = $_POST['id']; } else { $id = 0; }
    if(isset($_POST['empresa'])) {$empresa = $_POST['empresa']; } else { $empresa = 0; }
    if(isset($_POST['carta'])) {$carta = $_POST['carta']; } else { $carta = 0; }
    if(isset($_POST['demanda'])) {$demanda = $_POST['demanda']; } else { $demanda = 0; }
    if(isset($_POST['telefono'])) {$telefono = $_POST['telefono']; } else { $telefono = 0; }
    if(isset($_POST['puestos'])) {$puestos = $_POST['puestos']; } else { $puestos = 0; }
    if(isset($_POST['depto'])) {$depto = $_POST['depto']; } else { $depto = 0; }
    if(isset($_POST['sueldo'])) {$sueldo = $_POST['sueldo']; } else { $sueldo = 0; }
    if(isset($_POST['domicilio'])) {$domicilio = $_POST['domicilio']; } else { $domicilio = 0; }
    if(isset($_POST['contrato'])) {$contrato = $_POST['contrato']; } else { $contrato = 0; }
    if(isset($_POST['fecha_ing'])) {$fecha_ing = $_POST['fecha_ing']; } else { $fecha_ing = 0; }
    if(isset($_POST['fecha_baja'])) {$fecha_baja = $_POST['fecha_baja']; } else { $fecha_baja = 0; }
    if(isset($_POST['motivo'])) {$motivo = $_POST['motivo']; } else { $motivo = 0; } 
    if(isset($_POST['sindicato'])) {$sindicato = $_POST['sindicato']; } else { $sindicato = 0; } 
    if(isset($_POST['jefe'])) {$jefe = $_POST['jefe']; } else { $jefe = 0; } 
    if(isset($_POST['jefe_puesto'])) {$jefe_puesto = $_POST['jefe_puesto']; } else { $jefe_puesto = 0; } 
    
    if(isset($_POST['val_fecha_consulta'])) {$val_fecha_consulta = $_POST['val_fecha_consulta']; } else { $val_fecha_consulta = 0; } 
    if(isset($_POST['val_fecha_ingreso'])) {$val_fecha_ingreso = $_POST['val_fecha_ingreso']; } else { $val_fecha_ingreso = 0; } 
    if(isset($_POST['val_fecha_baja'])) {$val_fecha_baja = $_POST['val_fecha_baja']; } else { $val_fecha_baja = 0; } 
    if(isset($_POST['val_puesto_inicial'])) {$val_puesto_inicial = $_POST['val_puesto_inicial']; } else { $val_puesto_inicial = 0; } 
    if(isset($_POST['val_sueldo_inicial'])) {$val_sueldo_inicial = $_POST['val_sueldo_inicial']; } else { $val_sueldo_inicial = 0; } 
    if(isset($_POST['val_contrato'])) {$val_contrato = $_POST['val_contrato']; } else { $val_contrato = 0; } 
    if(isset($_POST['val_iniciativa'])) {$val_iniciativa = $_POST['val_iniciativa']; } else { $val_iniciativa = 0; } 
    if(isset($_POST['val_metas'])) {$val_metas = $_POST['val_metas']; } else { $val_metas = 0; } 
    if(isset($_POST['val_responsabilidad'])) {$val_responsabilidad = $_POST['val_responsabilidad']; } else { $val_responsabilidad = 0; } 
    if(isset($_POST['val_puntualidad '])) {$val_puntualidad  = $_POST['val_puntualidad ']; } else { $val_puntualidad  = 0; } 
    if(isset($_POST['val_personal'])) {$val_personal = $_POST['val_personal']; } else { $val_personal = 0; } 
    if(isset($_POST['val_salida'])) {$val_salida = $_POST['val_salida']; } else { $val_salida = 0; } 
    if(isset($_POST['val_recontratable'])) {$val_recontratable = $_POST['val_recontratable']; } else { $val_recontratable = 0; } 
    if(isset($_POST['val_nombre_info'])) {$val_nombre_info = $_POST['val_nombre_info']; } else { $val_nombre_info = 0; } 
    if(isset($_POST['val_puesto_infor'])) {$val_puesto_infor = $_POST['val_puesto_infor']; } else { $val_puesto_infor = 0; } 
    if(isset($_POST['val_observacion'])) {$val_observacion = $_POST['val_observacion']; } else { $val_observacion = 0; } 
    
    
    $n = count($empresa);
    $i = 0;
    
    while ($i < $n)
    {
        
        $explode = explode("/",$fecha_ing[$i]);
        $fecha_ing2 = $explode[2]."-".$explode[1]."-".$explode[0];
       
        $explode = explode("/",$fecha_baja[$i]);
        $fecha_baja2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $sueldo2 = $sueldo[$i];
        $sueldo2 = str_replace("$","",$sueldo2);
        $sueldo2 = str_replace(",","",$sueldo2);
        $sueldo2 = str_replace("_","",$sueldo2);
        
        $val_sueldo_inicial2 = $val_sueldo_inicial[$i];
        $val_sueldo_inicial2 = str_replace("$","",$val_sueldo_inicial2);
        $val_sueldo_inicial2 = str_replace(",","",$val_sueldo_inicial2);
        $val_sueldo_inicial2 = str_replace("_","",$val_sueldo_inicial2);
        
        $explode = explode("/",$val_fecha_ingreso[$i]);
        $val_fecha_ingreso2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $explode = explode("/",$val_fecha_consulta[$i]);
        $val_fecha_consulta2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $explode = explode("/",$val_fecha_ingreso[$i]);
        $val_fecha_ingreso2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        $explode = explode("/",$val_fecha_baja[$i]);
        $val_fecha_baja2 = $explode[2]."-".$explode[1]."-".$explode[0];
        
        if($empresa[$i] == ""){} else
        {
            
            $update = mysqli_query($link, "update test_laboral set empresa = '$empresa[$i]', carta = '$carta[$i]', demanda = '$demanda[$id]', telefono = '$telefono[$i]', puestos = '$puestos[$i]', depto = '$depto[$i]', sueldo='$sueldo[$i]', domicilio = '$domicilio[$i]', contrato = '$contrato[$i]', fecha_ing = '$fecha_ing2', fecha_baja = '$fecha_baja2', motivo = '$motivo[$i]', sindicato = '$sindicato[$i]', jefe = '$jefe[$i]', jefe_puesto='$jefe_puesto[$i]', val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial2', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]' where id = '$id[$i]'");    
            if($update)
            {
                $update2 = mysqli_query($link,"update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'");
                if($update2)
                {
                    echo 1;
                }
                else
                {
                 echo "update agente_status set status = '$no_estudio' where user = '$user' and id_estudio = '$id_general'";   
                }
            }
            else
            {
                echo "Datos no actualizados <br>";
                echo "update test_laboral set empresa = '$empresa[$i]', carta = '$carta[$i]', demanda = '$demanda[$id]', telefono = '$telefono[$i]', puestos = '$puestos[$i]', depto = '$depto[$i]', sueldo='$sueldo[$i]', domicilio = '$domicilio[$i]', contrato = '$contrato[$i]', fecha_ing = '$fecha_ing2', fecha_baja = '$fecha_baja2', motivo = '$motivo[$i]', sindicato = '$sindicato[$i]', jefe = '$jefe[$i]', jefe_puesto='$jefe_puesto[$i]', val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial2', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]' where id = '$id[$i]'";
                echo "<br>";
            } 
        }
                 
        $i++;
    }
    
} 

?>
