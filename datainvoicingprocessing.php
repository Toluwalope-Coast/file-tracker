<?php include("includes/header1.php") ?>
<title>DATA CAPTURING/INVOICE PROCESSING</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mb-4 mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="datainvoiceProcessinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="datainvoiceProcessingupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="datainvoiceProcessingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap align-content-around" id="content">
              <h2 class="text-primary">DATA CAPTURING/INVOICE PROCESSING</h2> 
                <table class="table table-bordered table-hover table-striped" id="datacapturinginvoiceProcessing">
                  <thead class="bold">
                    <tr>
                      <td>TRANSACTION NO</td>
                      <td>TRACKING NUMBER</td>
                      <td>ORIGINATING DEPARTMENT</td>
                      <td>ENTERED BY</td>
                      <td>VENDOR NAME</td>
                      <td>TRANSACTION TYPE</td>
                      <td>INVOICE NO</td>
                      <td>INVOICE DATE</td>
                      <td>Contract / PO / SO Title</td>
                      <td>CONTRACT AMOUNT</td>
                      <td>CONTRACT BALANCE</td>
                      <td>TRANSACTION DETAILS</td>
                      <td>POSTING DATE</td>
                      <td>GROSS AMOUNT</td>
                      <td>REIMBURSIBLE</td>
                      <td>MARK UP</td>
                      <td>7.5% PENSION CHARGE</td>
                      <td>RETENTION</td>
                      <td>CURRENCY</td>
                      <td>ACTUAL PERFORMANCE PERIOD</td>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'tracking_number', id AS 'transaction_no', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, reimbursible, mark_up, pension_charge, retention, currency, actual_performance_period  FROM data_capturing_invoice_processing";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                    while ($row = mysqli_fetch_assoc($results)) {
                         echo "<tr>
                            <td>".$row["tracking_number"]."</td> 
                            <td>".$row["transaction_no"]."</td>
                            <td>".$row["originating_department"]."</td> 
                            <td>".$row["entered_by"]."</td> 
                            <td>".$row["vendor_name"]."</td>  
                            <td>".$row["transaction_type"]."</td>
                            <td>".$row["invoice_no"]."</td>
                            <td>".$row["invoice_date"]."</td>
                            <td>".$row["contract_po_so_title"]."</td>
                            <td>".number_format($row["contract_amount"],2)."</td>
                            <td>".number_format($row["contract_balance"],2)."</td>
                            <td>".$row["transaction_details"]."</td>
                            <td>".$row["posting_date"]."</td>
                            <td>".number_format($row["gross_amount"],2)."</td>
                            <td>".number_format($row["reimbursible"],2)."</td>
                            <td>".number_format($row["mark_up"],2)."</td>
                            <td>".number_format($row["pension_charge"],2)."</td>
                            <td>".number_format($row["retention"],2)."</td>
                            <td>".$row["currency"]."</td>
                            <td>".$row["actual_performance_period"]."</td>
                        </tr>";
                      }        

                      ?>
                    </tbody>
                </table>
              </div>
          </div>
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 