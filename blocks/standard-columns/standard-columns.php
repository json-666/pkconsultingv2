<?php
/**
 *  Theme columns block 
 */
?>
<?php
$fields = get_fields();
?>
<section class="block__columns" <?php if (!empty($block['anchor'])) {
    echo "id=\"" . $block['anchor'] . "\"";
} ?>>
    <div class="block__columns__inner">
        <div class="row align-items-center">
            <div class="col-lg-6 ps-0" data-aos="fade-up" data-aos-delay="300">
                <?php
                if ($fields['zdjecie_czy_lottie']) {
                    get_template_part(
                        'blocks/standard-columns/templates/image',
                        '',
                        array(
                            'image-desktop' => $fields['zdjecie'],
                            'image-mobile' => $fields['zdjecie_mobile']
                        )
                    );
                } else {
                    get_template_part(
                        'blocks/standard-columns/templates/lottie',
                        '',
                        array(
                            'image' => $fields['lottie_url'],
                        )
                    );
                }
                ?>
            </div>
            <div class="col-lg-6 mt-5" data-aos="fade-up" data-aos-delay="300">
                <h2 class="section-title">
                    <?= $fields['tytul']; ?>
                </h2>
                <p>
                    <?= $fields['tekst'] ?>
                </p>
                <div class="block__columns__inner__buttons row justify-content-center">
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
        </div>
    </div>
</section>