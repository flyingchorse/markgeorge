<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 1.0
 */
 
 
 
 
 
 /* Start Loop */
  $counter = 1;
  
 			$args = array('post_type' => 'attachment', 'numberposts' => -1, 'order' => 'ASC'); 
			$attachments = get_posts($args);
			$numofattachments = count($attachments);
		
			if ($attachments) {
				foreach ( $attachments as $attachment ) {
				// echo apply_filters( 'the_title' , $attachment->post_title );
				$imageloader =  wp_get_attachment_url($attachment->ID);
				$imagethumbnail = wp_get_attachment_image_src($attachment->ID, 'feature_thumb');
				
 /* Start Loop */
   echo "{image : '" . $imageloader ."', title : '". apply_filters( 'the_title', $attachment->post_title ) ."', desc : '". apply_filters( 'the_title', $attachment->post_excerpt ) . "',thumbnail : '" . $imagethumbnail[0] . "', url : '". apply_filters( 'the_title', $attachment->the_permalink ) . "'}"; 
   if ($counter< $numofattachments) echo ",";
      
	


  

  
 /* End Loop */
 
 $counter++;
				}
			}
			 /* End Loop */
?>

