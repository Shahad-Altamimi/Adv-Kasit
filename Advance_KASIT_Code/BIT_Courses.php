<?php

include("includes/config.php"); 
//include_once 'languages/common.php';


?>
<!DOCTYPE html>
<html class="transition-navbar-scroll top-navbar-xlarge bottom-footer" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>:: Advance KASIT ::</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/vendor/all.css" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.countdown.css" rel="stylesheet"> -->

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "html" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "html" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/html/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/app/app.css" rel="stylesheet">

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/material.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/messages.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="shortcut icon" href="images/logo.png"/>
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	
	




</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top navbar-size-large navbar-size-xlarge paper-shadow" data-z="0" data-animated role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand navbar-brand-logo">
          <a href="index.php">
           					<center><img src="images/logo2.png" width="100px" height="105px"/></center>

          </a>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="nav navbar-nav navbar-nav-margin-left">
         
		 
		 
		 <li class="dropdown active">
            <a href="index.php" class="">Home</a>
           
          </li>
		 
		 
		 
		 <li class="dropdown">
            <a href="About_Us.php" class="">About Us</a>
           
          </li>
		 
		 
		
		  
	
		  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departments <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="CS_Courses.php">CS Courses</a></li>
              <li><a href="CIS_Courses.php">CIS Courses</a></li>
              <li><a href="BIT_Courses.php">BIT Courses</a></li>
             
            </ul>
          </li>
		  
		
		  
		  
	
		  
		  
		 
		
		  
		 
		
	 <li class="dropdown">
            <a href="Libraries.php" class="">Libraries</a>
           
          </li>
		  
		 
		  <li class="dropdown">
            <a href="Contact_Us.php" class="">Contact Us</a>
           
          </li>
		
        </ul>
		
		
	       <?php
	 $URL_1 = $_SERVER['REQUEST_URI'];
	 
	if (strpos($URL_1,'?lang=')) {
	 $URL = substr($URL_1,0,-8);
	}else{
		
	$URL = $URL_1;

	}
	?>

	
	
	
        <div class="navbar-right" >
   
      <a href="http://ju.edu.jo/home.aspx" class="navbar-btn btn btn-primary" target="_blank" style="background-color:#fff"><img src="images/ju.png" width="32px"/></a>
          <a href="http://computer.ju.edu.jo/Home.aspx" class="navbar-btn btn btn-primary" target="_blank" style="background-color:#fff"><img src="images/kasit2.png" width="34px"/></a>

   
         <!-- <a  href="<?php echo $URL; ?>?lang=en" class="navbar-btn btn btn-primary"><img src="languages/images/en.png"/></a>
          <a href="<?php echo $URL; ?>?lang=ar" class="navbar-btn btn btn-primary"><img src="languages/images/ar.png"/></a>
       
-->
   



	   </div>
	
	
     
      </div>
      <!-- /.navbar-collapse -->

    </div>
  </div>

  
  <div class="container">
    <div class="page-section">
<br><br><br><br>
      <div class="row">
	  
	  
	    <div class="col-md-8 col-lg-12" style="margin-top:-40px">

          
		  
        <div class="col-md-12 col-lg-12">

          <div class="panel panel-default paper-shadow" data-z="0.5">
            <ul class="list-group">
              <li class="list-group-item">
                <div class="media v-middle">
                  <div class="media-body">
                    <h4 class="text-headline margin-none">BIT Courses</h4>
                  </div>
                 
                </div>
              </li>

              <li class="list-group-item media v-middle" style="overflow-x: auto;
  overflow-y: hidden; 
  white-space: nowrap;">
                <div class="media-body">

<center>




  <table data-toggle="data-table" class="table" cellspacing="0" width="100%" border="2">
              <thead>
                <tr>
				                  <th>Course Name</th>

                  <th>Student Volunteer Full Name</th>
                  <th>Package Name</th>
                  <th>View Files</th>
                  <th>Add Date / Time</th>
                 
            
               
                </tr>
              </thead>
			  
			
						
						
            
			  
			  
					
              <tbody>
			  
			  
			     <?php
					$sql1 = mysqli_query($Conn,"select * from courses_packages where Department_Name='BIT' order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$P_ID = $row1['ID'];
						$S_ID = $row1['S_ID'];
						$C_ID = $row1['C_ID'];
						$Package_Name = $row1['Package_Name'];
						$Department_Name = $row1['Department_Name'];
						$Add_Date_Time = $row1['Add_Date_Time'];
						
						
						$sql2 = mysqli_query($Conn,"select * from students where Uni_Number='$S_ID'");
						$row2 = mysqli_fetch_array($sql2);
						$Full_Name = $row2['Full_Name'];
						
						
						$sql3 = mysqli_query($Conn,"select * from courses where ID='$C_ID'");
						$row3 = mysqli_fetch_array($sql3);
						$Course_Name = $row3['Course_Name'];
						
						
						
									
						?>
						
						
                <tr>
				                  <td><?php echo $Course_Name; ?></td>

                  <td><?php echo $Full_Name; ?></td>
                  <td><?php echo $Package_Name; ?></td>
                  <td><a href="View_Package_Files.php?Package_Name=<?php echo $Package_Name; ?>&P_ID=<?php echo $P_ID; ?>" class="btn btn-primary">View Package Files</a></td>
                  <td><?php echo $Add_Date_Time; ?></td>
              
                 
                 
                </tr>
				
				
				<?php
					}
					?>
					
					
               
              </tbody>
            </table>



</center>


                </div>
              </li>


            </ul>
          </div>

         

          

        </div>
        
        </div>
      </div>
	  
	  
	  

	  
	  
	  
	  
  </div>

 

  <!-- Footer -->
  <footer class="footer">
    <strong><font color="#000">Advance KASIT ?? 2021. All Rights Reserved.</font></strong>
  </footer>
  <!-- // Footer -->

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
 

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="js/vendor/all.js"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/core/modernizr.js"></script> -->
  <!-- <script src="js/vendor/core/velocity.js"></script> -->
  <!-- <script src="js/vendor/tables/all.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/slick.js"></script> -->
  <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
  <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
  <!-- <script src="js/vendor/countdown/all.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="js/app/app.js"></script>

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="js/app/essentials.js"></script> -->
  <!-- <script src="js/app/material.js"></script> -->
  <!-- <script src="js/app/layout.js"></script> -->
  <!-- <script src="js/app/sidebar.js"></script> -->
  <!-- <script src="js/app/media.js"></script> -->
  <!-- <script src="js/app/messages.js"></script> -->
  <!-- <script src="js/app/maps.js"></script> -->
  <!-- <script src="js/app/charts.js"></script> -->

  <!-- App Scripts CORE [html]:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        app.js already includes main.js so this should be loaded
        ONLY when using the standalone modules; -->
  <!-- <script src="js/app/main.js"></script> -->

</body>

</html>