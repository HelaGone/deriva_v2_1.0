<?php 
/*
 * Modo debug
 * Conecta a db
*/
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACER DEBUG

// DEFINE('DB_USER', 'derivamx');
// DEFINE('DB_PSWD', 'wewmsfzn');
// DEFINE('DB_HOST', 'mysql.deriva.mx');
// DEFINE('DB_NAME', 'archivo_clasificado_derivamx'); //live db

DEFINE('DB_USER', 'root');
DEFINE('DB_PSWD', 'helagone13');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'deriva_dev_db');

// DEFINE('DB_USER', 'usrderiva2017');
// DEFINE('DB_PSWD', 'pwd.deriva.2017');
// DEFINE('DB_HOST', 'mysql.cubeinthebox.com');
// DEFINE('DB_NAME', 'deriva_v4_db'); //stage db

$dbconn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
mysqli_set_charset($dbconn,'utf8');
if(!$dbconn){
	die(' ERROR EN LA CONEXIÓN A DB');
}
 // echo ": ";
?>