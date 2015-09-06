<div class="banner">
<div class="container">
  <section class="slider">
    <div class="flexslider">
      <ul class="slides">
       <!--	<li>
<img src="images/banner.jpg">
<div class="banner-info">
<h1><span>WELCOME</span></h1>
<p>We are committed to client satisfaction in which we serve the client from the developmental stages of a project to final completion. We are here to help you choose which changes and upgrades are right for you.</p>
</div>
</li>-->
		<li><img src="<?php echo of_get_option( 'banner1', 'no entry' ); ?>"></li>
        <li><img src="<?php echo of_get_option( 'banner2', 'no entry' ); ?>"></li>
        <li><img src="<?php echo of_get_option( 'banner3', 'no entry' ); ?>"></li>
        <li><img src="<?php echo of_get_option( 'banner4', 'no entry' ); ?>"></li>
        <li><img src="<?php echo of_get_option( 'banner5', 'no entry' ); ?>"></li>
      </ul>
    </div>
  </section>
   <!-- FlexSlider --> 
	<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js"></script> 
	<script type="text/javascript">

								$(function(){

								  SyntaxHighlighter.all();

								});

								$(window).load(function(){

								  $('.flexslider').flexslider({

									animation: "fade",

									start: function(slider){

									  $('body').removeClass('loading');

									}

								  });

								});

							  </script> 
  
  <!-- FlexSlider --> 
  
</div>
</div>