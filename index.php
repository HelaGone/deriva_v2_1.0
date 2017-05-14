<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACE DEBUG
	require('connect_to_db.php');
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = $_POST['usr'];
		$password = $_POST['pass'];
		$query = "SELECT * FROM usr_login WHERE usr = '$usuario' and pass = '$password'";

		if( !($result = mysqli_query($dbconn, $query) ) ){
			die('Error!');
		}else{
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$count = mysqli_num_rows($result);
			if($count == 1){
				$_SESSION['login_user'] = $usuario;
				header("location: input.php");
			}else{
				$err = "Credenciales inválidas";
			}
		}
	}
?>
<form method="post" action="" id="login_form" >
	<label for="usr">Usuario</label><br>
	<input type="text" name="usr" value="" placeholder="Usuario"><br>

	<label for="pass">Password</label><br>
	<input type="text" name="pass" value="" placeholder="Password"><br>

	<input type="submit" value="Login" >
</form>
<div><?php echo $err; ?></div>