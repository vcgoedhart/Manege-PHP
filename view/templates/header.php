<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Medewerker</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 	
		<link rel="stylesheet" href="<?= URL ?>/css/style.css">
	</head>
	<body>	    
	<nav class="navbar navbar-expand-md navbar-dark u bg-dark sticky-top">
	    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="container">
	        <div class="collapse navbar-collapse" id="collapse_target">
	            <ul class="navbar-nav">
	                <li><a href="<?= URL ?>home/index" class="nav-link">Overzicht</a></li>
	                <li><a href="<?= URL ?>race/index" class="nav-link">Rassen</a></li>
	                <li><a href="<?= URL ?>horse/index" class="nav-link">Paarden</a></li>
	                <li><a href="<?= URL ?>customer/index" class="nav-link">Klanten</a></li>
	            </ul>
	        </div>
	    </div>
	</nav>