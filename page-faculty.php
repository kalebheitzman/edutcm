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
	'posts_per_page' => 100,
	'orderby'        => 'title',
	'order'          => 'ASC',
);

$loop = new WP_Query( $faculty_args );

?>

<main class="site-main">

	<?php get_component( 'hero' ); ?>

	<section class="site-content full-width section-people">

		<div class="people-description">
			<h2>Faculty</h2>
		</div>

		<?php
		while ( $loop->have_posts() ) :
			$loop->the_post();
			get_component( 'content', 'content-person' );
		endwhile;

		wp_reset_postdata();
		?>
	</section><!--.site-content-->

</main><!--.site-main-->

<?php get_footer(); ?>
