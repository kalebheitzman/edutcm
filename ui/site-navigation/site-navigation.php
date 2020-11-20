<?php
/**
 * Site Navigation
 *
 * @package Components
 * @since 1.0.0
 */

?>
<nav class="site-navigation" aria-label="Main Navigation">

	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary_menu',
				'container'      => 'ul',
				'menu_class'     => 'primary-menu',
				'menu_id'        => '',
				'walker'         => new Components_Menu_Walker(),
			)
		);
		?>

	<div class="nav-mobile">
		<a class="nav-toggle" href="#!"><span></span></a>
	</div>

</nav>
