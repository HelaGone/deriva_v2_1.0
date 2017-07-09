<?php include('connect_to_db.php'); ?>
<?php include('header.php'); ?>

<?php
	$check_done = false;
	$check_done1 = false;
	$target_dir = "images/";
	$target_file = $target_dir.basename($_FILES["_img"]["name"]);
	$upload_ok = 1;
	$img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);

	if( isset($_POST['filename']) && !empty($_POST['filename'])) {

		$filename = ($_POST['filename'])? $_POST['filename']: NULL;
		$filetype = ($_POST['filetype'])? $_POST['filetype']: NULL;
		$newname = ($_POST['newname'])? $_POST['newname']: NULL;
		$author = ($_POST['author'])? $_POST['author']: NULL;
		$subtitles = ($_POST['subtitles'])? $_POST['subtitles']: NULL;
		$credits = ($_POST['credits'])? $_POST['credits']: NULL;
		$date = ($_POST['date'])? $_POST['date']: NULL;
		$state = ($_POST['state'])? $_POST['state']: NULL;
		$state = str_replace('-', ' ', $state);
		$city = ($_POST['city'])? $_POST['city']: NULL;
		$place = ($_POST['place'])? $_POST['place']: NULL;
		$serieName = ($_POST['serieName'])? $_POST['serieName']: NULL;
		$whichQuestion = ($_POST['whichQuestion'])? $_POST['whichQuestion']: NULL;
		$unity = ($_POST['unity'])? $_POST['unity']: NULL;
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
		$color = ($_POST['color'])? $_POST['color']: NULL;
		$rythm = ($_POST['rythm'])? $_POST['rythm']: NULL;
		$newIntensity = ($_POST['newIntensity'])? $_POST['newIntensity']: NULL;
		$impact = ($_POST['impact'])? $_POST['impact']: NULL;
		$themes = ($_POST['themes'])? $_POST['themes']: NULL;
		$jaypigee = ($target_file)?$target_file:NULL;


		//set local storage
		$_data = array(
			'filename' => $filename,
			'filetype'=>$filetype,
			'newname'=>$newname,
			'author'=>$author,
			'subtitles'=>$subtitles,
			'credits'=>$credits,
			'date'=>$date,
			'state'=>$state,
			'state'=>$state,
			'city'=>$city,
			'place'=>$place,
			'serieName'=>$serieName,
			'whichQuestion'=>$whichQuestion,
			'unity'=>$unity,
			'type'=>$type,
			'space'=>$space,
			'population'=>$population,
			'ecosystem'=>$ecosystem,
			'light'=>$light,
			'camera'=>$camera,
			'movement'=>$movement,
			'sound'=>$sound,
			'subject'=>$subject,
			'geometry'=>$geometry,
			'color'=>$color,
			'rythm'=>$rythm,
			'newIntensity'=>$newIntensity,
			'impact'=>$impact,
			'themes'=>$themes,
			'jaypigee'=>$jaypigee
			);
		
		echo '<input type="hidden" value="$_data" name="the_data" id="data_store">';

		//CHEK IF IS IMAGE
		$check = getimagesize($_FILES["_img"]["tmp_name"]);
		if($check !== false){
			$upload_ok = 1;
		}else{
			$upload_ok = 0;
		}
	?>
		<section id="success_screen">
		<?php
			// FILE ALREADY EXISTS
			if (file_exists($target_file)) {
				$upload_ok = 0;
			?>
				<h2>El archivo ya existe.</h2>
				<button class="to_insert back">Regresar</button>
		<?php		
			}
			// FILE SIZE
			if ($_FILES["_img"]["size"] > 5000000) {
			    $upload_ok = 0;
			    echo "El archivo es muy grande.";
			}
			// FORMATS ALLOWED
			if($img_file_type != "jpg" && $img_file_type != "png" && $img_file_type != "jpeg" && $img_file_type != "gif" ) {
			?>
				<h2>Solo archivos JPG, JPEG, PNG &amp; GIF son permitidos.</h2>
				<button class="to_insert back">Regresar</button>
		<?php	
    			$upload_ok = 0;
			}
			// LAST CHECK
			if ($upload_ok == 0) {
				//el archivo no se subió 
			} else {
				// UPLOAD FILE
    			if (move_uploaded_file($_FILES["_img"]["tmp_name"], $target_file)) {
    				$check_done1 = true;
    				//SQL INSERT
 					$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtitulos,creditos,fecha,estado,municipioCiudad,lugar,serieNombre,quepregunta,unidad,tipo,espacio,poblacion,ecosistema,luz,camara,movimiento,sonido,sujeto,geometriaDominante,color,ritmo,nuevaIntensidad,impacto,temas,imagen) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$state','$city','$place','$serieName','$whichQuestion','$unity','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$color','$rythm','$newIntensity','$impact','$themes','$jaypigee')";
					if(!mysqli_query($dbconn,$insert)){
						die(mysqli_error($dbconn));
						echo "ERROR!";
						$check_done = false;
					}else{//end second if
						$check_done = true;
						?>
						<h2>Los datos se han guardado con éxito</h2>
						<button class="to_insert back">Regresar</button>
				<?php	
					}
    			} else {
			        echo "Error subiendo archivo.";
			        $check_done1 = false;
			    }
			}
		echo '</section>';
	}else{
		echo '<section id="success_screen">';
			echo "ERROR!!";
		echo '</section>';
	}//END IF ISSET && NOT EMPTY
?>
<?php include('footer.php'); ?>