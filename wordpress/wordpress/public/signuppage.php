<?php /* Template Name: Sign Up */ ?>
<?php require_once('../private/initialize.php'); ?>
<?php $page_title = 'Sign Up'; ?>
<?php get_header(); ?>

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
