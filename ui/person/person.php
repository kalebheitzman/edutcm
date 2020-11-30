<?php
/**
 * Person Component
 *
 * @package Components
 * @since 1.0.0
 */

$headshot = get_field( 'person_headshot' );
?>

<div class="person-header">
	<div class="person-image">
		<div class="person-bubble">
			<?php if ( $headshot ) : ?>
				<img 
					src="<?php echo esc_url( $headshot['sizes']['thumbnail'] ); ?>"
					alt="<?php the_title(); ?>"
				/>
			<?php else : ?>
				<span class="dashicons dashicons-admin-users"></span>
			<?php endif; ?>
		</div>
	</div>

	<div class="person-details">
		<h3 class="person-name">
			<?php echo esc_attr( get_field( 'person_first_name' ) ); ?>&nbsp;
			<?php echo esc_attr( get_field( 'person_last_name' ) ); ?> 
		</h3>

		<p class="person-title"><?php echo esc_attr( get_field( 'person_title' ) ); ?></p>
	</div>
</div>

<div class="person-footer person-biography">
	<?php echo wp_kses_post( get_field( 'person_biography' ) ); ?>
</div>
