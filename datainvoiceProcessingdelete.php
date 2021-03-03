<?php include("includes/header1.php") ?>
<title>Data Capturing/Invoice Processing Delete</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link edit-link" href="datainvoiceProcessinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="datainvoiceProcessingupdate.php">Update</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="datainvoiceProcessingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
          <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Delete Data Capturing/Invoice Processing Details</h2>
            <form action="functions/datainvoiceProcessingdeleteProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group">
                <label for="id">Where Tracking No is:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="Tracking No to Delete" required>
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4">Delete</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

  <?php include("includes/footer.php") ?>