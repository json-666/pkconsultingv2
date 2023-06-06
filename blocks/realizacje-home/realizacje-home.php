<?php
/**
 *  Theme realizacje block 
 */
?>
<?php
$fields = get_fields();
?>
<section class="block__realizacje">
    <div class="block__realizacje__inner">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">
                <?= $fields['tytul']; ?>
            </h2>
            <p class="text-center mb-lg-5 mb-0 font__size__18" data-aos="fade-up">
                <?= $fields['tekst']; ?>
            </p>
            <div class="row pt-lg-5 justify-content-center">
                <?php $index = 1; ?>
                <?php foreach ($fields['realizacje'] as $singleRealizacja) { ?>
                    <div class="col-lg-4 col-md-6 col-12 text-center my-lg-5 my-4" data-aos="fade-up">
                        <div class="block__realizacje__inner__single__content">
                            <h3 class="font__size__24 text-center">
                                <?= $singleRealizacja['tytul'] ?>
                            </h3>
                            <img src="<?= $singleRealizacja['obraz']['url'] ?>" alt="" class="w-100 my-5">
                            <a href="<?= $singleRealizacja['link'] ?>" class="btn-primary">Zobacz projekt</a>
                        </div>
                    </div>
                    <?php $index++; ?>
                <?php } ?>
            </div>
            <div class="my-5 pt-lg-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-auto text-center">
                        <a href="<?= get_home_url(); ?>/portfolio" class="btn-primary">Zobacz portfolio</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>