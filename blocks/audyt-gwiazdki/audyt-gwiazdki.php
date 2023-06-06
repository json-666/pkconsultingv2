<?php
/**
 *  Theme audyt gwiazdki block 
 */

$fields = get_fields();
?>
<section class="block__gwiazdki">
    <div class="container">
        <div class="row">
            <?php $index = 1; ?>
            <?php foreach ($fields['boxy'] as $singleBox) { ?>
                <div class="col-lg-4 text-center mt-5 mt-lg-0" data-aos="fade-up"
                    data-aos-delay="<?= 300 + ($index * 50); ?>">
                    <div class="box h-100">
                        <img src="<?= get_template_directory_uri(); ?>/images/star.svg" alt="">
                        <h4 class="font__size__24 my-5">
                            <?= $singleBox['tytul'] ?>
                        </h4>
                        <p>
                            <?= $singleBox['tekst'] ?>
                        </p>
                    </div>
                </div>
                <?php $index++; ?>
            <?php } ?>
        </div>
    </div>
</section>