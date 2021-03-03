sap_documents_large<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


sap_documents_large();


function sap_documents_large(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO sap_documents(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, invoice_document_number, payment_document_number, clearing_document_number, sap_status) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]', '$cont[5]', '$cont[6]', '$cont[7]', '$cont[8]', '$cont[9]', '$cont[10]', '$cont[11]', '$cont[12]', '$cont[13]', '$cont[14]', '$cont[15]')";

		$results = query($sql);
		

	} //while loop



} //server if statement


} //function

		redirect("http://localhost/filetracker/sapdocumentpayment.php");


?>
