<?php
/**
 *  Theme formularz kontaktowey block 
 */
?>
<?php
$fields = get_fields();
?>
<section class="block__blog-home" id="kontakt">
    <div class="block__blog-home__inner">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up" data-aos-delay="300">
                <?= $fields['tytul']; ?>
            </h2>
            <p class="text-center mb-5 font__size__18" data-aos="fade-up" data-aos-delay="400">
                <?= $fields['tekst']; ?>
            </p>
            <div class="row pt-5 justify-content-center" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <?php echo do_shortcode('[contact-form-7 id="167" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>