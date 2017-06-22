<?php include('connect_to_db.php'); ?>
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
			$state = str_replace('-', ' ', $state);
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
			$jaypigee = $_POST['_img'];

			// echo $filename."<br>".$filetype."<br>".$newname."<br>".$author."<br>".$subtitles."<br>".$credits."<br>".$date."<br>".$geoLat."<br>".$geoLon."<br>".$state."<br>".$city."<br>".$place."<br>".$serieName."<br>".$seriePart."<br>".$whichQuestion."<br>".$questionNumber."<br>".$unity."<br>".$gender."<br>".$type."<br>".$space."<br>".$population."<br>".$ecosystem."<br>".$light."<br>".$camera."<br>".$movement."<br>".$sound."<br>".$subject."<br>".$geometry."<br>".$numericPresence."<br>".$color."<br>".$rythm."<br>".$newIntensity."<br>".$impact."<br>".$themes."<br>".$actions;

			//sql
			 		$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtítulos,creditos,fecha,geoLatitud,geoLongitud,estado,municipioCiudad,lugar,serieNombre,serieParte,Quepregunta,preguntaNumero,unidad,género,tipo,espacio,población,ecosistema,luz,cámara,movimiento,sonido,sujeto,geometríaDominante,presenciaNumérica,color,ritmo,nuevaIntensidad,impacto,temas,acciones) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$geoLat','$geoLon','$state','$city','$place','$serieName','$seriePart','$whichQuestion','$questionNumber','$unity','$gender','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$numericPresence','$color','$rythm','$newIntensity','$impact','$themes','$actions')";
						if(!mysqli_query($dbconn,$insert)){

							die(mysqli_error($dbconn));
						}else{//end second if
						
							$entrada = "EXITO!!!";
							echo $entrada;
						}


		}//END IF ISSET && NOT EMPTY
	?>

	<button class="to_main">Regrasar al panel principal</button>

<?php include('footer.php'); ?>