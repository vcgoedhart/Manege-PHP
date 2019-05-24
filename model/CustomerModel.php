<?php

function getAllCustomers() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM customer";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getCustomer($id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM customer WHERE id = :id";
	$query = $db->prepare($sql);

	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;

	return $query->fetch();
}

function createCustomer($name, $adres, $postal_code, $town, $phone, $email){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO `customer`(`name`, `adres`, `postal_code`, `town`, `phone`, `email`) VALUES (:name, :adres, :postal_code, :town, :phone, :email)";
	$query = $db->prepare($sql);

	$query->bindParam(":name", $name);
	$query->bindParam(":adres", $adres);
	$query->bindParam(":postal_code", $postal_code);
	$query->bindParam(":town", $town);
	$query->bindParam(":phone", $phone);
	$query->bindParam(":email", $email);

	$query->execute();

	$db = null;
}

function deleteCustomer($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM `customer` WHERE id = :id";
	$query = $db->prepare($sql);
 
	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;
}

function updateCustomer($data){
	$db = openDatabaseConnection();

	$sql = "UPDATE `customer` SET `name`=:name,`adres`=:adres,`postal_code`=:postal_code,`town`=:town,`phone`=:phone,`email`=:email WHERE id = :id";
	$query = $db->prepare($sql);

	$id = $data[0];
	$name = $data[1];
	$adres = $data[2];
	$postal_code = $data[3];
	$town = $data[4];
	$phone = $data[5];
	$email = $data[6];


	$query->bindParam(":id", $id);
	$query->bindParam(":name", $name);
	$query->bindParam(":adres", $adres);
	$query->bindParam(":postal_code", $postal_code);
	$query->bindParam(":town", $town);
	$query->bindParam(":phone", $phone);
	$query->bindParam(":email", $email);

	$query->execute();

	$db = null;
}