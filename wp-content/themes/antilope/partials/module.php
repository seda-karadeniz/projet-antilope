<article class="module" >
    <h4 class="hidden"><?= get_the_title(); ?></h4>

    <a href="<?= get_the_permalink(); ?>" class="module__link">

        <div class="module__card">
            <figure class="module__fig">
                <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'module__thumb']); ?>
            </figure>

            <div class="module__label">
                <h5 class="module__title subTitle"><?= get_the_title(); ?></h5>
                <p class="module__small-desc"><?= get_field('small_description'); ?></p>
            </div>

        </div>
      </a>




</article>