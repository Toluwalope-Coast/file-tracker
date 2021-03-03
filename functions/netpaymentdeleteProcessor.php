<?php ob_start();

session_start();

include("db.php");

include("functions.php");


netpayment_delete_Processor();


function netpayment_delete_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$id = clean_int_data($_POST['net_computation_id']);
		
		

		
		$sql = "DELETE FROM net_payment_computation WHERE net_computation_id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/netpayment.php"); 
	} 
}







?>