<?php include('connect_to_db.php'); ?>
<?php include('header.php'); ?>

	<?php

	$target_dir = "images/";
	$target_file = $target_dir.basename($_FILES["_img"]["name"]);
	$upload_ok = 1;
	$img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);

		if( isset($_POST['filename']) && !empty($_POST['filename']) && isset($_POST['actions']) && !empty($_POST['actions'])){

			$filename = ($_POST['filename'])? $_POST['filename']: NULL;
			$filetype = ($_POST['filetype'])? $_POST['filetype']: NULL;
			$newname = ($_POST['newname'])? $_POST['newname']: NULL;
			$author = ($_POST['author'])? $_POST['author']: NULL;
			$subtitles = ($_POST['subtitles'])? $_POST['subtitles']: NULL;
			$credits = ($_POST['credits'])? $_POST['credits']: NULL;
			$date = ($_POST['date'])? $_POST['date']: NULL;
			$geoLat = ($_POST['geoLat'])? $_POST['geoLat']: NULL;
			$geoLon = ($_POST['geoLon'])? $_POST['geoLon']: NULL;
			$state = ($_POST['state'])? $_POST['state']: NULL;
			$state = str_replace('-', ' ', $state);
			$city = ($_POST['city'])? $_POST['city']: NULL;
			$place = ($_POST['place'])? $_POST['place']: NULL;
			$serieName = ($_POST['serieName'])? $_POST['serieName']: NULL;
			$seriePart = ($_POST['seriePart'])? $_POST['seriePart']: NULL;
			$whichQuestion = ($_POST['whichQuestion'])? $_POST['whichQuestion']: NULL;
			$questionNumber = ($_POST['questionNumber'])? $_POST['questionNumber']: NULL;
			$unity = ($_POST['unity'])? $_POST['unity']: NULL;
			$gender = ($_POST['gender'])? $_POST['gender']: NULL;
			$type = ($_POST['type'])? $_POST['type']: NULL;
			$space = ($_POST['space'])? $_POST['space']: NULL;
			$population = ($_POST['population'])? $_POST['population']: NULL;
			$ecosystem = ($_POST['ecosystem'])? $_POST['ecosystem']: NULL;
			$light = ($_POST['light'])? $_POST['light']: NULL;
			$camera = ($_POST['camera'])? $_POST['camera']: NULL;
			$movement = ($_POST['movement'])? $_POST['movement']: NULL;
			$sound = ($_POST['sound'])? $_POST['sound']: NULL;
			$subject = ($_POST['subject'])? $_POST['subject']: NULL;
			$geometry = ($_POST['geometry'])? $_POST['geometry']: NULL;
			$numericPresence = ($_POST['numericPresence'])? $_POST['numericPresence']: NULL;
			$color = ($_POST['color'])? $_POST['color']: NULL;
			$rythm = ($_POST['rythm'])? $_POST['rythm']: NULL;
			$newIntensity = ($_POST['newIntensity'])? $_POST['newIntensity']: NULL;
			$impact = ($_POST['impact'])? $_POST['impact']: NULL;
			$themes = ($_POST['themes'])? $_POST['themes']: NULL;
			$actions = ($_POST['actions'])? $_POST['actions']: NULL;
			$jaypigee = $target_file;

			//CHEK IF IS IMAGE
			$check = getimagesize($_FILES["_img"]["tmp_name"]);
			if($check !== false){
				$upload_ok = 1;
			}else{
				$upload_ok = 0;
			}

			//SQL INSERT
			 		$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtítulos,creditos,fecha,geoLatitud,geoLongitud,estado,municipioCiudad,lugar,serieNombre,serieParte,Quepregunta,preguntaNumero,unidad,género,tipo,espacio,población,ecosistema,luz,cámara,movimiento,sonido,sujeto,geometríaDominante,presenciaNumérica,color,ritmo,nuevaIntensidad,impacto,temas,acciones,image) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$geoLat','$geoLon','$state','$city','$place','$serieName','$seriePart','$whichQuestion','$questionNumber','$unity','$gender','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$numericPresence','$color','$rythm','$newIntensity','$impact','$themes','$actions','$jaypigee')";
						if(!mysqli_query($dbconn,$insert)){
							die(mysqli_error($dbconn));
							echo "ERROR!";
						}else{//end second if
							echo "EXITO!!!";
						}
		}//END IF ISSET && NOT EMPTY
		// FILE ALREADY EXISTS
	if (file_exists($target_file)) {
	    echo "El archivo ya existe.";
	    $upload_ok = 0;
	}
	// FILE SIZE
	if ($_FILES["_img"]["size"] > 500000) {
	    echo "El archivo es muy grande.";
	    $upload_ok = 0;
	}
	// FORMATS ALLOWED
	if($img_file_type != "jpg" && $img_file_type != "png" && $img_file_type != "jpeg"
	&& $img_file_type != "gif" ) {
	    echo "Solo archivos JPG, JPEG, PNG & GIF son permitidos.";
	    $upload_ok = 0;
	}
	// LAST CHECK
	if ($upload_ok == 0) {
	    echo "El archivo no se sibió.";
	// UPLOAD FILE
	} else {
	    if (move_uploaded_file($_FILES["_img"]["tmp_name"], $target_file)) {
	    	echo ":."
	        // echo "El archivo: ". basename( $_FILES["_img"]["name"]). " subió con éxcito.";
	    } else {
	        echo "Error subiendo archivo.";
	    }
	}
	?>
	<button class="to_main">Regresar</button>
<?php include('footer.php'); ?>