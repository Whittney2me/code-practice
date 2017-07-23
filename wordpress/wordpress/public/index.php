<?php require_once('initialize.php'); ?>
<?php $page_title = 'Home'; ?>
<?php get_header(); ?>

<div data-am-fadeshow="quick-nav prev-next-nav slide-counter autoplay ken-burns">

  <!-- Radio -->
  <input type="radio" name="css-fadeshow" id="slide-1" />
  <input type="radio" name="css-fadeshow" id="slide-2" />
  <input type="radio" name="css-fadeshow" id="slide-3" />

  <!-- Slides -->
  <div class="fs-slides">
    <div class="fs-slide">
      <div class="fs-slide-bg"></div>
			<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-family: sans-serif; text-align: center; text-shadow: 0 0 20px rgba(0,0,0,0.5);">
				<h1 style="margin-top: 0; margin-bottom: 0.8vw; font-size: 5vw; font-weight: bold;">Stress Free</h1>
				<p style="font-size: 2vw; font-weight: 100; margin-top: 0;">Search through Princesses from your area!</p>
			</div>
    </div>
    <div class="fs-slide">
      <div class="fs-slide-bg"></div>
			<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-family: sans-serif; text-align: center; text-shadow: 0 0 20px rgba(0,0,0,0.5);">
				<h1 style="margin-top: 0; margin-bottom: 0.8vw; font-size: 5vw; font-weight: bold;">Wonderful Personalities</h1>
				<p style="font-size: 2vw; font-weight: 100; margin-top: 0;">A fun, warm personality is <br> just one of the qualites <br> we expect for our Princesses!</p>
			</div>
    </div>
    <div class="fs-slide">
      <div class="fs-slide-bg")></div>
			<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; font-family: sans-serif; text-align: center; text-shadow: 0 0 20px rgba(0,0,0,0.5);">
				<h1 style="margin-top: 0; margin-bottom: 0.8vw; font-size: 5vw; font-weight: bold;">Highest Standards</h1>
				<p style="font-size: 2vw; font-weight: 100; margin-top: 0;">Our Princesses have exstensive <br> background-checks to ensure <br> they're the best for the job!</p>
			</div>
    </div>
  </div>

  <!-- Quick Navigation -->
  <div class="fs-quick-nav">
    <label class="fs-quick-btn" for="slide-1"></label>
    <label class="fs-quick-btn" for="slide-2"></label>
    <label class="fs-quick-btn" for="slide-3"></label>
  </div>

  <!-- Prev Navigation -->
  <div class="fs-prev-nav">
    <label class="fs-prev-btn" for="slide-1"></label>
    <label class="fs-prev-btn" for="slide-2"></label>
    <label class="fs-prev-btn" for="slide-3"></label>
  </div>

  <!-- Next Navigation -->
  <div class="fs-next-nav">
    <label class="fs-next-btn" for="slide-1"></label>
    <label class="fs-next-btn" for="slide-2"></label>
    <label class="fs-next-btn" for="slide-3"></label>
  </div>

  <!-- Slide Counter (only one required) -->
  <div class="fs-slide-counter">
    <span class="fs-slide-counter-current"></span><span class="fs-slide-counter-total"></span>
  </div>

</div>

<!-- Princess Preview------------------------------>
<div class="container">
	<div class="imgbar">
		<div class="img1" id="first">
		</div>
		<div class="img2" id="second">
		</div>
		<div class="img3" id="third">
		</div>
	</div>
	<h1>Fully certified, Local Princesses</h1>
</div>

<?php get_footer(); ?>
