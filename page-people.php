<?php
/**
 * Template name: People
 *
 * @package Components
 * @since 1.0.0
 */

get_header();

$args = array(
	'post_type'      => 'person',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'meta_key'       => 'person_last_name', // phpcs:ignore.
	'orderby'        => 'meta_value',
	'order'          => 'ASC',
	'tax_query'      => array( // phpcs:ignore
		array(
			'taxonomy' => 'person_category',
			'field'    => 'id',
			'terms'    => get_field( 'people_category', get_the_ID() ),
		),
	),
);

$loop = new WP_Query( $args );

?>

<main class="site-main">

	<?php get_component( 'hero' ); ?>

	<section class="sidebar-wrapper">

		<div class="site-content section-people">
			<?php
			while ( $loop->have_posts() ) :
				$loop->the_post();
				get_component( 'content', 'content-person' );
			endwhile;

			wp_reset_postdata();
			?>
		</div>

		<?php get_component( 'sidebar-page' ); ?>

	</section><!--.sidebar-wrapper-->

</main><!--.site-main-->

<?php get_footer(); ?>
