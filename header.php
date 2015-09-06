<!DOCTYPE HTML>
<?php  ?>
<html>
<head>
  <title><?php wp_title();?></title>
  <?php wp_head();?>
  <script src='https://www.google.com/recaptcha/api.js'></script>

<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet" type="text/css" media="all">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css" type="text/css" media="screen" />
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
  
</head>

<body>
<!-- header -->

<div class="header-bottom">
  <div class="container">
    <div class="logo"> <a href="<?php echo site_url();?>"><img src="<?php echo site_url('/media/');?>images/logo.png" class="img-responsive" alt="" /></a> </div>
    <div class="top-contact"><a href="tel:4165606493">CALL OR TEXT US NOW<br>
      (416) 560-6493</a></div>
  </div>
</div>


      <div class="nav-menu">
<div class="container"><nav id="nav" role="navigation">
    <a href="#nav" title="Show navigation">Show navigation</a>
  <a href="#" title="Hide navigation">Hide navigation</a>
      <?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'nav_menu', 'theme_location' => 'primary' ) ); ?>
<style> #primary li.current-menu-item a { background:#fff;color:#670B0C; }

</style>

 
</nav>
</div>
</div>