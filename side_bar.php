<ul class="about-list">
            <h4 class="m_2">WHY US</h4>
            <li> Licensed & Fully Insured</li>
            <li> Friendly, Respectful staff</li>
            <li> Commitment to each customer</li>
            <li> High quality Workmanship</li>
            <li> Affordable Rates</li>
            <li> We don't Jump Between Jobs!</li>
            <li> 24/7 Free Estimate</li>
            <li> 5 Star Rating Service</li>
          
            <h4 class="m_2">Our Services</h4>
  
<?php query_posts('category_name='.'Services'.'&orderby=date&order=DESC');?>

<?php while (have_posts()):the_post();?>
  
  <li><a href="<?php echo site_url('/services/#'); $key_1_value = get_post_meta( get_the_ID(), 'aname', true );
// check if the custom field has a value
if( ! empty( $key_1_value ) ) {
  echo $key_1_value;
}  ?>"> <?php the_title();?> </a></li>
  <?php endwhile; ?>
       
            <h4 class="m_2">Products</h4>
            <li>Baseboards Moulding & Trimming</li>
            <li>Fence Custom Gates</li>
          </ul>