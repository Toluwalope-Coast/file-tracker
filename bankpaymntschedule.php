<?php include("includes/header1.php") ?>
<title>Bank Payment Schedule</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>

      <div class="row">  <!-- last nav row -->
      <?php include("includes/reportSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap .align-content-around" id="content">
              <h2 class="text-primary">Bank Payment Schedule</h2> 
                <table class="table table-bordered table-hover" id="vendorstaffdata">
                  <thead class="bold">
                    <tr>
                      <td>TRANSACTION NO</td>
                      <td>PAYMENT DATE</td>
                      <td>VENDOR NAME</td>
                      <td>INVOICE NUMBER</td>
                      <td>VENDOR BANK</td>
                      <td>VENDOR ACCOUNT NUMBER</td>
                      <td>NET AMOUNT</td>
                      <td>CURRENCY</td>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                        
                    $sql = "SELECT id AS 'transaction_no', payment_date, vendor_name, invoice_no, vendor_bank, vendor_account_no, net_amount, currency FROM bank_payment";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                          echo "<tr>
                            <td>".$row["transaction_no"]. " </td>
                            <td>".$row["payment_date"]. "</td>
                            <td>".$row["vendor_name"]. "</td>
                            <td>".$row["invoice_no"]. "</td>
                            <td>".$row["vendor_bank"]. "</td>
                            <td>".$row["vendor_account_no"]. "</td>
                            <td>".number_format($row["net_amount"], 2). "</td>
                            <td>".$row["currency"]. "</td>
                        </tr>";
                      }        
                    ?>
                    </tbody>
                </table>

            <form class="form-horizontal mb-4 col-sm-10" action="download/bank_payment.php" method="post" name="upload_excel" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-6">

                  <input type="submit" name="Export" class="btn btn-primary" value="Export Bank Payment Schedule to csv"/>

                </div>
              </div>                    
            </form>          

        </div>
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 