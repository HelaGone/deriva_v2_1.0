<?php 
	include('connect_to_db.php'); 
	session_start();

	$usr_chk = $_SESSION['login_user'];
	$query = "SELECT usr FROM usr_login WHERE usr = '$usr_chk'";
	$sql_chk = mysqli_query($dbconn, $query);

	$row = mysqli_fetch_array($sql_chk, MYSQLI_ASSOC);
	$login_session = $row['usr'];

	if( !isset($_SESSION['login_user']) ){
		header('Location: index.php'); 
	}
	?>