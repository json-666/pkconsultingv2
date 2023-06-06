<?php
/**
 *  Theme realizacje portfolio block 
 */

$fields = get_fields();
?>
<section class="block__koszty">
    <div class="container">
        <h2 class="section-title">
            Zobacz przykładowe realizacje
        </h2>
        <div class="row pt-5 justify-content-center">
            <?php foreach ($fields['realizacje'] as $singleRealizacja) { ?>
                <div class="col-lg-4 col-sm-6 col-12 my-5">
                    <div class="text-center p-sm-4 p-3"
                        style="box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.05); border-radius: 16px;">
                        <h3 class="font__size__24 text-center text-uppercase">
                            <?= $singleRealizacja['tytul'] ?>
                        </h3>
                        <img src="<?= $singleRealizacja['obraz']['url'] ?>" alt="" class="w-100 my-5">
                        <div class="py-2"></div>
                        <a href="<?= $singleRealizacja['link'] ?>" class="btn-primary">Zobacz projekt</a>
                        </siv>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>