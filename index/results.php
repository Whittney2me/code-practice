<?php get_header(); ?>

<body>

	<div class="loader">
	 <div class="inner uno"></div>
	 <div class="inner dos"></div>
	 <div class="inner tres"></div>
 </div>

<header>

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

	<!--<div class="navbar-2">-->
		<a class="back" href="index-hired.html"><i class="fa fa-chevron-left"></i></a>
		<div class="col-sm-4">
		<!--	<a id="button" href="index-hired.html" class="fancy-btn">Hire a Princess</a> -->
		</div>
	<!--</div>-->

</header>

<h2>Showing results for <?php echo _POST['princess']; ?></h2>

<div class="box" style="display: none;">
	<div class="imgbar">
		<div class="results1" style="cursor: pointer" onclick="window.location='info-1.html';"></div>
			<h1>Princess Shenell</h1>
				<p>Venice, CA</p>
		<div class="results2" style="cursor: pointer" onclick="window.location='info-2.html';"></div>
			<h1>Princess Brittney</h1>
				<p>Dexter, MO</p>
		<div class="results3" style="cursor: pointer" onclick="window.location='info-3.html';"></div>
			<h1>Princess Julie</h1>
				<p>Dexter, MO<p>
	</div>
</div>

<?php get_footer(); ?>
