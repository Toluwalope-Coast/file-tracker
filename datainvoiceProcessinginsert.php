<?php include("includes/header1.php") ?>
<title>Data Capturing/Invoice Processing Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="datainvoiceProcessinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="datainvoiceProcessingupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="datainvoiceProcessingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4">Add Data Capturing/Invoice Processing</h2>
            
            <form action="functions/datainvoiceprocessingProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="datainvoiceProcessing" method="post">
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="originating_department">Originating Department:</label>
                <select name="originating_department" id="originating_department" class="custom-select" required>
                  <option value="">Select the Originating department</option>
                  <option value="Dco">DCO</option>
                  <option value="Admin">Admin</option>
                  <option value="Operation">Operation</option>
                  <option value="Security">Security</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="entered_by">Entered By:</label>
                <input type="text" class="form-control" id="entered_by" placeholder="Enter By Whom" name="entered_by" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="vendorname">Vendor Name:</label>
                <select name="vendorname" id="vendorname" class="custom-select" required>
                  <option value="">Select the Vendor Name</option>
                   <?php
                        
                    $sql = "SELECT name FROM vendorandstaff";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }
                    ?>
                    <?php
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo '<option value="'.$row['name'].'">'.$row['name'].' </option>';
                      }        
                    ?>
                  </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="transactionType">Transaction Type:</label>
                <select name="transactionType" id="transactionType" class="custom-select" required>
                  <option value="">Select the transaction type</option>
                  <option value="Vendor">Vendor</option>
                  <option value="Staff Claims">Staff Claims</option>
                  <option value="Estacode">Estacode</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="invoice_no">Invoice Number</label>
                <input type="number" class="form-control" id="invoice_no" placeholder="Enter the Invoice Number" name="invoice_no">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="invoice_date">Invoice Date</label>
                <input type="text" class="form-control" id="invoice_date" placeholder="Enter the Invoice Date as yyyy/mm/dd" name="invoice_date" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="contract_po_so_title">Contract / PO / SO Title</label>
                <input type="text" class="form-control" id="contract_po_so_title" placeholder="Enter Contract / PO / SO Title Details" name="contract_po_so_title" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="contract_amount">CONTRACT AMOUNT</label>
                <input type="number" min="0" step="0.01" class="form-control" id="contract_amount" placeholder="Enter the Contract Amount without comma seperated" name="contract_amount">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="contract_balance">CONTRACT BALANCE</label>
                <input type="number" min="0" step="0.01" class="form-control" id="contract_balance" placeholder="Enter the Contract Balance without comma seperated" name="contract_balance">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="transaction_details">TRANSACTION DETAILS</label>
                <input type="text" class="form-control" id="transaction_details" placeholder="Enter the Transaction Details" name="transaction_details" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="posting_date">Posting Date</label>
                <input type="text" class="form-control" id="posting_date" placeholder="Enter the Posting Date as yyyy/mm/dd" name="posting_date" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="gross_amount">GROSS Amount</label>
                <input type="number" min="0" step="0.01" class="form-control" id="gross_amount" placeholder="Enter the GROSS Amount without comma seperated" name="gross_amount">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="mark_up">Mark-UP</label>
                <input type="number" min="0" step="0.01" class="form-control" id="mark_up" placeholder="Enter the Mark Up without comma seperated" name="mark_up">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="pension_charge">7.5% Pension Charge</label>
                <input type="number" min="0" step="0.01" class="form-control" id="pension_charge" placeholder="Enter the 7.5% Pension Charge without comma seperated" name="pension_charge">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="retention">Retention</label>
                <input type="number" min="0" step="0.01" class="form-control" id="retention" placeholder="Enter the Retention without comma seperated" name="retention">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="currencyType">Currency:</label>
                <select name="currencyType" class="custom-select" id="currencyType" required>
                  <option value="">Select the currency type</option>
                  <option value="USD">USD</option>
                  <option value="NGN">NGN</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="actual_performance_period">Actual Performance Period</label>
                <input type="text" class="form-control" id="actual_performance_period" placeholder="Enter the Actual Performance Period as Jan" name="actual_performance_period" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>


             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/datainvoiceProcessinglarge.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="datainvoiceProcessing">
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