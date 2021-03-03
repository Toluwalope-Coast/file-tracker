<?php include("includes/header1.php") ?>
<title>NET PAYMENT COMPUTATION Update</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="netpaymentinsert.php">Insert</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="netpaymentupdate.php">Update</a></li>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Update NET PAYMENT COMPUTATION Details</h2>
            <form action="functions/netpaymentupdateProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
              <label class="mt-4 pt-4" for="column">Column to Update:</label>
              <select class="form-control" id="column" name="column">
                <option value="">Please select the column to update:</option>
                <option value="actual_performance_period">Actual Performance Period</option>
                <option value="approval_status">Approval Status</option>
                <option value="payment_status">Payment Status</option>
                <option value="payment_date">Payment Date</option>

              </select>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->

              <div class="form-group mb-4 mt-4">
                <label for="value">Enter new value:</label>
                <input type="text" class="form-control" id="value" name="value" placeholder="New Value" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <div class="form-group mb-4 mt-4">
                <label for="transaction_no">Where S/N is:</label>
                <input type="number" class="form-control" id="transaction_no" name="transaction_no" placeholder="S/N to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>