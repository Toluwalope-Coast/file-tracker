<?php include("functions/updateCodemappingProcessor.php") ?>

<!DOCTYPE html>
<html>
<head>
  <title>UAP/WBS/SAP GL Update Page</title>
  <?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?> <!-- side bar nav closes -->
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="codesmappinginsert.php">Insert</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="codesmappingupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="codesmappingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">UPDATE UAP/WBS/SAP GL</h2>
            <form action="functions/updateCodemappingProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
                <label>Column to update:</label>
                <select class="form-control" id="updatecol" name="column">
                  <option value="">Please select the column to update</option>
                  <option value="title_of_codes">Code Title</option>
                  <option value="codes">Codes</option>
                  <option value="wbs_element">WBS Element</option>
                  <option value="cost_element_for_budget_upload">COST ELEMENT (for budget uploads)</option>
                  <option value="cost_element">COST ELEMENT</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mb-4 mt-4">
                <label for="valueupdate">Enter new value:</label>
                <input type="text" class="form-control" id="valueupdate" name="valueupdate" placeholder="New Value" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <div class="form-group mb-4 mt-4">
                <label for="codesmapping_id">Where S/N is:</label>
                <input type="number" class="form-control" id="codesmapping_id" name="codesmapping_id" placeholder="S/N to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

<?php include("includes/footer.php") ?> 