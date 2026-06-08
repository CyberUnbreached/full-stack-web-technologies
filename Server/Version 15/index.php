<?php
if (isset($_GET['page']))
	$page=$_GET['page'].".php"; // Get current page being requested
else
	$page="home.php";
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Ian's homepage</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/owl.carousel.css">
     <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="assets/css/templatemo-style.css">
	 <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	 
	 <!-- NAVBAR -->
	 <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
		  <div class="container">
			   <div class="navbar-header">
					<a href="index.php" class="navbar-brand">Ian's Website</a>
			   </div>
			   <div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-nav-first">
						 <?php
							include("navigation.php");
						 ?>
					</ul>
			   </div>
		  </div>
	 </section>

	 <!-- FEATURE -->
	 <section id="feature" style="margin-top:100px;">
		  <div class="container">
			   <?php
			  		include($page);
			   ?>
		  </div>
	 </section>

	 <!-- FOOTER -->
	 <footer id="footer">
		  <div class="container text-center">
			   <p>&copy; 2025 Ian Rohan</p>
		  </div>
	 </footer>

</body>
</html>