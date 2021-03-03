<?php include("includes/header1.php") ?>
<title>SAP DOCUMENTS–INVOICE/PAYMENT Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="sapinvoicepaymentinsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="sapinvoicepaymentupdate.php">Update</a></li>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4">Add New SAP DOCUMENTS–INVOICE/PAYMENT</h2>
            
            <form action="functions/sapdocumentpaymentinsertProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate method="post">
              
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="id">Tracking Number</label>
                <input type="number" class="form-control" id="id" placeholder="Enter the Tracking Number to insert into" name="id">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="invoice_doc_no">Invoice Document Number:</label>
                <input type="number" min="10" max="10" class="form-control" id="invoice_doc_no" placeholder="(39xxxxxxxx)" name="invoice_doc_no">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="payment_doc_no">Payment Document Number:</label>
                <input type="number" min="10" max="10" class="form-control" id="payment_doc_no" placeholder="(15xxxxxxxx)" name="payment_doc_no">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="clearing_doc_no">Clearing Document Number: </label>
                <input type="number" min="10" max="10" class="form-control" id="clearing_doc_no" placeholder="(10xxxxxxxx)" name="clearing_doc_no">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>

            
             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/sap_documents_large.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="sap_documents">
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