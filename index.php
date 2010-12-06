<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="blog" class="block" role="main">
	  <div id="inside" class="opacity-7">
	    <h2 class="index">Blog</h2>
	    <?php if (have_posts()) : ?>
		    <?php while (have_posts()) : the_post(); ?>
			    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			      <div class="left">
			        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			        <div class="entry">
					      <?php the_content('Detalii &raquo;'); ?>
				      </div>

				      <small><p class="postmetadata">
				        <?php the_tags('Etichete: ', ', ', '<br />'); ?> 
				        Categorii <?php the_category(', ') ?> | 
				        <?php edit_post_link('Modificare articol', '', ' | '); ?>  
				        <?php comments_popup_link('Fara comentarii &#187;', '1 comentariu &#187;', '% comentarii &#187;'); ?>
				      </p></small>
			        </div>
			      <div class="right">
			        <div id="day" class="brown"><h2><?php the_time('d') ?></h2></div>
			        <div id="month" class="bordo"><h3><?php the_time('M') ?></h3></div>
				      <div id="year" class="blue"><h4><?php the_time('Y') ?></h4></div>
				    </div>
				    <div class="clear"></div>				    
			    </div>          
		    <?php endwhile; ?>

		    <?php include "_navigation.php"?>

	    <?php else : ?>

		    <h2 class="center">Articolul cautat nu exista</h2>		    
		    <?php get_search_form(); ?>

	    <?php endif; ?>

	 </div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
