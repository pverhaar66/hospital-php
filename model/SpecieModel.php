<?php

function getAllSpecies() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getSpecie($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE specie_id =:specie_id";
	$query = $db->prepare($sql);
	$query->execute(array(":specie_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}


function createSpecie() {


	$specie_name = isset($_POST["specie_name"]) ? $_POST['specie_name'] : null;


	if (strlen($specie_name) == 0){
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(specie_name) VALUES(:specie_name)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':specie_name' => $specie_name));

	$db = null;

	return true;


}
function editThisSpecie(){

	$specie_name = isset($_POST["specie_name"]) ? $_POST['specie_name'] : null;
	$specie_id = isset($_POST["specie_id"])? $_POST['specie_id'] : null;	


	if (strlen($specie_name) == 0) {
		return false;	
	}

	


	$db = openDatabaseConnection();

	$sql = "UPDATE species SET specie_name = :specie_name WHERE specie_id = :specie_id";
	 
	$stmt = $db->prepare($sql);
	$stmt->execute(array(
					":specie_name" => $specie_name,
					":specie_id" => $specie_id));

	$db = null;

	return true;
}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM species WHERE specie_id=:specie_id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":specie_id"=>$id));

	$db = null;

	return true;

}

