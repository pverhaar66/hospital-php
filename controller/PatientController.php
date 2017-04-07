<?php

require(ROOT . "model/PatientModel.php");

function index()
{
	render("Patient/Index", 
		array("patient" => getAllPatients()));
}

function create()
{
	render("Patient/createPatient");
	
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
	if (!delete($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

 		header("Location:" . URL . "patient/index");
	
}

function readPatient($id)
{
		if (!read($id)) {
		 		header("Location:" . URL . "error/index");
	 		exit();
 	}

			render("patient/readPatient");

}