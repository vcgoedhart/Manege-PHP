<?php

require(ROOT . "model/RaceModel.php");

function index(){
	// Haal de variabele op
	$races = getAllRaces();

	// Geef de view weer
	render("race/index", array('races' => $races));	
}

function create(){
	// Geef de view weer
	render("race/create");
}

function store(){
	// Voeg een item toe aan de database
	$name = $_POST['name'];
	$height = $_POST['height'];

	createRace($name, $height);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "race/index");
}

function delete($id){
	// Haal de variabele op
	$race = getRace($id);

	// Geef de view weer
	render("race/delete", array('race' => $race));
}

function destroy($id){
	// Verwijder een item uit de database
	deleteRace($id);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "race/index");
}

function edit($id){
	// Haal de variabele op
	$race = getRace($id);

	// Geef de view weer
	render("race/update", array('race' => $race));
}

function update($id){
	// Edit een item van de database
	$name = $_POST['name'];
	$height = $_POST['height'];

	$arr = [$id, $name, $height];
	updateRace($arr);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "race/index");
}	