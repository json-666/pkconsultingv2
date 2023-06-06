<?php
/**
 *  Theme oferta block 
 */
?>
<?php
$fields = get_fields();
?>
<section class="block__oferta">
    <div class="block__oferta__inner">
        <div class="container">
            <h2 class="section-title" data-aos="fade-left" data-aos-delay="300">
                <?= $fields['tytul'] ?>
            </h2>

            <div class="row justify-content-center pt-5">
                <?php foreach ($fields['elementy_oferty'] as $singleOfferElement): ?>
                    <div class="block__oferta__inner__single col-lg-5 h-100" data-aos="fade-up" data-aos-delay="400">
                        <div class="accordion" onclick="this.classList.toggle('is-open')">
                            <h3 class="font__size__16 text-uppercase">
                                <?= $singleOfferElement['tytul']; ?>
                            </h3>
                            <p>
                                <?= $singleOfferElement['opis_oferty']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>