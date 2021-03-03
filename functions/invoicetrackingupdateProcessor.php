<?php ob_start();

session_start();

include("db.php");

include("functions.php");


invoicetracking_update_Processor();


function invoicetracking_update_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = clean_text_data($_POST['column']);
		$value = htmlentities($_POST['value']);
		$id = clean_int_data($_POST['id']);
		
		

		
		$sql = "UPDATE invoice_tracking SET $column = '$value' WHERE id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/invoicetracking.php"); 
	} 
}







?>