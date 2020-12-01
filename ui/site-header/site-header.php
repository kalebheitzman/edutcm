<?php
/**
 * Site Header
 *
 * @package Components
 * @since 1.0.0
 */

$frontpage = is_front_page();

?>

<?php get_component( 'site-navigation-secondary' ); ?>

<div class="primary-header-wrapper">
	<header class="site-header">

		<?php get_component( 'site-branding' ); ?>

		<?php get_component( 'site-navigation' ); ?>

		<?php get_component( 'site-navigation-controls' ); ?>

	</header>
</div>

<div class="site-header-wrapper">

	

</div><!--.site-header-wrapper-->

<?php get_component( 'site-navigation-search-box' ); ?>
