<?php
/**
 * Handbooks
 *
 * @package Components
 * @since 1.0.0
 */

// switch to appropriate language.
global $sitepress;
$sitepress->switch_lang( $args['language'] );

// query args.
$args = array(
	'post_type'      => 'handbook',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
	'orderby'        => 'title',
	'order'          => 'ASC',
);

// get WordPress loop.
$loop = new WP_Query( $args );

?><div class="handbooks-wrapper">

	<ul class="handbooks">
		<?php
		while ( $loop->have_posts() ) :
			$loop->the_post();
			get_component( 'handbooks', 'handbook' );
		endwhile;

		wp_reset_postdata();
		?>
	</ul><!--.handbooks-->

</div><!--.handbooks-wrapper-->
