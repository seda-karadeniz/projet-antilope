<?php /* Template Name: Publications page template*/?>
<?php get_header();?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <main class="layout publi">
            <h2 class="publi title" role="heading" aria-level="2">
                <?= get_the_title(); ?>
            </h2>

            <section class="publications" id="publications">
                <h3 class="hidden" role="heading" aria-level="3" >Publications</h3>
                <div class="publications__wrapper">
                    <?php
                    if(($publications = dw_get_publications())->have_posts()): while($publications->have_posts()): $publications->the_post();
                        include(__DIR__ . '/partials/publication.php');
                    endwhile;endif;?>
                </div>
            </section>
        </main>

    <?php endwhile; endif; ?>
<?php get_footer();?>
