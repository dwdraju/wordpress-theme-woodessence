<?php /*
Template Name: About Us
*/
?>
<?php get_header();?>

  <div class="container">
  <div class="about">
	<div class="col-md-8">
    <?php while (have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile;?>
	</div>
	
	<div class="col-md-4">
	  <?php include 'side_bar.php'; ?>
	</div>
        </div>   
        </div>   

<?php get_footer();?>