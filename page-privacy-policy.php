<?php /**
  * The template for displaying all pages
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
  *
  * @package uncreative_s
  */

get_header();
?>
<style>
    .block__realizacje__inner__single__content {

        box-shadow: 0px 0px 4px 3px rgba(0, 0, 0, 0.05);
        border-radius: 16px;
        padding: 30px 15px;

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
<main id="primary" class="site-main" data-aos="fade-in" data-aos-delay="300">
    <div class="py-5 my-5"></div>
    <div class="container">
        <?php the_content(); ?>
    </div>
</main>
<?php
get_sidebar();
get_footer();