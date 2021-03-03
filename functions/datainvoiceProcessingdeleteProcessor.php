<?php ob_start();

session_start();

include("db.php");

include("functions.php");


datainvoice_Processing_delete_Processor();


function datainvoice_Processing_delete_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$id = clean_int_data($_POST['id']);
		
		

		
		$sql = "DELETE FROM data_capturing_invoice_processing WHERE id = $id";

		$results = query($sql);

		$sql = "DELETE FROM invoice_tracking WHERE id = $id";

		$results1 = query($sql);

		$sql = "DELETE FROM contract_commitment WHERE id = $id";

		$results2 = query($sql);

		$sql = "DELETE FROM sap_documents WHERE id = $id";

		$results3 = query($sql);

		$sql = "DELETE FROM aging_analysis WHERE id = $id";

		$results4 = query($sql);

		$sql = "DELETE FROM bank_payment WHERE id = $id";

		$results5 = query($sql);

		$sql = "DELETE FROM net_payment_computation WHERE id = $id";

		$results6 = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/datainvoicingprocessing.php"); 
	} 
}







?>