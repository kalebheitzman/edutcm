<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Components
 * @since 1.0.0
 */

get_header();
?>

	<div class="content-area">
		<main class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'ui/content/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_component( 'sidebar-post' );
get_footer();
