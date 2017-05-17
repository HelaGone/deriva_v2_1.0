<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACE DEBUG

DEFINE('DB_USER', 'root');
DEFINE('DB_PSWD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'derivaV2_db');
//deriva_cuestionario_db
$dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
mysqli_set_charset($dbconn,'utf8');
if(!$dbconn){
	die(' ERROR EN LA CONEXIÓN A DB');
}
 // echo ": ";
?>