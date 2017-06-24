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
	

});//end READY