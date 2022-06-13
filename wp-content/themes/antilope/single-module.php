<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleModule">
        
        <div class="singleModule__wrapper">

            <div class="singleModule__content">
                <h2 role="heading" aria-level="2" class="singleModule__title title"><?= get_the_title(); ?></h2>

                <p class="singleModule__desc"><?= get_field('big_description'); ?></p>

            </div>

            <div class="ici">


            <figure class="singleModule__fig">
                <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'singleModule__thumb']); ?>
            </figure>
            <?php
            $image = get_field('logo');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                <figure class="singleModule__logo">
                    <?php
                    {
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </figure>
            <?php endif;?>
            </div>

        </div>
        <div class="reste">

            <div class="singleModule__txt cara-pollu">
                <h3 role="heading" aria-level="3" class="singleModule__subTitlt subTitle">Caract&eacute;ristiques</h3>
                <p class="singleModule__caract"><?= get_field('caracteristics'); ?></p>
                <h3 role="heading" aria-level="3" class="singleModule__subTitlt subTitle">Polluants</h3>
                <p class="singleModule__polluants"><?= get_field('polluants'); ?></p>
            </div>
            <?php
            $image = get_field('image1');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                    <figure class="singleModule__img1 reste__img">
                        <?php
                        {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </figure>
            <?php endif;?>



            <?php
            $image = get_field('image2');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                    <figure class="singleModule__img2 reste__img">
                        <?php
                        {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </figure>
            <?php endif;?>

            <?php
            if (get_field('in_development')):?>
                <div class="dev singleModule__txt">

                    <h3 role="heading" aria-level="3" class="singleModule__subTitlt subTitle">En d&eacute;veloppement</h3>
                    <p class="singleModule__dev"><?= get_field('in_development'); ?></p>
                </div>
            <?php endif;?>
    
           <?php
            $image = get_field('image3');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                    <figure class="singleModule__img3 reste__img">
                        <?php
                        {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </figure>
            <?php endif;?>
    
            <?php
            $image = get_field('image4');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            if( $image ):?>
                    <figure class="singleModule__img4 reste__img">
                        <?php
                        {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </figure>
            <?php endif;?>

        </div>
        <a href="modules" class="singleModule__btn btn reveal">Retour vers la liste des modules</a>

    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>