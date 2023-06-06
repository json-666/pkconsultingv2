<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uncreative_s
 */

?>

<footer id="colophon" class="site-footer">
	<div class="content">
		<div class="row justify-content-between">
			<div class="col-lg-auto text-center text-lg-start">
				<img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>"
					alt="">
				<h3>
					P.K. Consulting Paulina Karolak
				</h3>
				<p class="text-uppercase mb-0 font__size__18">NIP: 9671114250</p>
				<p class="text-uppercase mb-0 font__size__18">85-166 Bydgoszcz</p>
				<p class="text-uppercase mb-0 font__size__18">E-mail: biuro@pkconsulting.pl</p>
				<p class="text-uppercase mb-0 font__size__18">Mobile: 661 992 661</p>
			</div>
			<div class="col-lg-auto text-center my-5 my-lg-0">
				<img src="<?php echo get_template_directory_uri(); ?>/images/g-opinie.svg" alt="">
				<p class="font__size__18">5.0 Średnia ocena<br />klientów w Google</p>
				<a class="btn-primary"
					href="https://www.google.com/search?q=p.k.+consulting&oq=P.K.&gs_lcrp=EgZjaHJvbWUqBggBEEUYOzIGCAAQRRg5MgYIARBFGDsyBwgCEC4YgAQyBwgDEC4YgAQyBwgEEC4YgAQyBwgFEAAYgAQyBwgGEAAYgAQyBggHEEUYPNIBCDM1NjhqMWo3qAIAsAIA&sourceid=chrome&ie=UTF-8#lrd=0x470313a3204e8485:0xbaaabed381e4ab7d,1,,,,">Sprawdź
					opinie</a>
			</div>
			<div class="col-lg-auto text-lg-end text-center">
				<h3>
					Śledź nas w social media
				</h3>
				<div class="row justify-content-lg-end justify-content-center my-5">
					<?php while (have_rows('social_media_links', 'options')):
						the_row(); ?>
						<div class="col-auto pe-0">
							<a href="<?php echo get_sub_field('link') ?>">
								<img src="<?php echo get_sub_field('icon')['url'] ?>" alt="">
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>


		<div class="row mt-5 justify-content-between">
			<div class="col-sm-auto text-center">
				<p class="mb-0">© P.K. Consulting 2023</p>
			</div>
			<div class="col-sm-auto text-center">
				<a href="privacy-policy/">
					<p class="mb-0">Polityka prywatności</p>
				</a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>

</html>