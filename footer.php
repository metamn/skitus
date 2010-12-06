<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div id="footer" class="block" role="contentinfo">
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<!--[if IE]>
  <div id="nav" class="block span-24 last">
    <a href="/informatii" title="Informatii despre partie, inchirieri echipamente, instructori, ski bar ..."><img src="<?php bloginfo('stylesheet_directory'); ?>/img/info.png" alt="Info partie" ></a> 		    
      <a href="/webcam" title="Imagini live de pe partia de schi"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/webcam.png" alt="Webcam" ></a> 		    
      <a href="/vremea" title="Prognoza meteo pentru zilele urmatoare"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/vremea.png" alt="Vremea"></a> 
      <a href="/cazare" title="Hoteluri si restaurante"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/cazare.png" alt="Cazare"></a> 
      <a href="/contact" title="Pentru orice intrebare va rugam contactati-ne!"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/contact.png" alt="Contact"></a> 
      <a href="/blog" title="Blogul partiei, comentarii si alte informatii utile"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/blog.png" alt="Blog"></a> 		  
	</div>
  <![endif] -->
		
	<div id="partners" class="block span-24 last">	
    <?php 
      $partners = get_posts("category=5");
      foreach ($partners as $post) { 
        setup_postdata($post); ?>
        <div class="item">
          <?php the_content() ?>
        </div>
      <?php } ?>	 
	</div>
</div>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
