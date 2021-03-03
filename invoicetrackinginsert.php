<?php include("includes/header1.php") ?>
<title>Invoice Tracking / Movements Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="invoicetrackinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="invoicetrackingupdate.php">Update</a></li>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4">Add Invoice Tracking/Movements</h2>
            
            <form action="functions/invoicetrackinginsertProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="userData" method="post">
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="id">The Trancsation No ro insert the below details into:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="Trancsation No to insert details into" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="dcoo_acknowledgement">Dcoo Acknowledgement:</label>
                <select name="dcoo_acknowledgement" id="dcoo_acknowledgement" class="custom-select" required>
                  <option value="">Select the department</option>
                  <option value="Dco">DCO</option>
                  <option value="Admin">Admin</option>
                  <option value="Operation">Operation</option>
                  <option value="Security">Security</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="dcoo_acknowledgement_date">Dcoo Acknowledgement Date: </label>
                <input type="date" class="form-control" id="dcoo_acknowledgement_date" placeholder="Enter the Dcoo Acknowledgement Date" name="dcoo_acknowledgement_date">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="dcoo_released_date">Dcoo Released Date: </label>
                <input type="date" class="form-control" id="dcoo_released_date" placeholder="Enter the Dcoo Released Date" name="dcoo_released_date">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="account_department">Account Department: </label>
                <select name="account_department" id="account_department" class="custom-select">
                  <option value="">Select the department</option>
                  <option value="Dco">DCO</option>
                  <option value="Admin">Admin</option>
                  <option value="Operation">Operation</option>
                  <option value="Security">Security</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="account_received_date">Account Received Date: </label>
                <input type="date" class="form-control" id="account_received_date" placeholder="Enter the Account Received Date" name="account_received_date">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="account_released_date_to_audit_1">Account Released Date To Audit (1ST): </label>
                <input type="date" class="form-control" id="account_released_date_to_audit_1" placeholder="Enter The Account Released Date To Audit (1ST)" name="account_released_date_to_audit_1">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="received_date_from_audit_1_queried">Received Date From Audit (1ST Audit Query): </label>
                <input type="date" class="form-control" id="received_date_from_audit_1_queried" placeholder="Enter The Account Released Date To Audit (1ST)" name="received_date_from_audit_1_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="account_released_date_to_audit_2">Account Released Date To Audit (2ND): </label>
                <input type="date" class="form-control" id="account_released_date_to_audit_2" placeholder="Enter The Account Released Date To Audit (2ND)" name="account_released_date_to_audit_2">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="received_date_from_audit_2_queried">Received Date From Audit (2ND Audit Query): </label>
                <input type="date" class="form-control" id="received_date_from_audit_2_queried" placeholder="Enter The Account Released Date To Audit (2ND)" name="received_date_from_audit_2_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="account_released_date_to_audit_3">Account Released Date To Audit (3RD): </label>
                <input type="date" class="form-control" id="account_released_date_to_audit_3" placeholder="Enter The Account Released Date To Audit (3RD)" name="account_released_date_to_audit_3">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="received_date_from_audit_3_queried">Received Date From Audit (3RD Audit Query): </label>
                <input type="date" class="form-control" id="received_date_from_audit_3_queried" placeholder="Enter The Account Released Date To Audit (3RD)" name="received_date_from_audit_3_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="account_released_date_to_audit_final_queried">Account Released Date To Audit (FINAL): </label>
                <input type="date" class="form-control" id="account_released_date_to_audit_final_queried" placeholder="Enter The Account Released Date To Audit (FINAL)" name="account_released_date_to_audit_final_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="received_date_from_audit_passed">Received Date From Audit (PASSED): </label>
                <input type="date" class="form-control" id="received_date_from_audit_passed" placeholder="Enter The Account Released Date To Audit (PASSED)" name="received_date_from_audit_passed">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_acknowledgement">Audit Acknowledgement: </label>
                <select name="audit_acknowledgement" id="audit_acknowledgement" class="custom-select">
                  <option value="">Select the Acknowledgement</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_recieved_date_1">Audit Received Date (1ST): </label>
                <input type="date" class="form-control" id="audit_recieved_date_1" placeholder="Enter The Audit Received Date (1ST)" name="audit_recieved_date_1">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_query_1">WHY QUERIED? (1ST AUDIT QUERY):</label>
                <select name="audit_query_1" id="audit_query_1" class="custom-select">
                  <option value="">If Queried, Select the Reasons</option>
                  <option value="Contract Agreement Expired">Contract Agreement Expired</option>
                  <option value="No Contract Agreement">No Contract Agreement</option>
                  <option value="Job Completion Certificate Not Attached">Job Completion Certificate Not Attached</option>
                  <option value="No Audit Attestation">No Audit Attestation</option>
                  <option value="Wrong Amount On Invoice">Wrong Amount On Invoice</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="returned_date_1_audit_queried">RETURNED DATE (1ST AUDIT QUERY): </label>
                <input type="date" class="form-control" id="returned_date_1_audit_queried" placeholder="Enter The RETURNED DATE (1ST AUDIT QUERY)" name="returned_date_1_audit_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
               <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_recieved_date_2">Audit Received Date (2ND): </label>
                <input type="date" class="form-control" id="audit_recieved_date_2" placeholder="Enter The Audit Received Date (2ND)" name="audit_recieved_date_2">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_query_2">WHY QUERIED? (2ND AUDIT QUERY):</label>
                <select name="audit_query_2" id="audit_query_2" class="custom-select">
                  <option value="">If Queried, Select the Reasons</option>
                  <option value="Contract Agreement Expired">Contract Agreement Expired</option>
                  <option value="No Contract Agreement">No Contract Agreement</option>
                  <option value="Job Completion Certificate Not Attached">Job Completion Certificate Not Attached</option>
                  <option value="No Audit Attestation">No Audit Attestation</option>
                  <option value="Wrong Amount On Invoice">Wrong Amount On Invoice</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="returned_date_2_audit_queried">RETURNED DATE (2ND AUDIT QUERY): </label>
                <input type="date" class="form-control" id="returned_date_2_audit_queried" placeholder="Enter The RETURNED DATE (2ND AUDIT QUERY)" name="returned_date_2_audit_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
               <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_recieved_date_3">Audit Received Date (3RD): </label>
                <input type="date" class="form-control" id="audit_recieved_date_3" placeholder="Enter The Audit Received Date (3RD)" name="audit_recieved_date_3">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_query_3">WHY QUERIED? (3RD AUDIT QUERY):</label>
                <select name="audit_query_3" id="audit_query_3" class="custom-select">
                  <option value="">If Queried, Select the Reasons</option>
                  <option value="Contract Agreement Expired">Contract Agreement Expired</option>
                  <option value="No Contract Agreement">No Contract Agreement</option>
                  <option value="Job Completion Certificate Not Attached">Job Completion Certificate Not Attached</option>
                  <option value="No Audit Attestation">No Audit Attestation</option>
                  <option value="Wrong Amount On Invoice">Wrong Amount On Invoice</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="returned_date_3_audit_queried">RETURNED DATE (3RD AUDIT QUERY): </label>
                <input type="date" class="form-control" id="returned_date_3_audit_queried" placeholder="Enter The RETURNED DATE (1ST AUDIT QUERY)" name="returned_date_3_audit_queried">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_recieved_date_final">Audit Received Date (FINAL): </label>
                <input type="date" class="form-control" id="audit_recieved_date_final" placeholder="Enter The Audit Received Date (FINAL)" name="audit_recieved_date_final">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="audit_final_remark">Audit Final Remark:</label>
                <select name="audit_final_remark" id="audit_final_remark" class="custom-select">
                  <option value="">Select the Audit Remark</option>
                  <option value="Passed">Passed</option>
                  <option value="Queried">Queried</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="returned_date_passed_document">RETURNED DATE (PASSED DOCUMENT): </label>
                <input type="date" class="form-control" id="returned_date_passed_document" placeholder="Enter The RETURNED DATE (1ST AUDIT QUERY)" name="returned_date_passed_document">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>

             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/invoice_trackinglarge.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="invoice_tracking">
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