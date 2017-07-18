<?php /* Template Name: Sign In */ ?>
<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Sign In'; ?>
<?php

$email = h($_POST['email']);
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
	<h1>Sign in</h1>
		<div class="Sign-In">
		  <form action="" method="post">
		    <input type="text" id="sign-in-email" name="sign-in-email" placeholder="Email">
		    <input type="text" id="sign-in-pword" name="sign-in-pword" placeholder="Password">
		    <input type="submit" value="Sign In">
		  </form>
				<p> or </p>
			<div class="fb-btn">
				<a href="https://www.facebook.com/login/"><i class="fa fa-facebook"></i><span> Facebook</span><a/>
			</div>
		<a href="http://138.197.204.229/sign-up/">Don't have an account?</a>
	</div>
</div>

<?php get_footer(); ?>
