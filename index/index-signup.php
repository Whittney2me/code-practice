<?php get_header(); ?>

<div class="menu-section">
  <div class="menu-toggle">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
	</div>
	<nav>
		<ul role="navigation" class="hidden">
			<li><a href="index.html">home</a></li>
			<li><a href="index-signin.html">sign in</a></li>
			<li><a href="index-signup.html">sign up</a></li>
			<li><a href="index-hired.html">hire a princess</a></li>
			<li><a href="index-about.html#About-Us">about us</a></li>
			<li><a href="index-about.html#Become-a-Princess">become a princess</a></li>
		</ul>
	</nav>
</div>

<div class="navbar-2">
	<a class="logo" href="index.html">Princess Sitters</a>
	<div class="col-sm-4">
		 <a id="button" href="index-hired.html" class="fancy-btn">Hire a Princess</a>
	</div>
</div>

</header>

<div class="sign-in-box">
	<h1>Sign Up</h1>
		<div class="Sign-Up">
		  <form form action="" method="post">
				<input type="text" id="name" name="firstname" placeholder="First Name">
				<input type="text" id="lname" name="lastname" placeholder="Last Name">
		    <input type="text" id="sign-up-email" name="sign-up-email" placeholder="Email">
		    <input type="text" id="sign-up-pword" name="sign-up-pword" placeholder="Password">
				<input type="text" id="confirm-pword" name="confirm-pword" placeholder="Confirm Password">
		    <input type="submit" value="Sign Up">
		  </form>
				<p> or </p>
			<div class="fb-btn">
				<a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i><span> Facebook</span><a/>
			</div>
		<a href="index-signin.html"> Already have an account?</a>
		</div>
</div>

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
$email = htmlspecialchars($_POST['email']);
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
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

?>

<?php get_footer(); ?>
