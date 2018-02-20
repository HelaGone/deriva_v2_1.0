<?php
	if(isset($_POST['pass']) && !empty($_POST['pass']) ){
		$pass = $_POST['pass'];
		if($pass != '12345'){
			echo "ah ah ahaa!! You can't access here!";
			echo '<div style="width:100%;height:0;padding-bottom:65%;position:relative;"><iframe src="https://giphy.com/embed/3ohzdQ1IynzclJldUQ" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/the-magic-word-3ohzdQ1IynzclJldUQ">via GIPHY</a></p>';
		}else{
			header('input.php');
		}
	}	
?>	