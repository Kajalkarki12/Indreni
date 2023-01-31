<?php
include "./header.php";
?>
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
                       
  <ul class="nav navbar-nav">
    
    <li class="">
        <a href="index.php" target="_self" style="" >
            
            <span style="font-size:15px; padding-right: 25px;  padding-left: 210px;">Home</span>
            
        </a>
            </li>
    
    <li class="dropdown">
        <a href="#" target="_self" style="" class="dropdown-toggle" data-toggle="dropdown">
            
            <span style="font-size:15px; padding-right: 25px;">About Us</span>
            <span class="caret"></span>
        </a>
                <ul class="dropdown-menu">



    
    <li class="">
        <a href="index.php" target="_self" style="" >
            
            <span style="font-size:15px" >Home</span>
            
        </a>
            </li>
    <li class="">
        <a href="mission.php" target="_self" style="" >
            
            <span style="font-size:15px">Mission</span>
            
        </a>
            </li>

    
    <li class="">
        <a href="goal.php" target="_self" style="" >
            
            <span style="font-size:15px">Goal</span>
            
        </a>
            </li>

    
    <li class="">
        <a href="objective.php" target="_self" style="" >
            
            <span style="font-size:15px">Objective</span>
            
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



    
    <li class=" ">
        <a href="BOD.php" target="_self" style="" >
            
            <span style="font-size:15px">Board of Director</span>
            
        </a>
            </li>

    
    <li class="">
        <a href="employee.php" target="_self" style="" >
            
            <span style="font-size:15px">Employee</span>
            
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
        <a href="saving.php" target="_self" style="" >
            
            <span style="font-size:15px">Saving Service </span>
            
        </a>
            </li>

    
    <li class="">
        <a href="#" target="_self" style="" >
            
            <span style="font-size:15px">Loan Service</span>
            
        </a>
            </li>

   

</ul>
            </li>    
            <li class="">
        <a href="LMS/signin.php" target="_self" style="" >
            
            <span style="font-size:15px; padding-right: 25px;">Login</span>
            
        </a>
            </li>



</ul>      
                    </div><!-- end of nav-collapse -->     
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->

<!-- start of services -->
<section class="section-padding" style="background-color:#eaffea">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-4">
                <div class="section-title">
                    <h2 style="font-size :25px;">Loan Intrest</h2>
                </div>
            </div>
            <div class="col col-lg-6 col-md-5">
                
            </div>
           
        </div> <!-- end row -->
        
        <div>
           <img src="images/InterestRate.png" alt="">
        </div>


                                     
               
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end of services -->
                



 
</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->

<script src="public/assets/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="public/assets/js/jquery-plugin-collection.js"></script>
<script src="public/assets/js/jquery.mCustomScrollbar.js"></script>

<!-- Custom script for this template -->
<script src="public/assets/js/script.js"></script>
<script type="text/javascript" src="public/assets/slider/wowslider.js"></script>
	<script type="text/javascript" src="public/assets/slider/script.js"></script>
	
	<script src="public/assets/js/magnific.js"></script>
        <script>
   $('.gallery').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{
      enabled:true,
      navigateByImgClick:true,
  }

 
});
</script>

</body>


</html>
<?php
include "./footer.php";
?>