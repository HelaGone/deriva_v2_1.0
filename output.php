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
		$arr_queries = array('tipoDeArchivo'=>$file_type_query,'estado'=>$state_query,'unidad'=>$unity_query,'género'=>$gender_query,'tipo'=>$type_query,'espacio'=>$space_query,'población'=>$population_query,'ecosistema'=>$ecosystem_query,'luz'=>$light_query,'cámara'=>$camera_query,'movimiento'=>$movement_query,'sonido'=>$sound_query,'sujeto'=>$subject_query,'geometríaDominante'=>$geometry_query,'presenciaNumérica'=>$numericPresence_query,'color'=>$color_query,'ritmo'=>$rythm_query,'nuevaIntensidad'=>$intensity_query,'impacto'=>$impact_query,'temas'=>$theme_query,'acciones'=>$actions_query);
		
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
		$counting_index = 0;
		$el_query_part = '';
		foreach ($arr as $k => $v) {
			$v = str_replace('-', ' ', $v);
			$el_query_part .= $k." LIKE ". "'%".$v."%'" ." AND ";
			$counting_index++;
		}
		$elquery = "SELECT * FROM materiales WHERE ".$el_query_part;
		$elquery = substr($elquery, 0, -4);
		// echo $elquery;
		if( !($result = mysqli_query($dbconn, $elquery)) ){
			die('Error!');
		}else{	
			if( mysqli_num_rows( $result ) == 0 ):
				echo 'No hay resultados para esta consulta';
			else:
				$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
				?>
				<section class="nme_resultados main_section">
					<span class="txt lbl_res">Resultados para esta consulta: </span><span class="lbl_num_res"><?php echo count($result); ?></span><br>
					<section class="file_names_pool">
						<div>
							<div class="nmes">
							<?php
							$s_arr = array();
								foreach ($result as $key => $searched):
									array_push($s_arr, $searched);
									echo "<p>";
									echo $searched['nombreArchivo'];
									echo "</p>";
								endforeach;
								?>
							</div>
						</div>
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
							<?php 
								foreach ($s_arr as $key => $value) {
									echo "<tr>";
										foreach ($value as $k => $v) {
											echo "<td>".$v."</td>";
										}
									echo "</tr>";
									// echo "<tr><td>".$mks[0]."</td><td>".$mks[1]."</td></tr>";
								}
							?>
						</tbody>
					</table>
				</section>		
			<?php	
			endif;
		}

	else:

		echo ":";
	
	endif;

	?>
<?php include('footer.php'); ?>