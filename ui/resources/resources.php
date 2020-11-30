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

$category = $args['category'];

// query args.
$args = array(
	'post_type'      => 'resource',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'orderby'        => 'post_date',
	'order'          => 'DESC',
	'tax_query'      => array( // phpcs:ignore.
		array(
			'taxonomy' => 'resource_category',
			'field'    => 'slug',
			'terms'    => $category,
		),
	),
);


// get WordPress loop.
$loop = new WP_Query( $args );

?><div class="resources-wrapper">

	<ul class="resources">
		<?php
		while ( $loop->have_posts() ) :
			$loop->the_post();
			get_component( 'resources', 'resource' );
		endwhile;

		wp_reset_postdata();
		?>
	</ul><!--.resoruces-->

</div><!--.resoruces-wrapper-->
