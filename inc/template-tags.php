<?php
/**
 * Template Tags
 *
 * @package Components
 * @since 1.0.0
 */

if ( ! function_exists( 'component_hero_image' ) ) :
	/**
	 * Get Post Thumbnail
	 *
	 * @return void
	 */
	function component_hero_image() {

		if ( has_post_thumbnail() ) {
			the_post_thumbnail(
				'hero',
				array(
					'loading' => 'lazy',
				)
			);
		} else {
			global $post;
			if ( $post->post_parent ) {
				echo get_the_post_thumbnail(
					$post->post_parent,
					'hero',
					array(
						'loading' => 'lazy',
					)
				);
			}
		}
	}
endif;

if ( ! function_exists( 'component_content_class' ) ) :
	/**
	 * Component Content Class
	 *
	 * @return void
	 */
	function component_content_class() {
		global $wp_query;
		$class = 'notfound';

		if ( $wp_query->is_page ) {
			$class = is_front_page() ? 'front' : 'page';
		} elseif ( $wp_query->is_home ) {
			$class = 'home';
		} elseif ( $wp_query->is_single ) {
			$class = ( $wp_query->is_attachment ) ? 'attachment' : 'single';
		} elseif ( $wp_query->is_category ) {
			$class = 'category';
		} elseif ( $wp_query->is_tag ) {
			$class = 'tag';
		} elseif ( $wp_query->is_tax ) {
			$class = 'tax';
		} elseif ( $wp_query->is_archive ) {
			if ( $wp_query->is_day ) {
				$class = 'day';
			} elseif ( $wp_query->is_month ) {
				$class = 'month';
			} elseif ( $wp_query->is_year ) {
				$class = 'year';
			} elseif ( $wp_query->is_author ) {
				$class = 'author';
			} else {
				$class = 'archive';
			}
		} elseif ( $wp_query->is_search ) {
			$class = 'search';
		} elseif ( $wp_query->is_404 ) {
			$class = 'notfound';
		}

		echo esc_attr( $class );
	}
endif;

if ( ! function_exists( 'components_posted_on' ) ) :
	/**
	 * Components Posted On
	 *
	 * @return void
	 */
	function components_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'go' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput
	}
endif;

if ( ! function_exists( 'components_posted_by' ) ) :
	/**
	 * Components Posted By
	 *
	 * @return void
	 */
	function components_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'go' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput
	}
endif;

if ( ! function_exists( 'components_entry_footer' ) ) :
	/**
	 * Components Entry Footer
	 *
	 * @return void
	 */
	function components_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'go' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'go' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'go' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'go' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'go' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'go' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'components_breadcrumbs' ) ) :
	/**
	 * Componets Breadcrumbs
	 *
	 * @return void
	 */
	function components_breadcrumbs() {
		global $post;
		echo '<a href="' . home_url() . '" rel="nofollow" class="home">' . __( 'Home', 'components' ) . '</a>';
		if ( is_category() || is_single() ) {
			echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
			the_category( ' &bull; ' );
			if ( is_single() ) {
				echo ' &nbsp;&nbsp;&#187;&nbsp;&nbsp; ';
				the_title();
			}
		} elseif ( is_page() ) {
			echo components_breadcrumbs_pages( $post );
		} elseif ( is_search() ) {
			echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ';
			echo '"<em>';
			echo the_search_query();
			echo '</em>"';
		}
	}
endif;

if ( ! function_exists( 'components_breadcrumbs_pages' ) ) :
	/**
	 * Components Breadcrumb Page Builder
	 *
	 * @param object $post WordPress Post Object.
	 */
	function components_breadcrumbs_pages( $post ) {
		$output = '';

		if ( $post->post_parent ) {
			$parent  = get_post( $post->post_parent );
			$output .= components_breadcrumbs_pages( $parent ) . ' / ';
		}
		$output .= '<a href="' . get_permalink( $post ) . '" class="breadcrumb">' . $post->post_title . '</a>';

		return $output;
	}
endif;

if ( ! function_exists( 'components_post_thumbnail' ) ) :
	/**
	 * Components Post Thumbnail
	 *
	 * @return void
	 */
	function components_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'hero' ); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail(
				'post-thumbnail',
				array(
					'alt' => the_title_attribute(
						array(
							'echo' => false,
						)
					),
				)
			);
			?>
		</a>

			<?php
		endif; // End is_singular().
	}
endif;
