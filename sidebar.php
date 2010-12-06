<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<div id="sidebar" class="block" role="complementary">
  <a class="backward">prev</a> 
	
	<div class="images">
	  <div>
	    <h3>Imagini si clipuri video</h3>
	    <div id="images-videos" style="display:block;">
	      <ul class="inline-list">
	      <?php 
          $attachments = get_post_attachements(35, 0);
          if ($attachments) {
            foreach ($attachments as $attachment) {
              $a = wp_get_attachment_image_src($attachment->ID, 'thumbnail'); ?>
              <li><a href="<?php echo get_permalink(35); ?>"><img src="<?php echo $a[0]?>" /></a></li>            
            <?php }
          } 
        ?>	
        </ul>	
	    </div>
	  </div>
	  
	  <div>
	    <h3>Imagini si clipuri video</h3>
	    <div id="images-videos" style="display:block;">
	      <ul class="inline-list">
	      <?php 
          $attachments = get_post_attachements(35, 5);
          if ($attachments) {
            foreach ($attachments as $attachment) {
              $a = wp_get_attachment_image_src($attachment->ID, 'thumbnail'); ?>
              <li><a href="<?php echo get_permalink(35); ?>"><img src="<?php echo $a[0]?>" /></a></li>            
            <?php }
          } 
        ?>	
        </ul>	
	    </div>
	  </div>
	  
	  <div>
	    <h3>Imagini si clipuri video</h3>
	    <div id="images-videos" style="display:block;">
	      <ul class="inline-list">
	      <?php 
          $attachments = get_post_attachements(35, 10);
          if ($attachments) {
            foreach ($attachments as $attachment) {
              $a = wp_get_attachment_image_src($attachment->ID, 'thumbnail'); ?>
              <li><a href="<?php echo get_permalink(35); ?>"><img src="<?php echo $a[0]?>" /></a></li>            
            <?php }
          } 
        ?>	
        </ul>	
	    </div>
	  </div>
	  
	</div>
		
  <a class="forward">next</a> 
  <div class="tabs"> 
    <a href="#" alt="Imagini si clipuri video" title="Imagini si clipuri video"></a> 
    <a href="#" alt="Calendar evenimente" title="Calendar evenimente"></a> 
    <a href="#" alt="Cartea de oaspeti" title="Cartea de oaspeti"></a> 
  </div>	
  <script>
  $("div.tabs").tabs(".images > div", { 
    // enable "cross-fading" effect 
    effect: 'fade', 
    fadeOutSpeed: "slow", 

    // start from the beginning after the last tab 
    rotate: true 

  // use the slideshow plugin. It accepts its own configuration 
  }).slideshow();
  </script>
</div>

