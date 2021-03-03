<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


invoice_tracking_large();


function invoice_tracking_large(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO invoice_tracking(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, dcoo_acknowledgement, dcoo_acknowledgement_date, dcoo_released_date, account_department, account_received_date, account_released_date_to_audit_1, received_date_from_audit_1_queried, account_released_date_to_audit_2, received_date_from_audit_2_queried, account_released_date_to_audit_3, received_date_from_audit_3_queried, account_released_date_to_audit_final_queried, received_date_from_audit_passed, send_for_payment, audit_acknowledgement, audit_recieved_date_1, audit_query_1, returned_date_1_audit_queried, audit_recieved_date_2, audit_query_2, returned_date_2_audit_queried, audit_recieved_date_3, audit_query_3, returned_date_3_audit_queried, audit_recieved_date_final, audit_final_remark, returned_date_passed_document) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]', '$cont[5]', '$cont[6]', '$cont[7]', '$cont[8]', '$cont[9]', '$cont[10]', '$cont[11]', '$cont[12]', '$cont[13]', '$cont[14]', '$cont[15]', '$cont[16]', '$cont[17]', '$cont[18]', '$cont[19]', '$cont[20]', '$cont[21]', '$cont[22]', '$cont[23]', '$cont[24]', '$cont[25]', '$cont[26]', '$cont[27]', '$cont[28]', '$cont[29]', '$cont[30]', '$cont[31]', '$cont[32]', '$cont[33]', '$cont[34]', '$cont[35]', '$cont[36]', '$cont[37]', '$cont[38]')";

		$results = query($sql);

	} //while loop



} //server if statement


} //function

		redirect("http://localhost/filetracker/invoicetracking.php"); 


?>
