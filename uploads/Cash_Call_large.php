<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


Cash_Call_large();


function Cash_Call_large(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO cash_call(cash_call_date, cash_call_description, OML_42_JV_AMT_NGN, OML_42_JV_AMT_USD, npdc_ngn, npdc_usd, fhn_ngn, fhn_usd, cash_payment_date, payment_description, OML_42_JV_AMT_NGN_PAYMENT, OML_42_JV_AMT_USD_PAYMENT, npdc_ngn_payment, npdc_usd_payment, fhn_ngn_payment, fhn_usd_payment, date_outstanding, outstanding_payment, OML_42_JV_AMT_NGN_OUTSTANDING, OML_42_JV_AMT_USD_OUTSTANDING, npdc_ngn_outstanding, npdc_usd_outstanding, fhn_ngn_outstanding, fhn_usd_outstanding) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]', '$cont[5]', '$cont[6]', '$cont[7]', '$cont[8]', '$cont[9]', '$cont[10]', '$cont[11]', '$cont[12]', '$cont[13]', '$cont[14]', '$cont[15]', '$cont[16]', '$cont[17]', '$cont[18]', '$cont[19]', '$cont[20]', '$cont[21]', '$cont[22]', '$cont[23]' )";

		$results = query($sql);
		

	} //while loop



} //server if statement


} //function

		redirect("http://localhost/filetracker/cashcalls.php"); 


?>
