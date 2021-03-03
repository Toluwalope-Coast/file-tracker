<?php ob_start();

session_start();

include("db.php");

include("functions.php");


update_codesmapping_Processor();


function update_codesmapping_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = clean_text_data($_POST['column']);
		$value = htmlentities($_POST['valueupdate']);
		$id = clean_int_data($_POST['codesmapping_id']);
		
		

		
		$sql = "UPDATE uap_wbs_gl_codes_mapping SET $column = '$value' WHERE code_mapping_id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/codesmapping.php"); 
	} 
}







?>