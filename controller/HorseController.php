<?php

require(ROOT . "model/HorseModel.php");
require(ROOT . "model/RaceModel.php");

function index(){
	// Haal de variabele op
	$horses = getAllHorses();

	// Geef de view weer
	render("horse/index", array('horses' => $horses));	
}

function create(){
	// Geef de view weer
	render("horse/create");
}

function store(){
	// Voeg een item toe aan de database
	$name = $_POST['name'];
	$age = $_POST['age'];
	$race_id = $_POST['race'];

	createHorse($name, $age, $race_id);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "horse/index");
}

function delete($id){
	// Haal de variabele op
	$horse = getHorse($id);

	// Geef de view weer
	render("horse/delete", array('horse' => $horse));
}

function destroy($id){
	// Verwijder een item uit de database
	deleteHorse($id);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "horse/index");
}

function edit($id){
	// Haal de variabele op
	$horse = getHorse($id);

	// Geef de view weer
	render("horse/update", array('horse' => $horse));
}

function update($id){
	// Edit een item uit de database
	$name = $_POST['name'];
	$age = $_POST['age'];
	$race_id = $_POST['race'];


	$arr = [$id, $name, $age, $race_id];
	updateHorse($arr);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "horse/index");

}