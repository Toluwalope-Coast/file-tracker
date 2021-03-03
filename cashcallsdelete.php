<?php include("includes/header1.php") ?>
<title>Cash Call Requests Delete</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li  class="nav-item"><a class="nav-link edit-link" href="cashcallsinsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link edit-link" href="cashcallsupdate.php">Update</a></li>
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="cashcallsdelete.php">Delete</a></li>
            </ul>
            </ul>
          </nav>
          <div class="col-sm-8 offset-sm-4 edit-form">
          <h2 class="mb-4 ml-4 pl-4 offset-sm-2">Delete Cash Call Requests Details</h2>
            <form action="functions/cashcallsdeleteProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-10 offset-sm-1" novalidate method="post">
              <div class="form-group">
                <label for="cash_call_id">Where S/N is:</label>
                <input type="text" class="form-control" id="cash_call_id" name="cash_call_id" placeholder="Enter the S/N for the row to delete" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div><!-- Closes form group -->
              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-4 form-submit mb-4 mt-4">Delete</button>
            </form>
          </div> <!-- form div closes -->
        </div><!-- Main div closes -->
      </div><!-- last row closes -->

  <?php include("includes/footer.php") ?>