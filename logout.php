<?php 
	session_start();

	if(session_destroy()){
		header('Location: index.php');
	}



	include('header.php'); 
?>

<?php include('footer.php'); ?>