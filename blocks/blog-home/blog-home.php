<?php
/**
 *  Theme blog home block 
 */
?>
<?php
$fields = get_fields();
?>
<section class="block__blog-home">
    <div class="block__blog-home__inner">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <?= $fields['tytul']; ?>
            </h2>
            <p class="text-center mb-lg-5 mb-0 font__size__18" data-aos="fade-up">
                <?= $fields['tekst']; ?>
            </p>
            <div class="row pt-lg-5 justify-content-center">
                <?php
                $posts = get_posts(array('posts_per_page' => 3));
                $index = 1;
                ?>
                <?php foreach ($posts as $singlePost) { ?>
                    <div class="col-lg-4 col-md-6 col-12 text-center my-lg-5 my-3 <?php if ($index > 1) {
                        echo "d-md-block d-none";
                    } ?>" data-aos="fade-up">
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
                    <?php $index++; ?>
                <?php } ?>
            </div>
            <div class="text-center mt-5 pt-lg-5">
                <a href="<?php echo get_home_url(); ?>/blog/" class="btn-primary">Zobacz wszystkie artykuły</a>
            </div>
        </div>
    </div>
</section>