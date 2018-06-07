<?php require('functions.php'); date_default_timezone_set('America/Mexico_City');?>
<!DOCTYPE html>
<html>
<head>
	<title>Deriva</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body class="<?php echo body_class(); ?>">
	<header id="main_header" class="back_btn">
		<?php 
			if($_SERVER['REQUEST_URI'] !== '/~cube/deriva/admin-area.php'): ?>
				<svg class="to_main back" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
				    <path d="M0 0h24v24H0z" fill="none"/>
				    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
				</svg>
				<!-- <button class="to_main back">Regresar</button> -->
		<?php 
			endif; ?>
	</header>
	<div id="main_container">