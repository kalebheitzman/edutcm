<?php
/**
 * Hero Banner Component
 *
 * @package Components
 * @since 1.0.0
 */

?><div class="hero-search">

	<?php component_hero_image(); ?>

	<div class="outer">
		<div class="inner">

			<h1><?php the_title(); ?></h1>
			<form>
				<input type="text" placeholder="What would you like to learn more about? ..." name="s" autofocus />
				<button><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<p>Are you looking for the <a href="#">Course Catalog?</a> 
			Or information about our <a href="#">Degrees?</a> 
			Or perhaps you're looking for <a href="#">How to Apply?</a></p>
		</div><!--.innter-->
	</div><!--.wrapper-->

</div><!--.hero-->
