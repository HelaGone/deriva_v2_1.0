<?php 
	include('header.php');
 	include('connect_to_db.php');
 	include('parts/part-outputform.php');

	$the_function = '';
	$the_search = '';
	$the_search_key = '';
	$file_type_query = '';

	if( $_SERVER['REQUEST_METHOD'] == 'POST' ):

		$file_ID = ($_POST['the_file_id']) ? $_POST['the_file_id'] : '';
		$file_name = ($_POST['the_file_name']) ? $_POST['the_file_name'] : '';
		$file_type_query = ($_POST['file_type']) ? $_POST['file_type']: '';
		$state_query = ($_POST['state']) ? $_POST['state']: '';
		$unity_query = ($_POST['unity']) ? $_POST['unity']: '';
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
		$color_query = ($_POST['color']) ? $_POST['color']: '';
		$rythm_query = ($_POST['rythm']) ? $_POST['rythm']: '';
		$intensity_query = ($_POST['intensity']) ? $_POST['intensity']: '';
		$impact_query = ($_POST['impact']) ? $_POST['impact']: '';
		$theme_query = ($_POST['theme']) ? $_POST['theme']: '';

		//save values to a general array
		$arr_queries = array(
			'id'=>$file_ID,
			'nombreArchivo'=>$file_name,
			'tipoDeArchivo'=>$file_type_query,'estado'=>$state_query,'unidad'=>$unity_query,'tipo'=>$type_query,'espacio'=>$space_query,'poblacion'=>$population_query,'ecosistema'=>$ecosystem_query,'luz'=>$light_query,'camara'=>$camera_query,'movimiento'=>$movement_query,'sonido'=>$sound_query,'sujeto'=>$subject_query,'geometriaDominante'=>$geometry_query,'color'=>$color_query,'ritmo'=>$rythm_query,'nuevaIntensidad'=>$intensity_query,'impacto'=>$impact_query,'temas'=>$theme_query);
		$arr_keys = array();
		$arr_values = array();
		$arr = array();

		foreach ($arr_queries as $key => $value):
			if($value == ''):
				//do nothing
			else:
				//términos de búsqueda
				$the_search = $value;
				$the_search_key = $key;

				//save to array
				array_push($arr_values, $value);
				array_push($arr_keys, $key);
			endif;
		endforeach;

		//save key-val pairs array
		$arr = array_combine($arr_keys, $arr_values);
		$counting_index = 0;
		$el_query_part = '';
		$byid = false;
		foreach ($arr as $k => $v){
			$v = str_replace('-', ' ', $v);
			if($k == 'id'):
				$byid = true;
				$el_query_part .= $k.'='.$v;
			else:
				$el_query_part .= $k." LIKE ". "'%".$v."%'" ." AND ";
			endif;
			$counting_index++;
		}

		$elquery = "SELECT * FROM materiales WHERE ".$el_query_part;

		if($byid == true):
			//do nothing
		else:
			//echo $elquery.'<br>'; 
			$elquery = substr($elquery, 0, -5);
			echo $elquery.'<br>';
		endif;		
		// echo $elquery;
		if( !($result = mysqli_query($dbconn, $elquery) ) ){
			echo $elquery.'<br>';
			die('Error en la consulta!');
		}else{
			if( mysqli_num_rows( $result ) == 0 ):
				echo 'No hay resultados para esta consulta';
			else:
				$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
				?>
				<section class="nme_resultados main_section">
					<span class="txt lbl_res">Resultados para <em><?php echo $the_search.': '; ?></em></span><span class="lbl_num_res"><?php echo count($result); ?></span><br>
					<?php echo $the_search; ?>
					<section class="file_names_pool">
						<div>
							<div class="nmes">
							<?php
							$str = '';
							$s_arr = array();
							$filenames = array();
								foreach ($result as $key => $searched):
									// print_r($key);
									array_push($s_arr, $searched);
									array_push($filenames, $searched['nombreArchivo']);
									echo "<p>";
										echo $searched['nombreArchivo'];
									echo "</p>";
								endforeach;
								?>
							</div>
						</div>
					</section>
					<section class="file_created">
						<?php 
							foreach ($filenames as $key => $name):
								$str .= $name.', ';
							endforeach;
							$search = $the_search;
							$search_key = $the_search_key;
							$filename_prefix = 'termino';
							$extension = '.txt';
							$date = date('Ymd_H-i-s');
							$the_filename = './files/'.$filename_prefix.'-'.$search_key.'-'.$search.'-'.$date.$extension;
							$str = substr($str, 0, -2);


							if($str != ''):
								if (file_put_contents($the_filename, $str) !== false):
								    echo 'Archivo creado: ' . basename($the_filename).'<br>';
								else:
								    echo 'Error al crear archivo: ' . basename($the_filename);
								endif;	
							endif;
						?>
					</section>
				</section>
				<section id="sec_res_table"> 
					<table class="result_table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>nNombre</th>
								<th>Autor</th>
								<th>Subs</th>
								<th>Créditos</th>
								<th>Fecha</th>
								<th>Estado</th>
								<th>Mun/Ciu</th>
								<th>Lugar</th>
								<th>Serie Nombre</th>
								<th>Preg</th>
								<th>Unidad</th>
								<th>Tipo</th>
								<th>Espacio</th>
								<th>Población</th>
								<th>Ecosistema</th>
								<th>Luz</th>
								<th>Cámara</th>
								<th>Movimiento</th>
								<th>Sonido</th>
								<th>Sujeto</th>
								<th>Geometría</th>
								<th>Color</th>
								<th>Ritmo</th>
								<th>nIntensidad</th>
								<th>Impacto</th>
								<th>Temas</th>
							</tr>
						</thead>
						<tbody>
							<form id="update_form" action="" method="post">
							<?php 
								$row_count = 0;
								$checkbox = '<input type="checkbox" name="selected-'.$key.'" >';

								foreach ($s_arr as $key => $value) {
									echo "<tr>";
										foreach ($value as $k => $v) {
											// if( $k != 'id' ):
											// 	echo "<td><input type='text' value='".$v."'></td>";
											// else:
												echo "<td>".$v."</td>";
											// endif;	
										}
									echo "</tr>";
									// echo "<tr><td>".$mks[0]."</td><td>".$mks[1]."</td></tr>";
								}
							?>
							</form>
						</tbody>
					</table>
					<button>Actualizar entradas</button>
				</section>		
			<?php	
			endif;
		}

	else:

		echo ":";
	
	endif;

	?>
<?php include('footer.php'); ?>