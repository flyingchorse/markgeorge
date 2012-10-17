<?php
/**
 * Template Name: Homepage
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 *
 */
get_header('home'); ?>

<div id="news-pane">
	
	
	<div class="news-article">
	<h1>Latest News</h1>
	<div class="news-article-content">Blah Blah<img src="#"></div>
	</div>
	
</div>

		<div id="primary" class="site-content">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php _s_content_nav( 'nav-above' ); ?>

				<?php get_template_part( 'content', 'home' ); ?>

				<?php _s_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->


<?php get_footer('home'); ?>