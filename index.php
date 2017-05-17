<?php 
	//ini_set('display_errors', 'On');
	//error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACE DEBUG
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
				header("location: admin-area.php");
			}else{
				$err = "Credenciales inválidas";
			}
		}
	}
?>
<style type="text/css">
	body{font-family: helvetica;}
	.main_section{width:50%;margin:0 auto;text-align:center;padding:15% 0%;}
	#login_form input{margin:20px 0px;border:1px solid rgba(0,0,0,0.05);background: none;box-shadow: 1px 1px 5px rgba(0,0,0,0.2);outline:none;width:150px;}
	#login_form input[type=submit]{background: rgba(0,255,0,0.3);}
	::-webkit-input-placeholder {text-align: center;}
	.error{color:red;font-weight: 700; font-size: 2em;}
</style>


<section id="form_page" class="main_section">
	<form method="post" action="" id="login_form" >
		<input type="text" name="usr" value="" placeholder="Usuario"><br>
		<input type="password" name="pass" value="" placeholder="Password"><br>
		<input type="submit" value="Entrar" >
	</form>
	<div>
		<?php echo "<div class='error'>".$err."</div>";?>
	</div>
</section>