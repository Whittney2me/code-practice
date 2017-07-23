<?php /* Template Name: Hire Page */ ?>
<?php get_header(); ?>

<div class="background">
	<div class="Hired">
	  <form action="http://138.197.204.229/results/" method="post">
	  <label for="range">Age Range</label>
	    <select id="age" name="Age Range">
	      <option value="toddler">6mo-12mo</option>
	      <option value="preschooler">1-3</option>
	      <option value="child">4-7</option>
	      <option value="older-child">8-10</option>
	    </select>

	  <label for="children">Number of Children</label>
	    <select id="children" name="Number of Children">
	      <option value="1">1</option>
	      <option value="2">2</option>
	      <option value="3">3</option>
	      <option value="4">4+</option>
	    </select>

	  <label for="hours">Hours Needed</label>
	    <select id="hours" name="Hours Needed">
	      <option value="1-hour">1</option>
	      <option value="2-hour">2</option>
	      <option value="3-hour">3</option>
	      <option value="4-hour">4+</option>
	    </select>

	 <label for="princesses">Desired Princess</label>
	    <select id="princess" name="Desired Princess">
	      <option value="rapunzel">Rapunzel</option>
	      <option value="cinderella">Cinderella</option>
	      <option value="snow-white">Snow White</option>
	      <option value="elsa">Elsa</option>
	      <option value="mulan">Mulan</option>
	      <option value="merida">Merida</option>
	      <option value="sleeping-beauty">Sleeping Beauty</option>
	      <option value="ariel">Ariel</option>
	      <option value="belle">Belle</option>
	      <option value="pocahontas">Pocahontas</option>
	      <option value="jasmine">Jasmine</option>
	      <option value="tiana">Tiana</option>
	    </select>

	    <input type="submit" value="Hire a Princess">
	  </form>
	</div>
</div>

<?php get_footer(); ?>
