<?php include("includes/header1.php") ?>
<title>INVOICE TRACKING / MOVEMENTS</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="invoicetrackinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="invoicetrackingupdate.php">Update</a></li>
          </nav>
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap align-content-around" id="content">
              <h2 class="text-primary">INVOICE TRACKING</h2> 
               <table class="table table-bordered table-hover table-striped" id="invoice_tracking">
                  <thead class="bold">
                    <tr>
                      <td>TRANSACTION NO</td>
                      <td>TRACKING NUMBER</td>
                      <td>ORIGINATING_DEPARTMENT</td>
                      <td>ENTERED BY</td>
                      <td>VENDOR NAME</td>
                      <td>TRANSACTION_TYPE</td>
                      <td>INVOICE NO</td>
                      <td>INVOICE DATE</td>
                      <td>Contract / PO / SO Title</td>
                      <td>CONTRACT AMOUNT</td>
                      <td>CONTRACT BALANCE</td>
                      <td>TRANSACTION_DETAILS</td>
                      <td>POSTING DATE</td>
                      <td>GROSS AMOUNT</td>
                      <td>DCOO ACKNOWLEDGEMENT</td>
                      <td>DCOO ACKNOWLEDGEMENT DATE</td>
                      <td>DCOO ACKNOWLEDGEMENT RELEASE DATE</td>
                      <td>ACCOUNT DEPARTMENT FROM</td>
                      <td>ACCOUNT RECIEVED DATE</td>
                      <td>ACCOUNT RELEASE DATE TO AUDIT (1ST)</td>
                      <td>RECIEVED DATE FROM AUDIT (1ST AUDIT QUERY)</td>
                      <td>ACCOUNT RELEASE DATE TO AUDIT (2ND)</td>
                      <td>RECIEVED DATE FROM AUDIT (2ND AUDIT QUERY)</td>
                      <td>ACCOUNT RELEASE DATE TO AUDIT (3RD)</td>
                      <td>RECIEVED DATE FROM AUDIT (3RD AUDIT QUERY)</td>
                      <td>ACCOUNT RELEASE DATE TO AUDIT (FINAL)</td>
                      <td>RECIEVED DATE FROM AUDIT (PASSED DOCUMENT)</td>
                      <td>SEND FOR PAYMENT</td>
                      <td>AUDIT RECIEVED DATE (1ST)</td>
                      <td>WHY QUERIED? (1ST AUDIT QUERY)</td>
                      <td>RETURNED DATE (1ST AUDIT QUERY)</td>
                      <td>AUDIT RECIEVED DATE (2ND)</td>
                      <td>WHY QUERIED? (2ND AUDIT QUERY)</td>
                      <td>RETURNED DATE (2ND AUDIT QUERY)</td>
                      <td>AUDIT RECIEVED DATE (3RD)</td>
                      <td>WHY QUERIED? (3RD AUDIT QUERY)</td>
                      <td>RETURNED DATE (3RD AUDIT QUERY)</td>
                      <td>AUDIT RECIEVED DATE (FINAL)</td>
                      <td>AUDIT FINAL REMARK</td>
                      <td>RETURNED DATE (PASSED DOCUMENT)</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'tracking_number', id AS 'transaction_no', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, dcoo_acknowledgement, dcoo_acknowledgement_date, dcoo_released_date, account_department, account_received_date, account_released_date_to_audit_1, received_date_from_audit_1_queried, account_released_date_to_audit_2, received_date_from_audit_2_queried, account_released_date_to_audit_3, received_date_from_audit_3_queried, account_released_date_to_audit_final_queried, received_date_from_audit_passed, send_for_payment, audit_acknowledgement, audit_recieved_date_1, audit_query_1, returned_date_1_audit_queried, audit_recieved_date_2, audit_query_2, returned_date_2_audit_queried, audit_recieved_date_3, audit_query_3, returned_date_3_audit_queried, audit_recieved_date_final, audit_final_remark, returned_date_passed_document FROM invoice_tracking";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {

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
                            <td>".$row["dcoo_acknowledgement"]."</td>
                            <td>".$row["dcoo_acknowledgement_date"]."</td>
                            <td>".$row["dcoo_released_date"]."</td>
                            <td>".$row["account_department"]."</td>
                            <td>".$row["account_received_date"]."</td>
                            <td>".$row["account_released_date_to_audit_1"]."</td>
                            <td>".$row["received_date_from_audit_1_queried"]."</td>
                            <td>".$row["account_released_date_to_audit_2"]."</td>
                            <td>".$row["received_date_from_audit_2_queried"]."</td>
                            <td>".$row["account_released_date_to_audit_3"]."</td>
                            <td>".$row["received_date_from_audit_3_queried"]."</td>
                            <td>".$row["account_released_date_to_audit_final_queried"]."</td>
                            <td>".$row["received_date_from_audit_passed"]."</td>
                            <td>".$row["dcoo_acknowledgement"]."</td>
                            <td>".$row["send_for_payment"]."</td>
                            <td>".$row["audit_acknowledgement"]."</td>
                            <td>".$row["audit_recieved_date_1"]."</td>
                            <td>".$row["audit_query_1"]."</td>
                            <td>".$row["returned_date_1_audit_queried"]."</td>
                            <td>".$row["audit_recieved_date_2"]."</td>
                            <td>".$row["audit_query_2"]."</td>
                            <td>".$row["returned_date_2_audit_queried"]."</td>
                            <td>".$row["audit_recieved_date_3"]."</td>
                            <td>".$row["audit_query_3"]."</td>
                            <td>".$row["returned_date_3_audit_queried"]."</td>
                            <td>".$row["audit_recieved_date_final"]."</td>
                            <td>".$row["audit_final_remark"]."</td>
                            <td>".$row["returned_date_passed_document"]."</td>

                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>
            
            
          </div>
        </div>
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 