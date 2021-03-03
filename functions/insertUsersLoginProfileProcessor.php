<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_staff_profile();


function insert_staff_profile(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$username = clean_text_data($_POST['un']);
		$password = clean_password_data($_POST['pwd']);
		$department = clean_text_data($_POST['department']);
		


		$sql = "INSERT INTO login(username, password, department) VALUES('$username', '$password', '$department')";

		$results = query($sql);

		confirm($results);
		
		redirect("http://localhost/filetracker/users_login.php"); 
	} 
}







?>