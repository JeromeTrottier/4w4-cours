<?php /* Template Name: Atelier */ ?>
<?php get_header() ?>
<main class="site__main">

     <?php if (have_posts()) : the_post(); ?>
          <?php the_title() ?>
          <?php
          $image = get_field('image');
          if (!empty($image)) : ?>
               <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
          <?php endif ?>
          <p><?php the_field("description_de_l'atelier") ?></p>
          <p><?php the_field('animateur') ?></p>
          <p><?php the_field("date_de_debut_de_l'atelier_") ?></p>
          <p><?php the_field('date_de_fin_de_latelier') ?></p>
          <p><?php the_field('jours_de_la_semaine_de_latelier') ?></p>
          <p><?php the_field('heure_du_debut_de_latelier') ?></p>
          <p><?php the_field('heure_de_fin') ?></p>
          <p><?php the_field('duree_dune_seance_datelier') ?></p>
          <p><?php the_field('local_ou_se_deroulera_latelier') ?></p>
          <?php the_content() ?>
     <?php endif ?>
</main>
<?php get_footer() ?>