<!-- partial -->
<div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="images/user.png" alt="">
            <p class="name"><?php echo Session::get("name");?></p>
            <p class="designation"><?php echo Session::get("designation");?></p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <img src="images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

          <?php if(Session::get("role") == 2){?>
          <!-- borrower option -->
           
              
              
                  <li class="nav-item">
                    <a class="nav-link" href="addborrower.php"><span class="menu-title">Add Borrower</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="viewborrower.php"><span class="menu-title">View Borrower</span></a>
                  </li>
                
            <!-- end borrower option -->
            <li class="nav-item">
              <a class="nav-link" href="apply_for_loan.php">
                <img src="images/icons/4.png" alt="">
                <span class="menu-title">Apply for loan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loan_application.php">
                <img src="images/icons/5.png" alt="">
                <span class="menu-title">Loan applications</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payloan.php">
                <img src="images/icons/6.png" alt="">
                <span class="menu-title">Loan Payment</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="loan_status.php">
                <img src="images/icons/6.png" alt="">
                <span class="menu-title">Loan Status</span>
              </a>
            </li>
           
        <?php } ?>
             <li class="nav-item">
              <a class="nav-link" href="loanverify.php">
                <img src="images/icons/6.png" alt="">
                <span class="menu-title">Loan Verification</span>
              </a>
            </li>
           
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">