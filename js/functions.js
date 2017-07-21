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
		console.log(data_json.whichQuestion.replace(' ', '-'));
		$('#_fname').val(data_json.filename.replace(' ', '-'));
		$('#_ftype').val(data_json.filetype.replace(' ', '-'));
		$('#_newname').val(data_json.newname.replace(' ', '-'));
		$('#_author').val(data_json.author.replace(' ', '-'));
		$('#_subtitles').val(data_json.subtitles.replace(' ', '-'));
		$('#_credits').val(data_json.credits.replace(' ', '-'));
		$('#_date').val(data_json.date.replace(' ', '-'));
		$('#_state').val(data_json.state.replace(' ', '-'));
		$('#_city').val(data_json.city.replace(' ', '-'));
		$('#_place').val(data_json.place.replace(' ', '-'));
		$('#_serieName').val(data_json.serieName.replace(' ', '-'));
		$('#_whichQuestion').val(data_json.whichQuestion.replace(' ', '-'));
		$('#_unity').val(data_json.unity.replace(' ', '-'));
		$('#_type').val(data_json.type.replace(' ', '-'));
		$('#_space').val(data_json.space.replace(' ', '-'));
		$('#_population').val(data_json.population.replace(' ', '-'));
		$('#_ecosystem').val(data_json.ecosystem.replace(' ', '-'));
		$('#_light').val(data_json.light.replace(' ', '-'));
		$('#_camera').val(data_json.camera.replace(' ', '-'));
		$('#_movement').val(data_json.movement.replace(' ', '-'));
		$('#_sound').val(data_json.sound.replace(' ', '-'));
		$('#_subject').val(data_json.subject.replace(' ', '-'));
		$('#_geometry').val(data_json.geometry.replace(' ', '-'));
		$('#_color').val(data_json.color.replace(' ', '-'));
		$('#_rythm').val(data_json.rythm.replace(' ', '-'));
		$('#_newIntensity').val(data_json.newIntensity.replace(' ', '-'));
		$('#_impact').val(data_json.impact.replace(' ', '-'));
		$('#_themes').val(data_json.themes.replace(' ', '-'));
		$('#_jaypige').val(data_json.jaypigee.replace(' ', '-'));
	}else{
		console.log('no hay datos');
	}


});//end READY