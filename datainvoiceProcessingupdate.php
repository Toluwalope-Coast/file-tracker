<?php include("includes/header1.php") ?>
<title>Data Capturing/Invoice Processing Update</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="datainvoiceProcessinginsert.php">Insert</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="datainvoiceProcessingupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="datainvoiceProcessingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Update Data Capturing/Invoice Processing Details</h2>
            <form action="functions/datainvoiceProcessingupdateProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
              <label class="mt-4 pt-4" for="column">Column to Update:</label>
              <select class="form-control" id="column" name="column">
                <option value="">Please select the column to update:</option>
                <option value="originating_department">Originating Department</option>
                <option value="entered_by">Enter By</option>
                <option value="vendor_name">Vendor Name</option>
                <option value="transaction_type">Transaction Type</option>
                <option value="invoice_no">Invoice No</option>
                <option value="invoice_date">Invoice_Date</option>
                <option value="contract_po_so_title">Contract / PO / SO Title</option>
                <option value="contract_amount">Contract Amount</option>
                <option value="contract_balance">Contract Balance</option>
                <option value="transaction_details">Transaction Details</option>
                <option value="posting_date">Posting_Date</option>
                <option value="gross_amount">Gross Amount</option>
                <option value="mark_up">Mark_Up</option>
                <option value="pension_charge">7.5% Pension Charge</option>
                <option value="retention">Retention</option>
                <option value="currency">Currency</option>
                <option value="actual_performance_period">Actual Performance Period</option>
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
                <label for="id">Where Tracking No is:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="Tracking No to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>