<?php get_header() ?>
<main class="site__main" style="background-color: <?= get_theme_mod('couleur_background_main') ?>">

        <h2>Activités en TIM</h2>
        <?php
        wp_nav_menu(array(
                "menu" => "menu_accueil",
                "container" => "nav"
        ));
        ?>
        <h2>Les événements importants pour l'année</h2>
        <?php
        wp_nav_menu(array(
                "menu" => "evenements",
                "container" => "nav"
        ));
        ?>
        <h2>Vie étudiante</h2>
        <?php if (have_posts()) : the_post(); ?>
                <?php the_content() ?>

        <?php endif ?>

</main>
<?php get_footer() ?>