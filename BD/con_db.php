<?php
/*Creamos una variable para la conexion a la base de datos*/
$conexion = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");

$db = mysql_select_db("tecshop_registros",$conexion) or die("<h2>Error de conexion</h2>");
?>