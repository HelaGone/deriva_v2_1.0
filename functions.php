<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL | E_STRICT); //DECLARA DEBUG, COMENTAR ESTA LINEA CUANDO TERMINE DE HACE DEBUG

	/*DEBUG DE UNA VARIABLE DADA*/
	function debug_out($input) {
	    if (defined("DEBUG")) {
	        print_r($input);
	        die;
	    }
	}

	/*SISTEMA DE FUNCIONES ESENCIALES PARA LA EJECUCIÓN DEL PROGRAMA*/
	function de_get_all($dbconn){
		
		$query = 'SELECT * FROM materiales';
		
		if( !($result = mysqli_query($dbconn, $query)) ){
			die('Error!');
		}else{	
			if( mysqli_num_rows( $result )==0 ){
				echo 'No Rows Returned';
			}else{
				$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
				return $result;
			}
		}
	}//end function de_get_all


	/*get all by_type function*/
	function de_get_by_file_type($dbconn, $type){
		$query_by_file_type = 'SELECT * FROM materiales WHERE tipoDeArchivo = "'.$type.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_file_type) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_state function*/
	function de_get_by_state($dbconn, $state){
		$query_by_state = 'SELECT * FROM materiales WHERE estado = "'.$state.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_state) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_unity function*/
	function de_get_by_unity($dbconn, $unity){
		$query_by_unity = 'SELECT * FROM materiales WHERE unidad = "'.$unity.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_unity) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_type function*/
	function de_get_by_type($dbconn, $type){
		$query_by_type = 'SELECT * FROM materiales WHERE tipo = "'.$type.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_type) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_space function*/
	function de_get_by_space($dbconn, $space){
		$query_by_space = 'SELECT * FROM materiales WHERE espacio = "'.$space.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_space) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_population function*/
	function de_get_by_population($dbconn, $population){
		$query_by_population = 'SELECT * FROM materiales WHERE población = "'.$population.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_population) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_ecosystem function*/
	function de_get_by_ecosystem($dbconn, $ecosystem){
		$query_by_ecosystem = 'SELECT * FROM materiales WHERE ecosistema = "'.$ecosystem.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_ecosystem) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_light function*/
	function de_get_by_light($dbconn, $light){
		$query_by_light = 'SELECT * FROM materiales WHERE luz = "'.$light.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_light) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_camera function*/
	function de_get_by_camera($dbconn, $camera){
		$query_by_camera = 'SELECT * FROM materiales WHERE cámara = "'.$camera.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_camera) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_movement function*/
	function de_get_by_movement($dbconn, $movement){
		$query_by_movement = 'SELECT * FROM materiales WHERE movimiento = "'.$movement.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_movement) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_sound function*/
	function de_get_by_sound($dbconn, $sound){
		$query_by_sound = 'SELECT * FROM materiales WHERE sonido = "'.$sound.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_sound) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_geometry function*/
	function de_get_by_geometry($dbconn, $geometry){
		$query_by_geometry = 'SELECT * FROM materiales WHERE geometríaDominante = "'.$geometry.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_geometry) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_numericPresence function*/
	function de_get_by_numericPresence($dbconn, $numericPresence){
		$query_by_numericPresence = 'SELECT * FROM materiales WHERE presenciaNumérica = "'.$numericPresence.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_numericPresence) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_color function*/
	function de_get_by_color($dbconn, $color){
		$query_by_color = 'SELECT * FROM materiales WHERE color = "'.$color.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_color) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_rythm function*/
	function de_get_by_rythm($dbconn, $rythm){
		$query_by_rythm = 'SELECT * FROM materiales WHERE ritmo = "'.$rythm.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_rythm) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_intensity function*/
	function de_get_by_intensity($dbconn, $intensity){
		$query_by_intensity = 'SELECT * FROM materiales WHERE nuevaIntensidad = "'.$intensity.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_intensity) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_impact function*/
	function de_get_by_impact($dbconn, $impact){
		$query_by_impact = 'SELECT * FROM materiales WHERE impacto = "'.$impact.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_impact) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}

	/*get all by_actions function*/
	function de_get_by_actions($dbconn, $actions){
		$query_by_actions = 'SELECT * FROM materiales WHERE acciones = "'.$actions.'" ';

		if(!$result = mysqli_query($dbconn, $query_by_actions) ){
			die(mysqli_error($dbconn));
		}else{
			$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $result;
		}
	}






?>