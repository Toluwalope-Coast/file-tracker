<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


datainvoiceProcessinglarge();


function datainvoiceProcessinglarge(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO data_capturing_invoice_processing(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, reimbursible, mark_up, pension_charge, retention, currency, actual_performance_period) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]', '$cont[5]', '$cont[6]', '$cont[7]', '$cont[8]', '$cont[9]', '$cont[10]', '$cont[11]', '$cont[12]', '$cont[13]', '$cont[14]', '$cont[15]', '$cont[16]', '$cont[17]')";

		$results = query($sql);
		

	} //while loop



} //server if statement


} //function

		redirect("http://localhost/filetracker/datainvoicingprocessing.php");


?>
