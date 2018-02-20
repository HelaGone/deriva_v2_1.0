<?php 
	include('connect_to_db.php'); 
	include('header.php'); 
	include('parts/part-inputform.php');

	if( isset($_POST['filename']) && !empty($_POST['filename'])) {
		
		$everything_ok = false;
		$img_upload_ok = false;
		$target_dir = "images/";
		$target_file = '';
		$target_file = $target_dir.basename($_FILES["_img"]["name"]);
		$img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);

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

		//echo $movement;

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
		
		$_data = json_encode($_data);

		// echo "<pre>";
		// 	print_r($_data);
		// echo "</pre>";
		print_r("<input type='hidden' value='".$_data."'name='the_data' id='data_store'>");
	//}//	-	 Testing bracket

			//CHEK IF IS IMAGE
			$img_obj = $_FILES["_img"]["tmp_name"];
			$check_img = false;
			if($img_obj){
				$check_img = getimagesize($img_obj);
			}
			if($check_img !== false){
				$img_upload_ok = true;
			}else{
				$img_upload_ok = false;
			}
		?>
			<?php
				// FILE ALREADY EXISTS
				if (file_exists($target_file)) {$img_upload_ok = false;}
				// FILE SIZE
				if ($_FILES["_img"]["size"] > 5000000) {$img_upload_ok = false;}
				// FORMATS ALLOWED
				if($img_file_type != "jpg" && $img_file_type != "png" && $img_file_type != "jpeg" && $img_file_type != "gif" ) {$img_upload_ok = false;}

				/** 
				 * LAST CHECK : UPLOAD WITH NO IMAGE
				 */
				if (!$img_upload_ok) {
					// UPLOAD FILE & SQL INSERT
	 				$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtitulos,creditos,fecha,estado,municipioCiudad,lugar,serieNombre,quePregunta,unidad,tipo,espacio,poblacion,ecosistema,luz,camara,movimiento,sonido,sujeto,geometriaDominante,color,ritmo,nuevaIntensidad,impacto,temas,imagen) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$state','$city','$place','$serieName','$whichQuestion','$unity','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$color','$rythm','$newIntensity','$impact','$themes','$jaypigee')";
					if(!mysqli_query($dbconn,$insert)){
						$everything_ok = false;
						die(mysqli_error($dbconn));
						echo "ERROR!";
					}else{
						$everything_ok = true;
					}

					if($everything_ok && !$img_upload_ok){
						$everything_ok = false;
						echo '<div class="over_msg"><h2>Los datos se han guardado sin imagen.</h2></div>';
					}else{
						echo 'Fail';
					}
				} else {
					
					/** 
					 * LAST CHECK : UPLOAD FILE & SQL INSERT && UPLOAD WITH IMAGE
					 */
	 				$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtitulos,creditos,fecha,estado,municipioCiudad,lugar,serieNombre,quePregunta,unidad,tipo,espacio,poblacion,ecosistema,luz,camara,movimiento,sonido,sujeto,geometriaDominante,color,ritmo,nuevaIntensidad,impacto,temas,imagen) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$state','$city','$place','$serieName','$whichQuestion','$unity','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$color','$rythm','$newIntensity','$impact','$themes','$jaypigee')";
					if(!mysqli_query($dbconn,$insert)){
						$everything_ok = false;
						die(mysqli_error($dbconn));
						echo "ERROR!";
					}else{
						$everything_ok = true;
						if(move_uploaded_file($_FILES["_img"]["tmp_name"], $target_file)){
							$everything_ok = true;
						}else{
							$everything_ok = false;
						}
					}
					if($everything_ok && $img_upload_ok){
						$everything_ok = false;
						echo '<div class="over_msg"><h2>Los datos se han guardado con éxito</h2></div>';
					}else{
						echo 'Fail';
					}
				}
		}//END IF ISSET && NOT EMPTY
?>	




<?php include('footer.php'); ?>