<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


datainvoiceProcessinglarge();


function datainvoiceProcessinglarge(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {


	
	$file = $_FILES['csvfile']['tmp_name'];
	$handle = fopen($file, 'r');
	while (($cont = fgetcsv($handle, 10000, ",")) !== false) {

		$sql = "INSERT INTO vendorandstaff(name, username, password, department, local_bank, foreign_bank, sort_code, local_bank_acc_no, tin_no, reg_no, foreign_bank_acc_no, house_address, state, country, email, tel_no, start_date, end_date, currency, audit_remark, reason_if_queried, transaction_type, approval_status) VALUES('$cont[0]', '$cont[1]', '$cont[2]', '$cont[3]', '$cont[4]', '$cont[5]', '$cont[6]', '$cont[7]', '$cont[8]', '$cont[9]', '$cont[10]', '$cont[11]', '$cont[12]', '$cont[13]', '$cont[14]', '$cont[15]', '$cont[16]', '$cont[17]', '$cont[18]', '$cont[19]', '$cont[20]', '$cont[21]', '$cont[22]', '$cont[23]')";

		$results = query($sql);
		

		$sql = "INSERT INTO login(username, password, department) VALUES($cont[1]', '$cont[2]', '$cont[3]')";

		$results1 = query($sql);
		

	} //while loop



} //server if statement


} //function
/*
		redirect("http://localhost/filetracker/datainvoicingprocessing.php"); */


?>
