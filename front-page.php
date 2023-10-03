<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <main>
            <section class="boisson">
                <h1 class="Tgr T-boisson">
                    <?php echo (get_field('titre')); ?> </h1>

                <?php if (get_field('canette')) : ?>
                    <img class="can" src="<?php the_field('canette'); ?>" alt="image de la canette Planty" />
                <?php endif; ?>

            </section>
            <div class="arrondi"></div>

            <section class="backblc energie">

                <?php if (get_field('titre2')) : ?>
                    <h3 class="Tgr">
                        <?php the_field('titre2'); ?>
                    </h3>
                <?php endif; ?>

                <?php if (get_field('texte-ene')) : ?>
                    <p class="intro2">
                        <?php the_field('texte-ene'); ?>
                    </p>
                <?php endif; ?>
            </section>

            <section class="gout">
                <?php if (get_field('titre3')) : ?>
                    <h2 class="Tro">
                        <?php the_field('titre3'); ?>
                    </h2>
                <?php endif; ?>

                <?php if (get_field('texte2')) : ?>
                    <p class="p-gout">
                        <?php the_field('texte2'); ?>
                    </p>
                <?php endif; ?>

                <div class="container">

                    <div class="fruits">
                        <?php if (get_field('image1')) : ?>
                            <img src="<?php the_field('image1'); ?>" alt="parfum de la biosson à la fraise"/>
                        <?php endif; ?>
                        <div class="texte">
                            <?php if (get_field('nom_fruit_1')) : ?>
                                <?php the_field('nom_fruit_1'); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="fruits">
                        <?php if (get_field('image1')) : ?>
                            <img src="<?php the_field('image2'); ?>" alt="parfum de la biosson au pamplemousse" />
                        <?php endif; ?>
                        <div class="texte">
                            <?php if (get_field('nom_fruit_2')) : ?>
                                <?php the_field('nom_fruit_2'); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="fruits">
                        <?php if (get_field('image1')) : ?>
                            <img src="<?php the_field('image3'); ?>" alt="parfum de la biosson à la framboise" />
                        <?php endif; ?>
                        <div class="texte">
                            <?php if (get_field('nom_fruit_3')) : ?>
                                <?php the_field('nom_fruit_3'); ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="fruits">
                        <?php if (get_field('image1')) : ?>
                            <img src="<?php the_field('image4'); ?>" alt="parfum de la biosson au citron"/>
                        <?php endif; ?>
                        <div class="texte">
                            <?php if (get_field('nom_fruit_4')) : ?>
                                <?php the_field('nom_fruit_4'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <a href="http://localhost/planty/commander/">
                    <button class="cta">Commander</button>
                </a>
            </section>

            <section class="backblc">
                <h2 class="Tgr cqep">

                    <?php if (get_field('titre4')) : ?>
                        <?php the_field('titre4'); ?>
                    <?php endif; ?> </h2>

                <div class="comment">
                    <div class="row-client">

                        <?php if (get_field('client_1')) : ?>
                            <img class="img-client" src="<?php the_field('client_1'); ?>" alt="image du client" />
                        <?php endif; ?>

                        <div class="client">

                            <?php if (get_field('nom_client_1')) : ?>
                                <h2 class="Tgr fontW">
                                    <?php the_field('nom_client_1'); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if (get_field('avis_client_1')) : ?>
                                <p>
                                    <?php the_field('avis_client_1'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row-client">

                        <?php if (get_field('client_2')) : ?>
                            <img class="img-client" src="<?php the_field('client_2'); ?>" alt="image du client" />
                        <?php endif; ?>

                        <div class="client">

                            <?php if (get_field('nom_client_2')) : ?>
                                <h2 class="Tgr fontW">
                                    <?php the_field('nom_client_2'); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if (get_field('avis_client_2')) : ?>
                                <p>
                                    <?php the_field('avis_client_2'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row-client">

                        <?php if (get_field('client_3')) : ?>
                            <img class="img-client" src="<?php the_field('client_3'); ?>" alt="image du client" />
                        <?php endif; ?>

                        <div class="client">

                            <?php if (get_field('nom_client_3')) : ?>
                                <h2 class="Tgr fontW">
                                    <?php the_field('nom_client_3'); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if (get_field('avis_client_3')) : ?>
                                <p>
                                    <?php the_field('avis_client_3'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cans"></div>
                </div>
            </section>
        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>