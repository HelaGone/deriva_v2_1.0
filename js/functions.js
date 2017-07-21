$(document).ready(function(){
	console.log("ready from functionsJs");


	$('.to_main').on('click', function(){
		console.log('click');
		window.location.href = 'admin-area.php';
	});
	$('.to_insert').on('click', function(){
		console.log('click');
		window.location.href = 'input.php';
	});

	var data = $('#data_store').val();
	if (typeof(Storage) !== 'undefined') {
    	localStorage.setItem('data', data);
	} else {
    	console.log('not supported');
	}


	// console.log('window load');
	var inStorage = localStorage.getItem('data');
	var filename = '';
	if(inStorage){
		console.log('hay datos');
		var data_json = JSON.parse(inStorage);
		console.log(data_json.whichQuestion);
		$('#_fname').val(data_json.filename);
		$('#_ftype').val(data_json.filetype);
		$('#_newname').val(data_json.newname);
		$('#_author').val(data_json.author);
		$('#_subtitles').val(data_json.subtitles);
		$('#_credits').val(data_json.credits);
		$('#_date').val(data_json.date);
		$('#_state').val(data_json.state);
		$('#_city').val(data_json.city);
		$('#_place').val(data_json.place);
		$('#_serieName').val(data_json.serieName);
		$('#_whichQuestion').val(data_json.whichQuestion);
		$('#_unity').val(data_json.unity);
		$('#_type').val(data_json.type);
		$('#_space').val(data_json.space);
		$('#_population').val(data_json.population);
		$('#_ecosystem').val(data_json.ecosystem);
		$('#_light').val(data_json.light);
		$('#_camera').val(data_json.camera);
		$('#_movement').val(data_json.movement);
		$('#_sound').val(data_json.sound);
		$('#_subject').val(data_json.subject);
		$('#_geometry').val(data_json.geometry);
		$('#_color').val(data_json.color);
		$('#_rythm').val(data_json.rythm);
		$('#_newIntensity').val(data_json.newIntensity);
		$('#_impact').val(data_json.impact);
		$('#_themes').val(data_json.themes);
		$('#_jaypige').val(data_json.jaypigee);
	}else{
		console.log('no hay datos');
	}


});//end READY