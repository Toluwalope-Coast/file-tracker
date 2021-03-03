<?php include("includes/header1.php") ?>
<title>NET PAYMENT COMPUTATION Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="netpaymentinsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="netpaymentupdate.php">Update</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4">Add New NET PAYMENT COMPUTATION</h2>
            
            <form action="functions/netpaymentInsertProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate method="post">
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="id">Tracking No</label>
                <input type="number" class="form-control" id="id" placeholder="Enter the Tracking No" name="id">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="approvalStatus">Approval:</label>
                <select name="approvalStatus" class="custom-select" id="approvalStatus" required>
                  <option value="">Select the currency type</option>
                  <option value="Approved">Approved</option>
                  <option value="Not Approved" selected>Not Approved</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="paymentStatus">Payment Status:</label>
                <select name="paymentStatus" class="custom-select" id="paymentStatus" required>
                  <option value="">Select the Payment Status type</option>
                  <option value="Paid">Paid</option>
                  <option value="Unpaid" selected>Unpaid</option>
                </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="paymentDate">Payment Date:</label>
                <input type="date" class="form-control" id="paymentDate" placeholder="Enter the Payment Date" name="paymentDate">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="month">Month:</label>
                <input type="date" class="form-control" id="month" placeholder="Enter the Month" name="month">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>
            



             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/net_payment_computation_large.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="net_payment_computation">
              <div class="custom-file col-sm-8 offset-sm-7 mr-4 pr-4 ml-4 pl-4">
                <input type="file" class="custom-file-input form-group mr-4 pr-4 ml-4 pl-4" id="customFile" name="csvfile">
                <label class="custom-file-label mr-4 pr-4 ml-4 pl-4" for="customFile">Choose file </label>
              </div>
                <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit mt-4" name="net_payment_computation">Insert</button>
              </form>
            
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>