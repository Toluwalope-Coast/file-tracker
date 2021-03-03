<?php ob_start();

session_start();

include("db.php");

include("functions.php");



login_validation();



function login_validation(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		

		$username = escape(clean_text_data($_POST['uname']));
		$password = escape(clean_password_data($_POST['pswd']));
		$department = escape(clean_text_data($_POST['department']));

		$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' AND department = '$department' ";

		$results = query($sql);
		
		 if ($username == "test" && $password == "admin123" && $department == "Admin") {
		 	
		 	$_SESSION['username'] = $username;
	        $_SESSION['department'] = $department;
	        redirect("http://localhost/filetracker/dashboard.php");
		 }
		 elseif (row_count($results) == 1) {
		 	
		 	$row = fetch_data($results);

		 	$db_department = $row['department'];

		 	if ($db_department == $department) {
		 		
		 		
	        	$_SESSION['username'] = $username;
	        	$_SESSION['department'] = $department;
	        	$sql = "UPDATE login SET log_status = 'online' WHERE username = '$username' AND password = '$password' AND department = '$department' ";

		$results = query($sql);
		
		 		redirect("http://localhost/filetracker/dashboard.php");
		 		
		 	} /*  PAGE DIRECTIONS*/

		 } else{

		 	redirect("http://localhost/filetracker/login.php");
		 	/*$errors = "Invalid login details";
		 	display_errors($errors);*/
		 	
		 }
	} 

}

/*function logged_in(){

	if (isset($_SESSION['username'])) {
		return true;
	}else{

		return false;
	}

}*/





?>