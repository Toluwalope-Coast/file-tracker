<?php ob_start();

session_start();

include("db.php");

include("functions.php");


sapdocumentpayment_update_Processor();


function sapdocumentpayment_update_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = clean_text_data($_POST['column']);
		$value = htmlentities($_POST['value']);
		$id = clean_int_data($_POST['id']);
		
		

		
		$sql = "UPDATE sap_documents SET $column = '$value' WHERE id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/sapdocumentpayment.php"); 
	} 
}







?>