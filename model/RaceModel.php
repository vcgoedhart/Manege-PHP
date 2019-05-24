<?php

function getAllRaces(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM race";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getRace($id){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM race WHERE id = :id";
	$query = $db->prepare($sql);

	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;

	return $query->fetch();
}

function createRace($name, $height){
	$db = openDatabaseConnection();

	$sql = "INSERT INTO `race`(`name`, `height`) VALUES (:name, :height)";
	$query = $db->prepare($sql);
 
	$query->bindParam(":name", $name);
	$query->bindParam(":height", $height);

	$query->execute();

	$db = null;
}

function deleteRace($id){
	$db = openDatabaseConnection();

	$sql = "DELETE FROM `race` WHERE id = :id";
	$query = $db->prepare($sql);
 
	$query->bindParam(":id", $id);

	$query->execute();

	$db = null;
}

function updateRace($data){
	$db = openDatabaseConnection();

	$sql = "UPDATE `race` SET `name`=:name,`height`=:height WHERE id = :id";
	$query = $db->prepare($sql);

	$id = $data[0];
	$name = $data[1];
	$height = $data[2];

	$query->bindParam(":id", $id);
	$query->bindParam(":name", $name);
	$query->bindParam(":height", $height);

	$query->execute();

	$db = null;
}