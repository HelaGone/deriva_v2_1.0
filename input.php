<?php include('header.php'); ?>
	<section id="input_form" class="main_section">
		<form id="main_input_form" method="post" action="process-insert.php" enctype="multipart/form-data">
			<table>
				<tr class="table_row">
					<td>
						<label for="filename">Nombre del archivo</label><br>
						<input type="text" name="filename" >
					</td>

					<td>
						<label for="filetype">Tipo de Archivo</label><br>
						<select form="main_input_form" name="filetype" >
							<option value="">Selecciona uno</option>
							<option value="objeto" >Objeto</option>
							<option value="video" >Video</option>
							<option value="imagen" >Imagen</option>
							<option value="sonido" >Sonido</option>
							<option value="texto" >Texto</option>
						</select>
					</td>
					
					<td>
						<label for="newname">Nuevo Nombre</label><br>
						<input type="text" name="newname" >
					</td>
					
					<td>
						<label for="author">Autor</label><br>
						<input type="text" name="author" ><br>
					</td>

					<td>
						<label for="subtitles">Subtítulos</label><br>
						<input type="number" name="subtitles" min="0" max="1">
					</td>
				</tr>

				<tr class="table_row">
					<td>
						<label for="date">Fecha</label><br>
						<input type="date" name="date" >
					</td>
					
					<td>
						<label for="state">Estado</label><br>
						<select form="main_input_form" name="state" >
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
						</select>
					</td>

					<td>
						<label for="city">Municipio/Ciudad</label><br>
						<input type="text" name="city" >
					</td>
					
					<td>
						<label for="serieName">Nombre de la serie</label><br>
						<input type="text" name="serieName" >
					</td>
					
					<td>
						<label for="whichQuestion">Cuál pregunta</label><br>
						<input type="number" name="whichQuestion" min="1" max="30">
					</td>
				</tr>

				<tr class="table_row">

					<td>
						<label for="unity">Unidad</label><br>
						<select form="main_input_form" name="unity" >
							<option value="">Selecciona una unidad</option>
							<option value="satelite">Satélite</option>
							<option value="capsula">Cápsula</option>
							<option value="base">Base</option>
							<option value="nexo">Nexo</option>
						</select>	
					</td>	

					<td>
						<label for="type">Tipo</label><br>
						<select form="main_input_form" name="type" >
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
						</select>
					</td>
					
					<td>
						<label for="space">Espacio</label><br>
						<select form="main_input_form" name="space" >
							<option value="">Selecciona un espacio</option>
							<option value="interior">Interior</option>
							<option value="exterior">Exterior</option>
						</select>
					</td>

					<td>
						<label for="population">Población</label><br>
						<select form="main_input_form" name="population" >
							<option value="">Selecciona una población</option>
							<option value="rural">Rural</option>
							<option value="urbana">Urbana</option>
						</select>
					</td>
					
					<td>
						<label for="ecosystem">Ecosistema</label><br>
						<select form="main_input_form" name="ecosystem" >
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
						</select>
					</td>
				</tr>

				<tr class="table_row">
					
					<td>
						<label for="light">Luz</label><br>
						<select form="main_input_form" name="light" >
							<option value="">Selecciona una luz</option>
							<option value="dia">Día</option>
							<option value="tarde">Tarde</option>
							<option value="noche">Noche</option>
							<option value="artificial">Artificial</option>
						</select>
					</td>

					<td>
						<label for="movement">Movimiento</label><br>
						<select form="main_input_form" name="movement" >
							<option value="">Selecciona un movimiento</option>
							<option value="arriba">Arriba</option>
							<option value="abajo">Abajo</option>
							<option value="izquierda">Izquierda</option>
							<option value="derecha">Derecha</option>
							<option value="adelante">Adelante</option>
							<option value="atras">Atras</option>
						</select>
					</td>
					
					<td>
						<label for="sound">Sonido</label><br>
						<select form="main_input_form" name="sound" >
							<option value="">Selecciona un sonido</option>
							<option value="ambiente">Ambiente</option>
							<option value="dialogo">Diálogo</option>
							<option value="accion">Acción</option>
							<option value="musica">Música</option>
							<option value="letra">Letra</option>
						</select>
					</td>
					
					<td>
						<label for="subject">Sujeto</label><br>
						<select form="main_input_form" name="subject" >
							<option value="">Selecciona un sujeto</option>
							<option value="animal">Animal</option>
							<option value="humano">Humano</option>
							<option value="objeto">Objeto</option>
							<option value="espacio">Espacio</option>
							<option value="hombre">Hombre</option>
							<option value="mujer">Mujer</option>
						</select>
					</td>
					
					<td>
						<label for="geometry">Geometría dominante</label><br>
						<select form="main_input_form" name="geometry" >
							<option value="">Selecciona una geometría</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
							<option value="circulo">Círculo</option>
							<option value="horizontal">Horizontal</option>
							<option value="vertical">Vertical</option>
							<option value="fuga">Fuga</option>
							<option value="simetria">Simetría</option>
						</select>
					</td>
				</tr>


				<tr class="table_row">
					<td>
						<label for="rythm">Ritmo</label><br>
						<select form="main_input_form" name="rythm" >
							<option value="">Selecciona un ritmo</option>
							<option value="rapido">Rápido</option>
							<option value="medio">Medio</option>
							<option value="lento">Lento</option>
							<option value="estatico">Estático</option>
						</select>
					</td>
					
					<td>
						<label for="newIntensity">Nnueva intensidad</label><br>
						<input type="number" name="newIntensity" ><br>
					</td>

					<td>
						<label for="impact">Impacto</label><br>
						<select form="main_input_form" name="impact" >
							<option value="">Selecciona un impacto</option>
							<option value="personal">Personal</option>
							<option value="comunidad">Comunidad</option>
							<option value="general">General</option>
						</select>
					</td>
					
					<td>
						<label for="themes">Temas</label><br>
						<input type="text" name="themes" >
					</td>

					<td>
						<label for="credits">Créditos</label><br>
						<input type="number" name="credits" min="0" max="1">
					</td>
				</tr>

				<tr class="table_row">

					<td>
						<label for="place">Lugar</label><br>
						<input type="text" name="place" ><br>
					</td>

					<td>
						<label for="gender">Género</label><br>
						<select form="main_input_form" name="gender" >
							<option value="">Selecciona un género</option>
							<option value="documental">Documental</option>
							<option value="ficcion">Ficción</option>
						</select>
					</td>

					<td>
						<label for="camera">Cámara</label><br>
						<select form="main_input_form" name="camera" >
							<option value="">Selecciona una cámara</option>
							<option value="dinamica">Dinámica</option>
							<option value="estatica">Estática</option>
						</select>
					</td>

					<td>
						<label for="color">Color</label><br>
						<select form="main_input_form" name="color" >
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
						</select>
					</td>

				</tr>

				<tr class="table_row controls">
					<td>
						<input type="file" name="_img" id="_img">
					</td>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="" value="Guardar" class="go">
					</td>
					<td>
						<input type="reset" name="" value="Reset" class="reset">
					</td>
				</tr>
			</table>
		</form>
		<button class="to_main back">Regresar</button>
	</section>
<?php include('footer.php'); ?>