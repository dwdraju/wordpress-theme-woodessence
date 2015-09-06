<?php 

/* Template Name: Homepage
*/
?>
<?php get_header();?>
<?php include 'banner.php' ;?>

<!-- welcome -->

<div class="welcome">
  <div class="container">
  
  <?php 
    query_posts('posts_per_page=1&category_name=welcome'); 
    
    while(have_posts()) : the_post();    
  ?>
  
  <h2> <?php the_title(); ?>  </h2>;
    
  <?php
    
    the_content();

    endwhile;
    
    wp_reset_query();
    
  ?>
    
      </div>
</div>

<!-- welcome --> 

<!-- we do -->

<div class="wedo">
  <div class="container">
    <h2>WHAT WE DO</h2>
    <h6>Our primary goal is to provide our clients with their desired final product on time, and on budget. We provide consumers with a single point of contact providing reliable, professional quality contractors and licensed trades. Our trades are licensed, insured and experienced in the renovations and new construction industry of the Mississauga area. </h6>
    <div class="wha-top">
     <?php 
    query_posts('posts_per_page=4&category_name=Home1'); 
    
    while(have_posts()) : the_post();  
    $custom = MultiPostThumbnails::get_post_thumbnail_url('post', 'secondary-image', NULL); 
	  

	  ?>
  
  

      <div class="col-md-3 wha-top1"> 
		
		<?php 
		
		
		$imageid = MultiPostThumbnails::get_post_thumbnail_id('post', 'secondary-image', $post->ID);
$imageurl = wp_get_attachment_image_src($imageid,'large');
?>
<img src=" <?php echo $imageurl[0];?>"class="img-responsive" >
		
		
	
		
        <h4><?php the_title();?></h4>
        
		
 <?php $content = get_the_content();
  $required_content = wp_trim_words( $content, 25); ?>
  <p><?php 
//$required_content = implode("..",$required_content).'';

//echo $required_content; ?>
		
		<?php the_title_excerpt('', '', true, '154'); ?>
		</p>

        <a href="services/#<?php $key_1_value = get_post_meta( get_the_ID(), 'aname', true );
// check if the custom field has a value
if( ! empty( $key_1_value ) ) {
  echo $key_1_value;
}  ?>" class="btn  btn-1c">Read More...</a> </div>
<?php 
    

endwhile; 
wp_reset_query();

?>

      <div class="clearfix"> </div>
    </div>
  </div>
</div>

<!-- we do --> 

<!-- midbann -->

<div class="midbann">
  <div class="container">
    <div class="col-md-9 midbann-left">
      <h3>ABOUT US</h3>
      <p>Wood Essence has been the area expert in residential and commercial remodeling, repairs and building additions for more than 10 years! We are Licensed & Fully Insured. We take pride in our work, just as you take pride in your home. High quality craftsmanship. High quality materials. No shortcuts! Our reputation for quality work,responsiveness, and competitive pricing have been key factors in our success. </p>
    </div>
	<div class="col-md-3 midbann-right"> <a class="read" href="<?php echo site_url('/quote');?>">Request A Quote</a><br />
<div class="clearfix"><br /><a class="read" href="<?php echo site_url('/gallery');?>">Visit our gallery</a> </div>

     </div>
    <div class="clearfix"> </div>
  </div>
</div>

<!-- midbann --> 

<!-- maecenas -->

<div class="maecenas">
  <div class="container">
	
  <?php 
    query_posts('posts_per_page=2&category_name=Home2'); 
    
    while(have_posts()) : the_post();    
  ?>
	
	
    <div class="col-md-6 maecenas-left">
      <h4><?php the_title();?> </h4>
      <p><?php the_title_excerpt('', '', true, '210'); echo "...";?></p>
	  <a href="<?php echo site_url('/services/#');?><?php $key_1_value = get_post_meta( get_the_ID(), 'aname', true );
// check if the custom field has a value
if( ! empty( $key_1_value ) ) {
  echo $key_1_value;
  
}  ?>" class="btn  btn-1c">Read More...</a> </div>
	
    <?php endwhile;?>
	
	
    <div class="clearfix"> </div>
  </div>
</div>

<!-- maecenas --> 

<!-- footer -->

<?php get_footer();?>