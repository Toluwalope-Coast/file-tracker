<?php include("functions/insertStaffProfileProcessor.php") ?>

<!DOCTYPE html>
<html>
<head>
<title>Staffs / Vendors Profile Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item "><a class="nav-link edit-active" href="users_login_insert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="users_login_update.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="users_login_delete.php">Delete</a></li>
            </ul>
          </nav>
        <div class="col-sm-12 edit-form">

          <h2 class="col-sm-8 offset-sm-1 mb-4">Add User Login Profile</h2>
            
          <form action="functions/insertUsersLoginProfileProcessor.php" method="post" role="form" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="staffData">
          
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="un">Username</label>
                <input type="text" class="form-control" id="un" placeholder="Enter the Username for login" name="un" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="pwd">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter the Password for login" name="pwd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="department">Department:</label>
                <select name="department" id="department" class="custom-select" required>
                  <option value="">Select the department</option>
                  <option value="DCO">DCO</option>
                  <option value="Admin">Admin</option>
                  <option value="Operation">Operation</option>
                  <option value="Security">Security</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <input  type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit" name="users_login_insert" id="users_login_insert" value="Insert">
            </form>
            
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

 <?php include("includes/footer.php") ?>