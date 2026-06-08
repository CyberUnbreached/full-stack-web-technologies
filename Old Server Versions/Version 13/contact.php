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
        // If form not submitted, show form
        if (!isset($_POST['submit'])) {

          // Show error message only when displaying the form
          if (isset($_GET['msg']) && $_GET['msg'] == 'Error') {
            echo '<div class="alert alert-danger">All fields are required. Please fill out every box.</div>';
          }

          echo '<h3>Please fill out this form:</h3>';
          echo '<form method="post" action="">';
          
          echo '<div class="form-group">';
          echo '<label for="firstname" class="control-label">First Name:</label>';
          echo '<input type="text" id="firstname" name="firstname" class="form-control">';
          echo '</div>';

          echo '<div class="form-group">';
          echo '<label for="lastname" class="control-label">Last Name:</label>';
          echo '<input type="text" id="lastname" name="lastname" class="form-control">';
          echo '</div>';

          echo '<div class="form-group">';
          echo '<label for="email" class="control-label">Email:</label>';
          echo '<input type="email" id="email" name="email" class="form-control">';
          echo '</div>';

          echo '<div class="form-group">';
          echo '<label for="phone" class="control-label">Phone Number:</label>';
          echo '<input type="text" id="phone" name="phone" class="form-control" placeholder="(123) 456-7890">';
          echo '</div>';

          echo '<div class="form-group">';
          echo '<label for="username" class="control-label">Username:</label>';
          echo '<input type="text" id="username" name="username" class="form-control">';
          echo '</div>';

          echo '<div class="form-group">';
          echo '<label for="password" class="control-label">Password:</label>';
          echo '<input type="password" id="password" name="password" class="form-control">';
          echo '</div>';

          echo '<div class="form-group">';
          echo '<label for="comments" class="control-label">Comments:</label>';
          echo '<textarea id="comments" name="comments" class="form-control" rows="4" placeholder="Your message here..."></textarea>';
          echo '</div>';

          echo '<hr>';
          echo '<div class="form-group text-center">';
          echo '<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>';
          echo '</div>';
          echo '</form>';
        } 
        else {
          // Collect form data
          $firstname = $_POST['firstname'];
          $lastname  = $_POST['lastname'];
          $email     = $_POST['email'];
          $phone     = $_POST['phone'];
          $username  = $_POST['username'];
          $password  = $_POST['password'];
          $comments  = $_POST['comments'];

          // If any field is empty, redirect with error
          if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($username) || empty($password) || empty($comments)) {
            header("Location: contact.php?msg=Error");
            exit();
          }

          // Display results
          echo '<h3>Contact Form Data</h3>';
          echo '<hr>';
          echo '<div><b>First Name:</b> ' . $firstname . '</div>';
          echo '<div><b>Last Name:</b> ' . $lastname . '</div>';
          echo '<div><b>Email:</b> ' . $email . '</div>';
          echo '<div><b>Phone:</b> ' . $phone . '</div>';
          echo '<div><b>Username:</b> ' . $username . '</div>';
          echo '<div><b>Password:</b> ' . $password . '</div>';
          echo '<div><b>Comments:</b><br>' . $comments . '</div>';

          echo '<br><a href="contact.php" class="btn btn-primary">Back to Form</a>';
        }
      ?>
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
