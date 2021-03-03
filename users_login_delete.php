<?php include("functions/deleteStaffProfileProcessor.php") ?>

<!DOCTYPE html>
<html>
<head>
<title>Staffs Profile Delete</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
               <li class="nav-item"><a class="nav-link edit-link" href="users_login_insert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="users_login_update.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-active" href="users_login_delete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
          <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Delete User Login Profile</h2>
            <form action="functions/deleteUsersLoginProfileProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group">
                <label for="id">Where S/N is:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="S/N to Delete" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4">Delete</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

  <?php include("includes/footer.php") ?>