<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 * @since _s 1.0
 */

get_header('blog'); ?>

		
				<div id="thumbgrid-position" class="bio">
				<div id="primary" class="site-content">
					<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'blog', 'page' ); ?>

					<?php comments_template( '', true ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
					</div><!-- #primary .site-content -->

				</div>


<?php get_footer(); ?>