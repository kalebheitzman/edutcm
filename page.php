<?php
/**
 * Components Theme Page
 *
 * @package Components
 * @since 1.0.0
 */

global $post;

$page_styles = get_field( 'page_styles', $post->ID );

$page_classes = '';
if ( $page_styles && in_array( 'no-padding', $page_styles, true ) ) {
	$page_classes = 'no-padding';
}

get_header(); ?>

<main class="site-main">

	<?php get_component( 'hero' ); ?>

	<div class="no-sidebar-wrapper">
		<section class="site-content full-width <?php echo esc_attr( $page_classes ); ?>">

			<?php
			while ( have_posts() ) :
				the_post();
				get_component( 'content', 'content-page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</section><!--.site-content-->
		</div><!--.no-sidebar-wrapper-->

</main><!--.site-main-->

<?php get_footer(); ?>
