<?php
/**
 * Template Name: Landing Page
 *
 * This is the template used when creating a landing page in the block editor.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dan
 */

get_header(); ?>

<main id="primary" class="content-area">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'landing-page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

</main><!-- #primary -->

<?php get_footer();
