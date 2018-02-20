$(document).ready(function(){
	console.log("ready from functionsJs");

	$('.to_main').on('click', function(){window.location.href = 'admin-area.php';});
	$('.to_insert').on('click', function(){window.location.href = 'input.php';});


	if( $('body').hasClass('input') ){
		console.log('input file');

		//STORE DATA IN LOCALSTORAGE
		var data = $('#data_store').val();
		var isdata = false;

		if( data == undefined){
			isdata = false;
			console.log('no hay data');
		}else{
			if(typeof(Storage) !== 'undefined'){
				console.log( data+' <<< set item' );
				isdata = true;
		    	localStorage.setItem('data', data);
			}else{
				isdata = false;
		    	console.log('not supported');
		    	alert('Por favor actualiza tu browser');
			}
		}	


		if(isdata) {
			console.log('ya hay datos');
			var data_json = JSON.parse(localStorage.getItem('data'));
			console.log(data_json);
			//console.log(data_json.whichQuestion);
			$('#_fname').val(data_json.filename);
			console.log(data_json.filename);
			$('#_ftype').val(data_json.filetype);
			console.log(data_json.filetype);
			$('#_newname').val(data_json.newname);
			console.log(data_json.newname);
			$('#_author').val(data_json.author);
			console.log(data_json.author);
			$('#_subtitles').val(data_json.subtitles);
			console.log(data_json.subtitles);
			$('#_credits').val(data_json.credits);
			console.log(data_json.credits);
			$('#_date').val(data_json.date);
			console.log(data_json.date);
			$('#_state').val(data_json.state);
			console.log(data_json.state);
			$('#_city').val(data_json.city);
			console.log(data_json.city);
			$('#_place').val(data_json.place);
			console.log(data_json.place);
			//console.log($('#_place').val(data_json.place));
			$('#_serieName').val(data_json.serieName);
			console.log(data_json.serieName);
			$('#_whichQuestion').val(data_json.whichQuestion);
			console.log(data_json.whichQuestion);
			$('#_unity').val(data_json.unity);
			console.log(data_json.unity);
			$('#_type').val(data_json.type);
			console.log(data_json.type);
			$('#_space').val(data_json.space);
			console.log(data_json.space);
			$('#_population').val(data_json.population);
			console.log(data_json.population);
			$('#_ecosystem').val(data_json.ecosystem);
			console.log(data_json.ecosystem);
			$('#_light').val(data_json.light);
			console.log(data_json.light);
			$('#_camera').val(data_json.camera);
			console.log(data_json.camera);
			$('#_movement').val(data_json.movement);
			console.log(data_json.movement);
			$('#_sound').val(data_json.sound);
			console.log(data_json.sound);
			$('#_subject').val(data_json.subject);
			console.log(data_json.subject);
			$('#_geometry').val(data_json.geometry);
			console.log(data_json.geometry);
			$('#_color').val(data_json.color);
			console.log(data_json.color);
			$('#_rythm').val(data_json.rythm);
			console.log(data_json.rythm);
			$('#_newIntensity').val(data_json.newIntensity);
			console.log(data_json.newIntensity);
			$('#_impact').val(data_json.impact);
			console.log(data_json.impact);
			$('#_themes').val(data_json.themes);
			console.log(data_json.themes);
			$('#_jaypige').val(data_json.jaypigee);
			console.log(data_json.jaypigee);
		}else{
			isdata = false;
			console.log('no se salvaron datos previos');
		}			
	}//INPUT FORM


	/**
	 * UPDATE LIGHTBOX
	*/
	var elem_count = 0;
	$('.btn_update').on('click',function(){
		var values_arr = [];
		console.log(values_arr+' <<<<< vacío ');
		var row_id = "#"+$(this).attr('data-row');
		console.log(row_id);

		$('#id_in'+elem_count).val('');
		$('#id_in'+elem_count).attr('');


		$('#lightbox_form').show('fast');

		$.each( $(row_id).find('td') , function(){
			 
			if( $(this).text() != 'update' && !$(this).hasClass('imagen') ) {
				values_arr.push( $(this).text() );
				// console.log('>>> '+$(this).text()+' <<<');
			}else{
				// console.log("aqui entra");
				if( $(this).hasClass('imagen') ){
					console.log($(this).find('img').attr('src'));
					values_arr.push( $(this).find('img').attr('src') );
				}
			}
		});

		console.log(values_arr+' <<<<<');

		$.each(values_arr, function(k, v){

			$('#id_in'+elem_count).val(v).blur();

			//$('#id_in'+elem_count).attr('placeholder',v);

			console.log(k+' : '+v);
			elem_count++;
		});
	});//END UPATE CLICK

	  
	$("#id_in0").prop("disabled", true);
	  
    $('#update_form').on('submit', function (e) {

    	$("#id_in0").prop("disabled", false);

  		e.preventDefault();

		var request = $.ajax({
			url: "update_row.php",
			method: "POST",
			data: $('#update_form').serialize()
		});

		//console.log($('#update_form').serialize());
		 
		request.done(function( msg ) {
			
			$('#lightbox_form').hide('fast');
			$("#id_in0").prop("disabled", true);
			location.reload();

			alert("done: "+ msg );


		});
		 
		request.fail(function( jqXHR, textStatus ) {
			alert( "Failed to update: " + textStatus );
			$("#id_in0").prop("disabled", true);
		});
	});

	$('#btn_close').click( function(){
		$('#main_output_section').find('#lightbox_form').hide('slow');
		location.reload();		
	});

















});//end READY