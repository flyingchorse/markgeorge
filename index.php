<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 * @since _s 1.0
 */

get_header('home'); ?>

	<div id="news-pane-container">
<div id="news-pane">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>


				<?php get_template_part( 'newspane'); ?>


			<?php endwhile; // end of the loop. ?>

	
		
</div>
<div id="news-pane-button"><div id="news-pane-button-text">NEWS</div></div>
</div>
<?php endif; ?>
<?php get_footer('home'); ?>