<?php
/**
 * Template Name: Single Full Width
 * Template Post Type: post
 *
 * The template for displaying single posts without a sidebar.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dan
 */

get_header(); ?>

<main id="primary" class="content-area" role="main">

<?php
while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', get_post_format() );

	the_post_navigation( array(
		'prev_text' => '<span class="nav-subtitle"><span class="fas fa-angle-double-left" aria-hidden="true"></span>' . __( 'Previous Post', 'dan' ) . '</span> <span class="nav-title">' . '%title</span>',
		'next_text' => '<span class="nav-subtitle">' . __( 'Next Post', 'dan' ) . '<span class="fas fa-angle-double-right" aria-hidden="true"></span></span><span class="nav-title">%title' . '</span>',
	) );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

</main><!-- #primary -->
<?php get_footer();
