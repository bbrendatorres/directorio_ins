<?php 
function conectar(){
	$user="root";
	$pass="";
	$server="localhost:80";
	$db="directorio";
	$con=mysql_connect($server,$user,$pass) or die ("Error en conexión a la bd".mysql_error());

	mysql_select_db($db,$con);
	return  $con;
}
 ?>

