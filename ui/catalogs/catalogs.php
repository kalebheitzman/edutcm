<?php
/**
 * Catalogs
 *
 * @package Components
 * @since 1.0.0
 */

// switch to appropriate language.
global $sitepress;
$sitepress->switch_lang( $args['language'] );

// query args.
$args = array(
	'post_type'      => 'catalog',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'orderby'        => 'post_date',
	'order'          => 'DESC',
);

// get WordPress loop.
$loop = new WP_Query( $args );

?><div class="catalogs-wrapper">

	<h2>Catalogs</h2>

	<ul class="catalogs">
		<?php
		while ( $loop->have_posts() ) :
			$loop->the_post();
			get_component( 'catalogs', 'catalog' );
		endwhile;

		wp_reset_postdata();
		?>
	</ul><!--.catalogs-->

</div><!--.catalogs-wrapper-->
