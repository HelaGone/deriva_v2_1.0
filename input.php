<?php include('connect_to_db.php'); ?>
<?php include('header.php'); ?>
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
						<select form="main_input_form" name="filetype" id="_ftype">
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
						<select form="main_input_form" name="unity"  id="_unity">
							<option value="">Selecciona una unidad</option>
							<option value="satelite">Satélite</option>
							<option value="capsula">Cápsula</option>
							<option value="base">Base</option>
							<option value="nexo">Nexo</option>
						</select>	
					</td>	

					<td>
						<label for="type">Tipo</label><br>
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
					</td>
					
					<td>
						<label for="space">Espacio</label><br>
						<select form="main_input_form" name="space"  id="_space">
							<option value="">Selecciona un espacio</option>
							<option value="interior">Interior</option>
							<option value="exterior">Exterior</option>
						</select>
					</td>

					<td>
						<label for="population">Población</label><br>
						<select form="main_input_form" name="population"  id="_population">
							<option value="">Selecciona una población</option>
							<option value="rural">Rural</option>
							<option value="urbana">Urbana</option>
						</select>
					</td>
					
					<td>
						<label for="ecosystem">Ecosistema</label><br>
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
					</td>
				</tr>

				<tr class="table_row">
					
					<td>
						<label for="light">Luz</label><br>
						<select form="main_input_form" name="light"  id="_light">
							<option value="">Selecciona una luz</option>
							<option value="dia">Día</option>
							<option value="tarde">Tarde</option>
							<option value="noche">Noche</option>
							<option value="artificial">Artificial</option>
						</select>
					</td>

					<td>
						<label for="movement">Movimiento</label><br>
						<select form="main_input_form" name="movement"  id="_movement">
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
						<select form="main_input_form" name="sound"  id="_sound">
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
						<select form="main_input_form" name="subject"  id="_subject">
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
					</td>
				</tr>


				<tr class="table_row">
					<td>
						<label for="rythm">Ritmo</label><br>
						<select form="main_input_form" name="rythm"  id="_rythm">
							<option value="">Selecciona un ritmo</option>
							<option value="rapido">Rápido</option>
							<option value="medio">Medio</option>
							<option value="lento">Lento</option>
							<option value="estatico">Estático</option>
						</select>
					</td>
					
					<td>
						<label for="newIntensity">Nueva intensidad</label><br>
						<input type="number" name="newIntensity" ><br id="_newIntensity">
					</td>

					<td>
						<label for="impact">Impacto</label><br>
						<select form="main_input_form" name="impact"  id="_impact">
							<option value="">Selecciona un impacto</option>
							<option value="personal">Personal</option>
							<option value="comunidad">Comunidad</option>
							<option value="general">General</option>
						</select>
					</td>
					
					<td>
						<label for="themes">Temas</label><br>
						<input type="text" name="themes"  id="_themes">
					</td>

					<td>
						<label for="credits">Créditos</label><br>
						<input type="text" name="credits" id="_credits">
					</td>
				</tr>

				<tr class="table_row">

					<td>
						<label for="place">Lugar</label><br>
						<input type="text" name="place" ><br id="_place">
					</td>

					<td>
						<label for="camera">Cámara</label><br>
						<select form="main_input_form" name="camera"  id="_camera">
							<option value="">Selecciona una cámara</option>
							<option value="dinamica">Dinámica</option>
							<option value="estatica">Estática</option>
						</select>
					</td>

					<td>
						<label for="color">Color</label><br>
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
		<button class="to_main back">Regresar</button>
	</section>
<?php
		if( isset($_POST['filename']) && !empty($_POST['filename'])) {
			
			$everything_ok = 0;
			$img_upload_ok = 1;
			$target_dir = "images/";
			$target_file = '';
			$target_file = $target_dir.basename($_FILES["_img"]["name"]);
			$img_file_type = pathinfo($target_file, PATHINFO_EXTENSION);

			$filename = ($_POST['filename'])? $_POST['filename']: NULL;
			$filetype = ($_POST['filetype'])? $_POST['filetype']: NULL;
			$newname = ($_POST['newname'])? $_POST['newname']: NULL;
			$author = ($_POST['author'])? $_POST['author']: NULL;
			$subtitles = ($_POST['subtitles'])? $_POST['subtitles']: NULL;
			$credits = ($_POST['credits'])? $_POST['credits']: NULL;
			$date = ($_POST['date'])? $_POST['date']: NULL;
			$state = ($_POST['state'])? $_POST['state']: NULL;
			$state = str_replace('-', ' ', $state);
			$city = ($_POST['city'])? $_POST['city']: NULL;
			$place = ($_POST['place'])? $_POST['place']: NULL;
			$serieName = ($_POST['serieName'])? $_POST['serieName']: NULL;
			$whichQuestion = ($_POST['whichQuestion'])? $_POST['whichQuestion']: NULL;
			$unity = ($_POST['unity'])? $_POST['unity']: NULL;
			$type = ($_POST['type'])? $_POST['type']: NULL;
			$space = ($_POST['space'])? $_POST['space']: NULL;
			$population = ($_POST['population'])? $_POST['population']: NULL;
			$ecosystem = ($_POST['ecosystem'])? $_POST['ecosystem']: NULL;
			$light = ($_POST['light'])? $_POST['light']: NULL;
			$camera = ($_POST['camera'])? $_POST['camera']: NULL;
			$movement = ($_POST['movement'])? $_POST['movement']: NULL;
			$sound = ($_POST['sound'])? $_POST['sound']: NULL;
			$subject = ($_POST['subject'])? $_POST['subject']: NULL;
			$geometry = ($_POST['geometry'])? $_POST['geometry']: NULL;
			$color = ($_POST['color'])? $_POST['color']: NULL;
			$rythm = ($_POST['rythm'])? $_POST['rythm']: NULL;
			$newIntensity = ($_POST['newIntensity'])? $_POST['newIntensity']: NULL;
			$impact = ($_POST['impact'])? $_POST['impact']: NULL;
			$themes = ($_POST['themes'])? $_POST['themes']: NULL;
			$jaypigee = ($target_file)?$target_file:NULL;


			//set local storage
			$_data = array(
				'filename' => $filename,
				'filetype'=>$filetype,
				'newname'=>$newname,
				'author'=>$author,
				'subtitles'=>$subtitles,
				'credits'=>$credits,
				'date'=>$date,
				'state'=>$state,
				'city'=>$city,
				'place'=>$place,
				'serieName'=>$serieName,
				'whichQuestion'=>$whichQuestion,
				'unity'=>$unity,
				'type'=>$type,
				'space'=>$space,
				'population'=>$population,
				'ecosystem'=>$ecosystem,
				'light'=>$light,
				'camera'=>$camera,
				'movement'=>$movement,
				'sound'=>$sound,
				'subject'=>$subject,
				'geometry'=>$geometry,
				'color'=>$color,
				'rythm'=>$rythm,
				'newIntensity'=>$newIntensity,
				'impact'=>$impact,
				'themes'=>$themes,
				'jaypigee'=>$jaypigee
				);
			
			$_data = json_encode($_data);
			print_r("<input type='hidden' value='".$_data."'name='the_data' id='data_store'>");
		// }	-	 Testing bracket

			//CHEK IF IS IMAGE
			$img_obj = $_FILES["_img"]["tmp_name"];
			$check_img = false;
			if($img_obj){
				$check_img = getimagesize($img_obj);
			}
			if($check_img !== false){
				$img_upload_ok = 1;
			}else{
				$img_upload_ok = 0;
			}
		?>
			<?php
				// FILE ALREADY EXISTS
				if (file_exists($target_file)) {$img_upload_ok = 0;}
				// FILE SIZE
				if ($_FILES["_img"]["size"] > 5000000) {$img_upload_ok = 0;}
				// FORMATS ALLOWED
				if($img_file_type != "jpg" && $img_file_type != "png" && $img_file_type != "jpeg" && $img_file_type != "gif" ) {$img_upload_ok = 0;}
				// LAST CHECK || UPLOAD WITH NO IMAGE
				if ($img_upload_ok == 0) { 
					// UPLOAD FILE & SQL INSERT
	 				$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtitulos,creditos,fecha,estado,municipioCiudad,lugar,serieNombre,quePregunta,unidad,tipo,espacio,poblacion,ecosistema,luz,camara,movimiento,sonido,sujeto,geometriaDominante,color,ritmo,nuevaIntensidad,impacto,temas,imagen) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$state','$city','$place','$serieName','$whichQuestion','$unity','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$color','$rythm','$newIntensity','$impact','$themes','$jaypigee')";
					if(!mysqli_query($dbconn,$insert)){
						$everything_ok = 0;
						die(mysqli_error($dbconn));
						echo "ERROR!";
					}else{
						$everything_ok = 1;
					}

					if($everything_ok == 1){
						echo '<div class="over_msg"><h2>Los datos se han guardado sin imagen.</h2></div>';
					}else{
						echo 'Fail';
					}


				} else {
					// UPLOAD FILE & SQL INSERT | UPLOAD WITH IMAGE
	 				$insert = "INSERT INTO materiales (nombreArchivo,tipoDeArchivo,nuevoNombre,autor,subtitulos,creditos,fecha,estado,municipioCiudad,lugar,serieNombre,quePregunta,unidad,tipo,espacio,poblacion,ecosistema,luz,camara,movimiento,sonido,sujeto,geometriaDominante,color,ritmo,nuevaIntensidad,impacto,temas,imagen) VALUES ('$filename','$filetype','$newname','$author','$subtitles','$credits','$date','$state','$city','$place','$serieName','$whichQuestion','$unity','$type','$space','$population','$ecosystem','$light','$camera','$movement','$sound','$subject','$geometry','$color','$rythm','$newIntensity','$impact','$themes','$jaypigee')";
					if(!mysqli_query($dbconn,$insert)){
						$everything_ok = 0;
						die(mysqli_error($dbconn));
						echo "ERROR!";
					}else{
						$everything_ok = 1;
						if(move_uploaded_file($_FILES["_img"]["tmp_name"], $target_file)){
							$everything_ok = 1;
						}else{
							$everything_ok = 0;
						}
					}
					if($everything_ok == 1){
						echo '<div class="over_msg"><h2>Los datos se han guardado con éxito</h2></div>';
					}else{
						echo 'Fail';
					}
				}
		}else{
				// echo '<div class="over_msg"><h2>ERROR!! Falta el nombre de archivo o la imagen</h2></div>';
		}//END IF ISSET && NOT EMPTY
?>	

<?php include('footer.php'); ?>


