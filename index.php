<?php 
	session_start();
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACE DEBUG
	require('connect_to_db.php');

	$_SESSION['id'] = '';

	if( $_SESSION['id']  != 'deriva'):
		echo "not logged<br>";
	?>
	<form method="post" action="" id="login_form" >
		<label for="usr">Usuario</label><br>
		<input type="text" name="usr" value="" placeholder="Usuario"><br>

		<label for="pass">Password</label><br>
		<input type="text" name="pass" value="" placeholder="Password"><br>

		<input type="submit" value="Login" >
	</form>
<?php

	if( isset($_POST['usr']) && !empty($_POST['usr']) && isset($_POST['pass']) && !empty($_POST['pass']) ){
		$db_usr = '';
		$db_pass = '';
		$usuario = $_POST['usr'];
		$password = $_POST['pass'];
		$query = "SELECT * FROM usr_login WHERE id = 1";

		if( !($result = mysqli_query($dbconn, $query)) ){
			die('Error!');
		}else{	
			
			echo 'Success!<br>';

			if( mysqli_num_rows( $result )==0 ){
				echo 'No Rows Returned';
			}else{
				$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
				// print_r($result);

				foreach ($result as $key => $value) {
					$db_usr = $value['usr'];
					$db_pass = $value['pass'];
				}
			}
			if($db_usr === $usuario && $db_pass === $password ){
				echo "login!!";
				$_SESSION['id'] = 'deriva';
			}else{
				echo "error Login";
			}
		}
	}else{
		echo "not set";
	}
	else:
		echo "logged";
	endif;



	
?>