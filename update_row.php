<?php 
	require('connect_to_db.php');

	if( isset($_POST['upd_filename']) && !empty($_POST['upd_filename']) ):
		$upd_id = (isset($_POST['upd_id'])) ? $_POST['upd_id'] : 'null';
		$upd_filename = (isset($_POST['upd_filename'])) ? $_POST['upd_filename'] : 'null';
		$upd_filetype = (isset($_POST['upd_filetype'])) ? $_POST['upd_filetype'] : 'null';
		$upd_newname = (isset($_POST['upd_newname'])) ? $_POST['upd_newname'] : 'null';
		$upd_author = (isset($_POST['upd_author'])) ? $_POST['upd_author'] : 'null';
		$upd_subtitles = (isset($_POST['upd_subtitles'])) ? $_POST['upd_subtitles'] : 'null';
		$upd_credits = (isset($_POST['upd_credits'])) ? $_POST['upd_credits'] : 'null';
		$upd_date = (isset($_POST['upd_date'])) ? $_POST['upd_date'] : 'null';
		$upd_state = (isset($_POST['upd_state'])) ? $_POST['upd_state'] : 'null';
		$upd_city = (isset($_POST['upd_city'])) ? $_POST['upd_city'] : 'null';
		$upd_place = (isset($_POST['upd_place'])) ? $_POST['upd_place'] : 'null';
		$upd_seriename = (isset($_POST['upd_seriename'])) ? $_POST['upd_seriename'] : 'null';
		$upd_question = (isset($_POST['upd_question'])) ? $_POST['upd_question'] : 'null';
		$upd_unity = (isset($_POST['upd_unity'])) ? $_POST['upd_unity'] : 'null';
		$upd_type = (isset($_POST['upd_type'])) ? $_POST['upd_type'] : 'null';
		$upd_space = (isset($_POST['upd_space'])) ? $_POST['upd_space'] : 'null';
		$upd_population = (isset($_POST['upd_population'])) ? $_POST['upd_population'] : 'null';
		$upd_ecosystem = (isset($_POST['upd_ecosystem'])) ? $_POST['upd_ecosystem'] : 'null';
		$upd_light = (isset($_POST['upd_light'])) ? $_POST['upd_light'] : 'null';
		$upd_camera = (isset($_POST['upd_camera'])) ? $_POST['upd_camera'] : 'null';
		$upd_movement = (isset($_POST['upd_movement'])) ? $_POST['upd_movement'] : 'null';
		$upd_sound = (isset($_POST['upd_sound'])) ? $_POST['upd_sound'] : 'null';
		$upd_subject = (isset($_POST['upd_subject'])) ? $_POST['upd_subject'] : 'null';
		$upd_geometry = (isset($_POST['upd_geometry'])) ? $_POST['upd_geometry'] : 'null';
		$upd_color = (isset($_POST['upd_color'])) ? $_POST['upd_color'] : 'null';
		$upd_rythm = (isset($_POST['upd_rythm'])) ? $_POST['upd_rythm'] : 'null';
		$upd_intensity = (isset($_POST['upd_intensity'])) ? $_POST['upd_intensity'] : 'null';
		$upd_impact = (isset($_POST['upd_impact'])) ? $_POST['upd_impact'] : 'null';
		$upd_themes = (isset($_POST['upd_themes'])) ? $_POST['upd_themes'] : 'null';
		$upd_image = (isset($_POST['upd_image'])) ? $_POST['upd_image'] : 'null';


	// $update = "UPDATE materiales SET (	nombreArchivo = '$upd_filename', tipoDeArchivo = '$upd_filetype',nuevoNombre = '$upd_newname', autor = '$upd_author',subtitulos = '$upd_subtitles',creditos = '$upd_credits',fecha = '$upd_date',estado = '$upd_state',municipioCiudad = '$upd_city',lugar = '$upd_place',serieNombre = '$upd_seriename',quePregunta = '$upd_question',unidad = '$upd_unity',tipo = '$upd_type',espacio = '$upd_space',poblacion = '$upd_population',ecosistema = '$upd_ecosystem',luz = '$upd_light',camara = '$upd_camera',movimiento = '$upd_movement',sonido = '$upd_sound',sujeto = '$upd_subject',geometriaDominante = '$upd_geometry',color = '$upd_color',ritmo = '$upd_rythm',nuevaIntensidad = '$upd_intensity',impacto = '$upd_impact',temas = '$upd_themes',imagen = '$upd_image') WHERE id = $upd_id";
	$update = "UPDATE materiales 
				SET
					nuevoNombre = '$upd_newname',
					autor = '$upd_author',
					subtitulos = '$upd_subtitles',
					creditos = '$upd_credits',
					fecha = '$upd_date',
					estado = '$upd_state',
					municipioCiudad = '$upd_city',
					lugar = '$upd_place',
					serieNombre = '$upd_seriename',
					quePregunta = '$upd_question',
					unidad = '$upd_unity',
					tipo = '$upd_type',
					espacio = '$upd_space',
					poblacion = '$upd_population',
					ecosistema = '$upd_ecosystem',
					luz = '$upd_light',
					camara = '$upd_camera',
					movimiento = '$upd_movement',
					sonido = '$upd_sound',
					sujeto = '$upd_subject',
					geometriaDominante = '$upd_geometry',
					color = '$upd_color',
					ritmo = '$upd_rythm',
					nuevaIntensidad = '$upd_intensity',
					impacto = '$upd_impact',
					temas = '$upd_themes', 
					imagen = '$upd_image' WHERE id = $upd_id";		
	if(!mysqli_query($dbconn,$update)){
		$everything_ok = false;
		die(mysqli_error($dbconn));
		echo "ERROR!";
	}else{
		$everything_ok = true;
	}


	endif;

?>