<?php 
/* Template Name: Testimonials
*/
?>
<?php get_header();?>


<div class="container">

<div class="col-md-8">
<div class="mid-head"><h3>Testimonials</h3></div>
<?php query_posts('category_name='.'Testimonial'.'&orderby=date&order=DESC');?>

<?php while (have_posts()):the_post();?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="testi">
<div class="col-md-2">
<img src="<?php echo $url;?>"></div>
<div class="col-md-10">
<p><?php the_content();?></p>
<h5><?php the_title();?><br>
<?php $key_1_value = get_post_meta( get_the_ID(), 'status', true );
// check if the custom field has a value
if( ! empty( $key_1_value ) ) {
  echo $key_1_value;
}  ?></h5>
  
</div>
  
</div>
  <?php endwhile;?>
  <?php wp_reset_postdata(); ?>
  <?php wp_reset_query(); ?>
  
</div>
  
<div class="col-md-4">
<div class="mid-head"><h3> Add Your Testimonials</h3></div>
<div class="testi">

	<?php while (have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile;?>

</div>

	</div>

</div>



<?php get_footer();?>