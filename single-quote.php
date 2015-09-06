<?php
/* Template Name: Request Quote
*/
?>
<?php 
  $captcha_correct = false; //set it to false until proven true

    require_once(ABSPATH . 'wp-admin/admin-functions.php'); //include the WordPress admin functions file

    if (is_plugin_active(plugin_basename('really-simple-captcha/really-simple-captcha.php'))) { //check if the plugin is installed and active

        if (class_exists(‘ReallySimpleCaptcha’)) { //check if the Really Simple Captcha class is available

            $captcha = new ReallySimpleCaptcha();

            if (!empty($_POST)) { //data has been posted by the user, lets check whats going on

              if ($captcha -> check($_POST['captcha_prefix'], $_POST['captcha_code'])) {

                $captcha_correct = true; //the captcha has been proven as correct
				echo "hello";

              }

            } else {

              $captcha_word = $captcha -> generate_random_word(); //generate a random string with letters

              $captcha_prefix = mt_rand(); //random number

              $captcha_image = $captcha -> generate_image($captcha_prefix, $captcha_word); //generate the image file. it returns the file name

			  $captcha_file = rtrim(get_bloginfo(‘wpurl’), ‘/’) . ‘media/wpcf7_captcha/’ . $captcha_image; //construct the absolute URL of the captcha image

			  echo "ere";
            }
		  echo "dfas";

        }

    }

?>


<?php get_header();?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php include ('banner.php'); ?>

<div class="container">
  <div class="contact-form quote">
    <?php
	  if(isset($_POST['email_submit'])) {
	  // EDIT THE 2 LINES BELOW AS REQUIRED
		  $email_to = "sadrian@sympatico.ca";
		  //$email_subject = $_POST['subject'];
		  $email_subject = 'Quote Request by : '.$_POST['fname'];
				function died($error) {
					   // your error code can go here
					  echo "We are very sorry, but there were error(s) found with the form you submitted. ";
					  echo "These errors appear below.<br /><br />";
					  echo $error."<br /><br />";
					  echo "Please go back and fix these errors.<br />";

            ?> <a href="<?php echo site_url('/quote'); ?>" >Go Back</a><br/>
            <?php 
				die();
				}
					  // validation expected data exists
					  if(!isset($_POST['fname']) ||
					  !isset($_POST['email']) ||
					  !isset($_POST['phone']) ||
					  !isset($_POST['address'])) {
	  died('We are sorry, Please fill the required field.');      
	  }
				$fname = $_POST['fname']; // required
				$address = $_POST['address']; // required
				$email_from = $_POST['email']; // required
				$phone = $_POST['phone']; // required
				$bname = $_POST['bname']; // not required
				$mobile = $_POST['mobile']; // not required
				$projecttype = $_POST['projecttype']; // not required
				$desireddate = $_POST['desireddate']; // not required
				$requestfor = $_POST['requestfor']; // not required
				$preferredcontact = $_POST['preferredcontact']; // not required
				$description = $_POST['description']; // not required
									$error_message = "";
									$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
									if(!preg_match($email_exp,$email_from)) {
									$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
									}
									$string_exp = "/^[A-Za-z .'-]+$/";
									if(!$fname) {
									$error_message .= 'The name you entered does not appear to be valid.<br />';
									}
									if(!$address) {
									$error_message .= 'The address you entered does not appear to be valid.<br />';
									}
									if(!preg_match("/^[\+0-9\-\(\)\s]*$/",$phone)) {
									$error_message .= 'The phone you entered does not appear to be valid.<br />';
									}
									if(!preg_match("/^[\+0-9\-\(\)\s]*$/",$mobile)) {
									$error_message .= 'The mobile number you entered does not appear to be valid.<br />';
									}									
									if(strlen($error_message) > 0) {
									died($error_message);
									}
									$email_message = "Form details below.\n\n";
									function clean_string($string) {
									$bad = array("content-type","bcc:","to:","cc:","href");
									return str_replace($bad,"",$string);
										}
		  $email_message .= "Name: ".clean_string($fname)."\n";
		  $email_message .= "Address: ".clean_string($address)."\n";
		  $email_message .= "Email: ".clean_string($email_from)."\n";
		  $email_message .= "Business Name: ".clean_string($bname)."\n";
		  $email_message .= "Mobile no: ".clean_string($mobile)."\n";
		  $email_message .= "Telephone no: ".clean_string($phone)."\n";
		  $email_message .= "Type of Project: ".clean_string($projecttype)."\n";
		  $email_message .= "Estimated Start Date: ".clean_string($desireddate)."\n";
		  $email_message .= "Request for home or business: ".clean_string($requestfor)."\n";
		  $email_message .= "Preferred Contact: ".clean_string($preferredcontact)."\n";
		  $email_message .= "About My Project: ".clean_string($description)."\n";
		
	  // create email headers
	  $headers = 'From: '.$email_from."\r\n".
	   'Reply-To: '.$email_from."\r\n" .
	   'X-Mailer: PHP/' . phpversion();
	   @mail($email_to, $email_subject, $email_message, $headers); 
?>
    <!-- include your own success html here -->
    <div class="emailmsg"> Your request is submitted successfully. Thank you for contacting us. We will reply you ASAP.</div>
    <?php
 }
?>

<br/>
<h3>Fill this form to Request a Quote. We will contact you as soon as possible.</h3>
<br/>
    <p><span>*</span> Required Fields</p>
    <form class="form" method="post" action="">
       <input type="hidden" name="form_title" value="Request Quote"/>

     <h4>Personal Information</h4>
      <div class="col-md-4">
       
        <p> Full Name <span>*</span> :
          <input type="text" placeholder="Your Full Name" class="stl" name="fname">
        </p>
        <p> Business Name :
          <input type="text" class="stl" placeholder="Your Business Name" name="bname">
        </p>
        
        <p> Email <span>*</span> :
          <input type="text" class="stl" placeholder="Your Email Address" name="email">
        </p>
        </div>
        <div class="col-md-4">
        <p> Telephone <span>*</span> :
          <input type="text" class="stl" placeholder="Telephone Number"name="phone">
        </p>
      
     
        <p> Mobile No :
          <input type="text" class="stl" placeholder="Mobile Number" name="mobile">
        </p>
        <p> Address <span>*</span> :
          <input type="text" class="stl" placeholder="Address" name="address">
        </p>
        </div>
        <div class="col-md-4">
        <img src="<?php echo of_get_option( 'example_text', 'no entry' ); ?>" width="100%" height="auto"> </div>
      <div class="clearfix"></div>
 
     <div class="col-md-4">
        <h4>Type of Project :</h4>
        <p> Select Your Project : <br />
          <select class="stl3" name="projecttype">
            <option selected="selected" value="Not Specified">Please Select</option>
            <option value="IKEA Installation">IKEA Installation</option>
            <option value="Basement Development">Basement Development</option>
            <option value="Home Renovation">Home Renovation</option>
            <option value="Interior Finishing Carpentry">Interior Finishing Carpentry</option>
            <option value="Floor Installation">Floor Installation</option>
            <option value="Deck &amp; Fence">Deck &amp; Fence</option>
            <option value="Modular kitchens">Modular kitchens</option>
            <option value="Kitchen taps &amp; sinks">Pergolas &amp; Gazebos and Trellis</option>
            <option value="Other">Other</option>
          </select>
        </p>
        <br>
       
        <p> Desired Project Start Date :
        <br />
          <input type="text" id="datepicker" value="" placeholder="DD/MM/YYYY" class="tcal tcalInput" name="desireddate">
        </p>
      
  
        <h4>Is this request for your home or business?</h4>
       
          <input type="radio" value="Residential" name="requestfor">
          Residential &nbsp;&nbsp;
          <input type="radio" value="Commercial" name="requestfor">
          Commercial 
      </div>
       <div class="col-md-4">
        <h4>Preferred Contact :</h4>
        <p>
          <input type="radio" value="Phone" name="preferredcontact">
          Phone
          &nbsp;&nbsp;
          <input type="radio" value="Email" name="preferredcontact">
          Email </p>
   
              <h4>Please describe your project and feel free to elaborate:</h4>
        <p>
          <textarea class="stl2" rows="" cols="" name="description"></textarea>
        </p>
		 
		 
		 

		 
		 
		 
        <p><div class="g-recaptcha" data-sitekey="6Lde6QYTAAAAAKR5ClWEmvPRgLCshZgczRtQsWlx"></div></p>
            <p>
        <input type="submit" class="btn" value="Submit" name="email_submit">

      </p>
     </div>
     <div class="col-md-4"><img src="<?php echo of_get_option( 'example_text2', 'no entry' ); ?>" width="100%" height="auto"></div>

    </form>
  </div>
</div>
<?php while (have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile;?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<?php get_footer();?>
