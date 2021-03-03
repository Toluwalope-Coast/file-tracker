<?php include("includes/header1.php") ?>
<title>User Login Profile</title>
<?php include("includes/header2.php") ?>
<?php include("includes/topNav.php") ?>
<div class="row">  <!-- last nav row -->
      <?php include("includes/profileSideNav.php") ?>
        <div class="col-sm-10 offset-sm-2" id="main">
          <nav class="col-lg-4 navbar nav-tabs mt-xl-0" id="nav3">
            <ul class="nav nav-pills d-inline-flex ml-auto col-sm-12">
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="users_login_insert.php">Insert</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="users_login_update.php">Update</a></li>
              <li class="nav-item"><a class="nav-link nav-link edit-link" href="users_login_delete.php">Delete</a></li>
            </ul>
          </nav>
          <div class="col-sm-12 d-inline-flex .flex-row flex-wrap align-content-around" id="content">
              <h2 class="text-primary">User Login Profile</h2>
                <table class="table table-bordered table-hover table-striped" id="login">
                  <thead class="bold">
                    <tr>
                      <td>S/N</td>
                      <td>USERNAME</td>
                      <td>PASSWORD</td>
                      <td>DEPARTMENT</td>
                    </tr>
                  </thead>
                  <tbody>
                       <!--start of row the rows for each item returned from the query-->
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
                        </tr>";
                      }        
                    ?>
                  </tbody>
                   
                </table>
            
          </div>
        </div>
      </div>  <!-- last nav row closes -->

  <?php include("includes/footer.php") ?> 