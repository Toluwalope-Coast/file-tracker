<?php include("includes/header1.php") ?>
<title>Invoice Tracking/Movements Update</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="invoicetrackinginsert.php">Insert</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="invoicetrackingupdate.php">Update</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Update Invoice Tracking/Movements Details</h2>
            <form action="functions/invoicetrackingupdateProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
              <label class="mt-4 pt-4" for="column">Column to Update:</label>
              <select class="form-control" id="column" name="column">
                <option value="">Please select the column to update:</option>
                <option value="dcoo_acknowledgement">Dcoo Acknowledgement</option>
                <option value="dcoo_acknowledgement_date">Dcoo Acknowledgement Date</option>
                <option value="dcoo_released_date">Dcoo Released Date</option>
                <option value="account_department">Account Department</option>
                <option value="account_received_date">Account Received Date</option>
                <option value="account_released_date_to_audit_1">Account Released Date To Audit (1ST)</option>
                <option value="received_date_from_audit_1_queried">Received Date From Audit (1ST Audit Query)</option>
                <option value="account_released_date_to_audit_2">Account Released Date To Audit (2ND)</option>
                <option value="received_date_from_audit_2_queried">Received Date From Audit (2ND Audit Query)</option>
                <option value="account_released_date_to_audit_3">Account Released Date To Audit (3RD)</option>
                <option value="received_date_from_audit_3_queried">Received Date From Audit (3RD Audit Query)</option>
                <option value="account_released_date_to_audit_final_queried">Account Released Date To Audit (FINAL)</option>
                <option value="received_date_from_audit_passed">Received Date From Audit (PASSED)</option>
                <option value="audit_acknowledgement">Audit Acknowledgement</option>
                <option value="audit_recieved_date_1">Audit Received Date (1ST)</option>
                <option value="audit_query_1">WHY QUERIED? (1ST AUDIT QUERY)</option>
                <option value="returned_date_1_audit_queried">RETURNED DATE (1ST AUDIT QUERY)</option>
                <option value="audit_recieved_date_2">Audit Received Date (2ND)</option>
                <option value="audit_query_2">WHY QUERIED? (2ND AUDIT QUERY)</option>
                <option value="returned_date_2_audit_queried">RETURNED DATE (2ND AUDIT QUERY)</option>
                <option value="audit_recieved_date_3">Audit Received Date (3RD)</option>
                <option value="audit_query_3">WHY QUERIED? (3RD AUDIT QUERY)</option>
                <option value="returned_date_3_audit_queried">RETURNED DATE (3RD AUDIT QUERY)</option>
                <option value="audit_recieved_date_final">Audit Received Date (FINAL)</option>
                <option value="audit_final_remark">Audit Final Remark</option>
                <option value="returned_date_passed_document">RETURNED DATE (PASSED DOCUMENT)</option>
              </select>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->

              <div class="form-group mb-4 mt-4">
                <label for="value">Enter new value:</label>
                <input type="text" class="form-control" id="value" name="value" placeholder="New Value" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <div class="form-group mb-4 mt-4">
                <label for="id">Where tracking_number is:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="tracking_number to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
            
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>