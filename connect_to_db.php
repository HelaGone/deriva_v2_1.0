<?php 
/*
 * Modo debug
 * Conecta a db
*/
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACER DEBUG

DEFINE('DB_USER', 'root');
DEFINE('DB_PSWD', 'root');
DEFINE('DB_HOST', 'localhost');
// DEFINE('DB_NAME', 'derivaV2_db');
DEFINE('DB_NAME', 'deriva_v3_db');
//deriva_cuestionario_db
$dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
mysqli_set_charset($dbconn,'utf8');
if(!$dbconn){
	die(' ERROR EN LA CONEXIÓN A DB');
}
 // echo ": ";
?>