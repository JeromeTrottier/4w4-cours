<?php get_header() ?>
<main class="site__main">

    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>
    </section>
    <h1 class="site__main__titre">Parcours d'un Timien</h1>
    <div class="site__main__contenu-fake-bordure">
        <?php if (have_posts()) : the_post(); ?>
            <?php the_title() ?>
            <?php the_content() ?>

        <?php endif ?>
    </div>
</main>
<?php get_footer() ?>