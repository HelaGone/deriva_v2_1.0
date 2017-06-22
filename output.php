<?php include('header.php'); ?>
<?php include('connect_to_db.php'); ?>
	
	<section id="main_output_section" class="main_section">
		<section id="inner_output_section">
			<form id="filter_form" action="" method="post">

				<!-- <label for="file_type">Enlistar por tipo de Archivo</label> -->
				<select form="filter_form" name="file_type" >
					<option value="">Tipo de archivo</option>
					<option value="objeto" >Objeto</option>
					<option value="video" >Video</option>
					<option value="imagen" >Imagen</option>
					<option value="sonido" >Sonido</option>
					<option value="texto" >Texto</option>
				</select>

				<!-- <label for="state">Enlistar por estado</label> -->
				<select form="filter_form" name="state" >
					<option value="">Estado</option>
					<option value="baja-california">Baja California</option>
					<option value="baja-california-sur">Baja California Sur</option>
					<option value="sonora">Sonora</option>
					<option value="sinaloa">Sinaloa</option>
					<option value="nayarit">Nayarit</option>
					<option value="jalisco">Jalisco</option>
					<option value="guerrero">Guerrero</option>
					<option value="michoacan">Michoacán</option>
					<option value="oaxaca">Oaxaca</option>
					<option value="chiapas">Chiapas</option>
					<option value="quinatana-roo">Quinatana Roo</option>
					<option value="yucatan">Yucatán</option>
					<option value="campeche">Campeche</option>
					<option value="tabasco">Tabasco</option>
					<option value="veracruz">Veracruz</option>
					<option value="tamaulipas">Tamaulipas</option>
					<option value="nuevo-leon">Nuevo León</option>
					<option value="coahuila">Coahuila</option>
					<option value="chihuahua">Chihuahua</option>
					<option value="durango">Durango</option>
					<option value="san-luis-potosi">San Luis Potosí</option>
					<option value="zacatecas">Zacatecas</option>
					<option value="aguas-calientes">Aguas Calientes</option>
					<option value="guanajuato">Guanajuato</option>
					<option value="queretaro">Queretaro</option>
					<option value="colima">Colima</option>
					<option value="puebla">Puebla</option>
					<option value="hidalgo">Hidalgo</option>
					<option value="morelos">Morelos</option>
					<option value="estado-de-mexico">Estado de México</option>
					<option value="distrito-federal">Distrito Federal</option>
				</select>

				<!-- <label for="unity">Enlistar por unidad</label> -->
				<select form="filter_form" name="unity">
					<option value="">Unidad</option>
					<option value="satelite">Satélite</option>
					<option value="capsula">Cápsula</option>
					<option value="base">Base</option>
					<option value="nexo">Nexo</option>
				</select>

				<!-- <label for="gender">Género</label> -->
				<select form="filter_form" name="gender" >
					<option value="">Género</option>
					<option value="documental">Documental</option>
					<option value="ficcion">Ficción</option>
				</select>

				<!-- <label for="type">Tipo</label> -->
				<select form="filter_form" name="type" >
					<option value="">Tipo</option>
					<option value="pregunta">Pregunta</option>
					<option value="testimonio">Testimonio</option>
					<option value="documental">Documental</option>
					<option value="pieza">Pieza</option>
					<option value="ficcion">Ficción</option>
					<option value="retrato">Retrato</option>
					<option value="paisaje">Paisaje</option>
					<option value="textura">Textura</option>
					<option value="cancion">Canción</option>
					<option value="detalle">Detalle</option>
				</select>

				<!-- <label for="space">Espacio</label> -->
				<select form="filter_form" name="space" >
					<option value="">Espacio</option>
					<option value="interior">Interior</option>
					<option value="exterior">Exterior</option>
				</select>

				<!-- <label for="population">Población</label> -->
				<select form="filter_form" name="population" >
					<option value="">Población</option>
					<option value="rural">Rural</option>
					<option value="urbano">Urbana</option>
				</select>

				<!-- <label for="ecosystem">Ecosistema</label> -->
				<select form="filter_form" name="ecosystem" >
					<option value="">Ecosistema</option>
					<option value="bosque">Bosque</option>
					<option value="selva">Selva</option>
					<option value="desierto">Desierto</option>
					<option value="costa">Costa</option>
					<option value="pastizal">Pastizal</option>
					<option value="urbano">Urbano</option>
					<option value="montana">Montaña</option>
					<option value="malpais">Malpais</option>
					<option value="sierra">Sierra</option>
				</select>

				<!-- <label for="light">Luz</label> -->
				<select form="filter_form" name="light" >
					<option value="">Luz</option>
					<option value="dia">Día</option>
					<option value="tarde">Tarde</option>
					<option value="noche">Noche</option>
					<option value="artificial">Artificial</option>
				</select>

				<!-- <label for="camera">Cámara</label> -->
				<select form="filter_form" name="camera" >
					<option value="">Cámara</option>
					<option value="dinamica">Dinámica</option>
					<option value="estatica">Estática</option>
				</select>

				<!-- <label for="movement">Movimiento</label> -->
				<select form="filter_form" name="movement" >
					<option value="">Movimiento</option>
					<option value="arriba">Arriba</option>
					<option value="abajo">Abajo</option>
					<option value="izquierda">Izquierda</option>
					<option value="derecha">Derecha</option>
					<option value="adelante">Adelante</option>
					<option value="atras">Atras</option>
				</select>

				<!-- <label for="sound">Sonido</label> -->
				<select form="filter_form" name="sound" >
					<option value="">Sonido</option>
					<option value="ambiente">Ambiente</option>
					<option value="dialogo">Diálogo</option>
					<option value="accion">Acción</option>
					<option value="musica">Música</option>
					<option value="letra">Letra</option>
				</select>

				<!-- <label for="subject">Sujeto</label> -->
				<select form="filter_form" name="subject" >
					<option value="">Sujeto</option>
					<option value="animal">Animal</option>
					<option value="humano">Humano</option>
					<option value="objeto">Objeto</option>
					<option value="espacio">Espacio</option>
					<option value="hombre">Hombre</option>
					<option value="mujer">Mujer</option>
				</select>

				<!-- <label for="geometry">Geometría dominante</label> -->
				<select form="filter_form" name="geometry" >
					<option value="">Geometría</option>
					<option value="rectangulo">Rectángulo</option>
					<option value="triangulo">Triángulo</option>
					<option value="circulo">Círculo</option>
					<option value="horizontal">Horizontal</option>
					<option value="vertical">Vertical</option>
					<option value="fuga">Fuga</option>
					<option value="simetria">Simetría</option>
				</select>

				<!-- <label for="numericPresence">Presencia numérica</label> -->
				<select form="filter_form" name="numericPresence" >
					<option value="">Número</option>
					<option value="uno">Uno</option>
					<option value="dos">Dos</option>
					<option value="tres">Tres</option>
					<option value="cuatro">Cuatro</option>
					<option value="cinco">Cinco</option>
					<option value="seis">Seis</option>
					<option value="siete">Siete</option>
					<option value="ocho">Ocho</option>
					<option value="nueve">Nueve</option>
				</select>

				<!-- <label for="color">Color</label> -->
				<select form="filter_form" name="color" >
					<option value="">Color</option>
					<option value="verde">Vede</option>
					<option value="rojo">Rojo</option>
					<option value="negro">Negro</option>
					<option value="azul">Azúl</option>
					<option value="blanco">Blacno</option>
					<option value="amarillo">Amarillo</option>
					<option value="rosa">Rosa</option>
					<option value="morado">Morado</option>
					<option value="gris">Gris</option>
					<option value="cafe">Café</option>
				</select>

				<!-- <label for="rythm">Ritmo</label> -->
				<select form="filter_form" name="rythm" >
					<option value="">Rítmo</option>
					<option value="rapido">Rápido</option>
					<option value="medio">Medio</option>
					<option value="lento">Lento</option>
					<option value="estatico">Estático</option>
				</select>

				<!-- <label for="intensity">Intensidad</label> -->
				<input type="number" name="intensity" placeholder="Intensidad">

				<!-- <label for="impact">Impacto</label> -->
				<select form="filter_form" name="impact" >
					<option value="">Impacto</option>
					<option value="personal">Personal</option>
					<option value="comunidad">Comunidad</option>
					<option value="general">General</option>
				</select>

				<input type="text" name="theme" placeholder="Tema">

				<!-- <label for="actions">Acciones</label> -->
				<select form="filter_form" name="actions" >
					<option value="">Acción</option>
					<option value="cavar">Cavar</option>
					<option value="cocinar">Cocinar</option>
					<option value="reciclar">Reciclar</option>
					<option value="linchar">Linchar</option>
					<option value="disparar">Disparar</option>
					<option value="vigilar">Vigilar</option>
					<option value="celebrar">Celebrar</option>
					<option value="cortar">Cortar</option>
					<option value="golpear">Golpear</option>
					<option value="bailar">Bailar</option>
					<option value="cabalgar">Cabalgar</option>
					<option value="matar">Matar</option>
					<option value="comer">Comer</option>
					<option value="acechar">Acechar</option>
					<option value="manejar">Manejar</option>
					<option value="encender">Encender</option>
					<option value="cargar">Cargar</option>
					<option value="amenazar">Amenazar</option>
					<option value="pintar">Pintar</option>
					<option value="limpiar">Limpiar</option>
					<option value="regar">Regar</option>
					<option value="musica">Música</option>
					<option value="caminar">Caminar</option>
					<option value="montar">Montar</option>
					<option value="desvestir">Desvestir</option>
					<option value="posar">Posar</option>
					<option value="degollar">Degollar</option>
				</select><br>

				<input type="submit" value="Filtrar">
				<input type="reset" value="Reset">
			</form>

				<button class="to_main">
					Regrasar al panel principal
				</button>
				
				<!-- <label for="get_all">Enlistar todas las entradas</label> -->
			<!-- <button type="submit" value="get_all" name="get_all" id="get_all">Todos los resultados</button><br> -->
		</section>
	</section>

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
		$arr_queries = array(
				'tipoDeArchivo'=>$file_type_query,
				'estado'=>$state_query,
				'unidad'=>$unity_query,
				'genero'=>$gender_query,
				'tipo'=>$type_query,
				'espacio'=>$space_query,
				'población'=>$population_query,
				'ecosistema'=>$ecosystem_query,
				'luz'=>$light_query,
				'cámara'=>$camera_query,
				'movimiento'=>$movement_query,
				'sonido'=>$sound_query,
				'sujeto'=>$subject_query,
				'geometríaDominante'=>$geometry_query,
				'presenciaNumérica'=>$numericPresence_query,
				'color'=>$color_query,
				'ritmo'=>$rythm_query,
				'nuevaIntensidad'=>$intensity_query,
				'impacto'=>$impact_query,
				'temas'=>$theme_query,
				'acciones'=>$actions_query);

		// echo "<pre>";
		// 	print_r($arr_queries);
		// echo "</pre>";


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
		echo $elquery.";";

	else:

		echo "no se ha mandado la forma";
	
	endif;
	/*

	// echo ($file_type_query."<br>".$state_query."<br>".$unity_query."<br>".$gender_query."<br>".$type_query."<br>".$space_query."<br>".$population_query."<br>".$ecosystem_query."<br>".$light_query."<br>".$camera_query."<br>".$movement_query."<br>".$sound_query."<br>".$subject_query."<br>".$geometry_query."<br>".$numericPresence_query."<br>".$color_query."<br>".$rythm_query."<br>".$intensity_query."<br>".$impact_query."<br>".$theme_query."<br>".$actions_query."<br>");

	if($file_type_query != '' ){
		$column = "tipoDeArchivo";
		echo $column.": ".$file_type_query;
	}else{
		echo "<br>empty";
	}
*/
	?>
<?php include('footer.php'); ?>