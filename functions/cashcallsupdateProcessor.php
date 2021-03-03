<?php ob_start();

session_start();

include("db.php");

include("functions.php");


update_cashcall_Processor();


function update_cashcall_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = $_POST['column'];
		$value = htmlentities($_POST['value']);
		$id = clean_int_data($_POST['cash_call_id']);
		
				
		
		if ($column == 'cash_call_date') {
			$sql1 = "UPDATE cash_call SET cash_payment_date = '$value' WHERE cash_call_id = $id";
			$results = query($sql1);
			$sql = "UPDATE cash_call SET cash_call_date = '$value' WHERE cash_call_id = $id";
			$results = query($sql);

		}elseif ($column == 'cash_call_description') {
			$sql1 = "UPDATE cash_call SET cash_call_description = '$value' WHERE cash_call_id = $id";
			$results = query($sql1);
			$sql = "UPDATE cash_call SET payment_description = '$value' WHERE cash_call_id = $id";
			$results = query($sql);
			
		}else{
			$sql = "UPDATE cash_call SET $column = '$value' WHERE cash_call_id = $id";
			$results = query($sql);
		}
		
		redirect("http://localhost/filetracker/cashcalls.php"); 
	} 
}







?>