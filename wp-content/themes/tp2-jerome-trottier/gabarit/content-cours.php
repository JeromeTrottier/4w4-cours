<?php
// the_category();
$categories =  get_the_category();
$value = get_field("departement");
?>
<article class="formation__cours  <?php echo $categories[1]->slug;  ?> ">
    <?php
    $titre = get_the_title();
    $titreFiltreCours = substr($titre, 7, -6);
    // $nbHeures = substr($titre, -6);
    $nbHeures = the_field("nombre_dheures");
    $sigleCours = substr($titre, 4, 3);
    $descCours = get_the_content();
    $departement = the_field("departement");
    ?>

    <?php the_post_thumbnail("thumbnail"); ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= wp_trim_words($descCours, 15, '<button class="cours__desc__suite" href="#"> La suite...</button>'); ?></p>
    <p class="cours__desc__full"><?= $descCours; ?></p>
    <p class="departement"> <?php the_field('departement') ?> </p>
</article>