<?php get_header() ?>
<main class="site__main">
    <div class="main__frontpage">
        <div class="bloc-bleu-frontpage"></div>
        <div class="bloc-orange-frontpage"></div>
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>

</main>
<?php get_footer() ?>