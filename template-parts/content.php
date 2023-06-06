<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uncreative_s
 */

?>
<style>
	.block__realizacje__inner__single__content {
		position: relative;
		box-shadow: 0px 0px 4px 3px rgba(0, 0, 0, 0.05);
		border-radius: 16px;
		padding: 30px 15px;

	}

	.block__realizacje__inner__single__content__title {
		height: 95px;
		display: block;
	}

	.block__blog-home__inner__thumb {
		max-height: 195px;
		overflow: hidden;
	}

	.block__blog-home__inner__thumb__overlay {
		height: 195px;
		position: absolute;
		background: linear-gradient(-180deg, #E0D4C8 0%, rgba(224, 212, 200, 0) 100%);
		width: 100%;
		top: 0;
		transform: rotate(180deg);
	}
</style>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()):
			the_title('<h1 class="entry-title">', '</h1>');
		else:
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
	</header><!-- .entry-header -->

	<?php uncreative_s_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'uncreative_s'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'uncreative_s'),
				'after' => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<div class="row pt-5 justify-content-center">
	<?php
	$posts = get_posts(array('posts_per_page' => 3));
	$index = 1;
	?>
	<?php foreach ($posts as $singlePost) { ?>
		<div class="col-lg-4 col-md-6 col-12 text-center my-5" data-aos="fade-up"
			data-aos-delay="<?= 450 + ($index * 50); ?>">
			<div class="block__realizacje__inner__single__content h-100">
				<?php //var_dump($singlePost); ?>
				<a href="<?= $singlePost->guid; ?>" style="text-decoration: none"
					class="block__realizacje__inner__single__content__title">
					<h3 class="font__size__24 text-center">
						<?= $singlePost->post_title; ?>
					</h3>
				</a>
				<a class="position-relative my-5 d-block" href="<?= $singlePost->guid; ?>">
					<div class="block__blog-home__inner__thumb">
						<img src="<?= get_the_post_thumbnail_url($singlePost->ID) ?>" alt="" class="w-100">
					</div>
					<div class="block__blog-home__inner__thumb__overlay"></div>
				</a>
				<a href="<?= $singlePost->guid; ?>" style="text-decoration: none">
					<p>
						<?= $singlePost->post_excerpt; ?>
					</p>
				</a>
			</div>
		</div>
		<?php $index++; ?>
	<?php } ?>
</div>