<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Results - Ian's Website</title>

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
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- RESULTS SECTION -->
<section id="results" style="margin-top:100px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
          if (isset($_POST['submit']) && $_POST['submit'] == "submit") {

              // Collect form data
              $firstname = $_POST['firstname'];
              $lastname  = $_POST['lastname'];
              $email     = $_POST['email'];
              $phone     = $_POST['phone'];
              $username  = $_POST['username'];
              $password  = $_POST['password'];
              $comments  = $_POST['comments'];

              echo "<h2>Contact Form Data:</h2>";
              echo "<hr>";
              echo "<p><strong>First Name:</strong> $firstname</p>";
              echo "<p><strong>Last Name:</strong> $lastname</p>";
              echo "<p><strong>Email:</strong> $email</p>";
              echo "<p><strong>Phone Number:</strong> $phone</p>";
              echo "<p><strong>Username:</strong> $username</p>";
              echo "<p><strong>Password:</strong> $password</p>";
              echo "<p><strong>Comments:</strong> $comments</p>";
          } 
          else {
              header("Location: contact.php?msg=Error");
              exit();
          }
        ?>
      </div>
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
