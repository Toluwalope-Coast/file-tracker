<?php include("includes/header1.php") ?>
<title>Staffs / Vendor Profile</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="vendors_and_staffs_profile_insert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="vendors_and_staffs_profile_update.php">Update</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="vendors_and_staffs_profile_delete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap align-content-around" id="content">
              <h2 class="text-primary">Vendors / Staffs Profile</h2>
                <table class="table table-bordered table-hover table-striped" id="staffprofiledata">
                  <thead class="bold">
                    <tr>
                      <td>S/N</td>
                      <td>STAFF / VENDOR</td>
                      <td>BANK NAME(LOCAL)</td>
                      <td>BANK NAME(FOREIGN)</td>
                      <td>SORT CODE</td>
                      <td>ACC. NO(LOCAL)</td>
                      <td>TIN NUMBER</td>
                      <td>REG. NO</td>
                      <td>ACC. NO(FOREIGN)</td>
                      <td>ADDRESS</td>
                      <td>STATE</td>
                      <td>COUNTRY</td>
                      <td>EMAIL</td>
                      <td>TEL. NO</td>
                      <td>REMARKS</td>
                    </tr>
                  </thead>
                  <tbody>
                       <!--start of row the rows for each item returned from the query-->
                    <?php

                    $sql = "SELECT * FROM vendorandstaff";

                    $results = query($sql);


                    if (!(row_count($results) > 0)) {

                      

                    }


                         
                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["id"]}</td>
                            <td>{$row["name"]}</td>
                            <td>{$row["local_bank"]}</td>
                            <td>{$row["foreign_bank"]}</td>
                            <td>{$row["sort_code"]}</td>
                            <td>{$row["local_bank_acc_no"]}</td>
                            <td>{$row["tin_no"]}</td>
                            <td>{$row["reg_no"]}</td>
                            <td>{$row["foreign_bank_acc_no"]}</td>
                            <td>{$row["house_address"]}</td>
                            <td>{$row["state"]}</td>
                            <td>{$row["country"]}</td>
                            <td>{$row["email"]}</td>
                            <td>{$row["tel_no"]}</td>
                            <td>{$row["audit_remark"]}</td>
                        </tr>";
                      }        
                    ?>
                  </tbody>
                   
                </table>
            
          </div>
        </div>
      </div>  <!-- last nav row closes -->

  <?php include("includes/footer.php") ?> 