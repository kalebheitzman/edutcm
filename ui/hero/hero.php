<?php
/**
 * Hero Banner Component
 *
 * @package Components
 * @since 1.0.0
 */

global $post;

$ctas = get_field( 'call_to_actions', $post->ID );

?><div class="hero">

	<?php component_hero_image(); ?>

	<div class="outer">
		<div class="inner">
			<p class="breadcrumbs"><?php components_breadcrumbs(); ?></p>
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>

			<?php if ( $ctas ) : ?>
				<div class="hero-ctas">
					<?php
					foreach ( $ctas as $cta ) :
						get_component( 'hero', 'cta', array( 'cta' => $cta ) );
					endforeach;
					?>
				</div>
			<?php endif; ?>

		</div><!--.innter-->
	</div><!--.wrapper-->

</div><!--.hero-->
