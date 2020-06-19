<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="content-language" content="pt-br, en-US" />
	<meta http-equiv="imagetoolbar"	content="no" />
	<meta name="rating" content="General" />
	<meta name="robots" content="all" />
	
	<meta name="copyright" content="Lucas Caprio" />
	<meta name="author" content="Lucas Caprio (developer), Victor Matheus and William Costa (designers)" />
	<meta name="description" content="Duck Hunt - CSS Game" />
	<meta name="keywords" content="css game, duck hunt css, css3, jogo css" />

	<meta property="og:site_name" content="Duck Hunt - CSS Game" />
	<meta property="og:title" content="Duck Hunt - CSS Game" />
	<meta property="og:type" content="game" />
	<meta property="og:url"	content="https://lucascaprio.github.io/duck-hunt/" />
	<meta property="og:image" content="https://lucascaprio.github.io/duck-hunt/assets/img/facebook.jpg" />
	<meta property="og:description" content="Duck Hunt - CSS Game" />

	<title>Duck Hunt - CSS Game</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<audio autoplay="true" loop>
		<source src="assets/music/get_outside.mp3" type="audio/mpeg"></source>
		<source src="assets/music/get_outside.ogg" type="audio/ogg"></source>
	</audio>
	<div class="stage">
		<div class="awning"></div>
		<div class="sea fake"></div>
		<div class="sea sea-1"></div>
		<div class="sea sea-2"></div>
		<div class="sea sea-3"></div>
		<div class="stall"></div>

		<?php require_once('ducks.php'); ?>

		<div class="intro">
			<img src="assets/img/intro.svg">
		</div>

		<div class="game-over">
			<img src="assets/img/game-over-text.svg">
			<img src="assets/img/game-over-placa.svg">
		</div>

		<div class="points">
			<img src="assets/img/target.svg">
		</div>
	</div>
</body>
</html>