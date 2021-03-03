<div class="row"> <!-- Top nav row  -->
  <nav class="navbar navbar-expand-md navbar-dark static-top col-12 flex-wrap" id="top_nav">
        
        <header class="navbar-brand col-sm-2">OML 42 AMT</header>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <div class="navbar-text col-sm-3" id="image">
            <img src="images/npdc.jpg" width="50px" height="50px" alt="user-profile_pic" id="profile_pic" class="ml-2 mr-4" />
            <img src="images/neconde.png" width="50px" height="50px" alt="user-profile_pic" id="profile_pic" class="mr-2" />
          </div>
          <div class="navbar-text col-sm-2"><?php
                                                if (isset($_SESSION['username'])) {
                                                  echo"Welcome: " . ucfirst($_SESSION['username']);
                                                } else{
                                                  redirect("http://localhost/filetracker/login.php");
                                                }
                                                   ?>
          </div>
          <div class="navbar-text col-sm-3  offset-sm-1">
            <i class="fas fa-clock fa-lg mr-2" aria-hidden="true"></i><span id="todaysDate"></span>
          </div>
          <div class="navbar-text col-sm-2">
            <span class="nav-link"><i class="fas fa-sign-out-alt fa-lg" aria-hidden="true"></i><a href="logout.php" class="col-sm-2">Logout</a></span>
          </div>

        </div>

      </nav>  
</div>  <!-- Top nav row closes -->
