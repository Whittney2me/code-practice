<?php /* Template Name: Sign Up */ ?>

<?php
$firstname = check_input($_POST['firstname']);

if (preg_match("/\s/",$firstname)) {
  die("Please enter your first name here!");
} else {
  echo "Success!"
}

$lastname = check_input($_POST['lastname']);
if (preg_match("/\s/",$lastname)) {
  die("Please enter your last name here!");
} else {
  echo "Success!"
}

$email = htmlspecialchars($_POST['email']);
if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
  die("Please enter a valid address!");
} else {
  echo "Success!"
}

$password = check_input($_POST['sign-up-pword'], "Please enter a password!");

$confirm = check_input($_POST['confirm-pword']);

if ($_POST['$password'] === $_POST['$confirm']) {
  echo "Success!";
} else {
  echo "Passwords aren't the same!";
}

?>
<?php get_navigation(); ?>

<div class="sign-in-box">
	<h1>Sign Up</h1>
		<div class="Sign-Up">
		  <form form action="" method="post">
				<input type="text" id="name" name="firstname" placeholder="First Name">
				<input type="text" id="lname" name="lastname" placeholder="Last Name">
		    <input type="text" id="sign-in-email" name="sign-in-email" placeholder="Email">
		    <input type="text" id="sign-in-pword" name="sign-in-pword" placeholder="Password">
				<input type="text" id="confirm-pword" name="confirm-pword" placeholder="Confirm Password">
		    <input type="submit" value="Sign Up">
		  </form>
				<p> or </p>
			<div class="fb-btn">
				<a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i><span> Facebook</span><a/>
			</div>
		<a href="http://138.197.204.229/sign-in/"> Already have an account?</a>
		</div>
</div>

<?php get_footer(); ?>
