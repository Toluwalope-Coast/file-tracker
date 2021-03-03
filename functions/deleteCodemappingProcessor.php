<?php ob_start();

session_start();

include("db.php");

include("functions.php");


delete_Staff_Profile_Processor();


function delete_Staff_Profile_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$id = clean_int_data($_POST['codesmapping_id']);
		
		

		
		$sql = "DELETE FROM uap_wbs_gl_codes_mapping WHERE code_mapping_id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/codesmapping.php"); 
	} 
}







?>