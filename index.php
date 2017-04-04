<?php
/**
 * Main Template file
 *
 * @version 1.0.0
 *
 * @package Photographia
 */

get_header(); ?>
	<div class="content-wrapper clearfix">
		<div class="main">
			<main>
				<?php
				/**
				 * Check if we have posts.
				 */
				if ( have_posts() ) {
					/**
					 * Loop the posts.
					 */
					while ( have_posts() ) {
						/**
						 * Setup the post data.
						 */
						the_post();

						/**
						 * Get the template part file. Default file is partials/post/content.php.
						 * If available, use post format specific files (for example
						 * partials/post/content-gallery.php) for Gallery format.
						 */
						get_template_part( 'partials/post/content', get_post_format() );
					}
				} else {
					/**
					 * Include partials/post/content-none.php if no posts were found.
					 */
					get_template_part( 'partials/post/content', 'none' );
				}
				?>
			</main>
		</div>
	</div>
<?php get_footer();
