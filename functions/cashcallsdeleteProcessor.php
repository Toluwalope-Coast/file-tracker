<?php ob_start();

session_start();

include("db.php");

include("functions.php");


delete_cashcall_Processor();


function delete_cashcall_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$id = clean_int_data($_POST['cash_call_id']);
		
		

		
		$sql = "DELETE FROM cash_call WHERE cash_call_id = $id";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/cashcalls.php"); 
	} 
}







?>