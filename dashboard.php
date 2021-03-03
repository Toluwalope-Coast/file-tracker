<?php include("includes/header1.php") ?>
<title>Dashboard</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
   
    
<div class="row">  <!-- last nav row -->
  <?php include("includes/sideNav.php") ?>    
        <div class="col-sm-10 offset-sm-2" id="main">
            <div class="col-sm-12 d-inline-flex .flex-row flex-wrap .align-content-around" id="content">

              <h4 class="heading col-sm-3 offset-sm-5 mb-4"> STATUS MONITORING </h4>

              <h4 class="heading col-sm-12"><a href="invoicetracking.php"> INVOICE TRACKING SUMMARY </a></h4>

              <table class="table table-bordered table-hover" id="invoicetracking">
                  <thead class="thead-dark bold">
                    <tr>
                      <td>Total Invoices</td>
                      <td>NO Invoices</td>
                      <td>Amount (NGN)</td>
                      <td> % </td>
                      <td>NO Invoices</td>
                      <td>Amount (USD)</td>
                      <td> % </td>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <tr>

                      <td>Passed</td>

                      <td><?php $sql = 'SELECT invoice_no FROM invoice_tracking WHERE audit_final_remark = "Passed" AND transaction_type = "NGN"'; $results = query($sql); $row  = row_count($results); echo $row;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Passed" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;

                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Passed" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                      <td><?php $sql = 'SELECT invoice_no FROM invoice_tracking WHERE audit_final_remark = "Passed" AND transaction_type = "USD"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Passed" AND transaction_type = "USD"';  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Passed" AND transaction_type = "USD"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                    </tr>
                    <tr>
                      <td>Queried</td>
                      <td><?php $sql = 'SELECT invoice_no FROM invoice_tracking WHERE audit_final_remark = "Queried" AND transaction_type = "NGN"'; $results = query($sql); $row  = row_count($results); echo $row;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Queried" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;

                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Queried" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                      <td><?php $sql = 'SELECT invoice_no FROM invoice_tracking WHERE audit_final_remark = "Queried" AND transaction_type = "USD"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Queried" AND transaction_type = "USD"';  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Queried" AND transaction_type = "USD"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                    </tr>
                    <tr>
                      <td>Entered (Pending)</td>
                      <td><?php $sql = 'SELECT invoice_no FROM invoice_tracking WHERE audit_final_remark = "Null" AND transaction_type = "NGN"'; $results = query($sql); $row  = row_count($results); echo $row;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Null" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;

                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>

                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Null" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                      <td><?php $sql = 'SELECT invoice_no FROM invoice_tracking WHERE audit_final_remark = "Null" AND transaction_type = "USD"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                      <td><?php $sql = 'SELECT gross_amount FROM invoice_tracking WHERE audit_final_remark = "Null" AND transaction_type = "USD"';  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>

                      <td><?php $sql = 'SELECT gross_amount AS value_sum FROM invoice_tracking WHERE audit_final_remark = "Null" AND transaction_type = "USD"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                    </tr>
                    <tr>
                      <td>Grand Total</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    </tbody>
                </table>
                

                <h4 class="heading col-sm-12"><a href="netpayment.php"> NET PAYMENT COMPUTATION SUMMARY </a></h4>

              <table class="table table-bordered table-hover" id="netpayment">
                  <thead class="thead-dark bold">
                    <tr>
                      <td>Total Invoices</td>
                      <td>NO Invoices</td>
                      <td>Amount (NGN)</td>
                      <td> % </td>
                      <td>NO Invoices</td>
                      <td>Amount (USD)</td>
                      <td> % </td>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>

                      <td>Passed</td>
                      <td><?php $sql = 'SELECT invoice_no FROM net_payment_computation WHERE approval_status = "Approved" AND transaction_type = "NGN"'; $results = query($sql); $row = row_count($results); echo "$row"; ?>

                      <td><?php $sql = 'SELECT gross_amount  FROM net_payment_computation WHERE approval_status = "Approved" AND transaction_type = "NGN"';   $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>
                      <td><?php $sql = 'SELECT gross_amount  FROM net_payment_computation WHERE approval_status = "Approved" AND transaction_type = "NGN"'; $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                      <td><?php $sql = 'SELECT invoice_no FROM net_payment_computation WHERE approval_status = "Approved" AND transaction_type = "USD"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                      <td><?php $sql = 'SELECT gross_amount FROM net_payment_computation WHERE approval_status = "Approved" AND transaction_type = "USD"';    $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } echo $sum;?></td>
                      <td><?php $sql = 'SELECT gross_amount FROM net_payment_computation WHERE approval_status = "Approved" AND transaction_type = "USD"';  $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["gross_amount"];
                      } $perc = $sum / 100; echo $perc;?></td>
                    </tr>
                    
                    </tbody>
                </table>
                
                <h4 class="heading col-sm-12"><a href="cashcalls.php">   AVAILABLE CASH BALANCE </a></h4>

              <table class="table table-bordered table-hover" id="cashcalls">
                  <thead class="thead-dark bold">
                    <tr>
                      <td>Total Invoices</td>
                      <td>Amount (NGN)</td>
                      <td>Amount (USD)</td>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>

                      <td>Total Cash Amount</td>
                      <td><?php $sql = 'SELECT OML_42_JV_AMT_NGN FROM cash_call';   $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_NGN"];
                      } echo $sum;?></td>
                      <td><?php $sql = 'SELECT OML_42_JV_AMT_USD FROM cash_call';   $results = query($sql); $sum = 0;
                      while ($row = mysqli_fetch_assoc($results)) {
                        $sum += $row["OML_42_JV_AMT_USD"];
                      } echo $sum;?></td>
                    </tr>
                    
                    </tbody>
                </table>
              
              <h4 class="heading col-sm-12"><a href="aginganalysis.php">   AGING ANALYSIS </a></h4>

              <table class="table table-bordered table-hover" id="aginganalysis">
                  <thead class="thead-dark bold">
                    <tr>
                      <td>CAT</td>
                      <td>INVOICE COUNT</td>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>

                      <td>< 30 DAYS</td>
                      <td><?php $sql = 'SELECT invoice_no FROM aging_analysis WHERE less_30_days = "1"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>< 60 DAYS</td>
                      <td><?php $sql = 'SELECT invoice_no FROM aging_analysis WHERE less_60_days = "1"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>< 90 DAYS</td>
                      <td><?php $sql = 'SELECT invoice_no FROM aging_analysis WHERE less_90_days = "1"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>< 180 DAYS</td>
                      <td><?php $sql = 'SELECT invoice_no FROM aging_analysis WHERE less_180_days = "1"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>> 180 DAYS</td>
                      <td><?php $sql = 'SELECT invoice_no FROM aging_analysis WHERE grt_180_days = "1"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    </tbody>
                </table>
                  
                  <h4 class="heading col-sm-12"><a href="sapdocumentpayment.php">   SAP DOCUMENT ANALYSIS </a></h4>

              <table class="table table-bordered table-hover" id="sapdocumentpayment">
                  <thead class="thead-dark bold">
                    <tr>
                      <td>STATUS</td>
                      <td> COUNTING</td>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>

                      <td>Cleared</td>
                      <td><?php $sql = 'SELECT sap_status FROM sap_documents WHERE sap_status = "Cleared"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>Closed</td>
                      <td><?php $sql = 'SELECT sap_status FROM sap_documents WHERE sap_status = "Closed"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>Open</td>
                      <td><?php $sql = 'SELECT sap_status FROM sap_documents WHERE sap_status = "Open"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    <tr>

                      <td>New</td>
                      <td><?php $sql = 'SELECT sap_status FROM sap_documents WHERE sap_status = "New"'; $results = query($sql); $row = row_count($results); echo "$row"; ?></td>
                    </tr>
                    
                    </tbody>
                </table>
                  
              
            </div>
        </div> <!-- THE MAIN CONTENT -->
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 