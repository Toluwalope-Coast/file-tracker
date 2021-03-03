<?php ob_start();

session_start();

include("db.php");

include("functions.php");


datainvoice_Processing_update_Processor_Processor();


function datainvoice_Processing_update_Processor_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = clean_text_data($_POST['column']);
		$value = htmlentities($_POST['value']);
		$id = clean_int_data($_POST['id']);
		
		

		
		$sql = "UPDATE data_capturing_invoice_processing SET $column = '$value' WHERE id = $id";

		$results = query($sql);

		$sql = "UPDATE invoice_tracking SET $column = '$value' WHERE id = $id";

		$results1 = query($sql);

		$sql = "UPDATE contract_commitment SET $column = '$value' WHERE id = $id";

		$results2 = query($sql);

		$sql = "UPDATE sap_documents SET $column = '$value' WHERE id = $id";

		$results3 = query($sql);

		$sql = "UPDATE aging_analysis SET $column = '$value' WHERE id = $id";

		$results4 = query($sql);

		$sql = "UPDATE bank_payment SET $column = '$value' WHERE id = $id";

		$results5 = query($sql);

		$sql = "UPDATE net_payment_computation SET $column = '$value' WHERE id = $id";

		$results6 = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/datainvoicingprocessing.php"); 
	} 
}







?>