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
<main id="primary" class="site-main" data-aos="fade-in" data-aos-delay="300">
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <?php
            $args = array(
                'posts_per_page' => 3,
            );
            $postslist = new WP_Query($args);

            if ($postslist->have_posts()):

                while ($postslist->have_posts()):
                    $postslist->the_post();

                    ?>
                    <div class="col-lg-4 col-md-6 col-12 text-center my-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="block__realizacje__inner__single__content h-100">
                            <a href="<?= get_the_guid(); ?>" style="text-decoration: none"
                                class="block__realizacje__inner__single__content__title">
                                <h3 class="font__size__24 text-center">
                                    <?= get_the_title(); ?>
                                </h3>
                            </a>
                            <a class="position-relative my-5 d-block" href="<?= get_the_guid(); ?>">
                                <div class="block__blog-home__inner__thumb">
                                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="w-100">
                                </div>
                                <div class="block__blog-home__inner__thumb__overlay"></div>
                            </a>
                            <a href="<?= get_the_guid(); ?>" style="text-decoration: none">
                                <p>
                                    <?= get_the_excerpt(); ?>
                                </p>
                            </a>
                        </div>
                    </div>

                    <?php

                endwhile;

                the_posts_pagination(array('mid_size' => 2));
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</main>
<?php
get_sidebar();
get_footer();