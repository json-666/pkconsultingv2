<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package uncreative_s
 */

get_header();
?>
<style>
	.post-thumbnail {
		text-emphasis: center;
	}
</style>
<main id="primary" class="site-main mt-5 pt-5">
	<div class="container blog-container">

		<?php
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content', get_post_type());

		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();