<?php include("includes/header1.php") ?>
<title>CONTRACT COMMITMENT/UAP CODE/WBS/SAP GLS Insert</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/fileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item edit-active"><a class="nav-link edit-active-link" href="contractcommitmentinsert.php">Insert</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 edit-form">
            <h2 class="col-sm-8 offset-sm-1 mb-4"> UAP CODE/WBS/SAP GLS</h2>
            
            <form action="functions/contractcommitmentinsertProcessor.php" class="needs-validation mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-7 offset-sm-3" validate id="contractcommitmentInsert" method="post">

            <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="id">The Tracking_number ro insert the below details into:</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="Tracking_number to insert details into" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            <div class="form-group mr-4 pr-4 ml-4 pl-4">
                <label for="codeTitle">UAP Code:</label>
                <select name="codeTitle" id="codeTitle" class="custom-select" required>
                  <option value="">Select the UAP Code</option>
                   <?php
                        
                    $sql = "SELECT title_of_codes FROM uap_wbs_gl_codes_mapping";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }
                    ?>
                    <?php
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo '<option value="'.$row['title_of_codes'].'">'.$row['title_of_codes'].' </option>';
                      }        
                    ?>
                  </select>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <button type="submit" class="btn btn-primary col-sm-2 offset-sm-5 form-submit">Insert</button>
            </form>


             <h3 class="col-sm-8 offset-sm-1 mb-4">For large data, Please upload below (Import CSV format only)</h3>
            <form action="uploads/contract_commitmentlarge.php" enctype="multipart/form-data" method="post" class="was-validated mr-4 pr-4 ml-4 pl-4 mb-4 pb-4 col-sm-5 offset-sm-7" validate id="contract_commitment">
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