<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	 <div id="blog" class="block" role="main">
	  <div id="inside" class="opacity-7">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		  
		  <?php include "_navigation.php" ?>
		  
		  <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			  <h2><?php the_title(); ?></h2>
			  <div class="entry">
				  <?php the_content('<p class="serif">Detalii &raquo;</p>'); ?>

				  <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				  <?php the_tags( '<p>Etichete: ', ', ', '</p>'); ?>

				  <p class="postmetadata alt">
					  <small>
						  Acest articol a fost creat 
						  <?php /* This is commented, because it requires a little adjusting sometimes.
							  You'll need to download this plugin, and follow the instructions:
							  http://binarybonsai.com/wordpress/time-since/ */
							  /* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						  la data de <?php the_time('d.m.Y') ?> la ora <?php the_time() ?>
						  si apartine categoriilor <?php the_category(', ') ?>.
						  Puteti sa va inscrieti la comentariile la acest articol folosind <?php post_comments_feed_link('RSS 2.0'); ?>.

						  <?php if ( comments_open() && pings_open() ) {
							  // Both Comments and Pings are open ?>
							  Asteptam <a href="#respond">parerile Dvs.</a>, in plus <a href="<?php trackback_url(); ?>" rel="trackback">puteti folosi acest articol</a> in blogul Dvs..

						  <?php } elseif ( !comments_open() && pings_open() ) {
							  // Only Pings are Open ?>
							  Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						  <?php } elseif ( comments_open() && !pings_open() ) {
							  // Comments are open, Pings are not ?>
							  You can skip to the end and leave a response. Pinging is currently not allowed.

						  <?php } elseif ( !comments_open() && !pings_open() ) {
							  // Neither Comments, nor Pings are open ?>
							  Both comments and pings are currently closed.

						  <?php } edit_post_link('Modificare articol','','.'); ?>
					  </small>
				  </p>
			  </div>
		  </div>
	    <?php comments_template(); ?>
	  <?php endwhile; else: ?>
		  <p>Va cerem scuze, articolul cautat nu exista.</p>
    <?php endif; ?>	  
	 </div>
	</div> 
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
