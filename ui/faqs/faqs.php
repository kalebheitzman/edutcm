<?php
/**
 * FAQs Component
 *
 * @package Components
 * @since 1.0.0
 */

global $post;

$faqs = get_field( 'faqs' );

if ( ! $faqs ) {
	return;
}

?><div class="faqs-section">

	<?php foreach ( $faqs as $key => $faq ) : ?>
		<div class="faq-collapsible">
			<input 
				id="faq-<?php echo esc_attr( $key ); ?>" 
				class="toggle" 
				type="checkbox" 
				<?php echo 0 === $key ? 'checked' : null; ?>
			/>
			<label for="faq-<?php echo esc_attr( $key ); ?>" class="lbl-toggle" tabindex="0">
				<?php echo esc_attr( $faq['question'] ); ?>
			</label>
			<div class="collapsible-content">
				<div class="content-inner">
					<?php echo wp_kses_post( $faq['answer'] ); ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

</div><!--.faqs-section-->
