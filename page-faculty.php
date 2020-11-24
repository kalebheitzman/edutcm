<?php
/**
 * Template name: Faculty
 *
 * @package Components
 * @since 1.0.0
 */

get_header();

$faculty_args = array(
	'post_type'      => 'person',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'meta_key'       => 'person_last_name', // phpcs:ignore.
	'orderby'        => 'meta_value',
	'order'          => 'ASC',
	'tax_query'      => array(
		array(
			'taxonomy' => 'person_category',
			'field'    => 'slug',
			'terms'    => 'faculty',
		),
	),
);

$loop = new WP_Query( $faculty_args );

?>

<main class="site-main">

	<?php get_component( 'hero' ); ?>

	<div class="no-sidebar-wrapper">
		<section class="site-content full-width section-people">

			<?php
			while ( $loop->have_posts() ) :
				$loop->the_post();
				get_component( 'content', 'content-person' );
			endwhile;

			wp_reset_postdata();
			?>
		</section><!--.site-content-->
	</div><!--.no-sidebar-wrapper-->

</main><!--.site-main-->

<?php get_footer(); ?>
