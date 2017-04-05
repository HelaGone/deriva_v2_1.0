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
	}//end function

?>