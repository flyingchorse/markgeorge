<?php
/**
 * The Template for displaying attachements
 *
 * @package _s
 * @since _s 1.0
 */
get_header('attachment'); ?>

		
			<?php while ( have_posts() ) : the_post();
				
				 
				$vimeo =  $post->post_content;				
				?>
				<div id="thumbgrid-position">
				<iframe id="player1" src="http://player.vimeo.com/video/<?php echo $vimeo; ?>?api=1&player_id=player1" width="832" height="468" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
			<?php endwhile; // end of the loop. ?>
			

<?php get_footer(); ?>