<?php

function getAllPatients() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}


function createPatient() {


	$name = isset($_POST["name"]) ? $_POST['name'] : null;
	$species = isset($_POST["specie"]) ? $_POST['specie'] : null;
	$status = isset($_POST["status"])? $_POST['status'] : null;

	if (strlen($name) < 3 || strlen($species) == 0 || strlen($status) == 0) {
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient(name, species, status) VALUES(:name, :species, :status)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':name' => $name,
						 	':species' => $species,
						  	':status' => $status));

	$db = null;

	return true;


}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM patient WHERE id=:id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":id"=>$id));

	$db = null;

	return true;

}

function getPatient($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient WHERE id =:id";
	$query = $db->prepare($sql);
	$query->execute(array(":id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}