<?php
/**
 *  Theme hero block 
 */
?>
<?php
//var_dump($block);
$fields = get_fields();
?>
<section class="block__hero">
    <div class="block__hero__inner">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-5 pe-xxl-5 block__hero__inner__content">
                <h1 class="font__size__64 text-center text-xl-start" data-aos="fade-up" data-aos-delay="500">
                    <?= $fields['tytul'] ?>
                </h1>
                <p class="font__size__18 py-lg-5 py-0 text-center text-xl-start" data-aos="fade-up"
                    data-aos-delay="600">
                    <?= $fields['tekst'] ?>
                </p>
                <div class="row align-items-center justify-content-between" data-aos="fade-up" data-aos-delay="700">
                    <div class="col-xl-auto ps-lg-0">
                        <div class="row">
                            <?php if (!empty($fields['przyciski']['przycisk_lewy'])) { ?>
                                <div class="col-lg-auto text-center ps-0">
                                    <a href="<?php echo $fields['przyciski']['przycisk_lewy']['url']; ?>"
                                        target="<?php echo $fields['przyciski']['przycisk_lewy']['target']; ?>"
                                        class="btn-primary"><?php echo $fields['przyciski']['przycisk_lewy']['title']; ?></a>
                                </div>
                            <?php } ?>
                            <?php if (!empty($fields['przyciski']['przycisk_prawy'])) { ?>
                                <div class="col-lg-auto text-center mt-5 mt-lg-0 ps-0">
                                    <a href="<?php echo $fields['przyciski']['przycisk_prawy']['url']; ?>"
                                        target="<?php echo $fields['przyciski']['przycisk_prawy']['target']; ?>"
                                        class="btn-secondary"><?php echo $fields['przyciski']['przycisk_prawy']['title']; ?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($fields['pokazac_ikony_social_media']) { ?>
                        <div class="col-xl-auto pt-5 pt-xxl-0 ps-0">
                            <div class="row justify-content-center">
                                <?php while (have_rows('social_media_links', 'options')):
                                    the_row(); ?>
                                    <div class="col-auto ps-0">
                                        <a href="<?php echo get_sub_field('link') ?>">
                                            <img src="<?php echo get_sub_field('icon')['url'] ?>" alt="">
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 p-lg-0 p-sm-5" data-aos="fade-left" data-aos-delay="500">
                <img src="<?= $fields['obraz']['url'] ?>" alt="<?= $fields['obraz']['alt'] ?>"
                    class="w-100 d-lg-block d-none" id="moveImageUp_<?= $block['id']; ?>">
                <img src="<?= $fields['obraz_mobile']['url'] ?>" alt="<?= $fields['obraz_mobile']['alt'] ?>"
                    class="w-100 d-lg-none d-block mt-3">
            </div>
        </div>
    </div>
</section>
<script>
    function standardHero_MoveImageUp() {
        document.getElementById('moveImageUp_<?= $block['id']; ?>').style.marginTop = "-" + document.getElementById('masthead').offsetHeight + "px";
    }

    window.addEventListener("resize", (event) => {
        standardHero_MoveImageUp();
    });

    window.addEventListener("load", (event) => {
        standardHero_MoveImageUp();
    });
</script>