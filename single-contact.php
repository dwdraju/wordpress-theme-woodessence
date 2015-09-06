<?php /*
Template Name: Contact Us
*/
get_header();
?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="main_btm1"><!-- start main_btm -->
  <div class="container">
    <div class="contact">
      <div class="map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d370918.40744626004!2d-79.61109699999999!3d43.42300399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1swood+essence+2561+Mindemoya+Rd+Mississauga%2C+ON+L5C+2R1%2C+Canada!5e0!3m2!1sen!2snp!4v1430701760861" width="100%" height="300" frameborder="0" style="border:0"></iframe>
      </div>
      <div class="contact_main">
     <!--   <div class="col-md-4 company_ad">
          <h2>Contact Information :</h2>
          <address>
          <p>Wood Essence </p>
          <p>2561 Mindemoya Rd Mississauga,<br /> ON L5C 2R1, <br /> Canada </p>
          <p>(416)560-6493</p>
          <p>Email: <a href="mailto:sadrian@sympatico.ca">sadrian@sympatico.ca</a></p>
         
          </address>
        </div> -->
        <div class="col-md-8">
          <div class="contact-form">
         <?php while (have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile;?>

          </div>
        </div>
        <div class="col-md-4"><img src="<?php echo of_get_option( 'example_text', 'no entry' ); ?>" width="100%" height="auto"><br /><br /><img src="<?php echo of_get_option( 'example_text2', 'no entry' ); ?>" width="100%" height="auto"></div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>