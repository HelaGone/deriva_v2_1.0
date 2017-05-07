<?php include('header.php'); ?>

	<?php
		if( isset($_POST['filename']) && !empty($_POST['filename']) && isset($_POST['actions']) && !empty($_POST['actions']) ){

			$filename = $_POST['filename'];
			$filetype = $_POST['filetype'];
			$newname = $_POST['newname'];
			$author = $_POST['author'];
			$subtitles = $_POST['subtitles'];
			$credits = $_POST['credits'];
			$date = $_POST['date'];
			$geoLat = $_POST['geoLat'];
			$geoLon = $_POST['geoLon'];
			$state = $_POST['state'];
			$city = $_POST['city'];
			$place = $_POST['place'];
			$serieName = $_POST['serieName'];
			$seriePart = $_POST['seriePart'];
			$whichQuestion = $_POST['whichQuestion'];
			$questionNumber = $_POST['questionNumber'];
			$unity = $_POST['unity'];
			$gender = $_POST['gender'];
			$type = $_POST['type'];
			$space = $_POST['space'];
			$population = $_POST['population'];
			$ecosystem = $_POST['ecosystem'];
			$light = $_POST['light'];
			$camera = $_POST['camera'];
			$movement = $_POST['movement'];
			$sound = $_POST['sound'];
			$subject = $_POST['subject'];
			$geometry = $_POST['geometry'];
			$numericPresence = $_POST['numericPresence'];
			$color = $_POST['color'];
			$rythm = $_POST['rythm'];
			$newIntensity = $_POST['newIntensity'];
			$impact = $_POST['impact'];
			$themes = $_POST['themes'];
			$actions = $_POST['actions'];

			echo $filetype." ".$filename." ".$actions;


		}//END IF ISSET && NOT EMPTY
	?>

<?php include('footer.php'); ?>