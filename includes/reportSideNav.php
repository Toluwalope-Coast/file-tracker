<nav class="col-sm-2 sidebar"> <!-- side bar nav -->
            <ul class="nav flex-column flex-wrap navbar-dark position-fixed pt-2 col-sm-2" id="sidebar">
                <li class="nav-item">
                    <i class='fas fa-home fa-fw' aria-hidden="true"></i><a href="dashboard.php" class="nav-link"> Dashboard <i class="fas fa-caret-left fa-fw fa-lg offset-sm-2" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <i class='fas fa-comment-alt fa-fw' aria-hidden="true"></i><a href="messages.php" class="nav-link"> Messages <i class="fas fa-caret-left fa-fw fa-2x offset-sm-1" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item" id="file">
                    <i class='fas fa-file fa-fw' aria-hidden="true"></i><a class="nav-link"  href="file.php"> File <i class="fas fa-caret-left fa-fw fa-2x offset-sm-2" aria-hidden="true"></i></a>
                    <ul class="dropdown-list flex-column">
                      <li class="dropdown-link mt-2"><a href="cashcalls.php">CASH CALLS </a></li>
                      <li class="dropdown-link mt-2"><a href="datainvoicingprocessing.php">DATA CAPTURING/INVOICE PROCESSING </a></li>
                      <li class="dropdown-link mt-2"><a href="invoicetracking.php">INVOICE TRACKING / MOVEMENTS</a></li>
                      <li class="dropdown-link mt-2"><a href="contractcommitment.php"> UAP CODE / WBS / SAP GLS</a></li>
                      <li class="dropdown-link mt-2"><a href="sapdocumentpayment.php">SAP DOCUMENTS–INVOICE/PAYMENT</a></li>
                      <li class="dropdown-link mt-2"><a href="netpayment.php">NET PAYMENT COMPUTATION </a></li>
                    </ul>
                </li>
                <li class="nav-item active" id="report">
                    <i class="fa fa-list fa-fw" aria-hidden="true"></i><a class="nav-link" href="reports.php"> Reports <i class="fas fa-caret-left fa-fw fa-2x offset-sm-2" aria-hidden="true"></i></a>
                    <ul  class="dropdown-list flex-column">
                      <li class="dropdown-link mt-2"><a href="bankpaymntschedule.php">BANK PAYMENT SCHEDULE</a></li>
                      <li class="dropdown-link mt-2"><a href="invoicetemplate.php">DOWNLOAD INVOICE TEMPLATE</a></li>
                      <li class="dropdown-link mt-2"><a href="paymenttemplate.php">DOWNLOAD PAYMENT TEMPLATE</a></li>
                      <li class="dropdown-link mt-2"><a href="aginganalysis.php">AGING ANALYSIS</a></li>
                    </ul>
                </li>
                <li class="nav-item" id="profile">
                    <i class='fas fa-user fa-fw' aria-hidden="true"></i><a class="nav-link" href="profile.php"> Profile <i class="fas fa-caret-left fa-fw fa-2x offset-sm-2" aria-hidden="true"></i></a>
                    <ul class="dropdown-list flex-column">
                      <li class="dropdown-link mt-2"><a href="users_login.php">Users Login Profile </a></li>
                      <li class="dropdown-link mt-2"><a href="vendors_and_staffs_profile.php">Vendors / Staffs Profile </a></li>
                      <li class="dropdown-link mt-2"><a href="codesmapping.php">UAP/WBS/GL CODES MAPPING</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav> <!-- side bar nav closes -->