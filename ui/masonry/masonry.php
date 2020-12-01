<?php
/**
 * Resources
 *
 * @package Components
 * @since 1.0.0
 */

// switch to appropriate language.
global $sitepress;
$sitepress->switch_lang( $args['language'] );

// query args.
$args = array(
	'post_type'      => $args['post_type'],
	'post_status'    => 'publish',
	'posts_per_page' => $args['count'],
	'orderby'        => 'post_date',
	'order'          => 'DESC',
	'tax_query'      => array( // phpcs:ignore.
		array(
			'taxonomy' => $args['taxonomy'],
			'field'    => 'slug',
			'terms'    => $args['term'],
		),
	),
);


// get WordPress loop.
$loop = new WP_Query( $args );

?><div class="masonry-wrapper">

	<div class="masonry">
		<?php
		while ( $loop->have_posts() ) :
			$loop->the_post();
			get_component( 'masonry', 'item' );
		endwhile;
		wp_reset_postdata();
		?>
	</div><!--.resoruces-->

</div><!--.resoruces-wrapper-->
