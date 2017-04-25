<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACE DEBUG
	require('connect_to_db.php');

	session_name('tzLogin');
	// Starting the session

	session_set_cookie_params(2*7*24*60*60);
	// Making the cookie live for 2 weeks

	session_start();

	$_SESSION['id'];
	$_SESSION['usr'] = '';
	$_SESSION['rememberMe'] = '';
	$_SESSION['msg']['login-err'] = '';
	$_POST['submit'] = '';

	if($_SESSION['id'] && !isset($_COOKIE['tzRemember']) && !$_SESSION['rememberMe']){

		// If you are logged in, but you don't have the tzRemember cookie (browser restart)
		// and you have not checked the rememberMe checkbox:
		$_SESSION = array();
		session_destroy();
		// Destroy the session
	}else{
		echo "aqui";
	}

	if(isset($_GET['logoff'])){
		$_SESSION = array();
		session_destroy();
		header("Location: index.php");
		exit;
	}

	if($_POST['submit']=='Login'){
		// Checking whether the Login form has been submitted

		$err = array();
		// Will hold our errors

		if(!$_POST['username'] || !$_POST['password'])
			$err[] = 'All the fields must be filled in!';

		if(!count($err)){
			$_POST['username'] = mysqli_real_escape_string($dbconn, $_POST['username']);
			$_POST['password'] = mysqli_real_escape_string($dbconn, $_POST['password']);
			$_POST['rememberMe'] = (int)$_POST['rememberMe'];

			// Escaping all input data

			$row = mysqli_fetch_assoc(mysqli_query($dbconn, "SELECT id,usr FROM usr_login WHERE usr='{$_POST['username']}' AND pass='".md5($_POST['password'])."'"));

			if($row['usr']){
				// If everything is OK login

				$_SESSION['usr']=$row['usr'];
				$_SESSION['id'] = $row['id'];
				$_SESSION['rememberMe'] = $_POST['rememberMe'];

				// Store some data in the session

				setcookie('tzRemember',$_POST['rememberMe']);
				// We create the tzRemember cookie
			}
			else $err[]='Wrong username and/or password!';
		}

		if($err){
			$_SESSION['msg']['login-err'] = implode('<br />',$err);
		}
			// Save the error messages in the session

		header("Location: input.php");
		exit;
	}

	$script = '';
	if($_SESSION['msg']){
		// The script below shows the sliding panel on page load
		$script = '
		<script type="text/javascript">
		$(function(){
			$("div#panel").show();
			$("#toggle a").toggle();
		});
		</script>';
	}
?>
<!-- Panel -->

<div id="toppanel">

	<div id="panel">
		<div class="content clearfix">

			<?php
			if(!$_SESSION['id']):
			// If you are not logged in
			?>

			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="" method="post">
					<h1>Miembros de Deriva.mx</h1>

					<?php

					if($_SESSION['msg']['login-err']){
						echo '<div class="err">'.$_SESSION['msg']['login-err'].'</div>';
						unset($_SESSION['msg']['login-err']);
						// This will output login errors, if any
					}
					?>

					<label class="grey" for="username">Usuario:</label><br>
					<input class="field" type="text" name="username" id="username" value="" size="23" /><br>
					<label class="grey" for="password">Password:</label><br>
					<input class="field" type="password" name="password" id="password" size="23" /><br>
					<label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;Recordar</label>
					<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
				</form>

			</div>

				<?php
				else:
				// If you are logged in
				?>

				<div class="left">
					<h1>Members panel</h1>
					<p>You can put member-only data here</p>
					<a href="input.php">View a special member page</a>
					<p>- or -</p>
					<a href="?logoff">Log off</a>
				</div>

				<?php
				endif;
				// Closing the IF-ELSE construct
				?>

		</div>
	</div> <!-- /login -->

	<!-- The tab on top -->
	<div class="tab">
		<ul class="login">
			<li>Hello <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>!</li>
		</ul>
	</div> <!-- / top -->
</div> <!--panel -->


