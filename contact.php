<!DOCTYPE html>
<?php include("basedir.php"); ?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/font-awesome.css">
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/app.css">
	<link rel="stylesheet" href="<?php echo $basedir;?>stylesheets/style.css">

	<script src="<?php echo $basedir;?>javascripts/foundation/modernizr.foundation.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'><?php include("php/meta.php"); meta("Photography"); ?>  <nav class="top-bar fixed">
    <ul>
      <li class="name"><h1><a href="<?php echo $basedir;?>">a<span style="position: relative;top: 8px;">x</span><span style="position: relative;top: 4px;">y</span>z . coding & imaging</a></h1></li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>
    <section>
      <ul class="right">
        <li><a href="<?php echo $basedir;?>photography.php">Photography</a></li>
        <li><a href="<?php echo $basedir;?>web-design.php">Web Design</a></li>
        <li><a href="#">Coding</a></li>
        <li><a href="#">Writing</a></li>
        <li><a href="#"><i class="icon-info-sign"></i>About</a></li>
        <li><a href="<?php echo $basedir;?>contact.php">Contact</a></li>
      </ul>
    </section>
  </nav><br><br><br><br/>
<div class="row">
  <div class="nine columns">
    <h3>Get in Touch!</h3>
    <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
    <dl class="contained tabs">
      <dd class="active"><a href="#contactForm">Contact Our Company</a></dd>
      <dd><a href="#contactPeople">Specific Person</a></dd>
    </dl>
    <ul class="tabs-content contained">
      <li id="contactFormTab" class="active">
        <div class="row collapse">
          <div class="two columns">
            <label class="inline">Your Name</label>
          </div>
          <div class="ten columns">
            <input type="text" id="yourName"/>
          </div>
        </div>
        <div class="row collapse">
          <div class="two columns">
            <label class="inline">Your Email</label>
          </div>
          <div class="ten columns">
            <input type="text" id="yourEmail"/>
          </div>
        </div>
        <label>What's up?</label>
        <textarea rows="4"></textarea>
        <button type="submit" class="radius button">Submit</button>
      </li>
      <li id="contactPeopleTab">
        <ul class="block-grid five-up">
          <li> <a href="mailto:mal@serenity.bc.reb"> </a><img src="http://placehold.it/200x200&amp;text=[person]"/><br/><span>Andrea Moretti</span></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="three columns">
    <h5>Map</h5>
    <p><a href="" data-reveal-id="mapModal"> <img src="http://placehold.it/400x280"/></a><br/><a href="" data-reveal-id="mapModal">View Map</a></p>
    <p>
      123 Awesome St. 
      <br>
      Barsoom, MA 95155
      
      
    </p>
  </div>
</div><footer class="row">
  <div class="twelve columns"><hr />
    <div class="row">

      <div class="six columns">
          <p>&copy; Copyright Andrea Moretti 2012.</p>
      </div>

      <div class="six columns">
        <ul class="link-list right">
          <li><a href="#">Home</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Coding</a></li>
          <li><a href="#">Writing</a></li>
          <li><a href="#"><i class="icon-info-sign"></i>About</a></li>
        </ul>
      </div>

    </div>
  </div>
</footer><!-- Included JS Files (Uncompressed) -->
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.forms.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.event.move.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.magellan.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.placeholder.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.navigation.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.accordion.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="<?php echo $basedir;?>javascripts/foundation/jquery.foundation.joyride.js"></script>
	

  <!-- Application Javascript, safe to override -->
  <script src="<?php echo $basedir;?>javascripts/jquery.grid-a-licious.min.js"></script>
  <script src="<?php echo $basedir;?>javascripts/foundation/app.js"></script>
  <script src="<?php echo $basedir;?>javascripts/foundation/script.js"></script>
</body>
</html>