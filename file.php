<?php include("includes/header1.php") ?>

<title>File</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>

      <div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap .align-content-around" id="content">
              <h2 class="text-primary"> Cash Calls</h2>
                <table class="table table-bordered table-hover table-striped cash" id="cash_call">
                  <thead class="bold">
                    <tr>
                      <td class="collspan" colspan="9">Summary of Cash Call Request</td>
                      <td class="collspan" colspan="8">Summary of Cash Call Payment</td>
                      <td class="collspan" colspan="8">Summary of Outstandings</td>
                    </tr>
                    <tr>
                      <td>S/N</td>
                      <td>DATE</td>
                      <td>CASH CALL REQUEST DESCRIPTION</td>
                      <td>OML_42_JV_AMT (NGN)</td>
                      <td>OML_42_JV_AMT (USD)</td>
                      <td>NPDC (NGN)</td>
                      <td>NPDC (USD)</td>
                      <td>FHN (NGN)</td>
                      <td>FHN (USD)</td>
                      <td>DATE</td>
                      <td>PAYMENT</td>
                      <td>OML 42 JV AMT (NGN)</td>
                      <td>OML 42 JV AMT (USD)</td>
                      <td>NPDC (NGN)</td>
                      <td>NPDC (USD)</td>
                      <td>FHN (NGN)</td>
                      <td>FHN (USD)</td>
                      <td>DATE</td>
                      <td>PAYMENT</td>
                      <td>OML_42_JV_AMT (NGN)</td>
                      <td>OML_42_JV_AMT (USD)</td>
                      <td>NPDC (NGN)</td>
                      <td>NPDC (USD)</td>
                      <td>FHN (NGN)</td>
                      <td>FHN (USD)</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php


                        
                    $sql = "SELECT * FROM cash_call";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>".$row["cash_call_id"]."</td> 
                            <td>".$row["cash_call_date"]."</td>
                            <td>".$row["cash_call_description"]."</td>
                            <td>".number_format($row["OML_42_JV_AMT_NGN"], 2)."</td>
                            <td>".number_format($row["OML_42_JV_AMT_USD"], 2)."</td>
                            <td>".number_format($row["npdc_ngn"], 2)."</td>
                            <td>".number_format($row["npdc_usd"], 2)."</td>
                            <td>".number_format($row["fhn_ngn"], 2)."</td>
                            <td>".number_format($row["fhn_usd"], 2)."</td>
                            <td>".$row["cash_payment_date"]."</td>
                            <td>".$row["payment_description"]."</td>
                            <td>".number_format($row["OML_42_JV_AMT_NGN_PAYMENT"], 2)."</td>
                            <td>".number_format($row["OML_42_JV_AMT_USD_PAYMENT"], 2)."</td>
                            <td>".number_format($row["npdc_ngn_payment"], 2)."</td>
                            <td>".number_format($row["npdc_usd_payment"], 2)."</td>
                            <td>".number_format($row["fhn_ngn_payment"], 2)."</td>
                            <td>".number_format($row["fhn_usd_payment"], 2)."</td>
                            <td>".$row["date_outstanding"]."</td> 
                            <td>".$row["outstanding_payment"]."</td>
                            <td>".number_format($row["OML_42_JV_AMT_NGN_OUTSTANDING"], 2)."</td>
                            <td>".number_format($row["OML_42_JV_AMT_USD_OUTSTANDING"], 2)."</td>
                            <td>".number_format($row["npdc_ngn_outstanding"], 2)."</td>
                            <td>".number_format($row["npdc_usd_outstanding"], 2)."</td>
                            <td>".number_format($row["fhn_ngn_outstanding"], 2)."</td>
                            <td>".number_format($row["fhn_usd_outstanding"], 2)."</td>
                        </tr>";
                      }        
                    ?>
                     <tr>
                     <td></td>
                     <td></td> 
                      <td>Total Cash Call</td>
                      <td><?php $sql1 = "SELECT OML_42_JV_AMT_NGN FROM cash_call";  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_NGN"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT OML_42_JV_AMT_USD FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_USD"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT npdc_ngn FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["npdc_ngn"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT npdc_usd FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["npdc_usd"];
                      } echo number_format($sum, 2);?></td>


                    <td> <?php $sql = "SELECT fhn_ngn FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["fhn_ngn"];
                      } echo number_format($sum, 2);?></td>


                    <td> <?php $sql = "SELECT fhn_usd FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["fhn_usd"];
                      } echo number_format($sum, 2);?></td>


                     <td></td> 
                     <td></td> 

                     <td> <?php $sql = "SELECT OML_42_JV_AMT_NGN_PAYMENT FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_NGN_PAYMENT"];
                      } echo number_format($sum, 2);?></td>


                    <td> <?php $sql = "SELECT OML_42_JV_AMT_USD_PAYMENT FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_USD_PAYMENT"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT npdc_ngn_payment FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["npdc_ngn_payment"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT npdc_usd_payment FROM cash_call";  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["npdc_usd_payment"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT fhn_ngn_payment FROM cash_call";  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["fhn_ngn_payment"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT fhn_usd_payment FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["fhn_usd_payment"];
                      } echo number_format($sum, 2);?></td>

                     <td></td> 
                     <td></td> 
                     <td> <?php $sql = "SELECT OML_42_JV_AMT_NGN_OUTSTANDING FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_NGN_OUTSTANDING"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT OML_42_JV_AMT_USD_OUTSTANDING FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_USD_OUTSTANDING"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT npdc_ngn_outstanding FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["npdc_ngn_outstanding"];
                      } echo number_format($sum, 2);?></td>


                    <td> <?php $sql = "SELECT npdc_usd_outstanding FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["npdc_usd_outstanding"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT fhn_ngn_outstanding FROM cash_call"; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["fhn_ngn_outstanding"];
                      } echo number_format($sum, 2);?></td>

                    <td> <?php $sql = "SELECT fhn_usd_outstanding FROM cash_call";  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["fhn_usd_outstanding"];
                      } echo number_format($sum, 2);?></td>
                  </tr>
                    </tbody>
                </table>


<!-- cash calls closes -->



<!-- Data Capturing / Invoicing Processing -->

        <h2 class="text-primary">DATA CAPTURING/INVOICE PROCESSING</h2> 
                <table class="table table-bordered table-hover table-striped" id="datacapturinginvoiceProcessing">
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
                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'transaction_no', id AS 'tracking_number', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, reimbursible, mark_up, pension_charge, retention, currency, actual_performance_period  FROM data_capturing_invoice_processing";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                    while ($row = mysqli_fetch_assoc($results)) {
                         echo "<tr>
                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["tracking_number"]}</td> 
                            <td>{$row["originating_department"]}</td> 
                            <td>{$row["entered_by"]}</td> 
                            <td>{$row["vendor_name"]}</td>  
                            <td>{$row["transaction_type"]}</td>
                            <td>{$row["invoice_no"]}</td>
                            <td>{$row["invoice_date"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                            <td>{$row["contract_amount"]}</td>
                            <td>{$row["contract_balance"]}</td>
                            <td>{$row["transaction_details"]}</td>
                            <td>{$row["posting_date"]}</td>
                            <td>{$row["gross_amount"]}</td>
                            <td>{$row["reimbursible"]}</td>
                            <td>{$row["mark_up"]}</td>
                            <td>{$row["pension_charge"]}</td>
                            <td>{$row["retention"]}</td>
                            <td>{$row["currency"]}</td>
                            <td>{$row["actual_performance_period"]}</td>
                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>
            
      <!-- Data Capturing / Invoicing Processing  closes -->


      <!-- Invoicing Tracking -->


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
                      <td>CURRENCY</td>
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
                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'transaction_no', id AS 'tracking_number', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, dcoo_acknowledgement, dcoo_acknowledgement_date, dcoo_released_date, account_department, account_received_date, account_released_date_to_audit_1, received_date_from_audit_1_queried, account_released_date_to_audit_2, received_date_from_audit_2_queried, account_released_date_to_audit_3, received_date_from_audit_3_queried, account_released_date_to_audit_final_queried, received_date_from_audit_passed, send_for_payment, audit_acknowledgement, audit_recieved_date_1, audit_query_1, returned_date_1_audit_queried, audit_recieved_date_2, audit_query_2, returned_date_2_audit_queried, audit_recieved_date_3, audit_query_3, returned_date_3_audit_queried, audit_recieved_date_final, audit_final_remark, returned_date_passed_document FROM invoice_tracking";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {

                        echo "<tr>

                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["tracking_number"]}</td> 
                            <td>{$row["originating_department"]}</td> 
                            <td>{$row["entered_by"]}</td> 
                            <td>{$row["vendor_name"]}</td>  
                            <td>{$row["transaction_type"]}</td>
                            <td>{$row["invoice_no"]}</td>
                            <td>{$row["invoice_date"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                            <td>{$row["contract_amount"]}</td>
                            <td>{$row["contract_balance"]}</td>
                            <td>{$row["transaction_details"]}</td>
                            <td>{$row["posting_date"]}</td>
                            <td>{$row["gross_amount"]}</td>
                            <td>{$row["dcoo_acknowledgement"]}</td>
                            <td>{$row["dcoo_acknowledgement_date"]}</td>
                            <td>{$row["dcoo_released_date"]}</td>
                            <td>{$row["account_department"]}</td>
                            <td>{$row["account_received_date"]}</td>
                            <td>{$row["account_released_date_to_audit_1"]}</td>
                            <td>{$row["received_date_from_audit_1_queried"]}</td>
                            <td>{$row["account_released_date_to_audit_2"]}</td>
                            <td>{$row["received_date_from_audit_2_queried"]}</td>
                            <td>{$row["account_released_date_to_audit_3_queried"]}</td>
                            <td>{$row["received_date_from_audit_3_queried"]}</td>
                            <td>{$row["account_released_date_to_audit_final_queried"]}</td>
                            <td>{$row["received_date_from_audit_passed"]}</td>
                            <td>{$row["dcoo_acknowledgement"]}</td>
                            <td>{$row["send_for_payment"]}</td>
                            <td>{$row["audit_acknowledgement"]}</td>
                            <td>{$row["audit_recieved_date_1"]}</td>
                            <td>{$row["audit_query_1"]}</td>
                            <td>{$row["returned_date_1_audit_queried"]}</td>
                            <td>{$row["audit_recieved_date_2"]}</td>
                            <td>{$row["audit_query_2"]}</td>
                            <td>{$row["returned_date_2_audit_queried"]}</td>
                            <td>{$row["audit_recieved_date_3"]}</td>
                            <td>{$row["audit_query_3"]}</td>
                            <td>{$row["returned_date_3_audit_queried"]}</td>
                            <td>{$row["audit_recieved_date_final"]}</td>
                            <td>{$row["audit_final_remark"]}</td>
                            <td>{$row["returned_date_passed_document"]}</td>

                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>

      <!-- Invoicing Tracking closes -->

        

      <!-- Contract Commitmentb -->


        <h2 class="text-primary">UAP CODE / WBS / SAP GLS</h2> 
               <table class="table table-bordered table-hover table-striped" id="datacapturinginvoiceProcessing">
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
                      <td>UAP CODES</td>
                      <td>UAP CODE DESCRIPTION</td>
                      <td>WBS ELEMENT</td>
                      <td>SAP GL ACCOUNT</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'transaction_no', id AS 'tracking_number', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, title_of_codes, codes, wbs_element, cost_element FROM contract_commitment";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["tracking_number"]}</td> 
                            <td>{$row["originating_department"]}</td> 
                            <td>{$row["entered_by"]}</td> 
                            <td>{$row["vendor_name"]}</td>  
                            <td>{$row["transaction_type"]}</td>
                            <td>{$row["invoice_no"]}</td>
                            <td>{$row["invoice_date"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                            <td>{$row["contract_amount"]}</td>
                            <td>{$row["contract_balance"]}</td>
                            <td>{$row["transaction_details"]}</td>
                            <td>{$row["posting_date"]}</td>
                            <td>{$row["gross_amount"]}</td>
                            <td>{$row["title_of_codes"]}</td> 
                            <td>{$row["codes"]}</td>
                            <td>{$row["wbs_element"]}</td>
                            <td>{$row["cost_element"]}</td>
                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>

      <!-- Contract Commitment closes -->


      <!-- Sap Documents -->


              <h2><a href="sapdocumentpayment.php"> SAP DOCUMENTS–INVOICE/PAYMENT</a></h2> 
               <table class="table table-bordered table-hover table-striped" id="sap_documents">
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
                      <td>INVOICE DOCUMENT NUMBER</td>
                      <td>PAYMENT DOCUMENT NUMBER</td>
                      <td>CLEARING DOCUMENT NUMBER</td>
                      <td>SAP STATUS</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php


                        
                   $sql = "SELECT CONCAT(prefix, id) AS 'transaction_no', id AS 'tracking_number', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, invoice_document_number, payment_document_number, clearing_document_number, sap_status FROM sap_documents";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["tracking_number"]}</td> 
                            <td>{$row["originating_department"]}</td> 
                            <td>{$row["entered_by"]}</td> 
                            <td>{$row["vendor_name"]}</td>  
                            <td>{$row["transaction_type"]}</td>
                            <td>{$row["invoice_no"]}</td>
                            <td>{$row["invoice_date"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                            <td>{$row["contract_amount"]}</td>
                            <td>{$row["contract_balance"]}</td>
                            <td>{$row["transaction_details"]}</td>
                            <td>{$row["posting_date"]}</td>
                            <td>{$row["gross_amount"]}</td>
                            <td>{$row["invoice_document_number"]}</td>
                            <td>{$row["payment_document_number"]}</td>
                            <td>{$row["clearing_document_number"]}</td>
                            <td>{$row["sap_status"]}</td>

                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>

      <!-- Sap Documents Closes -->


      <!-- Net Payment Computation -->


       
              <h2 class="text-primary"><a href="netpayment.php"> NET PAYMENT COMPUTATION </a></h2> 
               <table class="table table-bordered table-hover table-striped" id="net_payment_computation">
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
                      <td>REIMBURSIBLE</td>
                      <td>MARK UP</td>
                      <td>7.5% PENSION CHARGE</td>
                      <td>RETENSION</td>
                      <td>VAT</td>
                      <td>WHT</td>
                      <td>NCD</td>
                      <td>NET AMOUNT</td>
                      <td>CURRENCY</td>
                      <td>ACTUAL PERFORMANCE PERIOD</td>
                      <td>APPROVAL</td>
                      <td>PAYMENT STATUS</td>
                      <td>PAYMENT DATE</td>
                      <td>MONTH</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php


                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'transaction_no', id AS 'tracking_number', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, reimbursible, mark_up, pension_charge, retention, vat, wht, ncd, net_amount, currency, actual_performance_period, approval_status, payment_status, payment_date, month FROM net_payment_computation";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                           <td>{$row["transaction_no"]}</td>
                            <td>{$row["tracking_number"]}</td> 
                            <td>{$row["originating_department"]}</td> 
                            <td>{$row["entered_by"]}</td> 
                            <td>{$row["vendor_name"]}</td>  
                            <td>{$row["transaction_type"]}</td>
                            <td>{$row["invoice_no"]}</td>
                            <td>{$row["invoice_date"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                            <td>{$row["contract_amount"]}</td>
                            <td>{$row["contract_balance"]}</td>
                            <td>{$row["transaction_details"]}</td>
                            <td>{$row["posting_date"]}</td>
                            <td>{$row["gross_amount"]}</td>
                            <td>{$row["reimbursible"]}</td>
                            <td>{$row["mark_up"]}</td>
                            <td>{$row["pension_charge"]}</td>
                            <td>{$row["retention"]}</td>
                            <td>{$row["vat"]}</td>
                            <td>{$row["wht"]}</td>
                            <td>{$row["ncd"]}</td>
                            <td>{$row["net_amount"]}</td>
                            <td>{$row["currency"]}</td>
                            <td>{$row["actual_performance_period"]}</td>
                            <td>{$row["approval_status"]}</td>
                            <td>{$row["payment_status"]}</td>
                            <td>{$row["payment_date"]}</td>
                            <td>{$row["month"]}</td>
                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>

      <!-- Net Payment Computation Closes -->


    
          </div>
        </div>
      </div>  <!-- last nav row closes -->

  <?php include("includes/footer.php") ?> 