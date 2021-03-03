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
              <li class="nav-item "><a class="nav-link edit-active" href="vendors_and_staffs_profile_insert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="vendors_and_staffs_profile_update.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="vendors_and_staffs_profile_delete.php">Delete</a></li>
            </ul>
          </nav>
        <div class="col-sm-12 edit-form">

          <h2 class="col-sm-8 offset-sm-1 mb-4">Add Staff / Vendor Profile</h2>
            
          <form action="functions/insertStaffProfileProcessor.php" method="post" role="form" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="staffData">
            <div class="form-group mr-4 pr-4 ml-4 pl-4">
              <label for="uname">Name:</label>
              <input type="text" class="form-control" id="staffName" placeholder="Enter Staffs First Name and Last Name" name="name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="localBank">Local Bank</label>
                <input type="text" class="form-control" id="localBank" placeholder="Enter Local Bank Name" name="localBank">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="foreignBank">Foreign Bank</label>
                <input type="text" class="form-control" id="foreignBank" placeholder="Enter Foreign Bank Name" name="foreignBank">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="sortCode">Sort-Code</label>
                <input type="number" class="form-control" id="sortCode" placeholder="Enter Sort-Code" name="sortCode">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="localBankAccNo">Local Bank Account Number</label>
                <input type="number" class="form-control" id="localBankAccNo" placeholder="Enter Local Bank Account Number" name="localBankAccNo">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="tinNumber">TIN Number</label>
                <input type="number" class="form-control" id="tinNumber" placeholder="Enter TIN Number" name="tinNumber">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="regNo">Reg. No.</label>
                <input type="text" class="form-control" id="regNo" placeholder="Enter Reg. No." name="regNo">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="foreignlBankAccNo"> Foreign Bank Account Number</label>
                <input type="number" class="form-control" id="foreignlBankAccNo" placeholder="Enter Foreign Account Number" name="foreignlBankAccNo">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="address">House Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter House Address" name="address" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" placeholder="Enter User State" name="state" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" placeholder="Enter User Country" name="country" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="telNo">Tel. No</label>
                <input type="tel" class="form-control" id="telNo" placeholder="Enter Phone No." name="telNo">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="auditRemark">Remark:</label>
                <select name="auditRemark" id="auditRemark" class="custom-select">
                  <option value="">Select the Audit Remark</option>
                  <option value="Passed">Passed</option>
                  <option value="Queried">Queried</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <input  type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit" name="insert_staff_profile" id="insert_staff_profile" value="Insert">
            </form>

             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/vendors_and_staffs_profile_large.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="vendors_and_staffs_profile">
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