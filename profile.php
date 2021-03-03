<?php ob_start();

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include_once("functions/db.php");

include_once("functions/functions.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>

      <div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
         <div class="col-sm-10 offset-sm-2 mt-4 mb-4" id="main">
          <div id="content">
              <h2 class="mt-4 text-primary">Lists Of Users in the System And Their Login Status </h2> 
                <table class="table table-bordered table-hover table-striped" id="staffprofiledata">
                  <thead class="bold">
                    <tr>
                      <td>LOGIN ID</td>
                      <td>USERNAME</td>
                      <td>PASSWORD</td>
                      <td>DEPARTMENT</td>
                      <td>LOGIN STATUS</td>
                    </tr>
                  </thead>
                      <!--start of row the rows for each item returned from the query-->
                      <tbody>
                     <?php
                         $sql = "SELECT * FROM login";

                         $results = query($sql);


                         if (!(row_count($results) > 0)) {


                         }

                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["login_id"]}</td> 
                            <td>{$row["username"]}</td>
                            <td>{$row["password"]}</td>
                            <td>{$row["department"]}</td>
                            <td>{$row["log_status"]}</td>
                        </tr>";
                      }        
                    ?>
                  </tbody>
                </table>
              </div> 

         <div class="col-sm-12 d-inline-flex .flex-row flex-wrap align-content-around" id="content">
              <h2><a href="vendors_and_staffs_profile.php"> Vendors / Staffs Profile</a></h2>
                <table class="table table-bordered table-hover table-striped" id="staffprofiledata">
                  <thead class="bold">
                    <tr>
                      <td>S/N</td>
                      <td>STAFF / VENDOR</td>
                      <td>USERNAME</td>
                      <td>PASSWORD</td>
                      <td>DEPARTMENT</td>
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
                      <td>START DATE</td>
                      <td>END DATE</td>
                      <td>CURRENCY TYPE</td>
                      <td>AUDIT REMARKS</td>     
                      <td>REASON FOR QUERY</td>
                      <td>TRANSACTION TYPE</td>
                      <td>APPROVAL</td>
                    </tr>
                  </thead>
                  <tbody>
                       <!--start of row the rows for each item returned from the query-->
                    <?php

                    $sql = "SELECT * FROM vendorandstaff";

                    $results = query($sql);


                    if (row_count($results) < 1) {

                      

                    }

                         
                      while($row = mysqli_fetch_assoc($results)) {
                        echo "<tr>
                            <td>{$row["id"]}</td>
                            <td>{$row["name"]}</td> 
                            <td>{$row["username"]}</td>
                            <td>{$row["password"]}</td>
                            <td>{$row["department"]}</td>
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
                            <td>{$row["start_date"]}</td>
                            <td>{$row["end_date"]}</td>
                            <td>{$row["currency"]}</td>
                            <td>{$row["audit_remark"]}</td>
                            <td>{$row["reason_if_queried"]}</td>
                            <td>{$row["transaction_type"]}</td>
                            <td>{$row["approval_status"]}</td>
                        </tr>";
                      }        
                    ?>
                  </tbody>
                   
                </table>

              <div class="col-sm-12 d-inline-flex .flex-row flex-wrap .align-content-around" id="content">
              <h2><a href="codesmapping.php"> UAP/WBS/SAP GL</a></h2>
                <table class="table table-bordered table-hover table-striped" id="codemappingdata">
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