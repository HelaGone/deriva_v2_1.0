<section id="main_output_section" class="main_section">
	<section id="inner_output_section">
		<form id="filter_form" action="" method="post">

			<input type="number" name="the_file_id" placeholder="ID" min="0">

			<input type="text" name="the_file_name" placeholder="Nombre del archivo">

			<select form="filter_form" name="file_type" >
				<option value="">Tipo de archivo</option>
				<option value="objeto" >Objeto</option>
				<option value="video" >Video</option>
				<option value="imagen" >Imagen</option>
				<option value="sonido" >Sonido</option>
				<option value="texto" >Texto</option>
			</select>
			<select form="filter_form" name="state" >
				<option value="">Estado</option>
					<option value="aguas-calientes">Aguas Calientes</option>
					<option value="baja-california">Baja California</option>
					<option value="baja-california-sur">Baja California Sur</option>
					<option value="campeche">Campeche</option>
					<option value="chiapas">Chiapas</option>
					<option value="chihuahua">Chihuahua</option>
					<option value="coahuila">Coahuila</option>
					<option value="colima">Colima</option>
					<option value="distrito-federal">Distrito Federal</option>
					<option value="durango">Durango</option>
					<option value="estado-de-mexico">Estado de México</option>
					<option value="guanajuato">Guanajuato</option>
					<option value="guerrero">Guerrero</option>
					<option value="hidalgo">Hidalgo</option>
					<option value="jalisco">Jalisco</option>
					<option value="michoacan">Michoacán</option>
					<option value="morelos">Morelos</option>
					<option value="nayarit">Nayarit</option>
					<option value="nuevo-leon">Nuevo León</option>
					<option value="oaxaca">Oaxaca</option>
					<option value="puebla">Puebla</option>
					<option value="queretaro">Queretaro</option>
					<option value="quinatana-roo">Quinatana Roo</option>
					<option value="san-luis-potosi">San Luis Potosí</option>
					<option value="sinaloa">Sinaloa</option>
					<option value="sonora">Sonora</option>
					<option value="tabasco">Tabasco</option>
					<option value="tamaulipas">Tamaulipas</option>
					<option value="tlaxcala">Tlaxcala</option>
					<option value="veracruz">Veracruz</option>
					<option value="yucatan">Yucatán</option>
					<option value="zacatecas">Zacatecas</option>
			</select>
			<select form="filter_form" name="unity">
				<option value="">Unidad</option>
				<option value="satelite">Satélite</option>
				<option value="capsula">Cápsula</option>
				<option value="base">Base</option>
				<option value="nexo">Nexo</option>
			</select>
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
			<select form="filter_form" name="space" >
				<option value="">Espacio</option>
				<option value="interior">Interior</option>
				<option value="exterior">Exterior</option>
			</select>
			<select form="filter_form" name="population" >
				<option value="">Población</option>
				<option value="rural">Rural</option>
				<option value="urbano">Urbana</option>
			</select>
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
			<select form="filter_form" name="light" >
				<option value="">Luz</option>
				<option value="dia">Día</option>
				<option value="tarde">Tarde</option>
				<option value="noche">Noche</option>
				<option value="artificial">Artificial</option>
			</select>
			<select form="filter_form" name="camera" >
				<option value="">Cámara</option>
				<option value="dinamica">Dinámica</option>
				<option value="estatica">Estática</option>
			</select>
			<select form="filter_form" name="movement" >
				<option value="">Movimiento</option>
				<option value="arriba">Arriba</option>
				<option value="abajo">Abajo</option>
				<option value="izquierda">Izquierda</option>
				<option value="derecha">Derecha</option>
				<option value="adelante">Adelante</option>
				<option value="atras">Atras</option>
			</select>
			<select form="filter_form" name="sound" >
				<option value="">Sonido</option>
				<option value="ambiente">Ambiente</option>
				<option value="dialogo">Diálogo</option>
				<option value="accion">Acción</option>
				<option value="musica">Música</option>
				<option value="letra">Letra</option>
			</select>
			<select form="filter_form" name="subject" >
				<option value="">Sujeto</option>
				<option value="animal">Animal</option>
				<option value="humano">Humano</option>
				<option value="objeto">Objeto</option>
				<option value="espacio">Espacio</option>
				<option value="hombre">Hombre</option>
				<option value="mujer">Mujer</option>
			</select>
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
			<select form="filter_form" name="color" >
				<option value="">Color</option>
				<option value="verde">Verde</option>
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
			<select form="filter_form" name="rythm" >
				<option value="">Rítmo</option>
				<option value="rapido">Rápido</option>
				<option value="medio">Medio</option>
				<option value="lento">Lento</option>
				<option value="estatico">Estático</option>
			</select>
			<input type="number" name="intensity" placeholder="Intensidad" min="0" step="1" max="5">
			<select form="filter_form" name="impact" >
				<option value="">Impacto</option>
				<option value="personal">Personal</option>
				<option value="comunidad">Comunidad</option>
				<option value="general">General</option>
			</select>
			<textarea type="text" name="theme" placeholder="Tema"></textarea><br>
			<input type="submit" value="Filtrar" class="go">
			<input type="reset" value="Reset" class="reset">
		</form>
			<!-- <label for="get_all">Enlistar todas las entradas</label> -->
		<!-- <button type="submit" value="get_all" name="get_all" id="get_all">Todos los resultados</button><br> -->
	</section>

	<?php include('part-lightbox-form.php'); ?>

</section>

