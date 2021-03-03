<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_staff_profile();


function insert_staff_profile(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$name = clean_text_data($_POST['name']);
		$localBank = clean_text_data($_POST['localBank']);
		$foreignBank = clean_text_data($_POST['foreignBank']);
		$sortCode = clean_int_data($_POST['sortCode']);
		$localBankAccNo = clean_int_data($_POST['localBankAccNo']);
		$tinNumber = clean_int_data($_POST['tinNumber']);
		$regNo = clean_text_data($_POST['regNo']);
		$foreignBankAccNo = clean_int_data($_POST['foreignlBankAccNo']);
		$house_Address = clean_text_data($_POST['address']);
		$state = clean_text_data($_POST['state']);
		$country = clean_text_data($_POST['country']);
		$email = clean_email_data($_POST['email']);
		$telNo = clean_tel_data($_POST['telNo']);
		$auditRemark = clean_text_data($_POST['auditRemark']);

		
		$sql = "INSERT INTO vendorandstaff(name, local_bank, foreign_bank, sort_code, local_bank_acc_no, tin_no, reg_no, foreign_bank_acc_no, house_address, state, country, email, tel_no, audit_remark) VALUES('$name', '$localBank', '$foreignBank', '$sortCode', '$localBankAccNo', '$tinNumber', '$regNo', '$foreignBankAccNo', '$house_Address', '$state', '$country', '$email', '$telNo', '$auditRemark')";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/vendors_and_staffs_profile.php"); 
	} 
}







?>