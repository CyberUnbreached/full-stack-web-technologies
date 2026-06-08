<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ian's Contact Information</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/templatemo-style.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- NAVBAR -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a href="index.html" class="navbar-brand">Ian's Website</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-nav-first">
        <li><a href="index.html">Home</a></li>
        <li><a href="school.html">School</a></li>
        <li><a href="hobbies.html">Hobbies</a></li>
        <li><a href="work.html">Work</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Contact Me</h1>
        <p><b>Email:</b> ian.rohan@my.utsa.edu</p>
        <p><b>Phone:</b> (444) 444-4444</p>
        <hr>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="row">
	  <?php
		if(isset($_GET['msg']) && $_GET['msg']=='Error')
			echo '<div class="alert alert-danger">You must fill out the contact form first!</div>'
	  ?>
      <h3>Please fill out this form:</h3>
      <form method="get" action="results.php">
        <div class="form-group">
          <label for="firstname" class="control-label">First Name:</label>
          <input type="text" id="firstname" name="firstname" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="lastname" class="control-label">Last Name:</label>
          <input type="text" id="lastname" name="lastname" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="email" class="control-label">Email:</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="phone" class="control-label">Phone Number:</label>
          <input type="text" id="phone" name="phone" class="form-control" placeholder="(123) 456-7890">
        </div>

        <div class="form-group">
          <label for="username" class="control-label">Username:</label>
          <input type="text" id="username" name="username" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="password" class="control-label">Password:</label>
          <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="comments" class="control-label">Comments:</label>
          <textarea id="comments" name="comments" class="form-control" rows="4" placeholder="Your message here..."></textarea>
        </div>

        <hr>

        <div class="form-group text-center">
          <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
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
