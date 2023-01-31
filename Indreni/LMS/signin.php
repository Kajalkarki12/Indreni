<?php
include_once "classes/Employee.php";
include_once "libs/Session.php";
Session::checkLogin();
$emp = new Employee();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">
    <!-- Page Title -->
    <title> Indreni Multipurpose Cooperative</title>
    <!--Font link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Plugins for this template --> 
    <link href="public/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="public/assets/css/owl.theme.css" rel="stylesheet">
     <script src="public/assets/js/jquery.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="public/assets/css/style.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="public/assets/slider/style.css" />
</head>

<body>
     
 <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- Start header -->

        <header id="header" class="site-header header-style-5">
            
            <div class="lower-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="site-logo">
                            <img src="./images/site.png" alt></a>
                            </div>
                        </div>   
                                    
                        <div class="col col-sm-6">
                            <div class="awards" >   
                                    <div class="award-info">
                                        <img src="./images/nepal.gif"  style="max-height: 110px;">
                                    </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end lower-topbar -->

  </head>

  <body>
  <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                       
  <ul class="nav navbar-nav" style="text:centre;">
    
    <li class="">
        <a href="../index.php" target="_self" style="" >
            
            <span style="font-size:15px; padding-right: 25px; padding-left: 210px;">Home</span>
            
        </a>
            </li>
    
    <li class="dropdown"  >
        <a href="#" target="_self" style="" class="dropdown-toggle" data-toggle="dropdown">
            
            <span style="font-size:15px; padding-right: 25px;">About Us</span>
            <span class="caret"></span>
        </a>
                <ul class="dropdown-menu">



    
    <li class="">
        <a href="../index.php" target="_self" style="" >
            
            <span style="font-size:15px;">Home</span>
            
        </a>
            </li>
    <li class="">
        <a href="../mission.php" target="_self" style="" >
            
            <span style="font-size:15px;">Mission</span>
            
        </a>
            </li>

    
    <li class="">
        <a href="../goal.php" target="_self" style="" >
            
            <span style="font-size:15px;">Goal</span>
            
        </a>
            </li>

    
    <li class="">
        <a href="../objective.php" target="_self" style="" >
            
            <span style="font-size:15px;">Objective</span>
            
        </a>
            </li>

    
    

</ul>
            </li>

    
    <li class="dropdown">
        <a href="#" target="_self" style="" class="dropdown-toggle" data-toggle="dropdown">
            
            <span style="font-size:15px; padding-right: 25px;">Management Team</span>
            <span class="caret"></span>
        </a>
                <ul class="dropdown-menu">



    
    <li class="">
        <a href="../BOD.php" target="_self" style="" >
            
            <span style="font-size:15px;">Board of Director</span>
            
        </a>
            </li>

    
    <li class="">
        <a href="../employee.php" target="_self" style="" >
            
            <span style="font-size:15px;" >Employee</span>
            
        </a>
            </li> 
</ul>
            </li>

    
    <li class="dropdown">
        <a href="#" target="_self" style="" class="dropdown-toggle" data-toggle="dropdown">
            
            <span style="font-size:15px; padding-right: 25px;">Our Service</span>
            <span class="caret"></span>
        </a>
                <ul class="dropdown-menu">



    
    <li class="">
        <a href="../saving.php" target="_self" style="" >
            
            <span style="font-size:15px;" >Saving Service </span>
            
        </a>
            </li>

    
    <li class="">
        <a href="../loan.php" target="_self" style="" >
            
            <span style="font-size:15px;">Loan Service</span>
            
        </a>
            </li>

   

</ul>
            </li>

    
    
    
            <li class="">
        <a href="../login.php" target="_self" style="" >
            
            <span style="font-size:15px;">Login</span>
            
        </a>
            </li>

</ul>      
                    </div><!-- end of nav-collapse -->     
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <?php 
        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
          $inserted = $emp->employeeLogin($_POST);
        } 
      ?>
  <div class="container">
    <form class="form-signin" action="" method="POST">
    
      <div class="text-center mb-4">
        <?php if (isset($inserted)) {
          echo $inserted;
        }?>
      </div> <div class="container  pt-10 ">
            <div class="row justify-content-center h-100" >
                    <div class="form-input-content pt-5 mt-5"  >
                    <div style="margin-top :100px; margin-bottom :100px; margin-right :300px; margin-left :300px;">
      <div class="project-single-details">
      <div class="form-label-group">
      <h3>Email address:</h3>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
       
      </div>

      <div class="form-label-group">
      <h3>Password:</h3>
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
      </div>   
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">
      <h4 class="mt-3 text-uppercase font-weight-bold text-center"><a href="signup.php">Register</a> a new account.</h4>
    </form>
    </div>
      </div>
      </div>
      </div>
      </div>
      </div>
  </body>
</html>
<footer class="site-footer">
    
    <div class="copyright-info">
        <div class="container">
            <p style="font-size:15px"> Site By: <a>Kajal Karki</a></p>
        </div>
    </div>
</footer>
