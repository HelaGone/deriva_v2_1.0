<?php include('header.php'); ?>
	<?php 
		$all = de_get_all($dbconn);

		// print_r($all);

		foreach ($all as $key => $value) {
			echo "<pre>";
				print_r($value);
			echo "</pre>";
		}
		?>

<?php include('footer.php'); ?>


