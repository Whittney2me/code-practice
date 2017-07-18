<?php /* Template Name: Sign Up */ ?>
<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Sign Up'; ?>
<?php
$firstname = check_input($_POST['firstname']);
if (preg_match("/\s/",$firstname))
{
    die("Please enter your first name here!");
}
$lastname = check_input($_POST['lastname']);
if (preg_match("/\s/",$lastname))
{
    die("Please enter your last name here!");
}
$email = h($_POST['email']);
if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
    die("Please enter a valid address!");
}
$password = check_input($_POST['sign-up-pword'], "Please enter a password!");
$confirm = check_input($_POST['confirm-pword'], "Passwords aren't the same!");
if ($_POST['$password'] === $_POST['$confirm']) {
  //success
} else {
  echo "Passwords aren't the same!";
}

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = h($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
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
