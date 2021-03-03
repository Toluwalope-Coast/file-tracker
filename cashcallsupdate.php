<?php include("includes/header1.php") ?>
<title>Cash Call Requests Update</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsinsert.php">Insert</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="cashcallsupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Edit Cash Call Requests Details</h2>
            <form action="functions/cashcallsupdateProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
              <label class="mt-4 pt-4" for="column">Cash Call Request Column:</label>
              <select class="form-control" id="column" name="column">
                <option class="">Please select the column to update</option>
                <option value="cash_call_date">REQUEST DATE</option>
                <option value="cash_call_description">Cash Call Description</option>
                <option value="npdc_ngn">NPDC (NGN) FOR CASH CALL REQUEST</option>
                <option value="npdc_usd">NPDC (USD) FOR CASH CALL REQUEST</option>
                <option value="fhn_ngn">FHN (NGN) FOR CASH CALL REQUEST</option>
                <option value="fhn_usd">FHN (USD) FOR CASH CALL REQUEST</option>
                <option value="npdc_ngn_payment">NPDC (NGN) FOR CASH CALL PAYMENT</option>
                <option value="npdc_usd_payment">NPDC (USD) FOR CASH CALL PAYMENT</option>
                <option value="fhn_ngn_payment">NEL (NGN) FOR CASH CALL PAYMENT</option>
                <option value="fhn_usd_payment">NEL (USD) FOR CASH CALL PAYMENT</option>
                <option value="date_outstanding">OUTSTANDING DATE</option>
                <option value="outstanding_payment">OUTSTANDING PAYMENT Description</option>
                <option value="npdc_ngn_outstanding">NPDC (NGN) FOR CASH CALL OUTSTANDING</option>
                <option value="npdc_usd_outstanding">NPDC (USD) FOR CASH CALL OUTSTANDING</option>
                <option value="fhn_ngn_outstanding">NEL (NGN) FOR CASH CALL OUTSTANDING</option>
                <option value="fhn_usd_outstanding">NEL (USD) FOR CASH CALL OUTSTANDING</option>
              </select>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              
              <div class="form-group mb-4 mt-4">
                <label for="value">Enter new value:</label>
                <input type="text" class="form-control" id="value" name="value" placeholder="Please Enter the New Value" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <div class="form-group mb-4 mt-4">
                <label for="cash_call_id">Where S/N is:</label>
                <input type="number" class="form-control" id="cash_call_id" name="cash_call_id" placeholder="Enter the S/N for the row to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>