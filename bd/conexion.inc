<?php

/*
$mysql_host = "mysql6.000webhost.com";
$mysql_database = "a1538638_tmir";
$mysql_user = "a1538638_admin";
$mysql_password = "insane4webhost";
*/

$mysql_host = "localhost";
$mysql_database = "tminsanerevenge";
$mysql_user = "root";
$mysql_password = "";


function conectar()
{
global $mysql_host,$mysql_user,$mysql_password,$mysql_database;
	$cnx=mysql_connect($mysql_host,$mysql_user,$mysql_password);
	if($cnx)
	{
		$bd=mysql_select_db($mysql_database,$cnx);
		if(!$bd) 
			return  (false);
	}
	else
	{
		print("Conexion rechazada o base datos incorrecta.");
		mysql_close($cnx);
		exit();
	}
return($cnx);
}


function seleccionar($sentencia)
{
	$cnx=conectar();
	if($cnx)
	{
		$consulta=mysql_query($sentencia,$cnx);

		while($fila=mysql_fetch_array($consulta))
		{ 
			$contenedor[]=$fila;
		}
		mysql_close($cnx);
	}

return ($contenedor);
}

function modificar($sentencia)
{
	$cnx=conectar();
	if($cnx)
	{
		$consulta=mysql_query($sentencia,$cnx);
		$filasafectadas=mysql_affected_rows($cnx);
		mysql_close($cnx);	
	}

return ($filasafectadas);
}
?>

