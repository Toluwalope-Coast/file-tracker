<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_Cash_Call();


function insert_Cash_Call(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$RequestDate = clean_date_data($_POST['cashRequestDate']);
		$Description = clean_text_data($_POST['cashCalldescription']);
		$Npdc_Ngn1 = clean_int_data($_POST['npdc_ngn_req']);
		$Npdc_Usd1 = clean_int_data($_POST['npdc_usd_req']);
		$Fhn_Ngn1 = clean_int_data($_POST['fhn_ngn_req']);
		$Fhn_Usd1 = clean_int_data($_POST['fhn_usd_req']);
		$Npdc_Ngn2 = clean_int_data($_POST['npdc_ngn_pay']);
		$Npdc_Usd2 = clean_int_data($_POST['npdc_usd_pay']);
		$Fhn_Ngn2 = clean_int_data($_POST['fhn_ngn_pay']);
		$Fhn_Usd2 = clean_int_data($_POST['fhn_usd_pay']);
		$Npdc_Ngn3 = $Npdc_Ngn1 - $Npdc_Ngn2;
		$Npdc_Usd3 = $Npdc_Usd1 - $Npdc_Usd2;
		$Fhn_Ngn3 = $Fhn_Usd1 - $Fhn_Usd2;
		$Fhn_Usd3 = $Fhn_Usd1 - $Fhn_Usd2;
		

		
		$sql = "INSERT INTO cash_call(cash_call_date, cash_call_description, OML_42_JV_AMT_NGN, OML_42_JV_AMT_USD, npdc_ngn, npdc_usd, fhn_ngn, fhn_usd, cash_payment_date, payment_description, OML_42_JV_AMT_NGN_PAYMENT, OML_42_JV_AMT_USD_PAYMENT, npdc_ngn_payment, npdc_usd_payment, fhn_ngn_payment, fhn_usd_payment, date_outstanding, outstanding_payment, OML_42_JV_AMT_NGN_OUTSTANDING, OML_42_JV_AMT_USD_OUTSTANDING, npdc_ngn_outstanding, npdc_usd_outstanding, fhn_ngn_outstanding, fhn_usd_outstanding) VALUES('$RequestDate', '$Description','$Npdc_Ngn1' + '$Fhn_Ngn1', '$Npdc_Usd1' + '$Fhn_Usd1', '$Npdc_Ngn1', '$Npdc_Usd1', '$Fhn_Ngn1', '$Fhn_Usd1', $RequestDate', '$Description','$Npdc_Ngn2' + '$Fhn_Ngn2', '$Npdc_Usd2' + '$Fhn_Usd2', '$Npdc_Ngn2', '$Npdc_Usd2', '$Fhn_Ngn2', '$Fhn_Usd2', $RequestDate', '$Description','$Npdc_Ngn3' + '$Fhn_Ngn3', '$Npdc_Usd3' + '$Fhn_Usd3', '$Npdc_Ngn3', '$Npdc_Usd3', '$Fhn_Ngn3', '$Fhn_Usd3')";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/cashcalls.php"); 
	} 
}







?>