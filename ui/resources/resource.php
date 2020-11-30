<?php
/**
 * Catalogs
 *
 * @package Components
 * @since 1.0.0
 */

// acf resource link.
$resource_link = get_field( 'resource_link', get_the_ID() );

?><li>

	<a href="<?php echo esc_url( $resource_link ); ?>" target="_blank" title="<?php the_title(); ?>">
		<?php the_post_thumbnail( 'large' ); ?>
		<p>
			<?php the_title(); ?>
		</p>
	</a>

</li>
