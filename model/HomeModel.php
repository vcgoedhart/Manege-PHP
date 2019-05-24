<?php

function getAllReservations(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM reservation";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getReservation($id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM reservation WHERE id = :id";
	$query = $db->prepare($sql);

	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;

	return $query->fetch();
}

function createReservation($time, $horse_id, $customer_id){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO `reservation`(`customer_id`, `horse_id`, `start_time`) VALUES (:customer_id, :horse_id, :start_time)";
	$query = $db->prepare($sql);

	$query->bindParam(":start_time", $time);
	$query->bindParam(":horse_id", $horse_id);
	$query->bindParam(":customer_id", $customer_id);

	$query->execute();

	$db = null;
}

function deleteReservation($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM `reservation` WHERE id = :id";
	$query = $db->prepare($sql);
 
	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;
}

function updateReservation($data){
	$db = openDatabaseConnection();

	$sql = "UPDATE `reservation` SET `start_time`=:start_time,`horse_id`=:horse_id,`customer_id`=:customer_id WHERE id = :id";
	$query = $db->prepare($sql);

	$id = $data[0];
	$time = $data[1];
	$horse_id = $data[2];
	$customer_id = $data[3];

	$query->bindParam(":id", $id);
	$query->bindParam(":start_time", $time);
	$query->bindParam(":horse_id", $horse_id);
	$query->bindParam(":customer_id", $customer_id);

	$query->execute();

	$db = null;
}