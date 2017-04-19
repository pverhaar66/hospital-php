<?php

function getAllPatients() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getPatient($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients WHERE patient_id =:patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(":patient_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}


function createPatient() {


	$patient_name = isset($_POST["patient_name"]) ? $_POST['patient_name'] : null;
	$species_id = isset($_POST["specie_id"]) ? $_POST['specie_id'] : null;
	$client_id = isset($_POST["client_id"]) ? $_POST['client_id'] : null;
	$patient_status = isset($_POST["patient_status"])? $_POST['patient_status'] : null;

	if (strlen($patient_name) == 0 || strlen($patient_status) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES(:patient_name, :species_id, :client_id, :patient_status)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':patient_name' => $patient_name,
						 	':species_id' => $species_id,
						 	':client_id' => $client_id,
						  	':patient_status' => $patient_status));

	$db = null;

	return true;


}
function editThisPatient(){

	$name = isset($_POST["name"]) ? $_POST['name'] : null;
	$species = isset($_POST["specie"]) ? $_POST['specie'] : null;
	$status = isset($_POST["status"])? $_POST['status'] : null;
	$id = isset($_POST["id"])? $_POST['id'] : null;	


	if (strlen($name) < 3 || strlen($species) == 0 || strlen($status) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET name = :name, species = :species, status = :status  WHERE id=:id";
	
	$stmt = $db->prepare($sql);
	$stmt->execute(array(
					":name" => $name,
					":species" => $species,	
					":status" => $status,	
					":id" => $id));

	$db = null;

	return true;
}

function deletePatients($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM patients WHERE id=:id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":id"=>$id));

	$db = null;

	return true;

}

