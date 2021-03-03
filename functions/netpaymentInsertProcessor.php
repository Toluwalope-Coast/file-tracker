<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_netpayment_Processor();


function insert_netpayment_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$id = clean_int_data($_POST['id']);
		
		$ApprovalStatus = clean_text_data($_POST['approvalStatus']);
		$PaymentStatus = clean_text_data($_POST['paymentStatus']);
		$PaymentDate = clean_text_data($_POST['paymentDate']);
		$monthTo = $_POST['month_to'];
		$monthFrom = $_POST['month_from'];


		
		$sql = "UPDATE net_payment_computation SET approval_status = $ApprovalStatus, payment_status = $PaymentStatus, payment_date = $PaymentDate month_to = '$monthTo', month_from = '$monthFrom' WHERE id = $id";
		$results = query($sql);

		$sql = "UPDATE bank_payment SET  approval_status = $ApprovalStatus, payment_status = $PaymentStatus, payment_date = $PaymentDate WHERE id = $id";


		$results1 = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/netpayment.php"); 
	} 
}







?>