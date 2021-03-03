<?php ob_start();

session_start();

include("db.php");

include("functions.php");


delete_Staff_Profile_Processor();


function delete_Staff_Profile_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$id = clean_int_data($_POST['id']);
		
		

		

		$sql = "DELETE FROM login WHERE id = $id";

		$results = query($sql);
		
		redirect("http://localhost/filetracker/vendors_and_staffs_profile.php"); 
	} 
}







?>