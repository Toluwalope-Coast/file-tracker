<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_codesmapping();


function insert_codesmapping(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$CodeTitle = clean_text_data($_POST['codeTitle']);
		$Code = clean_text_data($_POST['Code']);
		$Wbs_Element = clean_text_data($_POST['wbsElement']);
		$Cost_Element_For_Budget_Upload = clean_int_data($_POST['costElementForBudgetUpload']);
		$Cost_Element = clean_text_data($_POST['costElement']);

		
		$sql = "INSERT INTO uap_wbs_gl_codes_mapping(title_of_codes, codes, wbs_element, cost_element_for_budget_upload, cost_element) VALUES('$CodeTitle', '$Code', '$Wbs_Element', '$Cost_Element_For_Budget_Upload', '$Cost_Element')";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/codesmapping.php"); 
	} 
}







?>