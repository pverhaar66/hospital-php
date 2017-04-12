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


	$name = isset($_POST["name"]) ? $_POST['name'] : null;
	$phone = isset($_POST["phone"]) ? $_POST['phone'] : null;
	$email = isset($_POST["email"])? $_POST['email'] : null;

	if (strlen($name) < 3 || strlen($phone) == 0 || strlen($email) == 0) {
		return false;	
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_name, client_phone, client_email) VALUES(:client_name, :client_phone, :client_email)";

	$query = $db -> prepare($sql);
	$query -> execute(array(':client_name' => $name,
						 	':client_phone' => $phone,
						  	':client_email' => $email));

	$db = null;

	return true;


}
function editThisClient(){

	$name = isset($_POST["name"]) ? $_POST['name'] : null;
	$phone = isset($_POST["phone"]) ? $_POST['phone'] : null;
	$email = isset($_POST["email"])? $_POST['email'] : null;
	$id = isset($_POST["id"])? $_POST['id'] : null;	

	if (strlen($name) < 3 || strlen($phone) == 0 || strlen($email) == 0) {
		return false;	
	}


	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_name = :client_name, client_phone = :client_phone, client_email = :client_email  WHERE client_id=:client_id";
	
	$stmt = $db->prepare($sql);
	$stmt->execute(array(
					":client_name" => $name,
					":client_phone" => $phone,	
					":client_email" => $email,	
					":client_id" => $id));

	$db = null;

	return true;
}

function delete($id) {

	if (!$id) {
		return false;
	}
	$db = openDatabaseConnection();
	

	$sql = "DELETE FROM clients WHERE client_id=:client_id";
	$stmt = $db->prepare($sql);
	$stmt->execute(array(":client_id"=>$id));

	$db = null;

	return true;

}

