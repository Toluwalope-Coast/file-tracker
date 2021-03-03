<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_contractcommitment();


function insert_contractcommitment(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$id = clean_int_data($_POST['id']);
		$CodeTitle = clean_text_data($_POST['codeTitle']);

		
		$sql = "UPDATE contract_commitment  SET title_of_codes = '$CodeTitle' WHERE id = $id";

		$results = query($sql);

		$sql = "UPDATE contract_commitment  SET codes = SELECT codes FROM uap_wbs_gl_codes_mapping WHERE title_of_codes = '$CodeTitle' WHERE id = $id";

		$results = query($sql);

		$sql = "UPDATE contract_commitment  SET wbs_element = SELECT wbs_element FROM uap_wbs_gl_codes_mapping WHERE title_of_codes = '$CodeTitle' WHERE id = $id";

		$results = query($sql);

			/*updates for invoice template*/


		$sql = "UPDATE invoice_template_1  SET gl = '$CodeTitle' WHERE id = $id";

		$results = query($sql);

		$sql = "UPDATE invoice_template_1  SET wbs_indicator = SELECT wbs_element FROM uap_wbs_gl_codes_mapping WHERE title_of_codes = '$CodeTitle' WHERE id = $id";

		$results = query($sql);
 
/*
		redirect("http://localhost/filetracker/contractcommitment.php");*/ 
	} 
}







?>