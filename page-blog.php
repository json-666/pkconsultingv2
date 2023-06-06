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
            $posts = get_posts(array('posts_per_page' => 9));
            ?>
            <?php foreach ($posts as $singlePost) { ?>
                <div class="col-lg-4 col-md-6 col-12 text-center my-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="block__realizacje__inner__single__content h-100">
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
            <?php } ?>
        </div>
    </div>
</main>
<?php
get_sidebar();
get_footer();