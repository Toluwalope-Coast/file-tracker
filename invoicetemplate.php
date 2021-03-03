<?php ob_start();

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include_once("functions/db.php");

include_once("functions/functions.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Invoice Template</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>

      <div class="row">  <!-- last nav row -->
      <?php include("includes/reportSideNav.php") ?>
         <div class="col-sm-10 offset-sm-2" id="main">
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap .align-content-around" id="content">
              <h2 class="text-primary"> DOCUMENT HEADER_KR </h2>
                <table class="table table-bordered table-hover table-striped" id="invoice_template">
                  <thead class="bold">
                    <tr>
                      <td>SEQ1</td>
                      <td>LDAT</td>
                      <td>BLART</td>
                      <td>BUKRS</td>
                      <td>BUDAT</td>
                      <td>MONAT</td>
                      <td>WAERS</td>
                      <td>KURSF</td>
                      <td>XBLNR</td>
                      <td>BKTXT</td>
                      <td>XMWST</td>
                      <td>UZAWE</td>
                    </tr>
                    <tr>
                      <td>SEQUENCE NUMBER</td>
                      <td>Document Date</td>
                      <td>Document Type</td>
                      <td>Company Code</td>
                      <td>Posting Date</td>
                      <td>Posting Period</td>
                      <td>Currency</td>
                      <td>Exchange Rate</td>
                      <td>Reference</td>
                      <td>Document Header Text</td>
                      <td>Calculate Tax</td>
                      <td>Pmt Method Supplement</td>
                    </tr>
                  </thead>
                      <!--start of row the rows for each item returned from the query-->
                         <?php

                         $sql = "SELECT id AS 'transaction_no', document_date, document_type, company_code, posting_date, posting_period, currency, exchange_rate, reference, document_header_text, calculate_tax, pmt_method_supplement  FROM invoice_template";

                         $results = query($sql);


                         if (!(row_count($results) > 0)) {


                         }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["document_date"]}</td>
                            <td>{$row["document_type"]}</td>
                            <td>{$row["company_code"]}</td> 
                            <td>{$row["posting_date"]}</td>
                            <td>{$row["posting_period"]}</td>
                            <td>{$row["currency"]}</td>
                            <td>{$row["exchange_rate"]}</td>
                            <td>{$row["reference"]}</td>
                            <td>{$row["document_header_text"]}</td>
                            <td>{$row["calculate_tax"]}</td>
                            <td>{$row["pmt_method_supplement"]}</td>
                        </tr>";
                      }        
                    ?>
                  
                </table>

            <form class="form-horizontal mb-4 col-sm-10 col-sm-offset-2" action="download/invoice_template.php" method="post" name="upload_excel" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-4">

                  <input type="submit" name="Export" class="btn btn-primary" value="Export DOCUMENT HEADER_KR to csv"/>

                </div>
              </div>                    
            </form>          
            
              <h2 class="text-primary mt-4">LINE ITEM 1_EXP_DR</h2> 
                <table class="table table-bordered table-hover table-striped" id="invoice_template_1">
                  <thead class="bold">
                    <tr>
                      <td>SEQ1</td>
                      <td>NEWBS</td>
                      <td>NEWUM</td>
                      <td>NEWBW</td>
                      <td>NEWKO</td>
                      <td>WRBTR</td>
                      <td>DMBTR</td>
                      <td>MWSKZ</td>
                      <td>ZUONR</td>
                      <td>KOSTL</td>
                      <td>AUFNR</td>
                      <td>PRCTR</td>
                      <td>RECID</td>
                      <td>PROJK</td>
                      <td>SGTXT</td>
                    </tr>
                    <tr>
                      <td>SEQUENCE NUMBER</td>
                      <td>Posting Key</td>
                      <td>Special G/L Indicator</td>
                      <td>Transaction Type</td>
                      <td>GL</td>
                      <td>Amount</td>
                      <td>Amount in LC</td>
                      <td>Tax Code</td>
                      <td>Assignment</td>
                      <td>Cost Center</td>
                      <td>Order</td>
                      <td>Profit Center</td>
                      <td>Recovery Indicator</td>
                      <td>WBS Indicator</td>
                      <td>Text</td>
                    </tr>
                  </thead>
                      <!--start of row the rows for each item returned from the query-->

                         <?php

                         $sql = "SELECT id AS 'transaction_no', posting_key, gl_indicator, transaction_type, gl, amount, lc_amount, tax, vendor_name, cost_center, invoice_order, profit_center, recovery_indicator, wbs_indicator, contract_po_so_title  FROM invoice_template_1";

                         $results = query($sql);


                         if (!(row_count($results) > 0)) {


                         }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["posting_key"]}</td>
                            <td>{$row["gl_indicator"]}</td>
                            <td>{$row["transaction_type"]}</td> 
                            <td>{$row["gl"]}</td>
                            <td>{$row["amount"]}</td>
                            <td>{$row["lc_amount"]}</td>
                            <td>{$row["tax"]}</td>
                            <td>{$row["vendor_name"]}</td>
                            <td>{$row["cost_center"]}</td>
                            <td>{$row["invoice_order"]}</td>
                            <td>{$row["profit_center"]}</td>
                            <td>{$row["recovery_indicator"]}</td>
                            <td>{$row["wbs_indicator"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                        </tr>";
                      }        
                    ?>
                  
                </table>

                <form class="form-horizontal mb-4 col-sm-10 col-sm-offset-2" action="download/invoice_template_1.php" method="post" name="upload_excel" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-4">

                  <input type="submit" name="Export" class="btn btn-primary" value="Export LINE ITEM 1_EXP_DR to csv"/>

                </div>
              </div>                    
            </form>          


              <h2 class="text-primary mt-4">LINE ITEM 2_VND_CR</h2> 
                <table class="table table-bordered table-hover table-striped" id="invoice_template_2">
                  <thead class="bold">
                    <tr>
                      <td>SEQ1</td>
                      <td>NEWBS</td>
                      <td>NEWUM</td>
                      <td>NEWBW</td>
                      <td>NEWKO</td>
                      <td>WRBTR</td>
                      <td>DMBTR</td>
                      <td>MWSKZ</td>
                      <td>ZUONR</td>
                      <td>KOSTL</td>
                      <td>AUFNR</td>
                      <td>PRCTR</td>
                      <td>RECID</td>
                      <td>PROJK</td>
                      <td>SGTXT</td>
                    </tr>
                    <tr>
                      <td>SEQUENCE NUMBER</td>
                      <td>Posting Key</td>
                      <td>Special G/L Indicator</td>
                      <td>Transaction Type</td>
                      <td>GL</td>
                      <td>Amount</td>
                      <td>Amount in LC</td>
                      <td>Tax Code</td>
                      <td>Assignment</td>
                      <td>Cost Center</td>
                      <td>Order</td>
                      <td>Profit Center</td>
                      <td>Recovery Indicator</td>
                      <td>WBS Indicator</td>
                      <td>Text</td>
                    </tr>
                  </thead>
                      <!--start of row the rows for each item returned from the query-->
                         <?php

                         $sql = "SELECT id AS 'transaction_no', posting_key, gl_indicator, transaction_type, gl, amount, lc_amount, tax, vendor_name, cost_center, invoice_order, profit_center, recovery_indicator, wbs_indicator, contract_po_so_title  FROM invoice_template_2";
                         $results = query($sql);


                         if (!(row_count($results) > 0)) {


                         }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["transaction_no"]}</td>
                            <td>{$row["posting_key"]}</td>
                            <td>{$row["gl_indicator"]}</td>
                            <td>{$row["transaction_type"]}</td> 
                            <td>{$row["gl"]}</td>
                            <td>{$row["amount"]}</td>
                            <td>{$row["lc_amount"]}</td>
                            <td>{$row["tax"]}</td>
                            <td>{$row["vendor_name"]}</td>
                            <td>{$row["cost_center"]}</td>
                            <td>{$row["invoice_order"]}</td>
                            <td>{$row["profit_center"]}</td>
                            <td>{$row["recovery_indicator"]}</td>
                            <td>{$row["wbs_indicator"]}</td>
                            <td>{$row["contract_po_so_title"]}</td>
                        </tr>";
                      }        
                    ?>
                  
                </table>
                <form class="form-horizontal mb-4 col-sm-10 col-sm-offset-2" action="download/invoice_template_2.php" method="post" name="upload_excel" enctype="multipart/form-data">
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-4">

                  <input type="submit" name="Export" class="btn btn-primary" value="Export LINE ITEM 2_VND_CR to csv"/>

                </div>
              </div>                    
            </form>          

             
          </div>
        </div>
      </div>  <!-- last nav row closes -->

  <?php include("includes/footer.php") ?> 