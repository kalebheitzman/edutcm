<?php
/**
 * Catalogs
 *
 * @package Components
 * @since 1.0.0
 */

?><div class="masonry-item">

	<?php the_post_thumbnail( 'medium' ); ?>

	<a class="masonry-overlay" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

		<div class="masonry-overlay-inner" href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>">
			<h3>
				<?php the_title(); ?>
			</h3>
		</div>

	</a>

</div>
