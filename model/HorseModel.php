<?php

function getAllHorses(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horse";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getHorse($id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horse WHERE id = :id";
	$query = $db->prepare($sql);

	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;

	return $query->fetch();
}

function createHorse($name, $age, $race_id){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO `horse`(`race_id`, `name`, `age`) VALUES (:race_id, :name, :age)";
	$query = $db->prepare($sql);

	$query->bindParam(":race_id", $race_id);
	$query->bindParam(":name", $name);
	$query->bindParam(":age", $age);

	$query->execute();

	$db = null;
}

function deleteHorse($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM `horse` WHERE id = :id";
	$query = $db->prepare($sql);
 
	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;
}

function updateHorse($data){
	$db = openDatabaseConnection();

	$sql = "UPDATE `horse` SET `name`=:name,`age`=:age,`race_id`=:race_id WHERE id = :id";
	$query = $db->prepare($sql);

	$id = $data[0];
	$name = $data[1];
	$age = $data[2];
	$race_id = $data[3];

	$query->bindParam(":id", $id);
	$query->bindParam(":name", $name);
	$query->bindParam(":age", $age);
	$query->bindParam(":race_id", $race_id);

	$query->execute();

	$db = null;
}
