<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main>
            <section class="rencontre">
                <div>
                    <?php if (get_field('deco-fleur')) : ?>
                        <img class="decofleur" src="<?php the_field('deco-fleur'); ?>" alt="image décoration fleur de la section"/>
                    <?php endif; ?>
                </div>
                <div class="renc intro">
                    <?php if (get_field('titre-renc')) : ?>
                        <h1 class="Tro">
                            <?php the_field('titre-renc'); ?>
                        </h1>
                    <?php endif; ?>

                    <?php if (get_field('texte-renc')) : ?>
                        <p>
                            <?php the_field('texte-renc'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </section>
            <section class="backblc equipe">
                <?php if (get_field('titre-equipe')) : ?>
                    <h3>
                        <?php the_field('titre-equipe'); ?>
                    </h3>
                <?php endif; ?>
                <div class="row-staff">
                    <div class="staff">
                        <?php if (get_field('staff_1')) : ?>
                            <img src="<?php the_field('staff_1'); ?>" alt="photo du 1er membre du staff"/>
                        <?php endif; ?>
                        <?php if (get_field('nom_staff_1')) : ?>
                            <h4>
                                <?php the_field('nom_staff_1'); ?>
                            </h4>
                        <?php endif; ?>
                        <?php if (get_field('spec_staff_1')) : ?>
                            <p>
                                <?php the_field('spec_staff_1'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="staff">
                        <?php if (get_field('staff_2')) : ?>
                            <img src="<?php the_field('staff_2'); ?>" alt="photo du 2ème membre du staff"/>
                        <?php endif; ?>
                        <?php if (get_field('nom_staff_2')) : ?>
                            <h4>
                                <?php the_field('nom_staff_2'); ?>
                            </h4>
                        <?php endif; ?>
                        <?php if (get_field('spec_staff_2')) : ?>
                            <p>
                                <?php the_field('spec_staff_2'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="staff">
                        <?php if (get_field('staff_3')) : ?>
                            <img src="<?php the_field('staff_3'); ?>" alt="photo du 3ème membre du staff" />
                        <?php endif; ?>
                        <?php if (get_field('nom_staff_3')) : ?>
                            <h4>
                                <?php the_field('nom_staff_3'); ?>
                            </h4>
                        <?php endif; ?>
                        <?php if (get_field('spec_staff_3')) : ?>
                            <p>
                                <?php the_field('spec_staff_3'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php if (get_field('feuille_g')) : ?>
                        <img class="deco" src="<?php the_field('feuille_g'); ?>" alt="image déco feuille pour l'équipe"/>
                    <?php endif; ?>
                </div>

            </section>

            <section class="contacter">
                <form class="form-rencontre">

                    <?php echo do_shortcode('[contact-form-7 id="a1fa6d7" title="form-renc"]') ?>

                    <?php if (get_field('houx-form')) : ?>
                        <img class="houx" src="<?php the_field('houx-form'); ?>" alt="image déco pour le formulaire"/>
                    <?php endif; ?>

                    <div class="cans"></div>
            </section>
        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>