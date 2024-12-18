<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Genesis Block Theme
 */

get_header();
?>

<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();	
		
			get_template_part( 'template-parts/single/single', get_post_type() );
			
		endwhile;
	endif;
?>

<?php
	the_pattern('Page CTA');
?>

<?php get_footer(); ?>