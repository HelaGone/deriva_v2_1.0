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
			
			echo 'Success!';

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









?>