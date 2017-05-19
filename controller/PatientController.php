<?php

require(ROOT . "model/SpecieModel.php");
require(ROOT . "model/ClientModel.php");
require(ROOT . "model/PatientModel.php");

function index()
{
	render("Patient/Index", 
		array("patients" => getAllPatients()
	));
}

function create()
{
	render("Patient/createPatient", 
		array("species" => getAllSpecies(),
			  "clients" => getALlClients()
			  ));
	
}

function createSave()
{


if (!createPatient()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
}


function deletePatient($id)
{
	if (!deletePatients($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
	
}

function readPatient($id)
{
	render("patient/readPatient" ,array('patient' => getPatient($id)));
}

function editPatient($id)
{
	render("patient/editPatient", array('patient' => getPatient($id),
											"species" => getAllSpecies(),
			  								"clients" => getALlClients()));
}

function editSave() {

	 	if (!editThisPatient()) {

	 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
}