<?php include("functions/insertCodemappingProfileProcessor.php") ?>

<!DOCTYPE html>
<html>
<head>
  <title>UAP/WBS/SAP GL Insert Page</title>
  <?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="codesmappinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="codesmappingupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="codesmappingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4">Edit UAP/WBS/SAP GL</h2>
            
            <form action="functions/insertCodemappingProfileProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="codesmappingInsert" method="post">
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="codeTitle">Code Title:</label>
                <input type="text" class="form-control" id="codeTitle" placeholder="Enter Code Title" name="codeTitle" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="codes">Codes:</label>
                <input type="text" class="form-control" id="codes" placeholder="Enter Code" name="codes" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="wbsElement">WBS ELEMENT:</label>
                <input type="text" class="form-control" id="wbsElement" placeholder="Enter WBS Element" name="wbsElement" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="costElementForBudgetUpload">COST ELEMENT (for budget uploads):</label>
                <input type="number" class="form-control" id="costElementForBudgetUpload" placeholder="Enter Cost Element" name="costElementForBudgetUpload" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="costElement">COST ELEMENT:</label>
                <input type="number" class="form-control" id="costElement" placeholder="Enter Cost Element" name="costElement" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>

             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/codesmapping_large.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="uap_wbs_gl_codes_mapping">
              <div class="custom-file col-sm-8 offset-sm-7 mr-4 pr-4 ml-4 pl-4">
                <input type="file" class="custom-file-input form-group mr-4 pr-4 ml-4 pl-4" id="customFile" name="csvfile">
                <label class="custom-file-label mr-4 pr-4 ml-4 pl-4" for="customFile">Choose file </label>
              </div>
                <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit mt-4" name="staffProfileInsert">Insert</button>
              </form>
            
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

<?php include("includes/footer.php") ?> 