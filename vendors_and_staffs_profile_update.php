<?php include("includes/header1.php") ?>
<title>Staffs Profile Update</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="vendors_and_staffs_profile_insert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-active" href="vendors_and_staffs_profile_update.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="vendors_and_staffs_profile_delete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Update Staff / Vendor Profile</h2>
            <form action="functions/updateStaffProfileProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
              <label class="mt-4 pt-4" for="column">Column to update:</label>
              <select class="form-control" id="updatecol" name="column">
                <option value="">Please select the column to update:</option>
                <option value="name">Names</option>
                <option value="local_bank">LOCAL BANK NAME</option>
                <option value="foreign_bank">FOREIGN BANK</option>
                <option value="sort_code">SORT CODE</option>
                <option value="local_bank_acc_no">LOCAL BANK ACCOUNT NO</option>
                <option value="tin_no">TIN NO</option>
                <option value="reg_no">REG. NO</option>
                <option value="foreign_bank_acc_no">FOREIGN BANK ACCOUNT NO</option>
                <option value="home_address">ADDRESS</option>
                <option value="state">STATE</option>
                <option value="country">COUNTRY</option>
                <option value="email">EMAIL ADDRESS</option>
                <option value="tel_no">TEL. NO</option>
                <option value="audit_remark">AUDIT REMARK</option>
              </select>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <div class="form-group mb-4 mt-4">
                <label for="valueupdate">Enter new value:</label>
                <input type="text" class="form-control" id="valueupdate" name="valueupdate" placeholder="New Value" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <div class="form-group mb-4 mt-4">
                <label for="id">Where S/N is:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="S/N to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

  <?php include("includes/footer.php") ?>