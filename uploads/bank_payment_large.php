bank_payment_large.php<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


bank_payment_large();


function bank_payment_large(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO bank_payment('payment_date', 'vendor_name', 'invoice_no', 'vendor_bank', 
                    'vendor_account_number', 'net_amount', 'currency', approval_status, payment_status, transaction_type) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]', '$cont[5]', '$cont[6]', '$cont[7]', '$cont[8]', '$cont[9]')";

		$results = query($sql);
		

	} //while loop



} //server if statement


} //function

		redirect("http://localhost/filetracker/datainvoicingprocessing.php");


?>
