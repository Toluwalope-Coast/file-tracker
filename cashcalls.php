<?php include("includes/header1.php") ?>
<title>Cash Calls</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsinsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="set flex-wrap align-content-around" id="content">
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

            
            
          </div>
        </div>
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 