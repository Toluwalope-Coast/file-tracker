<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_sapdocumentpayment();


function insert_sapdocumentpayment(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$id = clean_int_data($_POST['id']);	
		$InvoiceDocNo = clean_int_data($_POST['invoice_doc_no']);
		$PaymentDocNo =clean_int_data($_POST['payment_doc_no']);
		$ClearingDocNo =clean_int_data($_POST['clearing_doc_no']);




		if (!($InvoiceDocNo == empty($InvoiceDocNo)) && (($PaymentDocNo == empty($PaymentDocNo)) && ($ClearingDocNo == empty($ClearingDocNo)))) {
			
			$SapStatus = "Open";
			
		}
		elseif (!($InvoiceDocNo == empty($InvoiceDocNo)) && (($PaymentDocNo == empty($PaymentDocNo)) && ($ClearingDocNo == empty($ClearingDocNo)))) {
			
			$SapStatus = "Closed";
		}elseif (!($InvoiceDocNo == empty($InvoiceDocNo)) && !($PaymentDocNo == empty($PaymentDocNo)) && !($ClearingDocNo == empty($ClearingDocNo))) {
			
			$SapStatus = "Cleared";
		}else{

			$SapStatus = "New";
		}


		

		
		$sql = "UPDATE sap_documents SET invoice_document_number = $InvoiceDocNo, payment_document_number = $PaymentDocNo, clearing_document_number, sap_status = $SapStatus WHERE id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/sapdocumentpayment.php"); 
	} 
}







?>