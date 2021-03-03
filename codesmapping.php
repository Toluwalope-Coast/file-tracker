<?php include("includes/header1.php") ?>
<title>UAP/WBS/SAP GL</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="codesmappinginsert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="codesmappingupdate.php">Update</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="codesmappingdelete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap align-content-around" id="content">
              <h2 class="text-primary">UAP/WBS/SAP GL</h2> 
               <table class="table table-bordered table-hover table-striped" id="codesmapping">
                  <thead class="bold">
                    <tr>
                      <td>S/N</td>
                      <td>TITLE OF CODES</td>
                      <td>CODES</td>
                      <td>WBS ELEMENT</td>
                      <td>COST ELEMENT (for budget uploads)</td>
                      <td>COST ELEMENT</td>
                    </tr>
                  </thead>
                    <!--start of row the rows for each item returned from the query-->
                    <tbody>
                    <?php

                    $sql = "SELECT * FROM uap_wbs_gl_codes_mapping";

                    $results = query($sql);
                         

                    if (!(row_count($results) > 0)) {

                      

                    }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                              <td>{$row["code_mapping_id"]}</td>
                              <td>{$row["title_of_codes"]}</td> 
                              <td>{$row["codes"]}</td>
                              <td>{$row["wbs_element"]}</td>
                              <td>{$row["cost_element_for_budget_upload"]}</td>
                              <td>{$row["cost_element"]}</td>
                            </tr>";
                      }        
                    ?>
                  </tbody>
                </table>
            
            
          </div>
        </div>
      </div>  <!-- last nav row closes -->

<?php include("includes/footer.php") ?> 