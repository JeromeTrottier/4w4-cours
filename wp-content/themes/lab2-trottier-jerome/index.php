<?php get_header() ?>
<main class="principal">
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <article class="formation__cours">
                        <h3 class="cours__titre"> <?php echo substr(get_the_title(), 7, -6); ?> <span class="cours__nbre-heure"><?php echo substr(get_the_title(), -6); ?></span></h3>
                        <p class="cours__sigle"><?php echo substr(get_the_title(), 0, 7); ?></p>
                        <p class="cours__desc"> <?php echo get_the_excerpt(); ?></p>
                    </article>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>
<?php get_footer() ?>