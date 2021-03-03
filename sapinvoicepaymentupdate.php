<?php include("includes/header1.php") ?>
<title>SAP DOCUMENTS–INVOICE/PAYMENT Update</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="sapinvoicepaymentinsert.php">Insert</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="sapinvoicepaymentupdate.php">Update</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
            <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Update SAP DOCUMENTS–INVOICE/PAYMENT Details</h2>
            <form action="functions/sapdocumentpaymentupdateProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group mb-4 mt-4">
              <label class="mt-4 pt-4" for="Column"> Column to Update:</label>
              <select class="form-control" id="Column" name="Column">
                <option value="" requred>Please Select the Column to Update:</option>
                <option value="invoice_document_number">Invoice Document Number</option>
                <option value="payment_document_number">Payment Document Number</option>
                <option value="clearing_document_number">Clearing Document Number</option>
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
                <label for="id">Where S/N is:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="S/N to update" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
            
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4" >Update</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

   <?php include("includes/footer.php") ?>