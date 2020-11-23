<?php
/**
 * The template for displaying FAQs
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Components
 * @since 1.0.0
 */

get_header();

?>

<main class="site-main">

	<?php get_component( 'hero' ); ?>

	<section class="sidebar-wrapper">

		<div class="site-content">
			<?php
			while ( have_posts() ) :
				the_post();
				get_component( 'faqs' );
			endwhile; // End of the loop.
			?>
		</div>

		<?php get_component( 'sidebar-faq' ); ?>

	</section><!--.sidebar-wrapper-->

</main><!--.site-main-->

<?php get_footer(); ?>
