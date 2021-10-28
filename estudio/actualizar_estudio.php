<?php
session_start(); 
include("../link.php");
if(isset($_SESSION['user']))
{}
else
{
	 header("Location: ../index.php"); 
}
$id = $_SESSION['id'];
echo "id: $id";

 /* DATOS GENERALES */
if(isset($_POST['facebook'])) 
{
    
    $user = $_SESSION['user'];
    $fecha = date("Y-m-d");
    
    $id = $_SESSION['id'];
    if(isset($_POST['nombre'])) {$nombre = $_POST['nombre']; } else { $nombre = 0; }
    if(isset($_POST['apellidop'])) {$apellidop = $_POST['apellidop']; } else { $apellidop = 0; }
    if(isset($_POST['apellidom'])) {$apellidom = $_POST['apellidom']; } else { $apellidom = 0; }
    if(isset($_POST['empresa'])) {$empresa = $_POST['empresa']; } else { $empresa = 0; }
    if(isset($_POST['area'])) {$area = $_POST['area']; } else { $area = 0; }
    if(isset($_POST['puesto'])) {$puesto = $_POST['puesto']; } else { $puesto = 0; }
    if(isset($_POST['email'])) {$email = $_POST['email']; } else { $email = 0; }
    if(isset($_POST['dir_calle'])) {$dir_calle = $_POST['dir_calle']; } else { $dir_calle = 0; }
    if(isset($_POST['dir_num'])) {$dir_num = $_POST['dir_num']; } else { $dir_num = 0; }
    if(isset($_POST['colonia'])) {$colonia = $_POST['colonia']; } else { $colonia = 0; }
    if(isset($_POST['estado'])) {$estado = $_POST['estado']; } else { $estado = 0; }
    if(isset($_POST['municipio'])) {$municipio = $_POST['municipio']; } else { $municipio = 0; }
    if(isset($_POST['cp'])) {$cp = $_POST['cp']; } else { $cp = 0; }
    if(isset($_POST['telefono'])) {$telefono = $_POST['telefono']; } else { $telefono = 0; }
    if(isset($_POST['celular'])) {$celular = $_POST['celular']; } else { $celular = 0; }
    if(isset($_POST['tiempo_dom_actual'])) {$tiempo_dom_actual = $_POST['tiempo_dom_actual']; } else { $tiempo_dom_actual = 0; }
    if(isset($_POST['tiempo_dom_anterior'])) {$tiempo_dom_anterior = $_POST['tiempo_dom_anterior']; } else { $tiempo_dom_anterior = 0; }
    if(isset($_POST['lugar_nacimiento'])) {$lugar_nacimiento = $_POST['lugar_nacimiento']; } else { $lugar_nacimiento = 0; }
    if(isset($_POST['fecha_nacimiento'])) {$fecha_nacimiento = $_POST['fecha_nacimiento']; } else { $fecha_nacimiento = 0; }
    if(isset($_POST['edad'])) {$edad = $_POST['edad']; } else { $edad = 0; }
    if(isset($_POST['curp'])) {$curp = $_POST['curp']; } else { $curp = 0; }
    if(isset($_POST['estado_civil'])) {$estado_civil = $_POST['estado_civil']; } else { $estado_civil = 0; }
    if(isset($_POST['sexo'])) {$sexo = $_POST['sexo']; } else { $sexo = 0; }
    if(isset($_POST['religion'])) {$religion = $_POST['religion']; } else { $religion = 0; }
    if(isset($_POST['comprobante_dom'])) {$comprobante_dom = $_POST['comprobante_dom']; } else { $comprobante_dom = 0; }
    if(isset($_POST['imss'])) {$imss = $_POST['imss']; } else { $imss = 0; }
    if(isset($_POST['id_oficial'])) {$id_oficial = $_POST['id_oficial']; } else { $id_oficial = 0; }
    if(isset($_POST['familiar'])) {$familiar = $_POST['familiar']; } else { $familiar = 0; }
    if(isset($_POST['vacante'])) {$vacante = $_POST['vacante']; } else { $vacante = 0; }
    if(isset($_POST['dependiente'])) {$dependiente = $_POST['dependiente']; } else { $dependiente = 0; }
    if(isset($_POST['facebook'])) {$facebook = $_POST['facebook']; } else { $facebook = 0; }
    if(isset($_POST['deportes'])) {$deportes = $_POST['deportes']; } else { $deportes = 0; }
    if(isset($_POST['grupos'])) {$grupos = $_POST['grupos']; } else { $grupos = 0; }

    $tiempo_dom_actual = str_replace("'","\'",$tiempo_dom_actual);
    $tiempo_dom_anterior = str_replace("'","\'",$tiempo_dom_anterior);
    

    $explode = explode("/",$fecha_nacimiento);
    $fecha_nacimiento = $explode[2]."-".$explode[1]."-".$explode[0];
    $update = mysqli_query($link,"update test_general set nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', empresa = '$empresa', area = '$area', puesto = '$puesto', email = '$email' ,dir_calle = '$dir_calle', dir_num = '$dir_num', colonia = '$colonia', estado = '$estado', municipio = '$municipio', cp = '$cp', telefono = '$telefono', celular = '$celular', tiempo_dom_actual = '$tiempo_dom_actual', tiempo_dom_anterior = '$tiempo_dom_anterior', lugar_nacimiento = '$lugar_nacimiento', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', curp = '$curp', estado_civil = '$estado_civil', sexo = '$sexo', religion = '$religion', comprobante_dom = '$comprobante_dom', imss = '$imss', id_oficial = '$id_oficial', familiar = '$familiar', vacante = '$vacante', dependiente = '$dependiente', facebook = '$facebook', deportes = '$deportes', grupos = '$grupos', validado = 'si' where id = '$id'");
    
    if($update)
    {
        echo 'Datos atualizados test_general <br>';
    }
    else
    {
        echo 'Datos no actualizados test_general <br>';
        echo "update test_general set nombre = '$nombre', apellidop = '$apellidop', apellidom = '$apellidom', empresa = '$empresa', area = '$area', puesto = '$puesto', dir_calle = '$dir_calle', dir_num = '$dir_num', colonia = '$colonia', estado = '$estado', municipio = '$municipio', cp = '$cp', telefono = '$telefono', celular = '$celular', tiempo_dom_actual = '$tiempo_dom_actual', tiempo_dom_anterior = '$tiempo_dom_anterior', lugar_nacimiento = '$lugar_nacimiento', fecha_nacimiento = '$fecha_nacimiento', edad = '$edad', curp = '$curp', estado_civil = '$estado_civil', sexo = '$sexo', religion = '$religion', comprobante_dom = '$comprobante_dom', imss = '$imss', id_oficial = '$id_oficial', familiar = '$familiar', vacante = '$vacante', dependiente = '$dependiente', facebook = '$facebook', deportes = '$deportes', grupos = '$grupos', validado = 'si' where id = '$id'";
        echo "<br>";
    }
}
/*DATOS ESCOLARES*/
if(isset($_POST['prim_periodo'])) 
{
    
    $id_general = $id;
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

    $update = mysqli_query($link, "update test_escolar set prim_periodo = '$prim_periodo', prim_nombre = '$prim_nombre', prim_gob_priv = '$prim_gob_priv', prim_colonia = '$prim_colonia', prim_comprobante = '$prim_comprobante', sec_periodo = '$sec_periodo', sec_nombre = '$sec_nombre', sec_gob_priv = '$sec_gob_priv', sec_colonia = '$sec_colonia', sec_comprobante = '$sec_comprobante', prep_periodo = '$prep_periodo', prep_nombre = '$prep_nombre', prep_gob_priv = '$prep_gob_priv', prep_colonia = '$prep_colonia', prep_comprobante = '$prep_comprobante', tec_periodo = '$tec_periodo', tec_nombre = '$tec_nombre', tec_gob_priv = '$tec_gob_priv', tec_colonia = '$tec_colonia', tec_comprobante = '$tec_comprobante', pro_periodo = '$pro_periodo', pro_nombre = '$pro_nombre', pro_gob_priv = '$pro_gob_priv', pro_colonia = '$pro_colonia', pro_comprobante = '$pro_comprobante', ma_periodo = '$ma_periodo', ma_nombre = '$ma_nombre', ma_gob_priv = '$ma_gob_priv', ma_colonia = '$ma_colonia', ma_comprobante = '$ma_comprobante', dip_periodo = '$dip_periodo', dip_nombre = '$dip_nombre', dip_gob_priv = '$dip_gob_priv', dip_colonia = '$dip_colonia', dip_comprobante = '$dip_comprobante' where id_general = '$id'");
    
    if($update)
        {
            echo 'Datos actualizados test_escolar <br>';
             
        }
        else
        {
            echo 'Datos no actualizados test_escolar <br>';
            echo "update test_escolar set prim_periodo = '$prim_periodo', prim_nombre = '$prim_nombre', prim_gob_priv = '$prim_gob_priv', prim_colonia = '$prim_colonia', prim_comprobante = '$prim_comprobante', sec_periodo = '$sec_periodo', sec_nombre = '$sec_nombre', sec_gob_priv = '$sec_gob_priv', sec_colonia = '$sec_colonia', sec_comprobante = '$sec_comprobante', prep_periodo = '$prep_periodo', prep_nombre = '$prep_nombre', prep_gob_priv = '$prep_gob_priv', prep_colonia = '$prep_colonia', prep_comprobante = '$prep_comprobante', tec_nombre = '$tec_nombre', tec_gob_priv = '$tec_gob_priv', tec_colonia = '$tec_colonia', tec_comprobante = '$tec_comprobante', pro_nombre = '$pro_nombre', pro_gob_priv = '$pro_gob_priv', pro_colonia = '$pro_colonia', pro_comprobante = '$pro_comprobante', ma_nombre = '$ma_nombre', ma_gob_priv = '$ma_gob_priv', ma_colonia = '$ma_colonia', ma_comprobante = '$ma_comprobante', dip_nombre = '$dip_nombre', dip_gob_priv = '$dip_gob_priv', dip_colonia = '$dip_colonia', sec_comprobante = '$dip_comprobante' where id_general = '$id'";
            echo "<br>";
            
        }
        
}
/*ENTORNO FAMILIAR*/
if(isset($_POST['no_nombre']))
{
    
    $id_general = $id;
    if(isset($_POST['no_id'])) {$no_id = $_POST['no_id']; } else { $no_id = 0; }
    if(isset($_POST['no_nombre'])) {$no_nombre = $_POST['no_nombre']; } else { $no_nombre = 0; }
    if(isset($_POST['no_parentesco'])) {$no_parentesco = $_POST['no_parentesco']; } else { $no_parentesco = 0; }
    if(isset($_POST['no_telefono'])) {$no_telefono = $_POST['no_telefono']; } else { $no_telefono = 0; }
    if(isset($_POST['no_edad'])) {$no_edad = $_POST['no_edad']; } else { $no_edad = 0; }
    if(isset($_POST['no_sexo'])) {$no_sexo = $_POST['no_sexo']; } else { $no_sexo = 0; }
    if(isset($_POST['no_estado'])) {$no_estado = $_POST['no_estado']; } else { $no_estado = 0; }
    if(isset($_POST['no_nivel'])) {$no_nivel = $_POST['no_nivel']; } else { $no_nivel = 0; }
    if(isset($_POST['no_ocupacion'])) {$no_ocupacion = $_POST['no_ocupacion']; } else { $no_ocupacion = 0; }
    if(isset($_POST['no_empresa'])) {$no_empresa = $_POST['no_empresa']; } else { $no_empresa = 0; }
    
    if(isset($_POST['si_id'])) {$si_id = $_POST['si_id']; } else { $si_id = 0; }
    if(isset($_POST['si_nombre'])) {$si_nombre = $_POST['si_nombre']; } else { $si_nombre = 0; }
    if(isset($_POST['si_parentesco'])) {$si_parentesco = $_POST['si_parentesco']; } else { $si_parentesco = 0; }
    if(isset($_POST['si_telefono'])) {$si_telefono = $_POST['si_telefono']; } else { $si_telefono = 0; }
    if(isset($_POST['si_edad'])) {$si_edad = $_POST['si_edad']; } else { $si_edad = 0; }
    if(isset($_POST['si_sexo'])) {$si_sexo = $_POST['si_sexo']; } else { $si_sexo = 0; }
    if(isset($_POST['si_estado'])) {$si_estado = $_POST['si_estado']; } else { $si_estado = 0; }
    if(isset($_POST['si_nivel'])) {$si_nivel = $_POST['si_nivel']; } else { $si_nivel = 0; }
    if(isset($_POST['si_ocupacion'])) {$si_ocupacion = $_POST['si_ocupacion']; } else { $si_ocupacion = 0; }
    if(isset($_POST['si_ingreso'])) {$si_ingreso = $_POST['si_ingreso']; } else { $si_ingreso = 0; }
    
    $n = count($no_nombre);
    $i = 0;
    
    while ($i < $n)
    {
        
        if(isset($no_nombre[$i]))
        {  
            if($no_nombre[$i] == "")
            {
                
            }
            else
            {
                $update = mysqli_query($link,"update test_familiar set nombre = '$no_nombre[$i]', parentesco = '$no_parentesco[$i]', telefono = '$no_telefono[$i]', edad = '$no_edad[$i]', sexo = '$no_sexo[$i]', estado = '$no_estado[$i]', nivel = '$no_nivel[$i]', ocupacion = '$no_ocupacion[$i]', empresa = '$no_empresa[$i]' where id = '$no_id[$i]'");
                
        
                if($update)
                {
                    echo "Datos actualizados NO viven <br>";
                }
                else
                {
                    echo 'Datos no actualizados NO viven<br>';
                    echo "update test_familiar set nombre = '$no_nombre[$i]', parentesco = '$no_parentesco[$i]', telefono = '$no_telefono[$i]', edad = '$no_edad[$i]', sexo = '$no_sexo[$i]', estado = '$no_estado[$i]', nivel = '$no_nivel[$i]', ocupacion = '$no_ocupacion[$i]', empresa = '$no_empresa[$i]' where id = '$no_id[$i]'";
                    echo "<br>";
                }
            }
            
        }
        $i++;
    }
    $n = count($si_nombre);
    $i = 0;
    
    while ($i < $n)
    {    
        if(isset($si_ingreso[$i]))
        {
            //echo $si_ingreso[$i]."<br>";
        
            if($si_ingreso[$i] == "")
            {
                $si_ingreso2 = $si_ingreso[$i];

            }
            else 
            {
                $si_ingreso2 = $si_ingreso[$i];
                $si_ingreso2 = str_replace("$","",$si_ingreso2);
                $si_ingreso2 = str_replace(",","",$si_ingreso2);
                $si_ingreso2 = str_replace("_","",$si_ingreso2);
                //echo $si_ingreso2."<br>";
            }
            $update2 = mysqli_query($link,"update test_familiar set nombre = '$si_nombre[$i]', parentesco = '$si_parentesco[$i]', telefono = '$si_telefono[$i]', edad = '$si_edad[$i]', sexo = '$si_sexo[$i]', estado = '$si_estado[$i]', nivel = '$si_nivel[$i]', ocupacion = '$si_ocupacion[$i]', ingreso = '$si_ingreso2' where id = '$si_id[$i]'");
            if($update2)
            {
                echo 'Datos actualizados SI viven<br>';
            }
            else 
            {
                echo 'Datos no actualizados SI viven <br>';
                echo "update test_familiar set nombre = '$si_nombre', parentesco = '$si_parentesco', telefono = '$si_telefono', edad = '$si_edad', sexo = '$si_sexo', estado = '$si_estado', nivel = '$si_nivel', ocupacion = '$si_ocupacion', ingreso = '$si_ingreso2' where id = '$si_id[$i]'";
            }
        } 
        $i++;
    }
}

/*GASTOS, BIENES Y ADEUDOS*/
if(isset($_POST['auto_tipo_gral']))
{
    
    $id_general = $id;
    if(isset($_POST['auto_id'])) {$auto_id = $_POST['auto_id']; } else { $auto_id = 0; }
    if(isset($_POST['auto_tipo_gral'])) {$auto_tipo_gral = $_POST['auto_tipo_gral']; } else { $auto_tipo_gral = 0; }
    if(isset($_POST['auto_propietario'])) {$auto_propietario = $_POST['auto_propietario']; } else { $auto_propietario = 0; }
    if(isset($_POST['auto_ano'])) {$auto_ano = $_POST['auto_ano']; } else { $auto_ano = 0; }
    if(isset($_POST['auto_tipo'])) {$auto_tipo = $_POST['auto_tipo']; } else { $tipo = 0; }
    if(isset($_POST['auto_marca'])) {$auto_marca = $_POST['auto_marca']; } else { $auto_marca = 0; }
   
    $n = count($auto_tipo_gral);
    $i = 0;
    
    while ($i < $n)
    {
        $update = mysqli_query($link, "update test_ingresos_familiar set propietario = '$auto_propietario[$i]', ano = '$auto_ano[$i]', tipo = '$auto_tipo[$i]', marca = '$auto_marca[$i]' where id = '$auto_id[$i]'");
        //echo "update test_ingresos_familiar set propietario = '$auto_propietario[$i]', ano = '$auto_ano[$i]', tipo = '$auto_tipo[$i]', marca = '$auto_marca[$i]' where id = '$auto_id[$i]'";  

        if($update)
        {
            echo "Datos actualizados AUTOS <br>";
        }
        else
        {
            echo 'Datos no actualizados AUTOS<br>';
            echo "update test_ingresos_familiar set propietario = '$auto_propietario[$i]', ano = '$auto_ano[$i]', tipo = '$auto_tipo[$i]', marca = '$auto_marca[$i]' where id = '$auto_id[$i]'";            
            echo "<br>";
        }
        $i++;
    }
}
if(isset($_POST['inmueble_tipo_gral']))
{
    
    $id_general = $id;
    if(isset($_POST['inmueble_id'])) {$inmueble_id = $_POST['inmueble_id']; } else { $inmueble_id = 0; }
    if(isset($_POST['inmueble_tipo_gral'])) {$inmueble_tipo_gral = $_POST['inmueble_tipo_gral']; } else { $inmueble_tipo_gral = 0; }
    if(isset($_POST['inmueble_propietario'])) {$inmueble_propietario = $_POST['inmueble_propietario']; } else { $inmueble_propietario = 0; }    
    if(isset($_POST['inmueble_tipo'])) {$inmueble_tipo = $_POST['inmueble_tipo']; } else { $tipo = 0; }        
    if(isset($_POST['inmueble_valor_comercial'])) {$inmueble_valor_comercial = $_POST['inmueble_valor_comercial']; } else { $inmueble_valor_comercial = 0; }
    
    $n = count($auto_tipo_gral);
    $i = 0;
    
    while ($i < $n)
    {
        if($inmueble_valor_comercial[$i] === "")
        {
            $inmueble_valor_comercial2 = $inmueble_valor_comercial[$i];

        }
        else 
        {
            $inmueble_valor_comercial2 = $inmueble_valor_comercial[$i];
            $inmueble_valor_comercial2 = str_replace("$","",$inmueble_valor_comercial2);
            $inmueble_valor_comercial2 = str_replace(",","",$inmueble_valor_comercial2);
            $inmueble_valor_comercial2 = str_replace("_","",$inmueble_valor_comercial2);
            //echo $si_ingreso2."<br>";
        }

        $update = mysqli_query($link, "update test_ingresos_familiar set propietario = '$inmueble_propietario[$i]', tipo = '$inmueble_tipo[$i]', valor_comercial = '$inmueble_valor_comercial2' where id = '$inmueble_id[$i]'");

        if($update)
        {
            echo 'Datos actualizados INMUEBLES <br>';
        }
        else 
        {
            echo 'Datos no actualizados INMUEBLES <br>';
            echo "update test_ingresos_familiar set propietario = '$inmueble_propietario[$i]', tipo = '$inmueble_tipo[$i]', valor_comercial = '$inmueble_valor_comercial2' where id = '$inmueble_id[$i]'";
            echo "<br>";                
        }
        $i++;
    }
}
if(isset($_POST['banco_tipo_gral']))
{
    
    $id_general = $id;
    if(isset($_POST['banco_id'])) {$banco_id = $_POST['banco_id']; } else { $banco_id = 0; }
    if(isset($_POST['banco_tipo_gral'])) {$banco_tipo_gral = $_POST['banco_tipo_gral']; } else { $banco_tipo_gral = 0; }
    if(isset($_POST['banco_propietario'])) {$banco_propietario = $_POST['banco_propietario']; } else { $banco_propietario = 0; }    
    if(isset($_POST['banco_tipo'])) {$banco_tipo = $_POST['banco_tipo']; } else { $tipo = 0; }        
    
    if(isset($_POST['banco_saldo_actual'])) {$banco_saldo_actual = $_POST['banco_saldo_actual']; } else { $banco_saldo_actual = 0; }
    if(isset($_POST['banco_limite'])) {$banco_limite = $_POST['banco_limite']; } else { $banco_limite = 0; }
    
    $n = count($auto_tipo_gral);
    $i = 0;
    
    while ($i < $n)
    {
        if($banco_saldo_actual[$i] == "")
        {
            $banco_saldo_actual2 = $banco_saldo_actual[$i];
            $banco_limite2 = $limite[$i];
        }
        else 
        {
            $saldo_actual2 = $banco_saldo_actual[$i];
            $saldo_actual2 = str_replace("$","",$saldo_actual2);
            $saldo_actual2 = str_replace(",","",$saldo_actual2);
            $saldo_actual2 = str_replace("_","",$saldo_actual2);
            //echo $saldo_actual2."<br>";

            $limite2 = $banco_limite[$i];
            $limite2 = str_replace("$","",$limite2);
            $limite2 = str_replace(",","",$limite2);
            $limite2 = str_replace("_","",$limite2);
            //echo $si_ingreso2."<br>";
        }

        $update = mysqli_query($link, "update test_ingresos_familiar set propietario = '$banco_propietario[$i]', tipo = '$banco_tipo[$i]', saldo_actual = '$saldo_actual2', limite = '$limite2' where id = '$banco_id[$i]'");

        if($update)
        {
            echo 'Datos actualizados BANCO <br>';
        }
        else 
        {
            echo 'Datos no actualizados BANCO <br>';
            echo "update test_ingresos_familiar set propietario = '$banco_propietario[$i]', tipo = '$banco_tipo[$i]', saldo_actual = '$saldo_actual2', limite = '$limite2' where id = '$banco_id[$i]'";
            echo "<br>";

        }
        $i++;
    }
}

/*INGRESOS Y GASTOS*/
if(isset($_POST['ing2_ingreso_pareja']))
{
    
    $id_general = $id;
    if(isset($_POST['ing2_ingreso_pareja'])) {$ing2_ingreso_pareja = $_POST['ing2_ingreso_pareja']; } else { $ing2_ingreso_pareja = 0; }
        $ing2_ingreso_pareja = str_replace("$","",$ing2_ingreso_pareja);
        $ing2_ingreso_pareja = str_replace(",","",$ing2_ingreso_pareja);
        $ing2_ingreso_pareja = str_replace("_","",$ing2_ingreso_pareja);
    
    if(isset($_POST['ing2_ingreso_renta'])) {$ing2_ingreso_renta = $_POST['ing2_ingreso_renta']; } else { $ing2_ingreso_renta = 0; }
        $ing2_ingreso_renta = str_replace("$","",$ing2_ingreso_renta);
        $ing2_ingreso_renta = str_replace(",","",$ing2_ingreso_renta);
        $ing2_ingreso_renta = str_replace("_","",$ing2_ingreso_renta);
        
    if(isset($_POST['ing2_ingreso_otros'])) {$ing2_ingreso_otros = $_POST['ing2_ingreso_otros']; } else { $ing2_ingreso_otros = 0; }
        $ing2_ingreso_otros = str_replace("$","",$ing2_ingreso_otros);
        $ing2_ingreso_otros = str_replace(",","",$ing2_ingreso_otros);
        $ing2_ingreso_otros = str_replace("_","",$ing2_ingreso_otros);
        
    if(isset($_POST['ing2_alimentacion'])) {$ing2_alimentacion = $_POST['ing2_alimentacion']; } else { $ing2_alimentacion = 0; }
        $ing2_alimentacion = str_replace("$","",$ing2_alimentacion);
        $ing2_alimentacion = str_replace(",","",$ing2_alimentacion);
        $ing2_alimentacion = str_replace("_","",$ing2_alimentacion);
        
    if(isset($_POST['ing2_hipoteca'])) {$ing2_hipoteca = $_POST['ing2_hipoteca']; } else { $ing2_hipoteca = 0; }
        $ing2_hipoteca = str_replace("$","",$ing2_hipoteca);
        $ing2_hipoteca = str_replace(",","",$ing2_hipoteca);
        $ing2_hipoteca = str_replace("_","",$ing2_hipoteca);
        
    if(isset($_POST['ing2_luz'])) {$ing2_luz = $_POST['ing2_luz']; } else { $ing2_luz = 0; }
        $ing2_luz = str_replace("$","",$ing2_luz);
        $ing2_luz = str_replace(",","",$ing2_luz);
        $ing2_luz = str_replace("_","",$ing2_luz);
        
    if(isset($_POST['ing2_agua'])) {$ing2_agua = $_POST['ing2_agua']; } else { $ing2_agua = 0; }
        $ing2_agua = str_replace("$","",$ing2_agua);
        $ing2_agua = str_replace(",","",$ing2_agua);
        $ing2_agua = str_replace("_","",$ing2_agua);
        
    if(isset($_POST['ing2_gas'])) {$ing2_gas = $_POST['ing2_gas']; } else { $ing2_gas = 0; }
        $ing2_gas = str_replace("$","",$ing2_gas);
        $ing2_gas = str_replace(",","",$ing2_gas);
        $ing2_gas = str_replace("_","",$ing2_gas);
        
    if(isset($_POST['ing2_telefono'])) {$ing2_telefono = $_POST['ing2_telefono']; } else { $ing2_telefono = 0; }
        $ing2_telefono = str_replace("$","",$ing2_telefono);
        $ing2_telefono = str_replace(",","",$ing2_telefono);
        $ing2_telefono = str_replace("_","",$ing2_telefono);
        
    if(isset($_POST['ing2_ropa'])) {$ing2_ropa = $_POST['ing2_ropa']; } else { $ing2_ropa = 0; }
        $ing2_ropa = str_replace("$","",$ing2_ropa);
        $ing2_ropa = str_replace(",","",$ing2_ropa);
        $ing2_ropa = str_replace("_","",$ing2_ropa);
        
    if(isset($_POST['ing2_transporte'])) {$ing2_transporte = $_POST['ing2_transporte']; } else { $ing2_transporte = 0; }
        $ing2_transporte = str_replace("$","",$ing2_transporte);
        $ing2_transporte = str_replace(",","",$ing2_transporte);
        $ing2_transporte = str_replace("_","",$ing2_transporte);
        
    if(isset($_POST['ing2_escolar'])) {$ing2_escolar = $_POST['ing2_escolar']; } else { $ing2_escolar = 0; }
        $ing2_escolar = str_replace("$","",$ing2_escolar);
        $ing2_escolar = str_replace(",","",$ing2_escolar);
        $ing2_escolar = str_replace("_","",$ing2_escolar);
        
    if(isset($_POST['ing2_medico'])) {$ing2_medico = $_POST['ing2_medico']; } else { $ing2_medico = 0; }
        $ing2_medico = str_replace("$","",$ing2_medico);
        $ing2_medico = str_replace(",","",$ing2_medico);
        $ing2_medico = str_replace("_","",$ing2_medico);
        
    if(isset($_POST['ing2_internet'])) {$ing2_internet = $_POST['ing2_internet']; } else { $ing2_internet = 0; }
        $ing2_internet = str_replace("$","",$ing2_internet);
        $ing2_internet = str_replace(",","",$ing2_internet);
        $ing2_internet = str_replace("_","",$ing2_internet);
        
    if(isset($_POST['ing2_diversion'])) {$ing2_diversion = $_POST['ing2_diversion']; } else { $ing2_diversion = 0; }
        $ing2_diversion = str_replace("$","",$ing2_diversion);
        $ing2_diversion = str_replace(",","",$ing2_diversion);
        $ing2_diversion = str_replace("_","",$ing2_diversion);
        
    if(isset($_POST['ing2_deudas'])) {$ing2_deudas = $_POST['ing2_deudas']; } else { $ing2_deudas = 0; }
        $ing2_deudas = str_replace("$","",$ing2_deudas);
        $ing2_deudas = str_replace(",","",$ing2_deudas);
        $ing2_deudas = str_replace("_","",$ing2_deudas);
        
    if(isset($_POST['ing2_otros'])) {$ing2_otros = $_POST['ing2_otros']; } else { $ing2_otros = 0; }
        $ing2_otros = str_replace("$","",$ing2_otros);
        $ing2_otros = str_replace(",","",$ing2_otros);
        $ing2_otros = str_replace("_","",$ing2_otros);
    
    $update = mysqli_query($link, "update test_ingresos set ingreso_pareja = '$ing2_ingreso_pareja', ingreso_renta = '$ing2_ingreso_renta', ingreso_otros = '$ing2_ingreso_otros', alimentacion = '$ing2_alimentacion', hipoteca = '$ing2_hipoteca', luz = '$ing2_luz', agua = '$ing2_agua', gas = '$ing2_gas', telefono = '$ing2_telefono', ropa = '$ing2_ropa', transporte = '$ing2_transporte', escolar = '$ing2_escolar', medico = '$ing2_medico', internet = '$ing2_internet', diversion = '$ing2_diversion', deudas = '$ing2_deudas', otros = '$ing2_otros' where id_general = '$id_general'");
        
    if($update)
    {
        echo "Datos actualizados test_ingresos <br>";
    }
    else
    {
        echo "Datos no actualizados <br>";
        echo "update test_ingresos set ingreso_pareja = '$ing2_ingreso_pareja', ingreso_renta = '$ing2_ingreso_renta', ingreso_otros = '$ing2_ingreso_otros', alimentacion = '$ing2_alimentacion', hipoteca = '$ing2_hipoteca', luz = '$ing2_luz', agua = '$ing2_agua', gas = '$ing2_gas', telefono = '$ing2_telefono', ropa = '$ing2_ropa', transporte = '$ing2_transporte', escolar = '$ing2_escolar', medico = '$ing2_medico', internet = '$ing2_internet', diversion = '$ing2_diversion', deudas = '$ing2_deudas', otros = '$ing2_otros' where id_general = '$id_general'";
        echo "<br>";
    }
    
}

/*ESTILO DE VIDA*/
if(isset($_POST['est_servicio_medico']))
{
    
    $id_general = $id;
    if(isset($_POST['est_servicio_medico'])) {$est_servicio_medico = $_POST['est_servicio_medico']; } else { $est_servicio_medico = 0; }
    if(isset($_POST['est_alergias'])) {$est_alergias = $_POST['est_alergias']; } else { $est_alergias = 0; }
    if(isset($_POST['est_def_vista'])) {$est_def_vista = $_POST['est_def_vista']; } else { $est_def_vista = 0; }
    if(isset($_POST['est_def_oido'])) {$est_def_oido = $_POST['est_def_oido']; } else { $est_def_oido = 0; }
    if(isset($_POST['est_def_fisica'])) {$est_def_fisica = $_POST['est_def_fisica']; } else { $est_def_fisica = 0; }
    if(isset($_POST['est_int_quirurgica'])) {$est_int_quirurgica = $_POST['est_int_quirurgica']; } else { $est_int_quirurgica = 0; }
    if(isset($_POST['est_accidente'])) {$est_accidente = $_POST['est_accidente']; } else { $est_accidente = 0; }
    if(isset($_POST['est_enfermedad'])) {$est_enfermedad = $_POST['est_enfermedad']; } else { $est_enfermedad = 0; }
    if(isset($_POST['est_vicios'])) {$est_vicios = $_POST['est_vicios']; } else { $est_vicios = 0; }
    if(isset($_POST['est_deporte'])) {$est_deporte = $_POST['est_deporte']; } else { $est_deporte = 0; }
    if(isset($_POST['est_tiempo_libre'])) {$est_tiempo_libre = $_POST['est_tiempo_libre']; } else { $est_tiempo_libre = 0; }
    if(isset($_POST['est_emergencia'])) {$est_emergencia = $_POST['est_emergencia']; } else { $est_emergencia = 0; }
    
    $update = mysqli_query($link, "update test_estilo set servicio_medico = '$est_servicio_medico', alergias = '$est_alergias', def_vista = '$est_def_vista', def_oido = '$est_def_oido', def_fisica = '$est_def_fisica', int_quirurgica = '$est_int_quirurgica', accidente = '$est_accidente', enfermedad = '$est_enfermedad', vicios = '$est_vicios', deporte = '$est_deporte', tiempo_libre = '$est_tiempo_libre', emergencia = '$est_emergencia' where id_general = '$id_general'");
        
    if($update)
    {
        echo "Datos actualizados test_estilo<br>";
    }
    else
    {
        echo "Datos no actualizados test_estilo <br>";
        echo "update test_estilo set servicio_medico = '$est_servicio_medico', alergias = '$est_alergias', def_vista = '$est_def_vista', def_oido = '$est_def_oido', def_fisica = '$est_def_fisica', int_quirurgica = '$est_int_quirurgica', accidente = '$est_accidente', enfermedad = '$est_enfermedad', vicios = '$est_vicios', deporte = '$est_deporte', tiempo_libre = '$est_tiempo_libre', emergencia = '$est_emergencia' where id_general = '$id_general'";
        echo "<br>";
    }
}
/*CONDICIONES DE VIVIENDA Y ECONOMÍA*/
if(isset($_POST['viv_nivel']))
{
    
    $id_general = $_SESSION['id'];
    if(isset($_POST['viv_nivel'])) {$viv_nivel = $_POST['viv_nivel']; } else { $viv_nivel = 0; }
    if(isset($_POST['viv_casa'])) {$viv_casa = $_POST['viv_casa']; } else { $viv_casa = 0; }
    if(isset($_POST['viv_casa_pertenece'])) {$viv_casa_pertenece = $_POST['viv_casa_pertenece']; } else { $viv_casa_pertenece = 0; }
    if(isset($_POST['viv_anos_vivir'])) {$viv_anos_vivir = $_POST['viv_anos_vivir']; } else { $viv_anos_vivir = 0; }
    if(isset($_POST['viv_personas'])) {$viv_personas = $_POST['viv_personas']; } else { $viv_personas = 0; }
    if(isset($_POST['viv_personas_quien'])) {$viv_personas_quien = $_POST['viv_personas_quien']; } else { $viv_personas_quien = 0; }
    if(isset($_POST['viv_decoracion'])) {$viv_decoracion = $_POST['viv_decoracion']; } else { $viv_decoracion = 0; }
    if(isset($_POST['viv_distribucion'])) {$viv_distribucion = $_POST['viv_distribucion']; } else { $viv_distribucion = 0; }
    if(isset($_POST['viv_colonia'])) {$viv_colonia = $_POST['viv_colonia']; } else { $viv_colonia = 0; }
    if(isset($_POST['viv_calles'])) {$viv_calles = $_POST['viv_calles']; } else { $viv_calles = 0; }
    
    $update = mysqli_query($link,"update test_vivienda set nivel = '$viv_nivel', casa = '$viv_casa', casa_pertenece = '$viv_casa_pertenece', anos_vivir = '$viv_anos_vivir', personas = '$viv_personas', personas_quien = '$viv_personas_quien', decoracion = '$viv_decoracion', distribucion = '$viv_distribucion', colonia = '$viv_colonia', calles = '$viv_calles' where id_general = '$id_general'");
       
    if($update)
    {
        echo "Datos actualizados test_vivienda <br>";
    }
    else
    {
        echo "Datos no actualizados test_vivienda <br>";
        echo "update test_vivienda set nivel = '$viv_nivel', casa = '$viv_casa', casa_pertenece = '$viv_casa_pertenece', anos_vivir = '$viv_anos_vivir', personas = '$viv_personas', personas_quien = '$viv_personas_quien', decoracion = '$viv_decoracion', distribucion = '$viv_distribucion', colonia = '$viv_colonia', calles = '$viv_calles' where id_general = '$id_general'";
        echo "<br>";
    }
    
}
/*REFERENCIAS*/
if(isset($_POST['ref1_nombre']))
{
    
    $id_general = $id;
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
    
    $update = mysqli_query($link, "update test_referencia set ref1_nombre = '$ref1_nombre', ref1_telefono = '$ref1_telefono', ref1_tiempo = '$ref1_tiempo', ref1_referencia = '$ref1_referencia', ref2_nombre = '$ref2_nombre', ref2_telefono = '$ref2_telefono', ref2_tiempo = '$ref2_tiempo', ref2_referencia = '$ref2_referencia', ref3_nombre = '$ref3_nombre', ref3_tiempo = '$ref3_tiempo', ref3_comentario = '$ref3_comentario' where id_general = '$id_general'");
    
    if($update)
    {
        echo "Datos actualizados test_referencia <br>";
    }
    else
    {
        echo "Datos no actualizados test_referencia <br>";
        echo "update test_referencia set ref1_nombre = '$ref1_nombre', ref1_telefono = '$ref1_telefono', ref1_tiempo = '$ref1_tiempo', ref1_referencia = '$ref1_referencia', ref2_nombre = '$ref2_nombre', ref2_telefono = '$ref2_telefono', ref2_tiempo = '$ref2_tiempo', ref2_referencia = '$ref2_referencia', ref3_nombre = '$ref3_nombre', ref3_tiempo = '$ref3_tiempo', ref3_comentario = '$ref3_comentario' where id_general = '$id_general'";
        echo "<br>";
    }
}
/*DATOS LABORALES*/

if(isset($_POST['lab_empresa']))
{
    
    $id_general = $id;
    if(isset($_POST['lab_id'])) {$lab_id = $_POST['lab_id']; } else { $lab_id = 0; }
    if(isset($_POST['lab_empresa'])) {$lab_empresa = $_POST['lab_empresa']; } else { $lab_empresa = 0; }
    if(isset($_POST['lab_carta'])) {$lab_carta = $_POST['lab_carta']; } else { $lab_carta = 0; }
    if(isset($_POST['lab_demanda'])) {$lab_demanda = $_POST['lab_demanda']; } else { $lab_demanda = 0; }
    if(isset($_POST['lab_telefono'])) {$lab_telefono = $_POST['lab_telefono']; } else { $lab_telefono = 0; }
    if(isset($_POST['lab_puestos'])) {$lab_puestos = $_POST['lab_puestos']; } else { $lab_puestos = 0; }
    if(isset($_POST['lab_depto'])) {$lab_depto = $_POST['lab_depto']; } else { $lab_depto = 0; }
    if(isset($_POST['lab_sueldo'])) {$lab_sueldo = $_POST['lab_sueldo']; } else { $lab_sueldo = 0; }
    if(isset($_POST['lab_domicilio'])) {$lab_domicilio = $_POST['lab_domicilio']; } else { $lab_domicilio = 0; }
    if(isset($_POST['lab_contrato'])) {$lab_contrato = $_POST['lab_contrato']; } else { $lab_contrato = 0; }
    if(isset($_POST['lab_fecha_ing'])) {$lab_fecha_ing = $_POST['lab_fecha_ing']; } else { $lab_fecha_ing = "00-00-0000"; }
    if(isset($_POST['lab_fecha_baja'])) {$lab_fecha_baja = $_POST['lab_fecha_baja']; } else { $lab_fecha_baja = "00-00-0000"; }
    if(isset($_POST['lab_motivo'])) {$lab_motivo = $_POST['lab_motivo']; } else { $lab_motivo = 0; } 
    if(isset($_POST['lab_sindicato'])) {$lab_sindicato = $_POST['lab_sindicato']; } else { $lab_sindicato = 0; } 
    if(isset($_POST['lab_jefe'])) {$lab_jefe = $_POST['lab_jefe']; } else { $lab_jefe = 0; } 
    if(isset($_POST['lab_jefe_puesto'])) {$lab_jefe_puesto = $_POST['lab_jefe_puesto']; } else { $lab_jefe_puesto = 0; } 
    
    if(isset($_POST['val_fecha_consulta'])) {$val_fecha_consulta = $_POST['val_fecha_consulta']; } else { $val_fecha_consulta = "00-00-0000"; } 
    if(isset($_POST['val_fecha_ingreso'])) {$val_fecha_ingreso = $_POST['val_fecha_ingreso']; } else { $val_fecha_ingreso = "00-00-0000"; } 
    if(isset($_POST['val_fecha_baja'])) {$val_fecha_baja = $_POST['val_fecha_baja']; } else { $val_fecha_baja = "00-00-0000"; } 
    if(isset($_POST['val_puesto_inicial'])) {$val_puesto_inicial = $_POST['val_puesto_inicial']; } else { $val_puesto_inicial = 0; } 
    if(isset($_POST['val_sueldo_inicial'])) {$val_sueldo_inicial = $_POST['val_sueldo_inicial']; } else { $val_sueldo_inicial = 0; } 
    if(isset($_POST['val_contrato'])) {$val_contrato = $_POST['val_contrato']; } else { $val_contrato = 0; } 
    if(isset($_POST['val_iniciativa'])) {$val_iniciativa = $_POST['val_iniciativa']; } else { $val_iniciativa = 0; } 
    if(isset($_POST['val_metas'])) {$val_metas = $_POST['val_metas']; } else { $val_metas = 0; } 
    if(isset($_POST['val_responsabilidad'])) {$val_responsabilidad = $_POST['val_responsabilidad']; } else { $val_responsabilidad = 0; } 
    if(isset($_POST['val_puntualidad'])) {$val_puntualidad = $_POST['val_puntualidad']; } else { $val_puntualidad = 0; } 
    if(isset($_POST['val_personal'])) {$val_personal = $_POST['val_personal']; } else { $val_personal = 0; } 
    if(isset($_POST['val_salida'])) {$val_salida = $_POST['val_salida']; } else { $val_salida = 0; } 
    if(isset($_POST['val_recontratable'])) {$val_recontratable = $_POST['val_recontratable']; } else { $val_recontratable = 0; } 
    if(isset($_POST['val_nombre_info'])) {$val_nombre_info = $_POST['val_nombre_info']; } else { $val_nombre_info = 0; } 
    if(isset($_POST['val_puesto_infor'])) {$val_puesto_infor = $_POST['val_puesto_infor']; } else { $val_puesto_infor = 0; } 
    if(isset($_POST['val_observacion'])) {$val_observacion = $_POST['val_observacion']; } else { $val_observacion = 0; } 
    
    
    $n = count($lab_empresa);
    $i = 0;
    
    while ($i < $n)
    {
        
        if($lab_fecha_ing[$i] == ""){$lab_fecha_ing2 = "0000-00-00";} 
        else 
        {
            $explode = explode("/",$lab_fecha_ing[$i]);
            $fecha_ing2 = $explode[2]."-".$explode[1]."-".$explode[0];
        }
        
       if($lab_fecha_baja[$i] == ""){$fecha_baja2 = "0000-00-00";} 
       else
       {
            $explode = explode("/",$lab_fecha_baja[$i]);
            $fecha_baja2 = $explode[2]."-".$explode[1]."-".$explode[0];
       }
       
       if($val_fecha_ingreso[$i] == ""){$val_fecha_ingreso2 = "0000-00-00";} 
       else
       {
            $explode = explode("/",$val_fecha_ingreso[$i]);
            $val_fecha_ingreso2 = $explode[2]."-".$explode[1]."-".$explode[0];
       }
       
       if($val_fecha_consulta[$i] == ""){$val_fecha_consulta2 = "0000-00-00";} 
       else
       {
            $explode = explode("/",$val_fecha_consulta[$i]);
            $val_fecha_consulta2 = $explode[2]."-".$explode[1]."-".$explode[0];
       }
       
       if($val_fecha_ingreso[$i] == ""){$val_fecha_ingreso2 = "0000-00-00";} 
       else
       {
            $explode = explode("/",$val_fecha_ingreso[$i]);
            $val_fecha_ingreso2 = $explode[2]."-".$explode[1]."-".$explode[0];
       }
       
       if($val_fecha_baja[$i] == ""){$val_fecha_baja2 = "0000-00-00";} 
       else
       {
            $explode = explode("/",$val_fecha_baja[$i]);
            $val_fecha_baja2 = $explode[2]."-".$explode[1]."-".$explode[0];
       }
       
        $sueldo2 = $lab_sueldo[$i];
        $sueldo2 = str_replace("$","",$sueldo2);
        $sueldo2 = str_replace(",","",$sueldo2);
        $sueldo2 = str_replace("_","",$sueldo2);
        
        $val_sueldo_inicial2 = $val_sueldo_inicial[$i];
        $val_sueldo_inicial2 = str_replace("$","",$val_sueldo_inicial2);
        $val_sueldo_inicial2 = str_replace(",","",$val_sueldo_inicial2);
        $val_sueldo_inicial2 = str_replace("_","",$val_sueldo_inicial2);
        
        
        if($lab_empresa[$i] == ""){} else
        {
            
            $update = mysqli_query($link, "update test_laboral set empresa = '$lab_empresa[$i]', carta = '$lab_carta[$i]', demanda = '$lab_demanda[$i]', telefono = '$lab_telefono[$i]', puestos = '$lab_puestos[$i]', depto = '$lab_depto[$i]', sueldo='$sueldo2', domicilio = '$lab_domicilio[$i]', contrato = '$lab_contrato[$i]', fecha_ing = '$fecha_ing2', fecha_baja = '$fecha_baja2', motivo = '$lab_motivo[$i]', sindicato = '$lab_sindicato[$i]', jefe = '$lab_jefe[$i]', jefe_puesto='$lab_jefe_puesto[$i]', val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial2', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]' where id = '$lab_id[$i]'");    
            if($update)
            {
                echo "Datos actualizados test_laboral <br>";
                $update = mysqli_query($link, "update test_general set validado = 'si' where id = '$id_general'"); 
                //echo "update test_laboral set empresa = '$lab_empresa[$i]', carta = '$lab_carta[$i]', demanda = '$lab_demanda[$i]', telefono = '$lab_telefono[$i]', puestos = '$lab_puestos[$i]', depto = '$lab_depto[$i]', sueldo='$sueldo2', domicilio = '$lab_domicilio[$i]', contrato = '$lab_contrato[$i]', fecha_ing = '$fecha_ing2', fecha_baja = '$fecha_baja2', motivo = '$lab_motivo[$i]', sindicato = '$lab_sindicato[$i]', jefe = '$lab_jefe[$i]', jefe_puesto='$lab_jefe_puesto[$i]', val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial2', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]' where id = '$lab_id[$i]'";
                
            }
            else
            {
                echo "Datos no actualizados test_laboral <br>";
                echo "update test_laboral set empresa = '$lab_empresa[$i]', carta = '$lab_carta[$i]', demanda = '$lab_demanda[$i]', telefono = '$lab_telefono[$i]', puestos = '$lab_puestos[$i]', depto = '$lab_depto[$i]', sueldo='$sueldo2', domicilio = '$lab_domicilio[$i]', contrato = '$lab_contrato[$i]', fecha_ing = '$fecha_ing2', fecha_baja = '$fecha_baja2', motivo = '$lab_motivo[$i]', sindicato = '$lab_sindicato[$i]', jefe = '$lab_jefe[$i]', jefe_puesto='$lab_jefe_puesto[$i]', val_fecha_consulta = '$val_fecha_consulta2', val_fecha_ingreso = '$val_fecha_ingreso2', val_fecha_baja = '$val_fecha_baja2', val_puesto_inicial = '$val_puesto_inicial[$i]', val_sueldo_inicial = '$val_sueldo_inicial2', val_contrato = '$val_contrato[$i]', val_iniciativa = '$val_iniciativa[$i]', val_metas = '$val_metas[$i]', val_responsabilidad = '$val_responsabilidad[$i]', val_puntualidad = '$val_puntualidad[$i]', val_personal = '$val_personal[$i]', val_salida = '$val_salida[$i]', val_recontratable = '$val_recontratable[$i]', val_nombre_info = '$val_nombre_info[$i]', val_puesto_infor = '$val_puesto_infor[$i]', val_observacion = '$val_observacion[$i]' where id = '$lab_id[$i]'";
                echo "<br>";
            } 
        }
                 
        $i++;
    }
}

if(isset($_POST['lab2_comentario']))
{

    $lab2_comentario = $_POST['lab2_comentario'];
    $lab2_empresa = $_POST['lab2_empresa'];
    $lab2_fecha = $_POST['lab2_fecha'];
    $lab2_fecha = date("Y-m-d",strtotime($lab2_fecha));
    $lab2_opinion_sindicato = $_POST['lab2_opinion_sindicato'];
    $lab2_sindicarse = $_POST['lab2_sindicarse'];
    $lab2_sindicalizado = $_POST['lab2_sindicalizado'];
    $lab2_querer_sindicalizarse = $_POST['lab2_querer_sindicalizarse'];
    
    $select = mysqli_query($link,"select id_general from test_laboral2 where id_general = '$id' ");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        $update = mysqli_query($link,"update test_laboral2 set comentario = '$lab2_comentario', empresa = '$lab2_empresa', fecha = '$lab2_fecha', opinion_sindicato = '$lab2_opinion_sindicato', sindicarse = '$lab2_sindicarse', sindicalizado = '$lab2_sindicalizado', querer_sindicalizarse = '$lab2_querer_sindicalizarse' where id_general = '$id_general'");
        if($update)
        {
            echo "Existe el regisro y los datos han sido actualizados test_laboral2<br>";
        }
        else
        {
            echo "Existe el registro y los datos no han sido actualizados test_laboral2<br>";
            echo "update test_laboral2 set comentario = '$lab2_comentario', empresa = '$lab2_empresa', fecha = '$lab2_fecha', opinion_sindicato = '$lab2_opinion_sindicato', sindicarse = '$lab2_sindicarse', sindicalizado = '$lab2_sindicalizado', querer_sindicalizarse = '$lab2_querer_sindicalizarse' where id_general = '$id_general'";
            echo "<br>";
        }
    }
    else
    {
        $insert = mysqli_query($link,"insert into test_laboral2 (id_general, comentario, empresa, fecha, opinion_sindicato, sindicarse, sindicalizado, querer_sindicalizarse) values ('$id_general', '$comentario', '$empresa', '$fecha', '$opinion_sindicato', '$sindicarse', '$sindicalizado', '$querer_sindicalizarse')");
        if($insert)
        {
            echo "No existe el registro y los datos han sido creados test_laboral2<br>";
        }
        else
        {
            echo "No existe el registro y no se crearon los datos en test_laboral2<br>";
            echo "insert into test_laboral2 (id_general, comentario, empresa, fecha, opinion_sindicato, sindicarse, sindicalizado, querer_sindicalizarse) values ('$id_general', '$comentario', '$empresa', '$fecha', '$opinion_sindicato', '$sindicarse', '$sindicalizado', '$querer_sindicalizarse')<br>";
            
        }
        
    }
}

if(isset($_POST['eval_a']))
{
    $id_general = $id;
    if(isset($_POST['eval_a'])) {$eval_a = $_POST['eval_a']; } else { $eval_a = 0; }
    if(isset($_POST['eval_b'])) {$eval_b = $_POST['eval_b']; } else { $eval_b = 0; }
    if(isset($_POST['eval_c'])) {$eval_c = $_POST['eval_c']; } else { $eval_c = 0; }
    if(isset($_POST['eval_d'])) {$eval_d = $_POST['eval_d']; } else { $eval_d = 0; }
    if(isset($_POST['eval_e'])) {$eval_e = $_POST['eval_e']; } else { $eval_e = 0; }
    if(isset($_POST['eval_f'])) {$eval_f = $_POST['eval_f']; } else { $eval_f = 0; }
    if(isset($_POST['eval_g'])) {$eval_g = $_POST['eval_g']; } else { $eval_g = 0; }
    if(isset($_POST['eval_h'])) {$eval_h = $_POST['eval_h']; } else { $eval_h = 0; }
    if(isset($_POST['eval_i'])) {$eval_i = $_POST['eval_i']; } else { $eval_i = 0; }
    if(isset($_POST['eval_obs'])) {$eval_obs = $_POST['eval_obs']; } else { $eval_obs = 0; }
    if(isset($_POST['eval_recomendable'])) {$eval_recomendable = $_POST['eval_recomendable']; } else { $eval_recomendable = 0; }
    
    $select = mysqli_query($link,"select eval_a from test_evaluacion where id_general = '$id_general'");
    $row = mysqli_num_rows($select);
    if($row > 0)
    {
        $update = mysqli_query($link,"update test_evaluacion set eval_a = '$eval_a', eval_b = '$eval_b', eval_c = '$eval_c', eval_d = '$eval_d', eval_e = '$eval_e', eval_f = '$eval_f', eval_g = '$eval_g', eval_h = '$eval_h', eval_i = '$eval_i', eval_obs = '$eval_obs', eval_recomendable = '$eval_recomendable' where id_general = '$id_general'");
        if($update)
        {
            echo "Existe registro test_evaluacion y se actualizó el registro<br>";
        }
        else
        {
            echo "Existe registro test_evaluacion y no se actualizó el registro<br>";
            echo "update test_evaluacion set eval_a = '$eval_a', eval_b = '$eval_b', eval_c = '$eval_c', eval_d = '$eval_d', eval_e = '$eval_e', eval_f = '$eval_f', eval_g = '$eval_g', eval_h = '$eval_h', eval_i = '$eval_i', eval_obs = '$eval_obs', eval_recomendable = '$eval_recomendable' where id_general = '$id_general'";
            echo "<br>";
        }
        
    }
    else
    {
        $insert = mysqli_query($link,"insert into test_evaluacion (id_general, eval_a, eval_b, eval_c, eval_d, eval_e, eval_f, eval_g, eval_h, eval_i, eval_obs, eval_recomendable) values ('$id_general', '$eval_a', '$eval_b', '$eval_c', '$eval_d', '$eval_e', '$eval_f', '$eval_g', '$eval_h', '$eval_i', '$eval_obs', '$eval_recomendable')");

        if($insert)
        {
            echo "No Existe registro test_evaluacion y se creó el registro <br>";
        }
        else
        {
            echo "No Existe registro test_evaluacion y no se creó el registro <br>";
            echo "insert into test_evaluacion (id_general, eval_a, eval_b, eval_c, eval_d, eval_e, eval_f, eval_g, eval_h, eval_i) values ('$id_general', '$eval_a', '$eval_b', '$eval_c', '$eval_d', '$eval_e', '$eval_f', '$eval_g', '$eval_h', '$eval_i')";
           echo "<br>";
        }    
    }
    
    
    
}

if(isset($_POST['maps']))
{
    /*Subir Documentos*/
    $id_general = $id;
    
    if(isset($_POST['maps'])) 
    {
        $maps = $_POST['maps']; 
        $maps = str_replace('<iframe src="','', $maps);
        $maps = str_replace('" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', $maps);
        $maps = str_replace('" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', $maps);
        $maps = str_replace('" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>', '', $maps);
                
    } else { $maps = ""; }
    
    if(isset($_POST['face_comment']))
    {
        $face_comment = $_POST['face_comment'];
    }
    else
    {
        $face_comment = "";
    }
       
    $update = mysqli_query($link, "update test_documentacion set maps = '$maps', face_comment = '$face_comment'  where id_general = '$id_general'");
    
    if($update)
    {
        echo "Datos actualizados test documentacion <br>";
       // echo "update test_documentacion set maps = '$maps' face_comment = '$face_comment' where id_general = '$id_general'";
        //echo "<br>";
    }
    else
    {
        echo "Datos no actualizados test documentacion <br>";
        echo "update test_documentacion set maps = '$maps' face_comment = '$face_comment' where id_general = '$id_general'";
        echo "<br>";
    }
    
} 

if(isset($_POST['pago_agente']))
{
    $pago_agente    = $_POST['pago_agente'];
    $id             = $_POST['id'];
    
    $update = mysqli_query($link, "update test_general set pago_agente = '$pago_agente' where id = '$id'");
    
    if($update)
    {
        echo "Si se actualizó el pago_agente <br>";
    }
    else
    {
        echo "No se actualizó el pago agente <br>";
        echo "update test_general set pago_agente = '$pago_agente' where id = '$id'";
    }
}
if(isset($_POST['pago_cliente']))
{
    $pago_cliente    = $_POST['pago_cliente'];
    $id             = $_POST['id'];
    
    $update = mysqli_query($link, "update test_general set pago_cliente = '$pago_cliente' where id = '$id'");
    
    if($update)
    {
        echo "Si se actualizó el pago_agente <br>";
    }
    else
    {
        echo "No se actualizó el pago agente <br>";
        echo "update test_general set pago_cliente = '$pago_cliente' where id = '$id'";
    }
}
?>
