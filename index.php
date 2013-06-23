<?php 
	include('controller.php');
?>

<html>
  <head>
    <title>Anwar PHP Object Orientated Programming</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
      /* Set the fixed height of the footer here */
      #push,
      .footer {
  		position: relative;
  		margin-top: -150px; /* negative value of footer height */
 		height: 150px;
  		clear:both;
  		padding-top:20px;
      }
      .footer {
        background-color: #f5f5f5;
      }

      .containercredit {
        min-height:100%;
      
      }

    </style>
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top wrap">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">Anwar PHP OOP</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              
            </ul>
          <div class="nav-collapse collapse pull-right">
            <?php checkUserStatus();
             ?>
             <ul class="nav">
            <li>
             <?php setNavBar();?>
             </li>
            </ul>
          </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container ">
      <!-- Main hero unit for a primary marketing message or call to action -->
		<? getMain();
		?>

      <hr>

    </div> <!-- /container -->
    
    <div class="container">  
        <p class="muted credit"> Example courtesy &copy; Z Anwar 2012.</p>
    </div>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
