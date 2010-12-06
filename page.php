<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="block" role="main">	  
	  <div id="inside" class="opacity-7">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <div class="post" id="post-<?php the_ID(); ?>">
	      <h2><?php the_title(); ?></h2>
		    <div class="entry">
			    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		    </div>
		    <div id="comments"><?php comments_template(); ?></div>
	    </div>
	    <?php endwhile; endif; ?>
      <?php edit_post_link('Modificare pagina.', '<p>', '</p>'); ?>	    
      <?php if (is_page(25)) { ?>
        <div id="partners" class="block">
          <?php $partners = get_posts("category=6");
          foreach ($partners as $post) { 
            setup_postdata($post); ?>
            <div class="item column span-4">
              <?php the_content() ?>
            </div>
          <?php } ?>	 
        </div>
      <?php } ?>
	 </div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
