<?php ob_start();

session_start();

include("db.php");

include("functions.php");


update_Staff_Profile_Processor();


function update_Staff_Profile_Processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$column = clean_text_data($_POST['column']);
		$value = $_POST['valueupdate'];
		$id = clean_int_data($_POST['id']);
		
		
		$sql = "UPDATE login SET $column = '$value' WHERE login_id = $id";

		$results = query($sql);


		confirm($results);
		
		redirect("http://localhost/filetracker/users_login.php"); 
	} 
}







?>