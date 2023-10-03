<?php
/* Template Name: Commander */
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main class="white backgr">
            <?php if (get_field('titre-com')) : ?>
                <h1>
                    <?php echo the_field('titre-com'); ?>
                </h1>
            <?php endif; ?>

            <section>
                <?php if (get_field('titre-com-2')) : ?>
                    <h3 class="command">
                        <?php echo the_field('titre-com-2'); ?>
                    </h3>
                <?php endif; ?>


                <section>

                    <?php echo do_shortcode('[contact-form-7 id="f972abe" title="form-com"]'); ?>

                </section>

        </main>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>