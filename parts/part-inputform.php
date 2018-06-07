<section id="input_form" class="main_section">
	<form id="main_input_form" method="post" action="" enctype="multipart/form-data">
		<table>
			<tr class="table_row">
				<td>
					<label for="filename">Nombre del archivo</label><br>
					<input type="text" name="filename" id="_fname">
				</td>

				<td>
					<label for="filetype">Tipo de Archivo</label><br>
					<input type="text" name="filetype" id="_ftype">
					<!--
					<select form="main_input_form" name="filetype" id="_ftype">
						<option value="">Selecciona uno</option>
						<option value="objeto" >Objeto</option>
						<option value="video" >Video</option>
						<option value="imagen" >Imagen</option>
						<option value="sonido" >Sonido</option>
						<option value="texto" >Texto</option>
					</select>
					-->
				</td>
				
				<td>
					<label for="newname">Nuevo Nombre</label><br>
					<input type="text" name="newname"  id="_newname">
				</td>
				
				<td>
					<label for="author">Autor</label><br>
					<input type="text" name="author" id="_author"><br>
				</td>

				<td>
					<label for="subtitles">Subtítulos</label><br>
					<input type="text" name="subtitles" id="_subtitles">
				</td>
			</tr>

			<tr class="table_row">
				<td>
					<label for="date">Fecha</label><br>
					<input type="date" name="date"  id="_date">
				</td>
				
				<td>
					<label for="state">Estado</label><br>
					<input type="text" name="state"  id="_state">
					<!--
					<select form="main_input_form" name="state"  id="_state">
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
					-->
				</td>

				<td>
					<label for="city">Municipio/Ciudad</label><br>
					<input type="text" name="city"  id="_city">
				</td>
				
				<td>
					<label for="serieName">Nombre de la serie</label><br>
					<input type="text" name="serieName" id="_serieName" value="">
				</td>
				
				<td>
					<label for="whichQuestion">Cuál pregunta</label><br>
					<input type="number" name="whichQuestion" min="1" max="30" id="_whichQuestion">
				</td>
			</tr>

			<tr class="table_row">

				<td>
					<label for="unity">Unidad</label><br>
					<input type="text" name="unity"  id="_unity">
					<!--
					<select form="main_input_form" name="unity"  id="_unity">
						<option value="">Selecciona una unidad</option>
						<option value="satelite">Satélite</option>
						<option value="capsula">Cápsula</option>
						<option value="base">Base</option>
						<option value="nexo">Nexo</option>
					</select>	
					-->
				</td>	

				<td>
					<label for="type">Tipo</label><br>
					<input type="text" name="type"  id="_type">
					<!--
					<select form="main_input_form" name="type"  id="_type">
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
				-->
				</td>
				
				<td>
					<label for="space">Espacio</label><br>
					<input type="text" name="space"  id="_space">
					<!--
					<select form="main_input_form" name="space"  id="_space">
						<option value="">Selecciona un espacio</option>
						<option value="interior">Interior</option>
						<option value="exterior">Exterior</option>
					</select>
					-->
				</td>

				<td>
					<label for="population">Población</label><br>
					<input type="text" name="population"  id="_population">
					<!--
					<select form="main_input_form" name="population"  id="_population">
						<option value="">Selecciona una población</option>
						<option value="rural">Rural</option>
						<option value="urbana">Urbana</option>
					</select>
					-->
				</td>
				
				<td>
					<label for="ecosystem">Ecosistema</label><br>
					<input type="text" name="ecosystem"  id="_ecosystem">
					<!--
					<select form="main_input_form" name="ecosystem"  id="_ecosystem">
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
					-->
				</td>
			</tr>

			<tr class="table_row">
				
				<td>
					<label for="light">Luz</label><br>
					<input type="text" name="light"  id="_light">
					<!--
					<select form="main_input_form" name="light"  id="_light">
						<option value="">Selecciona una luz</option>
						<option value="dia">Día</option>
						<option value="tarde">Tarde</option>
						<option value="noche">Noche</option>
						<option value="artificial">Artificial</option>
					</select>
					-->
				</td>

				<td>
					<label for="movement">Movimiento</label><br>
					<!-- <input type="text" name="movement"  id="_movement"> -->

					<select form="main_input_form" name="movement"  id="_movement">
						<option value="">Selecciona uno</option>
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
					<input type="text" name="sound"  id="_sound">
					<!--
					<select form="main_input_form" name="sound"  id="_sound">
						<option value="">Selecciona un sonido</option>
						<option value="ambiente">Ambiente</option>
						<option value="dialogo">Diálogo</option>
						<option value="accion">Acción</option>
						<option value="musica">Música</option>
						<option value="letra">Letra</option>
					</select>
					-->	
				</td>
				
				<td>
					<label for="subject">Sujeto</label><br>
					<input type="text" name="subject"  id="_subject">
					<!--
					<select form="main_input_form" name="subject"  id="_subject">
						<option value="">Selecciona un sujeto</option>
						<option value="animal">Animal</option>
						<option value="humano">Humano</option>
						<option value="objeto">Objeto</option>
						<option value="espacio">Espacio</option>
						<option value="hombre">Hombre</option>
						<option value="mujer">Mujer</option>
					</select>
					-->
				</td>
				
				<td>
					<label for="geometry">Geometría dominante</label><br>
					<input type="text" name="geometry"  id="_geometry">
					<!--
					<select form="main_input_form" name="geometry"  id="_geometry">
						<option value="">Selecciona una geometría</option>
						<option value="rectangulo">Rectángulo</option>
						<option value="triangulo">Triángulo</option>
						<option value="circulo">Círculo</option>
						<option value="horizontal">Horizontal</option>
						<option value="vertical">Vertical</option>
						<option value="fuga">Fuga</option>
						<option value="simetria">Simetría</option>
					</select>
					-->
				</td>
			</tr>


			<tr class="table_row">
				<td>
					<label for="rythm">Ritmo</label><br>
					<input type="text" name="rythm"  id="_rythm">
					<!--
					<select form="main_input_form" name="rythm"  id="_rythm">
						<option value="">Selecciona un ritmo</option>
						<option value="rapido">Rápido</option>
						<option value="medio">Medio</option>
						<option value="lento">Lento</option>
						<option value="estatico">Estático</option>
					</select>
					-->
				</td>
				
				<td>
					<label for="newIntensity">Nueva intensidad</label><br>
					<input type="number" name="newIntensity" id="_newIntensity" min="0" max="10" step="1">
				</td>

				<td>
					<label for="impact">Impacto</label><br>
					<input type="text" name="impact"  id="_impact">
					<!--
					<select form="main_input_form" name="impact"  id="_impact">
						<option value="">Selecciona un impacto</option>
						<option value="personal">Personal</option>
						<option value="comunidad">Comunidad</option>
						<option value="general">General</option>
					</select>
					-->
				</td>
				
				<td>
					<label for="themes">Temas</label><br>
					<textarea type="text" name="themes"  id="_themes"></textarea>
				</td>

				<td>
					<label for="credits">Créditos</label><br>
					<input type="text" name="credits" id="_credits">
				</td>
			</tr>

			<tr class="table_row">

				<td>
					<label for="place">Lugar</label><br>
					<input id="_place" type="text" name="place" ><br>
				</td>

				<td>
					<label for="camera">Cámara</label><br>
					<input type="text" name="camera"  id="_camera">
					<!--
					<select form="main_input_form" name="camera"  id="_camera">
						<option value="">Selecciona una cámara</option>
						<option value="dinamica">Dinámica</option>
						<option value="estatica">Estática</option>
					</select>
					-->
				</td>

				<td>
					<label for="color">Color</label><br>
					<input type="text" name="color"  id="_color">
					<!--
					<select form="main_input_form" name="color"  id="_color">
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
					-->
				</td>

				<td>
					<input type="file" name="_img" id="_img">
				</td>
			</tr>

			<tr class="table_row controls">
				<td></td>
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
	<!-- <button class="to_main back">Regresar</button> -->
</section>