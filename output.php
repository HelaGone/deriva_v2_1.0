<?php include('header.php'); ?>
<?php include('connect_to_db.php'); ?>
<?php include('part-outputform.php'); ?>
<?php

	/*
	GOAL:
	 SELECT * FROM `materiales` WHERE `tipoDeArchivo` LIKE 'video' AND `estado` LIKE 'Sonora'
	*/

	$the_function = '';
	$the_search = '';
	$file_type_query = '';

	if( $_SERVER['REQUEST_METHOD'] == 'POST' ):

		$file_type_query = ($_POST['file_type']) ? $_POST['file_type']: '';
		$state_query = ($_POST['state']) ? $_POST['state']: '';
		$unity_query = ($_POST['unity']) ? $_POST['unity']: '';
		$gender_query = ($_POST['gender']) ? $_POST['gender']: '';
		$type_query = ($_POST['type']) ? $_POST['type']: '';
		$space_query = ($_POST['space']) ? $_POST['space']: '';
		$population_query = ($_POST['population']) ? $_POST['population']: '';
		$ecosystem_query = ($_POST['ecosystem']) ? $_POST['ecosystem']: '';
		$light_query = ($_POST['light']) ? $_POST['light']: '';
		$camera_query = ($_POST['camera']) ? $_POST['camera']: '';
		$movement_query = ($_POST['movement']) ? $_POST['movement']: '';
		$sound_query = ($_POST['sound']) ? $_POST['sound']: '';
		$subject_query = ($_POST['subject']) ? $_POST['subject']: '';
		$geometry_query = ($_POST['geometry']) ? $_POST['geometry']: '';
		$numericPresence_query = ($_POST['numericPresence']) ? $_POST['numericPresence']: '';
		$color_query = ($_POST['color']) ? $_POST['color']: '';
		$rythm_query = ($_POST['rythm']) ? $_POST['rythm']: '';
		$intensity_query = ($_POST['intensity']) ? $_POST['intensity']: '';
		$impact_query = ($_POST['impact']) ? $_POST['impact']: '';
		$theme_query = ($_POST['theme']) ? $_POST['theme']: '';
		$actions_query = ($_POST['actions']) ? $_POST['actions']: '';

		//save values to a general array
		$arr_queries = array('tipoDeArchivo'=>$file_type_query,'estado'=>$state_query,'unidad'=>$unity_query,'genero'=>$gender_query,'tipo'=>$type_query,'espacio'=>$space_query,'población'=>$population_query,'ecosistema'=>$ecosystem_query,'luz'=>$light_query,'cámara'=>$camera_query,'movimiento'=>$movement_query,'sonido'=>$sound_query,'sujeto'=>$subject_query,'geometríaDominante'=>$geometry_query,'presenciaNumérica'=>$numericPresence_query,'color'=>$color_query,'ritmo'=>$rythm_query,'nuevaIntensidad'=>$intensity_query,'impacto'=>$impact_query,'temas'=>$theme_query,'acciones'=>$actions_query);

		$arr_keys = array();
		$arr_values = array();
		$arr = array();
		foreach ($arr_queries as $key => $value):
			if($value == ''):
				//do nothing
			else:
				//save to array
				array_push($arr_values, $value);
				array_push($arr_keys, $key);
			endif;
		endforeach;

		//save key-val pairs array
		$arr = array_combine($arr_keys, $arr_values);

		// echo "<pre>";
		// 	print_r($arr);
		// echo "</pre>";
		$counting_index = 0;
		$el_query_part = '';
		foreach ($arr as $k => $v) {
			$el_query_part .= $k." LIKE ". "'%".$v."%'" ." AND ";
			$counting_index++;
		}
		$elquery = "SELECT * FROM materiales WHERE ".$el_query_part;
		$elquery = substr($elquery, 0, -4);
		// echo $elquery.";<br>";
		if( !($result = mysqli_query($dbconn, $elquery)) ){
			die('Error!');
		}else{	
			if( mysqli_num_rows( $result ) == 0 ){
				echo 'No hay resultados para esta consulta';
			}else{
				$result = mysqli_fetch_all($result, MYSQLI_ASSOC);

				echo '<h3 class="">Resultados para esta consulta: </h3><h2>'.count($result).'</h2><br>';

				foreach ($result as $key => $searched):
					echo $searched['nombreArchivo']."<br>";
				endforeach;


				// echo "<pre>";
				// 	print_r($result);
				// echo "</pre>";
			}
		}

	else:

		echo ":";
	
	endif;

	?>
<?php include('footer.php'); ?>