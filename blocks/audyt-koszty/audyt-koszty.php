<?php
/**
 *  Theme audyt gwiazdki block 
 */

$fields = get_fields();
?>
<section class="block__koszty">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up" data-aos-delay="300">
            <?= $fields['tytul']; ?>
        </h2>
        <p class="text-center mb-5" data-aos="fade-up" data-aos-delay="400">
            <?= $fields['tekst']; ?>
        </p>
        <div class="col-xl-6 col-md-10 col-12 mx-auto pt-5">
            <div class="row">
                <?php $index = 1; ?>
                <?php foreach ($fields['boxy'] as $singleBox) { ?>
                    <div class="col-lg-6 text-center my-3" data-aos="fade-up" data-aos-delay="<?= 450 + ($index * 50); ?>">
                        <div class="box h-100">
                            <img src="<?= get_template_directory_uri(); ?>/images/5736349_bag_cash_coin_currency_dollar_icon1.svg"
                                alt="">
                            <h4 class="font__size__24 my-5 mb-3 ">
                                <?= $singleBox['tytul'] ?>
                            </h4>
                            <p class="font__size__16 font__weight__700">
                                <?= $singleBox['tekst'] ?>
                            </p>
                        </div>
                    </div>
                    <?php $index++; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>