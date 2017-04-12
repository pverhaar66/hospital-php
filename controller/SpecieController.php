<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/Index", 
		array("clients" => getAllClients()));
}

function create()
{
	render("client/createclient");
	
}

function createSave()
{

 	if (!createClient()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "client/index");
}


function deleteClient($id)
{
	if (!delete($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "client/index");
	
}

function readClient($id)
{
	render("client/readclient" ,array('client' => getClient($id)));

}

function editClient($id)
{
	render("client/editclient", array('client' => getClient($id)));
}

function editSave() {

	 	if (!editThisClient()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "client/index");
}