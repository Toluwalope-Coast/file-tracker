<?php include("functions/deleteCodemappingProcessor.php") ?>

<!DOCTYPE html>
<html>
<head>
  <title>UAP/WBS/SAP GL Delete Page</title>
  <?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="codesmappinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="codesmappingupdate.php">Update</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="codesmappingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
          <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Delete UAP/WBS/SAP GL</h2>
            <form action="functions/deleteCodemappingProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group">
                <label for="codesmapping_id">Where S/N is:</label>
                <input type="number" class="form-control" id="codesmapping_id" name="codesmapping_id" placeholder="S/N to update" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4">Delete</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

<?php include("includes/footer.php") ?> 