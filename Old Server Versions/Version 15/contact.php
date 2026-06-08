<?php
session_start();
include("functions.php");
?>


<!-- CONTACT SECTION -->
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
// If form not been submitted, show form
if (!isset($_POST['submit'])) {

echo '<h3>Please fill out this form:</h3>';
echo '<form method="post" action="">';

// First Name
if (isset($_GET['error']) && strstr($_GET['error'], "fnNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">First Name:</label>';
echo '<input type="text" name="firstName" class="form-control">';
echo '<span class="help-block">First name cannot be blank!</span>';
echo '</div>';
}
elseif (isset($_GET['error']) && strstr($_GET['error'], "fnInvalidChar")) {
echo '<div class="form-group has-error">';
echo '<label class="control-label">First Name:</label>';
echo '<input type="text" name="firstName" class="form-control" value="'.$_SESSION['fnData'].'">';
echo '<span class="help-block">First name contains invalid characters!</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['fnData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">First Name:</label>';
echo '<input type="text" name="firstName" class="form-control" value="'.$_SESSION['fnData'].'">';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">First Name:</label>';
echo '<input type="text" name="firstName" class="form-control">';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

// Last Name
if (isset($_GET['error']) && strstr($_GET['error'], "lnNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">Last Name:</label>';
echo '<input type="text" name="lastName" class="form-control">';
echo '<span class="help-block">Last name cannot be blank!</span>';
echo '</div>';
}
elseif (isset($_GET['error']) && strstr($_GET['error'], "lnInvalidChar")) {
echo '<div class="form-group has-error">';
echo '<label class="control-label">Last Name:</label>';
echo '<input type="text" name="lastName" class="form-control" value="'.$_SESSION['lnData'].'">';
echo '<span class="help-block">Last name contains invalid characters!</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['lnData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">Last Name:</label>';
echo '<input type="text" name="lastName" class="form-control" value="'.$_SESSION['lnData'].'">';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">Last Name:</label>';
echo '<input type="text" name="lastName" class="form-control">';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

// Email
if (isset($_GET['error']) && strstr($_GET['error'], "emailNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">Email:</label>';
echo '<input type="text" name="email" class="form-control">';
echo '<span class="help-block">Email cannot be blank!</span>';
echo '</div>';
}
elseif (isset($_GET['error']) && strstr($_GET['error'], "emailInvalid")) {
echo '<div class="form-group has-error">';
echo '<label class="control-label">Email:</label>';
echo '<input type="text" name="email" class="form-control" value="'.$_SESSION['emailData'].'">';
echo '<span class="help-block">Invalid email format!</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['emailData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">Email:</label>';
echo '<input type="text" name="email" class="form-control" value="'.$_SESSION['emailData'].'">';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">Email:</label>';
echo '<input type="text" name="email" class="form-control">';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

// Phone Number
if (isset($_GET['error']) && strstr($_GET['error'], "phoneNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">Phone Number:</label>';
echo '<input type="text" name="phone" class="form-control">';
echo '<span class="help-block">Phone number cannot be blank!</span>';
echo '</div>';
}
elseif (isset($_GET['error']) && strstr($_GET['error'], "phoneInvalid")) {
echo '<div class="form-group has-error">';
echo '<label class="control-label">Phone Number:</label>';
echo '<input type="text" name="phone" class="form-control" value="'.$_SESSION['phoneData'].'">';
echo '<span class="help-block">Phone must contain only digits!</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['phoneData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">Phone Number:</label>';
echo '<input type="text" name="phone" class="form-control" value="'.$_SESSION['phoneData'].'">';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">Phone Number:</label>';
echo '<input type="text" name="phone" class="form-control">';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

// Username
if (isset($_GET['error']) && strstr($_GET['error'], "unNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">Username:</label>';
echo '<input type="text" name="username" class="form-control">';
echo '<span class="help-block">Username cannot be blank!</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['unData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">Username:</label>';
echo '<input type="text" name="username" class="form-control" value="'.$_SESSION['unData'].'">';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">Username:</label>';
echo '<input type="text" name="username" class="form-control">';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

// Password
if (isset($_GET['error']) && strstr($_GET['error'], "pwNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">Password:</label>';
echo '<input type="password" name="password" class="form-control">';
echo '<span class="help-block">Password cannot be blank!</span>';
echo '</div>';
}
elseif (isset($_GET['error']) && strstr($_GET['error'], "pwShort")) {
echo '<div class="form-group has-error">';
echo '<label class="control-label">Password:</label>';
echo '<input type="password" name="password" class="form-control">';
echo '<span class="help-block">Password must be at least 6 characters.</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['pwData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">Password:</label>';
echo '<input type="password" name="password" class="form-control" value="'.$_SESSION['pwData'].'">';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">Password:</label>';
echo '<input type="password" name="password" class="form-control">';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

// Comments
if (isset($_GET['error']) && strstr($_GET['error'], "cmNull")) { // Error state
echo '<div class="form-group has-error">';
echo '<label class="control-label">Comments:</label>';
echo '<textarea name="comments" class="form-control" rows="4"></textarea>';
echo '<span class="help-block">Comments cannot be blank!</span>';
echo '</div>';
}
else { // Non error state
if(isset($_SESSION['cmData'])) // Previous success state
{
echo '<div class="form-group has-success">';
echo '<label class="control-label">Comments:</label>';
echo '<textarea name="comments" class="form-control" rows="4">'.$_SESSION['cmData'].'</textarea>';
echo '<span class="help-block"></span>';
echo '</div>';
}
else // Default state
{
echo '<div class="form-group">';
echo '<label class="control-label">Comments:</label>';
echo '<textarea name="comments" class="form-control" rows="4" placeholder="Your message here..."></textarea>';
echo '<span class="help-block"></span>';
echo '</div>';
}
}

echo '<hr>';
echo '<div class="form-group text-center">';
echo '<button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>';
echo '</div>';
echo '</form>';
} 
else {
$errors="";

// Collect form data
$firstName = $_POST['firstName'];
if ($firstName==NULL)
$errors.="fnNull";
elseif(!preg_match("/^[A-Za-z'-]{2,}$/", $firstName))
{
$_SESSION['fnData']=$firstName;
$errors.="fnInvalidChar";
}
else $_SESSION['fnData']=$firstName;

$lastName = $_POST['lastName'];
if ($lastName==NULL)
$errors.="lnNull";
elseif(!preg_match("/^[A-Za-z'-]{2,}$/", $lastName))
{
$_SESSION['lnData']=$lastName;
$errors.="lnInvalidChar";
}
else $_SESSION['lnData']=$lastName;

$email = $_POST['email'];
if ($email == NULL)
$errors .= "emailNull";
elseif(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email))
$errors .= "emailInvalid";
else $_SESSION['emailData'] = $email;

$phone = $_POST['phone'];
if ($phone==NULL)
$errors.="phoneNull";
elseif(!preg_match("/^\d{10}$/", $phone))
$errors.="phoneInvalid";
else $_SESSION['phoneData']=$phone;

$username = $_POST['username'];
if ($username==NULL)
$errors.="unNull";
else $_SESSION['unData']=$username;

$password = $_POST['password'];
if ($password==NULL)
$errors.="pwNull";
elseif(strlen($password) < 6)
$errors.="pwShort";
else $_SESSION['pwData']=$password;


$comments = $_POST['comments'];
if ($comments==NULL)
$errors.="cmNull";
else $_SESSION['cmData']=$comments;

// Redirect if any errors
if($errors!='')
redirect("contact.php?error=$errors");

// Display results after should no errors occur
echo '<h3>Contact Form Data</h3>';
echo '<hr>';
echo '<div><b>First Name:</b> ' . $firstName . '</div>';
echo '<div><b>Last Name:</b> ' . $lastName . '</div>';
echo '<div><b>Email:</b> ' . $email . '</div>';
echo '<div><b>Phone:</b> ' . $phone . '</div>';
echo '<div><b>Username:</b> ' . $username . '</div>';
echo '<div><b>Password:</b> ' . $password . '</div>';
echo '<div><b>Comments:</b><br>' . $comments . '</div>';
echo '<br><a href="contact.php" class="btn btn-primary">Back to Form</a>';
}
?>
</div>