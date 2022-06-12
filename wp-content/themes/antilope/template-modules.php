<?php /* Template Name: Modules page template*/?>
<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout modules">


        <h2 class="templateProjects__title title" role="heading" aria-level="2" >Tous nos modules</h2>

        <section class="modules" id="modules">
            <h3 class="hidden" role="heading" aria-level="3" >Nos modules</h3>
            <div class="modules__wrapper">
                <?php
                if(($modules = dw_get_modules())->have_posts()): while($modules->have_posts()): $modules->the_post();
                    include(__DIR__ . '/partials/module.php');
                endwhile;endif;?>
            </div>
        </section>

    </main>
<?php endwhile; endif;?>
<?php get_footer();?>