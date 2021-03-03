<!DOCTYPE html>
<html>
<head>

	<title>Login Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body id="loginPage">
  	<div class="container" id="loginContainer">
  		<header class="col-sm-4 offset-sm-4 col-xs-8 offset-xs-2">OML 42 AMT -INVOICE TRACKING SYSTEM SOLUTION<img src="images/binoculars.jpg" aria-hidden="true" width="50px" height="50px" /></header>
      
      </div>
  		<div class="col-sm-4 offset-sm-4 col-xs-8 offset-xs-2" id="login">
    		<form action="functions/loginProcessor.php" method="post" class="was-validation" novalidate role="form">
          <div class="form-group">
    				<label for="username">Username:</label>
    				<input type="text" class="form-control" id="username" placeholder="Enter Username" name="uname" required>
    				<div class="valid-feedback">Valid.</div>
    				<div class="invalid-feedback">Please fill out this field.</div>
  				</div>
  				<div class="form-group">
    				<label for="password">Password:</label>
    				<input type="password" class="form-control" id="password" placeholder="Enter Password" name="pswd" required>
    				<div class="valid-feedback">Valid.</div>
    				<div class="invalid-feedback">Please fill out this field.</div>
  				</div>
  				<div class="form-group">
    				<label for="text">Department:</label>
    				<select name="department" id="department" class="custom-select" required>
              <option value="">Select the department</option>
              <option value="Dco">DCO</option>
              <option value="Admin">Admin</option>
              <option value="Operation">Operation</option>
              <option value="Security">Security</option>
            </select>
    				<div class="valid-feedback">Valid.</div>
    				<div class="invalid-feedback">Please fill out this field.</div>
  				</div>
  				<input type="submit" class="btn btn-primary" name="login_submit" id="login_submit" value="Login">

    		 
    		</form>
        

    	</div>

      <div class="bottom col-xl-12">Callydia/SMExperts</div>
       
  	</div>
  	<script src="js/script.js"></script>
  	<script src="js/jquery-3.4.0.min.js"></script>
  	<script src="js/script.js"></script>
</body>
</html>