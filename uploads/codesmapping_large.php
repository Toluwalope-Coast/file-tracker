<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


codesmappinglarge();


function codesmappinglarge(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO uap_wbs_gl_codes_mapping(title_of_codes, codes, wbs_element, cost_element_for_budget_upload, cost_element) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]')";

		$results = query($sql);
		

	} //while loop



} //server if statement


} //function

		redirect("http://localhost/filetracker/codesmapping.php"); 


?>
