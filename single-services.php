<?php 
/* Template Name: Services
*/
?>
<?php get_header();?>

<div class="container">
<div class="mid-head"><h3>Our Services</h3></div>
<p>Our primary goal is to provide our clients with their desired final product on time, and on budget. We provide consumers with a single point of contact providing reliable, professional quality contractors and licensed trades. Our trades are licensed, insured and experienced in the renovations and new construction industry of the Mississauga area.</p>

<div class="mid-bar-gr"></div>

<?php query_posts('category_name='.'Services'.'&orderby=date&order=DESC');?>

<?php while (have_posts()):the_post();?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>


<div class="col-md-9">
<?php 

?>
<h3><a name="<?php $key_1_value = get_post_meta( get_the_ID(), 'aname', true );
// check if the custom field has a value
if( ! empty( $key_1_value ) ) {
  echo $key_1_value;
}  ?>"><?php the_title();?></a></h3>

<?php the_content();?>
</div>
<div class="col-md-3"><a href="gallery.php"><img src="<?php echo $url;?>" class="img-responsive"></a></div>
<div class="mid-bar-gr"></div>


<?php endwhile;?>


</div>
<?php get_footer();?>