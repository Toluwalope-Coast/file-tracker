<?php include("includes/header1.php") ?>
<title>Aging Analysis</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>

      <div class="row">  <!-- last nav row -->
      <?php include("includes/reportSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap .align-content-around" id="content">
              <h2 class="text-primary">Aging Analysis</h2> 
                <table class="table table-bordered table-hover" id="vendorstaffdata">
                  <thead class="bold">
                    <tr>
                      <td>TRANSACTION NO</td>
                      <td>TRACKING NUMBER</td>
                      <td>ORIGINATING_DEPARTMENT</td>
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
                      <td>BASELINE DATE</td>
                      <td>AGING</td>
                      <td>< 30DAYS</td>
                      <td>< 60 DAYS</td>
                      <td>< 90 DAYS</td>
                      <td>< 180 DAYS</td>
                      <td>> 180 DAYS</td>
                    </tr>
                  </thead>
                  <tbody>

                  <?php

                        
                    $sql = "SELECT CONCAT(prefix, id) AS 'tracking_number', id AS 'transaction_no', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, baseline_date, aging, less_30_days, less_60_days, less_90_days, less_180_days, grt_180_days FROM aging_analysis";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                       

                        echo "<tr>
                            <td>".$row["transaction_no"]."</td>
                            <td>".$row["tracking_number"]."</td>
                            <td>".$row["originating_department"]."</td>
                            <td>".$row["entered_by"]."</td>
                            <td>".$row["vendor_name"]."</td> 
                            <td>".$row["transaction_type"]."</td>
                            <td>".$row["invoice_no"]."</td>
                            <td>".$row["invoice_date"]."</td>
                            <td>".$row["contract_po_so_title"]."</td>
                            <td>".number_format($row["contract_amount"], 2)."</td>
                            <td>".number_format($row["contract_balance"], 2)."</td>
                            <td>".$row["transaction_details"]."</td>
                            <td>".$row["posting_date"]."</td>
                            <td>".number_format($row["gross_amount"], 2)."</td>
                            <td>".$row["baseline_date"]."</td>
                            <td>".$row["aging"]."</td>
                            <td>".$row["less_30_days"]."</td>
                            <td>".$row["less_60_days"]."</td>
                            <td>".$row["less_90_days"]."</td>
                            <td>".$row["less_180_days"]."</td>
                            <td>".$row["grt_180_days"]."</td>
                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>


            <form class="form-horizontal mb-4 col-sm-10" action="download/aging_analysis.php" method="post" name="upload_excel" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-4">

                  <input type="submit" name="Export" class="btn btn-primary" value="Export Aging Analysis to csv"/>

                </div>
              </div>                    
            </form>          
            
            
          </div>
        </div>
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 