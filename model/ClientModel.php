<?php

function getAllClients() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

	$db = null;

}

function getClient($id) {
	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id =:client_id";
	$query = $db->prepare($sql);
	$query->execute(array(":client_id"=>$id));

	$db = null;

	return $query->fetch();
	return true;

	
}


function createClient() {


	$client_firstname = isset($_POST["client_firstname"]) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST["client_lastname"]) ? $_POST['client_lastname'] : null;


	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0) {
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname) VALUES(:client_firstname, :client_lastname)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':client_firstname' => $client_firstname,
						 	':client_lastname' => $client_lastname));

	$db = null;

	return true;


}
function editThisClient(){

	$client_firstname = isset($_POST["client_firstname"]) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST["client_lastname"]) ? $_POST['client_lastname'] : null;
	$client_id = isset($_POST["client_id"])? $_POST['client_id'] : null;	

	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0) {
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :client_firstname, client_lastname = :client_lastname WHERE client_id = :client_id";
	
	$stmt = $db->prepare($sql);
	$stmt->execute(array(
					":client_firstname" => $client_firstname,
					":client_lastname" => $client_lastname,		
					":client_id" => $client_id));

	$db = null;

	return true;
}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM clients WHERE client_id = :client_id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":client_id"=>$id));

	$db = null;

	return true;

}

