<?php
	if(isset($_POST['pass']) && !empty($_POST['pass']) ){
		$pass = $_POST['pass'];
		if($pass != '12345'){
			echo "ah ah ahaa!! You can't access here!";
		}else{
			header('input.php');
		}
	}	
?>	