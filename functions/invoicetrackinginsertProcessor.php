<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_invoicetracking();


function insert_invoicetracking(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$id = clean_int_data($_POST['id']);
		$dcoo_acknowledgement = clean_text_data($_POST['dcoo_acknowledgement']);
		$dcoo_acknowledgement_date = clean_date_data($_POST['dcoo_acknowledgement_date']);
		$dcoo_released_date = clean_date_data($_POST['dcoo_released_date']);
		$dcoo_released_date = clean_date_data($_POST['account_department']);
		$account_received_date = clean_date_data($_POST['account_received_date']);
		$account_released_date_to_audit_1 = clean_date_data($_POST['account_released_date_to_audit_1']);
		$received_date_from_audit_1_queried = clean_date_data($_POST['received_date_from_audit_1_queried']);
		$account_released_date_to_audit_2 = clean_date_data($_POST['account_released_date_to_audit_2']);
		$received_date_from_audit_2_queried = clean_date_data($_POST['received_date_from_audit_2_queried']);
		$account_released_date_to_audit_3 = clean_date_data($_POST['account_released_date_to_audit_3']);
		$received_date_from_audit_3_queried = clean_date_data($_POST['received_date_from_audit_3_queried']);
		$account_released_date_to_audit_final_queried = clean_date_data($_POST['account_released_date_to_audit_final_queried']);
		$received_date_from_audit_passed = clean_date_data($_POST['received_date_from_audit_passed']);
		$audit_acknowledgement = clean_text_data($_POST['audit_acknowledgement']);
		$audit_recieved_date_1 = clean_date_data($_POST['audit_recieved_date_1']);
		$audit_query_1 = clean_text_data($_POST['audit_query_1']);
		$returned_date_1_audit_queried = clean_text_data($_POST['returned_date_1_audit_queried']);
		$audit_recieved_date_2 = clean_date_data($_POST['audit_recieved_date_2']);
		$audit_query_2 = clean_text_data($_POST['audit_query_2']);
		$returned_date_2_audit_queried = clean_date_data($_POST['returned_date_2_audit_queried']);
		$audit_recieved_date_3 = clean_date_data($_POST['audit_recieved_date_3']);
		$audit_query_3 = clean_text_data($_POST['audit_query_3']);
		$returned_date_3_audit_queried = clean_date_data($_POST['returned_date_3_audit_queried']);
		$audit_recieved_date_final = clean_date_data($_POST['audit_recieved_date_final']);
		$audit_final_remark = clean_text_data($_POST['audit_final_remark']);
		$returned_date_passed_document = clean_date_data($_POST['returned_date_passed_document']);



		if (($Auditor1Remark == "Passed" && $Auditor2Remark == empty($Auditor2Remark)) || ($Auditor1Remark == "Queried" && $Auditor2Remark == "Passed")) {
			
			$SendForPayment =  "Schedule for Payment";
			
		}
		else {
			
			$SendForPayment = "";
		}


		
		
		$sql = "UPDATE invoice_tracking SET dcoo_acknowledgement = '$dcoo_acknowledgement', dcoo_acknowledgement_date = '$dcoo_acknowledgement_date', dcoo_released_date = '$dcoo_released_date', account_department = '$account_department', account_received_date = '$account_received_date', account_released_date_to_audit_1 = '$account_released_date_to_audit_1', received_date_from_audit_1_queried = '$received_date_from_audit_1_queried', account_released_date_to_audit_2 = '$account_released_date_to_audit_2', received_date_from_audit_2_queried = '$received_date_from_audit_2_queried', account_released_date_to_audit_3 = '$account_released_date_to_audit_3', received_date_from_audit_3_queried = '$received_date_from_audit_3_queried',account_released_date_to_audit_final_queried = '$account_released_date_to_audit_final_queried', received_date_from_audit_passed = '$received_date_from_audit_passed' , send_for_payment = '$SendForPayment', audit_acknowledgement = '$audit_acknowledgement', audit_recieved_date_1 = '$audit_recieved_date_1', audit_query_1 = '$audit_query_1', returned_date_1_audit_queried = '$returned_date_1_audit_queried', audit_recieved_date_2 = '$audit_recieved_date_2', audit_query_2 = '$audit_query_2', returned_date_2_audit_queried = '$returned_date_2_audit_queried', audit_recieved_date_3 = '$audit_recieved_date_3', audit_query_3 = '$audit_query_3', returned_date_3_audit_queried = '$returned_date_3_audit_queried', audit_recieved_date_final = '$audit_recieved_date_final', audit_final_remark = '$audit_final_remark', returned_date_passed_document = '$returned_date_passed_document'  WHERE id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/invoicetracking.php"); 
	} 
}







?>