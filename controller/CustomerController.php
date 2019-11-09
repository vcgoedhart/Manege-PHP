<?php

require(ROOT . "model/CustomerModel.php");
function index(){
	// Haal de variabele op
	$customers = getAllCustomers();

	// Geef de view weer
	render("customer/index", array('customers' => $customers));	
}

function create(){
	// Geef de view weer
	render("customer/create");
}

function store(){
	// Voeg een item toe aan de database
	$name = $_POST['name'];
	$adres = $_POST['adres'];
	$postal_code = $_POST['postal_code'];
	$town = $_POST['town'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	createCustomer($name, $adres, $postal_code, $town, $phone, $email);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "customer/index");
}

function delete($id){
	// Haal de variabele op
	$customer = getCustomer($id);

	// Geef de view weer
	render("customer/delete", array('customer' => $customer));
}

function destroy($id){
	// Verwijder een item uit de database
	deleteCustomer($id);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "customer/index");
}

function edit($id){
	// Haal de variabele op
	$customer = getCustomer($id);

	// Geef de view weer
	render("customer/update", array('customer' => $customer));
}

function update($id){
	// Edit een item van de database
	$name = $_POST['name'];
	$adres = $_POST['adres'];
	$postal_code = $_POST['postal_code'];
	$town = $_POST['town'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$arr = [$id, $name, $adres, $postal_code, $town, $phone, $email];
	updateCustomer($arr);

	// Redirect de pagina terug naar de index
	header("Location: " . URL . "customer/index");
}	