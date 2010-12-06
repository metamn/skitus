<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<!-- Blueprint CSS-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/src/reset.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/src/liquid.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/src/typography.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/print.css" type="text/css" media="print">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery-tools-slideshow.css" type="text/css" media="screen, projection">

<!--[if IE]>
<link rel="stylesheet" href="http://skibailetusnad.ro/wp-content/themes/ski/css/blueprint/ie.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="http://skibailetusnad.ro/wp-content/themes/ski/ie.css" type="text/css" media="screen, projection">
<![endif] -->

<!-- JQuery -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
<script type="text/javascript" src="http://cdn.jquerytools.org/1.1.1/full/jquery.tools.min.js"></script>

<!-- Webcam 
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.webcam.js"></script>
-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class='container'>

<div id="header" class="block">
  <div id="logo" class="column span-6">
    <a href="/" title="<?php bloginfo('name'); ?>">
      <img src="<?php echo wp_get_attachment_url(14); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" />
    </a>    
  </div>
  <div id="menu" class="column span-12 prepend-6 last">         
    <div id="tooltip">&nbsp;</div>
    <div id="menuitems">
      <a href="/informatii" title="Informatii despre partie, inchirieri echipamente, instructori, ski bar ..."><img src="<?php bloginfo('stylesheet_directory'); ?>/img/info.png" alt="Info partie" ></a> 		    
      <a href="/camera-web" title="Imagini live de pe partia de schi"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/webcam.png" alt="Webcam" ></a> 		    
      <a href="/vremea" title="Prognoza meteo pentru zilele urmatoare"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/vremea.png" alt="Vremea"></a> 
      <a href="/cazare" title="Hoteluri si restaurante"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/cazare.png" alt="Cazare"></a> 
      <a href="/contact" title="Pentru orice intrebare va rugam contactati-ne!"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/contact.png" alt="Contact"></a> 
      <a href="/blog" title="Blogul partiei, comentarii si alte informatii utile"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/blog.png" alt="Blog"></a> 		  
    </div>
    <script>
      $(document).ready(function() {
        $("#menuitems a[title]").tooltip('#tooltip');
      }); 
    </script>		  
  </div>
</div>



