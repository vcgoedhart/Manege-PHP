<?php

require(ROOT . "model/HomeModel.php");
require(ROOT . "model/HorseModel.php");
require(ROOT . "model/raceModel.php");
require(ROOT . "model/CustomerModel.php");

function index(){
	$reservations = getAllReservations();

	render("home/index", array('reservations' => $reservations));	
}

function create(){
	// Geef de view weer
	render("home/create");
}


function store($time, $horse_id, $customer_id){
	// Voeg een item toe aan de database
	createReservation($time, $horse_id, $customer_id);

	// Redirect de pagina terug naar de index
	//header("Location: " . URL . "home/index");
}

function delete($id){
	// Haal de variabele op
	$reservation = getReservation($id);

	// Geef de view weer
	render("home/delete", array('reservation' => $reservation));
}

function destroy($id){
	// Verwijder een item uit de database
	deleteReservation($id);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "home/index");
}

function edit($id){
	// Haal de variabele op
	$reservation = getReservation($id);

	// Geef de view weer
	render("home/update", array('reservation' => $reservation));
}

function update($id){
	// Edit een item uit de database
	$time = $_POST['time'];
	$horse_id = $_POST['horse_id'];
	$customer_id = $_POST['customer_id'];

	$arr = [$id, $time, $horse_id, $customer_id];

	updateReservation($arr);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "home/index");
}