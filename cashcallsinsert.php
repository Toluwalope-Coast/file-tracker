<?php include("includes/header1.php") ?>
<title>Cash Call Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="cashcallsinsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4">Add New Cash Call</h2>
            
            <form action="functions/cashcallsinsertProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="userData" method="post">
              <fieldset class="mt-4 mb-4">
              <legend class="mb-4">Summary of Cash Call Request:</legend>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="cashRequestDate">Cash Request Date:</label>
                <input type="date" class="form-control" id="date" placeholder="Enter Cash Request Date" name="cashRequestDate" id="cashRequestDate" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="cashCalldescription">Cash Call Description:</label>
                <input type="text" class="form-control" id="cashCalldescription" placeholder="Describe the Cash Call" name="cashCalldescription" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="npdc_ngn_req">NPDC (NGN):</label>
                <input type="number" step="0.01" class="form-control" id="npdc_ngn_req" placeholder="Enter the NPDC in naira" name="npdc_ngn_req" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="npdc_usd_req">NPDC (USD):</label>
                <input type="number" class="form-control" id="npdc_usd_req" placeholder="Enter the NPDC in naira" name="npdc_usd_req" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="fhn_ngn_req">FHN (NGN):</label>
                <input type="number" class="form-control" id="fhn_ngn_req" placeholder="Enter the FHN in naira" name="fhn_ngn_req" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
               <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="fhn_ngn_req">FHN (USD):</label>
                <input type="number" class="form-control" id="fhn_ngn" placeholder="Enter the FHN in naira" name="fhn_ngn" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            </fieldset>
            <fieldset class="mt-4 mb-4">
              <legend class="mb-4">Summary of Cash Call Payment:</legend>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="npdc_ngn_pay">NPDC (NGN):</label>
                <input type="number" step="0.01" class="form-control" id="npdc_ngn__pay" placeholder="Enter the NPDC in naira" name="npdc_ngn_pay">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="npdc_usd_pay">NPDC (USD):</label>
                <input type="number" class="form-control" id="npdc_usd_pay" placeholder="Enter the NPDC in naira" name="npdc_usd_pay">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="fhn_ngn_pay">FHN (NGN):</label>
                <input type="number" class="form-control" id="fhn_ngn_pay" placeholder="Enter the FHN in naira" name="fhn_ngn_pay">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
               <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="fhn_ngn_pay">FHN (USD):</label>
                <input type="number" class="form-control" id="fhn_ngn_pay" placeholder="Enter the FHN in naira" name="fhn_ngn_pay">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>
            

             <h3 class="col-sm-12 offset-sm-1 mb-4 mt-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/Cash_Call_large.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-12 offset-sm-7" validate id="Cash_Call">
              <div class="custom-file col-sm-8 offset-sm-7 mr-4 pr-4 ml-4 pl-4">
                <input type="file" class="custom-file-input form-group mr-4 pr-4 ml-4 pl-4" id="customFile" name="csvfile">
                <label class="custom-file-label mr-4 pr-4 ml-4 pl-4" for="customFile">Choose file </label>
              </div>
                <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit mt-4" name="staffProfileInsert">Insert</button>
              </form>
            
            
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>