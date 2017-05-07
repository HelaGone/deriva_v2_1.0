<?php include('header.php'); ?>
	
	<section id="main_output_section">
		<section id="inner_output_section">
			<form id="filter_form" action="" method="post">

				<label for="file_type">Enlistar por tipo de Archivo</label>
				<select form="filter_form" name="file_type" >
					<option value="">Filtrar por:</option>
					<option value="objeto" >Objeto</option>
					<option value="video" >Video</option>
					<option value="imagen" >Imagen</option>
					<option value="sonido" >Sonido</option>
					<option value="texto" >Texto</option>
				</select><br>

				<label for="state">Enlistar por estado</label>
				<select form="filter_form" name="state" >
					<option value="">Selecciona un estado</option>
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
				</select><br>

				<label for="unity">Enlistar por unidad</label>
				<select form="filter_form" name="unity">
					<option value="">Selecciona una unidad</option>
					<option value="satelite">Satélite</option>
					<option value="capsula">Cápsula</option>
					<option value="base">Base</option>
					<option value="nexo">Nexo</option>
				</select><br>

				<label for="gender">Género</label>
				<select form="filter_form" name="gender" >
					<option value="">Selecciona un género</option>
					<option value="documental">Documental</option>
					<option value="ficcion">Ficción</option>
				</select><br>

				<label for="type">Tipo</label>
				<select form="filter_form" name="type" >
					<option value="">Selecciona un tipo</option>
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
				</select><br>

				<label for="space">Espacio</label>
				<select form="filter_form" name="space" >
					<option value="">Selecciona un espacio</option>
					<option value="interior">Interior</option>
					<option value="exterior">Exterior</option>
				</select><br>

				<label for="population">Población</label>
				<select form="filter_form" name="population" >
					<option value="">Selecciona una población</option>
					<option value="rural">Rural</option>
					<option value="urbana">Urbana</option>
				</select><br>

				<label for="ecosystem">Ecosistema</label>
				<select form="filter_form" name="ecosystem" >
					<option value="">Selecciona un ecosistema</option>
					<option value="bosque">Bosque</option>
					<option value="selva">Selva</option>
					<option value="desierto">Desierto</option>
					<option value="costa">Costa</option>
					<option value="pastizal">Pastizal</option>
					<option value="urbano">Urbano</option>
					<option value="montana">Montaña</option>
					<option value="malpais">Malpais</option>
					<option value="sierra">Sierra</option>
				</select><br>

				<label for="light">Luz</label>
				<select form="filter_form" name="light" >
					<option value="">Selecciona una luz</option>
					<option value="dia">Día</option>
					<option value="tarde">Tarde</option>
					<option value="noche">Noche</option>
					<option value="artificial">Artificial</option>
				</select><br>

				<label for="camera">Cámara</label>
				<select form="filter_form" name="camera" >
					<option value="">Selecciona una cámara</option>
					<option value="dinamica">Dinámica</option>
					<option value="estatica">Estática</option>
				</select><br>

				<label for="movement">Movimiento</label>
				<select form="filter_form" name="movement" >
					<option value="">Selecciona un movimiento</option>
					<option value="arriba">Arriba</option>
					<option value="abajo">Abajo</option>
					<option value="izquierda">Izquierda</option>
					<option value="derecha">Derecha</option>
					<option value="adelante">Adelante</option>
					<option value="atras">Atras</option>
				</select><br>

				<label for="sound">Sonido</label>
				<select form="filter_form" name="sound" >
					<option value="">Selecciona un sonido</option>
					<option value="ambiente">Ambiente</option>
					<option value="dialogo">Diálogo</option>
					<option value="accion">Acción</option>
					<option value="musica">Música</option>
					<option value="letra">Letra</option>
				</select><br>

				<label for="subject">Sujeto</label>
				<select form="filter_form" name="subject" >
					<option value="">Selecciona un sujeto</option>
					<option value="animal">Animal</option>
					<option value="humano">Humano</option>
					<option value="objeto">Objeto</option>
					<option value="espacio">Espacio</option>
					<option value="hombre">Hombre</option>
					<option value="mujer">Mujer</option>
				</select><br>

				<label for="geometry">Geometría dominante</label>
				<select form="filter_form" name="geometry" >
					<option value="">Selecciona una geometría</option>
					<option value="rectangulo">Rectángulo</option>
					<option value="triangulo">Triángulo</option>
					<option value="circulo">Círculo</option>
					<option value="horizontal">Horizontal</option>
					<option value="vertical">Vertical</option>
					<option value="fuga">Fuga</option>
					<option value="simetria">Simetría</option>
				</select><br>

				<label for="numericPresence">Presencia numérica</label>
				<select form="filter_form" name="numericPresence" >
					<option value="">Selecciona un número</option>
					<option value="uno">Uno</option>
					<option value="dos">Dos</option>
					<option value="tres">Tres</option>
					<option value="cuatro">Cuatro</option>
					<option value="cinco">Cinco</option>
					<option value="seis">Seis</option>
					<option value="siete">Siete</option>
					<option value="ocho">Ocho</option>
					<option value="nueve">Nueve</option>
				</select><br>

				<label for="color">Color</label>
				<select form="filter_form" name="color" >
					<option value="">Selecciona un color</option>
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
				</select><br>

				<label for="rythm">Ritmo</label>
				<select form="filter_form" name="rythm" >
					<option value="">Selecciona un ritmo</option>
					<option value="rapido">Rápido</option>
					<option value="medio">Medio</option>
					<option value="lento">Lento</option>
					<option value="estatico">Estático</option>
				</select><br>

				<label for="intensity">Intensidad</label>
				<input type="number" name="intensity"><br>

				<label for="impact">Impacto</label>
				<select form="filter_form" name="impact" >
					<option value="">Selecciona un impacto</option>
					<option value="personal">Personal</option>
					<option value="comunidad">Comunidad</option>
					<option value="general">General</option>
				</select><br>

				<label for="actions">Acciones</label>
				<select form="filter_form" name="actions" >
					<option value="">Selecciona una acción</option>
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
				<!-- <label for="get_all">Enlistar todas las entradas</label> -->
			<!-- <button type="submit" value="get_all" name="get_all" id="get_all">Todos los resultados</button><br> -->
		</section>
	</section>










<?php
	$the_function = '';

	if( (isset($_POST['get_all']) 	&& !empty($_POST['get_all'])) ){

		$the_function = de_get_all($dbconn);

	}else if( (isset($_POST['file_type']) && !empty($_POST['file_type'])) ){

		$the_function = de_get_by_file_type($dbconn, $_POST['file_type']);

	}else if( (isset($_POST['state']) && !empty($_POST['state'])) ){

		$state = str_replace('-', ' ', $_POST['state']);
		$the_function = de_get_by_state($dbconn, $state);

	}else if( (isset($_POST['unity']) && !empty($_POST['unity'])) ){

		$the_function = de_get_by_unity($dbconn, $_POST['unity']);

	}else if( (isset($_POST['gender']) && !empty($_POST['gender'])) ){

		$the_function = de_get_by_gender($dbconn, $_POST['gender']);

	}else if( (isset($_POST['type']) && !empty($_POST['type'])) ){

		$the_function = de_get_by_type($dbconn, $_POST['type']);

	}else if( (isset($_POST['space']) && !empty($_POST['space'])) ){

		$the_function = de_get_by_space($dbconn, $_POST['space']);

	}else if( (isset($_POST['popupation']) && !empty($_POST['popupation'])) ){

		$the_function = de_get_by_popupation($dbconn, $_POST['popupation']);

	}else if( (isset($_POST['ecosystem']) && !empty($_POST['ecosystem'])) ){

		$the_function = de_get_by_ecosystem($dbconn, $_POST['ecosystem']);

	}else if( (isset($_POST['light']) && !empty($_POST['light'])) ){

		$the_function = de_get_by_light($dbconn, $_POST['light']);

	}else if( (isset($_POST['camera']) && !empty($_POST['camera'])) ){

		$the_function = de_get_by_camera($dbconn, $_POST['camera']);

	}else if( (isset($_POST['movement']) && !empty($_POST['movement'])) ){

		$the_function = de_get_by_movement($dbconn, $_POST['movement']);

	}else if( (isset($_POST['sound']) && !empty($_POST['sound'])) ){

		$the_function = de_get_by_sound($dbconn, $_POST['sound']);

	}else if( (isset($_POST['subject']) && !empty($_POST['subject'])) ){

		$the_function = de_get_by_subject($dbconn, $_POST['subject']);

	}else if( (isset($_POST['geometry']) && !empty($_POST['geometry'])) ){

		$the_function = de_get_by_geometry($dbconn, $_POST['geometry']);

	}else if( (isset($_POST['numericPresence']) && !empty($_POST['numericPresence'])) ){

		$the_function = de_get_by_numericPresence($dbconn, $_POST['numericPresence']);

	}else if( (isset($_POST['color']) && !empty($_POST['color'])) ){

		$the_function = de_get_by_color($dbconn, $_POST['color']);

	}else if( (isset($_POST['rythm']) && !empty($_POST['rythm'])) ){

		$the_function = de_get_by_rythm($dbconn, $_POST['rythm']);

	}else if( (isset($_POST['intensity']) && !empty($_POST['intensity'])) ){

		$the_function = de_get_by_intensity($dbconn, $_POST['intensity']);

	}else if( (isset($_POST['impact']) && !empty($_POST['impact'])) ){

		$the_function = de_get_by_impact($dbconn, $_POST['impact']);

	}else if( (isset($_POST['actions']) && !empty($_POST['actions'])) ){

		$the_function = de_get_by_actions($dbconn, $_POST['actions']);

	}



		if(is_array($the_function) && !empty($the_function) ){
			echo "Hay <strong>".count($the_function)."</strong> resultados para la búsqueda";
		?>
			<div>
			<?php	
				foreach ($the_function as $key => $value):
					echo "<table>";
					foreach ($value as $k => $v):
					?>
						<tr>
							<td><?php echo $k; ?></td>
							<td><?php echo $v; ?></td>
						</tr>
				<?php
					endforeach;
					echo "</table>";
				endforeach;
				?>
			</div>
		<?php	
		}
	?>
<?php include('footer.php'); ?>