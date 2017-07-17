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
	<h1>Sign in</h1>
		<div class="Sign-In">
		  <form form action="" method="post">
		    <input type="text" id="sign-in-email" name="sign-in-email" placeholder="Email">
		    <input type="text" id="sign-in-pword" name="sign-in-pword" placeholder="Password">
		    <input type="submit" value="Sign In">
		  </form>
				<p> or </p>
			<div class="fb-btn">
				<a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i><span> Facebook</span><a/>
			</div>
		<a href="index-signup.html">Don't have an account?</a>
	</div>
</div>

<?php

$email = htmlspecialchars($_POST['email']);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
{
    die("Please enter a valid address!");
}
$password = check_input($_POST['sign-in-pword'], "Please enter a password!");
?>

<?php
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
