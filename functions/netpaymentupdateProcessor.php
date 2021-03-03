<?php ob_start();

session_start();

include("db.php");

include("functions.php");


netpayment_update_Processor();


function netpayment_update_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = clean_text_data($_POST['column']);
		$value = htmlentities($_POST['value']);
		$id = clean_int_data($_POST['transaction_no']);
		
		

		
		$sql = "UPDATE net_payment_computation SET $column = '$value' WHERE transaction_no = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/netpayment.php"); 
	} 
}







?>